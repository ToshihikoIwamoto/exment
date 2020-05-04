<?php
namespace Exceedone\Exment\Auth;

use Illuminate\Http\Request;
use Exceedone\Exment\Model\CustomTable;
use Exceedone\Exment\Model\System;
use Exceedone\Exment\Model\Define;
use Exceedone\Exment\Model\Plugin;
use Exceedone\Exment\Enums\RoleType;
use Exceedone\Exment\Enums\Permission as PermissionEnum;

class Permission
{
    /**
     * Summary of $role_type
     * @var string
     */
    protected $role_type;

    /**
     * Summary of $table_name
     * @var string
     */
    protected $table_name;

    /**
     * Summary of $plugin_id
     * @var string
     */
    protected $plugin_id;

    /**
     * Summary of $permission_details
     * @var array
     */
    protected $permission_details;

    /**
     * $shouldPass custom
     * @var \Closure[]
     */
    protected static $bootingShouldPasses = [];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->role_type = array_get($attributes, 'role_type');
        $this->table_name = array_get($attributes, 'table_name');
        $this->plugin_id = array_get($attributes, 'plugin_id');
        $this->permission_details = array_get($attributes, 'permission_details', []);
    }

    public function getRoleType()
    {
        return $this->role_type;
    }

    public function getTableName()
    {
        return $this->table_name;
    }

    public function getPluginId()
    {
        return $this->plugin_id;
    }

    public function getPermissionDetails()
    {
        return $this->permission_details;
    }

    /**
     * @param callable $callback
     */
    public static function bootingShouldPass(callable $callback)
    {
        static::$bootingShouldPasses[] = $callback;
    }

    /**
     * Call the booting ShouldPasses for the exment application.
     */
    protected function fireShouldPasses($endpoint)
    {
        foreach (static::$bootingShouldPasses as $callable) {
            $result = call_user_func($callable, $endpoint);

            if ($result === true || $result === false) {
                return $result;
            }
        }
    }

    /**
     * If request should pass through the current permission.
     *
     * @param Request $request
     *
     * @return bool
     */
    public function shouldPassThrough(Request $request) : bool
    {
        // get target endpoint
        $endpoint = $this->getEndPoint($request->url());

        return $this->shouldPass($endpoint);
    }

    /**
     * If endpoint should pass through the current permission.
     *
     * @param string $endpoint
     *
     * @return bool
     */
    public function shouldPassEndpoint(?string $endpoint) : bool
    {
        // get target endpoint
        $endpoint = $this->getEndPoint($endpoint);

        return $this->shouldPass($endpoint);
    }

    /**
     * If request should pass through the current permission.
     *
     * @param string|null $endpoint processed endpoint
     *
     * @return bool
     */
    protected function shouldPass($endpoint) : bool
    {
        // checking booting function
        $result = $this->fireShouldPasses($endpoint);
        if ($result === true || $result === false) {
            return $result;
        }

        // if 'role' or 'role_group' and !System::permission_available(), false
        if (in_array($endpoint, ['role', 'role_group']) && !System::permission_available()) {
            return false;
        }
        // if api setting, check config
        if (in_array($endpoint, ['api_setting']) && !System::api_available()) {
            return false;
        }

        // if system doesn't use role, return true
        if (!System::permission_available()) {
            return true;
        }

        // not admin page's (for custom url), return true
        if ($this->isNotAdminUrl($endpoint)) {
            return true;
        }

        // if system user, return true
        if ($this->role_type == RoleType::SYSTEM && array_key_exists('system', $this->permission_details)) {
            return true;
        }

        return $this->hasPermissionByEndpoint($endpoint);
    }

    protected function hasPermissionByEndpoint(string $endpoint, ?string $target = null, bool $recursive = false) : bool
    {
        if (!isset($target)) {
            $target = $endpoint;
        }
        switch ($target) {
            case "":
            case "/":
            case "index":
            case "api":
            case "webapi":
            case "search":
            case "auth-2factor":
            case "auth/login":
            case "auth/logout":
            case "auth/setting":
            case "auth/reset":
            case "auth/change":
            case "auth/forget":
            case "dashboard":
            case "dashboardbox":
            case "initialize":
            case "install":
            case "oauth":
            case "files":
            case "notify_navbar":
                return true;
            ///// only system permission
            case "system":
            case "backup":
            case "database":
            case "auth/menu":
            case "auth/logs":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists('system', $this->permission_details);
                }
                return false;
            ///// each permissions
            case "plugin":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_keys_exists([PermissionEnum::SYSTEM, PermissionEnum::PLUGIN_ALL], $this->permission_details);
                }
                elseif ($this->role_type == RoleType::PLUGIN) {
                    // if contains PermissionEnum::PLUGIN_SETTING, return true. Check at controller again.
                    return array_key_exists(PermissionEnum::PLUGIN_SETTING, $this->permission_details);
                }
            case "plugins":
                return $this->validatePluginPermission($endpoint);
            case "notify":
                $user = \Exment::user();
                return $user ? $user->hasPermissionContainsTable(PermissionEnum::CUSTOM_TABLE) : false;
            case "loginuser":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists(PermissionEnum::LOGIN_USER, $this->permission_details);
                }
                return false;
            case "api_setting":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_keys_exists(PermissionEnum::AVAILABLE_API, $this->permission_details);
                }
                return false;
            case "workflow":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_keys_exists(PermissionEnum::WORKFLOW, $this->permission_details);
                }
                return false;
            case "role":
            case "role_group":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_keys_exists(PermissionEnum::AVAILABLE_ACCESS_ROLE_GROUP, $this->permission_details);
                }
                return false;
            case "table":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists('custom_table', $this->permission_details);
                }
                return array_key_exists('custom_table', $this->permission_details);
            case "column":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists('custom_table', $this->permission_details);
                }
                // check endpoint name and checking table_name.
                if (!$this->matchEndPointTable($endpoint)) {
                    return false;
                }
                return array_key_exists('custom_table', $this->permission_details);
            case "relation":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists('custom_table', $this->permission_details);
                }
                // check endpoint name and checking table_name.
                if (!$this->matchEndPointTable($endpoint)) {
                    return false;
                }
                return array_key_exists('custom_table', $this->permission_details);
            case "form":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_key_exists('custom_form', $this->permission_details);
                }
                // check endpoint name and checking table_name.
                if (!$this->matchEndPointTable($endpoint)) {
                    return false;
                }
                return array_key_exists('custom_form', $this->permission_details);
            case "view":
                if ($this->role_type == RoleType::SYSTEM) {
                    return array_keys_exists(PermissionEnum::AVAILABLE_VIEW_CUSTOM_VALUE, $this->permission_details);
                }
                // check endpoint name and checking table_name.
                if (!$this->matchEndPointTable($endpoint)) {
                    return false;
                }
                return array_keys_exists(PermissionEnum::AVAILABLE_VIEW_CUSTOM_VALUE, $this->permission_details);
            case "data":
                return $this->validateCustomValuePermission($endpoint);
        }
        
        if ($recursive) {
            return false;
        }

        // if find endpoint "data/", check as data
        $list = implode('|', array_merge(Define::CUSTOM_TABLE_ENDPOINTS, ['plugins']));
        if (preg_match('/^(' . $list  . ')\/(.+)$/u', $endpoint, $matched)) {
            return $this->hasPermissionByEndpoint($matched[2], $matched[1], true);
        }


        return false;
    }

    /**
     * Get Endpoint
     * @param ?string $endpoint
     * @return mixed
     */
    protected function getEndPoint(?string $endpoint) : ?string
    {
        // not admin page's (for custom url), return $endpoint
        if ($this->isNotAdminUrl($endpoint)) {
            return $endpoint;
        }

        // remove admin url from request url.
        $url = str_replace(admin_url(), '', $endpoint);
        
        // remove after query
        $url = $this->removeAfterQuery($url);

        ///// get last url.
        $uris = explode("/", $url);
        foreach ($uris as $k => $uri) {
            if (!isset($uri) || mb_strlen($uri) == 0) {
                continue;
            }

            // if $uri is "auth", get next uri.
            if (in_array($uri, array_merge(Define::CUSTOM_TABLE_ENDPOINTS, ['auth', 'plugins']))) {
                // but url is last item, return $uri.
                if (count($uris) <= $k+1) {
                    return $uri;
                }
                // return $uri adding next item.
                return url_join($uri, $uris[$k+1]);
            } else {
                return $uri;
            }
        }
        return "";
    }

    /**
     * Whether matching url endpoint and table_name for check.
     * @param Request $request
     * @return mixed
     */
    protected function matchEndPointTable($endpoint)
    {
        // Get Endpoint
        $table = CustomTable::findByEndpoint($endpoint);
        if (!isset($table)) {
            return false;
        }
        // check endpoint name and checking table_name.
        return $this->table_name == $table->table_name;
    }

    /**
     * Check plugin's permission
     *
     * @return void
     */
    protected function validatePluginPermission($endpoint)
    {
        // Get plugin data by Endpoint
        $plugin = Plugin::where('options->uri', $endpoint)->first();
        if (!isset($plugin)) {
            return false;
        }
        // check if all user permitted
        if (boolval($plugin->getOption('all_user_enabled'))) {
            return true;
        }
        if ($this->role_type == RoleType::SYSTEM) {
            return array_keys_exists([PermissionEnum::SYSTEM, PermissionEnum::PLUGIN_ALL], $this->permission_details);
        }
        elseif ($this->role_type == RoleType::PLUGIN) {
            // check endpoint name and checking plugin name.
            if ($this->plugin_id == $plugin->id) {
                // if contains PermissionEnum::PLUGIN_ACCESS, return true. Check at controller again.
                return array_key_exists(PermissionEnum::PLUGIN_ACCESS, $this->permission_details);
            }
        }
        return false;
    }

    /**
     * Check custom value's permission
     *
     * @return void
     */
    protected function validateCustomValuePermission($endpoint)
    {
        if ($this->role_type == RoleType::PLUGIN) {
            return false;
        }

        // if request has id, permission contains CUSTOM_VALUE_ACCESS
        if (!is_null($id = request()->id) && request()->is(trim(admin_base_path("data/$endpoint/*"), '/'))) {
            $permissions = PermissionEnum::AVAILABLE_ACCESS_CUSTOM_VALUE;
        } else {
            $permissions = PermissionEnum::AVAILABLE_VIEW_CUSTOM_VALUE;
        }

        if ($this->role_type == RoleType::SYSTEM) {
            return array_keys_exists($permissions, $this->permission_details);
        }
        // check endpoint name and checking table_name.
        if (!$this->matchEndPointTable($endpoint)) {
            return false;
        }
        return array_keys_exists($permissions, $this->permission_details);
    }

    /**
     * not admin page's (for custom url), return true
     *
     * @return boolean
     */
    protected function isNotAdminUrl(?string $endpoint)
    {
        $parse_url = parse_url($endpoint);
        if ($parse_url && array_has($parse_url, 'host') && strpos($endpoint, admin_url()) === false) {
            return true;
        }
    }

    protected function removeAfterQuery($url)
    {
        if (mb_strpos($url, '?') !== false) {
            return mb_substr($url, 0, (mb_strpos($url, '?')));
        }

        return $url;
    }
}
