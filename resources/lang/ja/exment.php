<?php

return [    
    'common' => [
        'home' => 'HOME',
        'error' => 'エラー',
        'import' => 'インポート',
        'plugin' => 'プラグイン',
        'copy' => 'コピー',
        'change' => '変更',
        'reqired' => '必須',
        'default' => '既定',
        'detail_setting' => '詳細設定',
        'input' => '入力',
        'available_true' => '有効',
        'available_false' => '無効',
        'help_code' => '保存後、変更はできません。半角英数字、"-"または"_"で記入してください。他のデータと同じ値は登録できません。',
        'id' => 'ID',
        'suuid' => '内部ID(20桁)',
        'parent_id' => '親データのID',
        'parent_type' => '親データのテーブル名',
        'created' => '新規作成',
        'updated' => '更新', 
        'created_at' => '作成日時',
        'updated_at' => '更新日時', 
        'deleted_at' => '削除日時', 
        'created_user' => '作成ユーザー',
        'updated_user' => '更新ユーザー', 
        'deleted_user' => '削除ユーザー', 
        'trashed_user' => '(削除済ユーザー)', 
        'attachment' => '添付ファイル',   
        'comment' => 'コメント',   
        'separate_word' => '、',
        'yes' => 'はい',
        'no' => 'いいえ',
        'row' => '行',
        'column' => '列',
        'asc' => '昇順',
        'desc' => '降順',
        'custom_table' => 'カスタムテーブル',
        'custom_column' => 'カスタム列',
        'message' => [
            'confirm_execute' => '%sを実行します。\r\nよろしいですか？',
            'success_execute' => '実行完了しました！',
            'error_execute' => '実行失敗しました。',
            'import_success' => 'インポート完了しました！',
            'import_error' => 'インポート失敗しました。エラーメッセージをご確認ください。',
            'notfound' => 'データが存在しません。',
            'wrongdata' => 'データが不正です。URLをご確認ください。',
            'wrongconfig' => 'config.jsonファイルが不正です',
            'exists_row' => '%sは必ず1行以上入力してください。',
        ],

        'help' =>[
            'view_name' => '画面に表示する名前を入力してください。',
            'input_available_characters' => '%sで記入してください。',
            'max_length' => '%s文字以内で記入してください。',
            'no_permission' => '権限が割り当てられていません。管理者に連絡し、権限を割り当てるよう依頼してください。',
            'task_schedule_id' => 'タスクスケジュール',
            'task_schedule' => '<br/><b>※タスクスケジュール設定が必要です。</b>詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
            'order' => '%sを一覧表示した時の表示順です。',
        ],
    ],

    'error' => [
        'header' => 'エラーが発生しました',
        'description' => 'エラーが発生しました。エラー内容をご確認ください。',
        'error_message' => 'エラーメッセージ',
        'error_trace' => 'エラー詳細',
        'not_install' => 'Exmentがインストールされていません。以下のURLに従い、Exmentをインストールしてください。<br />https://exment.net/docs/#/ja/quickstart',
        'login_failed' => 'IDまたはパスワードが違います。',
        'mailsend_failed' => 'メール送信に失敗しました。メール設定をご確認ください。',
    ],

    'system' => [
        'system_header' => 'システム設定',
        'system_description' => 'システム設定を変更します。',
        'header' => 'サイト基本情報',
        'administrator' => '管理者情報',
        'initialize_header' => 'Exmentインストール',
        'initialize_description' => 'Exmentの初期設定を画面から登録し、インストールします。',
        'site_name' => 'サイト名',
        'site_name_short' => 'サイト名(略)',
        'site_logo' => 'サイトロゴ',
        'site_logo_mini' => 'サイトロゴ(小)',
        'site_favicon' => 'サイトファビコン(ico)',
        'site_skin' => 'サイトスキン',
        'site_layout' => 'サイトメニューレイアウト',
        'permission_available' => '権限管理を使用する',
        'organization_available' => '組織管理を使用する',
        'system_mail_from' => 'システムメール送信元',
        'grid_pager_count' => 'データ一覧の表示件数',
        'template' => 'インストールテンプレート',
        'version_header' => 'システムのバージョン情報',
        'version_progress' => 'バージョン情報を取得しています。',
        'version_latest' => 'このシステムは最新のバージョンです。',
        'version_develope' => 'このシステムは開発バージョンです。',
        'version_old' => '新しいバージョンがあります。',
        'version_error' => 'バージョンの取得に失敗しました。',
        'update_guide' => 'アップデート手順はこちらから',
        'current_version' => '現在のバージョン：',
        
        'site_skin_options' => [
            "skin-blue" => "ヘッダー：青&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-blue-light" => "ヘッダー：青&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
            "skin-yellow" => "ヘッダー：黃&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-yellow-light" => "ヘッダー：黃&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
            "skin-green" => "ヘッダー：緑&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-green-light" => "ヘッダー：緑&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
            "skin-purple" => "ヘッダー：紫&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-purple-light" => "ヘッダー：紫&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
            "skin-red" => "ヘッダー：赤&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-red-light" => "ヘッダー：赤&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
            "skin-black" => "ヘッダー：白&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：黒",
            "skin-black-light" => "ヘッダー：白&nbsp;&nbsp;&nbsp;&nbsp;サイドバー：白",
        ],
        
        'site_layout_options' => [
            "layout_default" => "標準",
            "layout_mini" => "小アイコン",
        ],
        
        'help' =>[
            'site_name' => 'ページの左上に表示するサイト名です。',
            'site_name_short' => 'メニューを折りたたんだ時に表示する、サイト名の短縮語です。',
            'site_logo' => 'サイトのロゴです。推奨サイズ：200px * 40px',
            'site_logo_mini' => 'サイトのロゴ(小アイコン)です。推奨サイズ：40px * 40px',
            'site_favicon' => 'サイトのファビコン(.ico)です。ホームページのブックマークなどに利用されます。推奨サイズ：16px * 16px',
            'site_skin' => 'サイトのテーマ色を選択します。※保存後、再読込で反映されます。',
            'site_layout' => 'ページ左の、サイトメニューのレイアウトを選択します。※保存後、再読込で反映されます。',
            'grid_pager_count' => '一覧ページで表示されるデータの、既定の表示件数です。システム全体に反映されます。',
            'permission_available' => 'YESの場合、ユーザーや役割によって、アクセスできる項目を管理します。',
            'organization_available' => 'YESの場合、ユーザーが所属する組織や部署を作成します。',
            'system_mail_from' => 'システムからメールを送付する際の送信元です。このメールアドレスをFromとして、メールが送付されます。',
            'template' => 'テンプレートを選択することで、テーブルや列、フォームが自動的にインストールされます。',
        ]
    ],

    'dashboard' => [
        'header' => 'ダッシュボード',
        'dashboard_name' => 'ダッシュボード名(英数字)',
        'dashboard_view_name' => 'ダッシュボード表示名',
        'row' => 'ダッシュボード%s行目',
        'description_row' => 'ダッシュボードの%s行目に表示する列数です。',
        'description_row2' => 'ダッシュボードの%s行目に表示する列数です。※「なし」を選択すると、%s行目は表示されません。',
        'description_chart' => '※チャートの表示には、集計ビューと集計項目が必要です。<br />集計ビューを作成していない場合、まずはビュー設定画面より、集計ビューを作成してください。',
        'default_dashboard_name' => '既定のダッシュボード',
        'not_registered' => '未登録',
        'dashboard_type_options' => [
            'system' => 'システムダッシュボード',
            'user' => 'ユーザーダッシュボード',
        ],
        'row_options0' => 'なし',
        'row_optionsX' => '列',

        'row_no' => '行番号',
        'column_no' => '列番号',
        'dashboard_box_type' => 'アイテム種類',
        'dashboard_box_view_name' => 'アイテム表示名',
        'dashboard_box_type_options' => [
            'list' => 'データ一覧',
            'system' => 'システム',
            'chart' => 'チャート',
            'calendar' => 'カレンダー',
        ],
        
        'dashboard_box_options' => [
            'target_table_id' => '対象のテーブル',
            'target_view_id' => '対象のビュー',
            'target_system_id' => '表示アイテム',
            'chart_axisx' => 'X軸の項目',
            'chart_axisy' => 'Y軸の項目',
            'chart_axis_label' => 'ラベルを表示する',
            'chart_axis_name' => '項目名を表示する',
            'chart_axisx_short' => 'X軸',
            'chart_axisy_short' => 'Y軸',
            'chart_type' => 'チャートの種類',
            'chart_begin_zero' => '０を起点にする',
            'chart_legend' => '凡例を表示する',
            'chart_options' => 'オプション設定',
            'calendar_type' => 'カレンダーの種類',
        ],

        'dashboard_box_system_pages' => [
            'guideline' => 'ガイドライン',
        ],

        'dashboard_menulist' => [
            'current_dashboard_edit' => '現在のダッシュボード設定変更',
            'create' => 'ダッシュボード新規作成',
        ],
    ],

    'plugin' => [
        'header' => 'プラグイン管理',
        'description' => 'インストールされているプラグインの管理や、新規にプラグインをアップロードすることができます。',
        'upload_header' => 'プラグインアップロード',
        'extension' => 'ファイル形式：zip',
        'uuid' => 'プラグインID',
        'plugin_name' => 'プラグイン名(英数字)',
        'plugin_view_name' => 'プラグイン表示名',
        'plugin_type' => '種類',
        'author' => '作者',
        'version' => 'バージョン',
        'active_flg' => '有効フラグ',
        'select_plugin_file' => 'プラグインを選択',
        'options' => [
            'header' => 'オプション設定',
            'target_tables' => '対象テーブル',
            'event_triggers' => '実施トリガー',
            'label' => 'ボタンのラベル',
            'button_class' => 'ボタンのHTML class',
            'icon' => 'ボタンのアイコン',
            'uri' => 'URL',

            'event_trigger_options' => [
                'saving' => '保存直前',
                'saved' => '保存後',
                'loading' => '画面読み込み前',
                'loaded' => '画面読み込み後',
                'grid_menubutton' => '一覧画面のメニューボタン',
                'form_menubutton_create' => 'フォームのメニューボタン（新規作成時）',
                'form_menubutton_edit' => 'フォームのメニューボタン（更新時）',
            ]
        ],

        'help' => [
            'target_tables' => 'プラグインを実行する対象のテーブルです。',
            'event_triggers' => 'どの動作を行ったときに、プラグインを実行するかどうかを設定します。',
            'icon' => 'ボタンのHTMLに付加するアイコンです。',
            'button_class' => 'ボタンのHTMLに付加するclassです。',
            'errorMess' => 'プラグインファイルを選択してください',
        ],

        'error' => [
            'samename_plugin' => '同名プラグインが存在します。確認してから一度お試してください。',
            'wrongname_plugin' => 'UUIDは存在しますが、プラグイン名が正しくありません。 確認してからもう一度お試しください。',
        ],
    
        'plugin_type_options' => [
            'page' => '画面',
            'trigger' => '機能',
            'document' => 'ドキュメント',
        ],
    ],

    'backup' => [
        'header' => 'バックアップ一覧',
        'setting_header' => 'バックアップ設定',
        'description' => 'データベースやファイルのバックアップとリストアを行います。',
        'file_name' => 'ファイル名',
        'file_size' => 'ファイルサイズ',
        'backup' => 'バックアップ',
        'restore' => 'リストア',
        'download' => 'ダウンロード',
        'restore_upload' => 'ファイルアップロード',
        'backuprestore' => 'バックアップ・リストア',
        'backup_target' => 'バックアップ対象',
        'enable_automatic' => '自動バックアップ',
        'automatic_term' => '自動バックアップ実行間隔(日)',
        'automatic_hour' => '自動バックアップ開始時間(時)',
        'history_files' => '保存世代数',
        'upload_zipfile' => 'アップロード(zip)',
        'backup_target_options' => [
            'database' => 'データベース',
            'plugin' => 'プラグインファイル',
            'attachment' => '添付ファイル',
            'log' => 'ログファイル',
            'config' => '設定ファイル',
        ],
        'message' => [
            'target_required' => 'バックアップ対象は必ず１つ以上選択してください。',
            'backup_confirm' => 'バックアップを実行しますか？',
            'backup_error' => 'バックアップに失敗しました。',
            'download_error' => 'ダウンロードに失敗しました。',
            'restore_confirm' => 'リストアを本当に実行しますか？（現在のデータはすべて失われます）',
            'restore_succeeded' => 'リストアを実行しました。',
            'restore_error' => 'リストアに失敗しました。',
            'restore_file_success' => 'リストアに成功しました。ログイン画面にリダイレクトします。',
            'restore_file_error' => 'リストアに失敗しました。アップロードファイルを確認してください。',
        ],
        'help' =>[
            'file_name' => 'バックアップしたzipファイルを選択してください。',
            'import_error_message' => '取込ファイルに不備があった場合、この項目に、エラーメッセージを表示します。',
            'backup_target' => 'バックアップの対象です。特に理由がない限り、すべての項目にチェックを入れることをおすすめします。',
            'enable_automatic' => 'YESにした場合、自動的にバックアップを実行します。',
            'automatic_term' => '自動バックアップを何日おきに実施するかの設定です。例：「3」と入力時、3日おきにバックアップ実行',
            'automatic_hour' => '自動バックアップの開始時間です。例：「3」と入力時、3:00にバックアップ実行開始',
            'history_files' => '自動バックアップ時に、保持する世代数です。1以上を入力時、入力した整数のバックアップを保持します。',
        ]
    ],

    'user' => [
        'header' => 'ログインユーザー設定',
        'description' => 'ユーザーの中から、このシステムにログインを行うユーザーを選択し、パスワード設定や、パスワード初期化などを行うこともできます。',
        'user_code' => 'ユーザーコード',
        'user_name' => 'ユーザー名',
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード(再入力)',
        'old_password' => '現在のパスワード',
        'new_password' => '新しいパスワード',
        'new_password_confirmation' => '新しいパスワード(再入力)',
        'send_password' => 'ユーザー情報をメール送信する',
        'login_user' => 'ログインユーザー設定',
        'login' => 'ログイン設定',
        'use_loginuser' => 'ログイン権限付与',
        'reset_password' => 'パスワードをリセットする',
        'create_password_auto' => 'パスワードを自動生成する',
        'avatar' => 'アバター',
        'default_table_name' => 'ユーザー',
        'help' =>[
            'user_name' => '画面に表示する名前です。',
            'email' => 'システム通知を受信できるメールアドレスを入力してください。',
            'password' => '英数記号で8文字以上記入してください。',
            'change_only' => '変更を行う場合のみ入力します。',
            
            'use_loginuser' => 'チェックすることで、このユーザーがシステムにログインすることができるようになります。',
            'reset_password' => 'チェックすることで、パスワードが再設定されます。',
            'create_password_auto' => 'チェックすることで、パスワードが自動生成されます。(該当ユーザーにメールが送信されます。)',
            'send_password' => 'チェックすることで、該当ユーザーにユーザー情報をメール送信します。',
        ],
        'message' => [
            'required_password' => 'パスワードを入力するか自動生成を選択してください。',
        ]
    ],

    'organization' => [
        'default_table_name' => '組織',
    ],

    'login' => [
        'email_or_usercode' => 'メールアドレスorユーザーコード',
        'forget_password' => 'パスワードを忘れた',
        'password_reset' => 'パスワードリセット',
        'back_login_page' => 'ログインページに戻る',
        'sso_provider_error' => 'プロバイダからのログイン情報取得に失敗しました。何度も失敗する場合、管理者にお問い合わせください。',
        'noexists_user' => 'Exmentにユーザーが存在しませんでした。先にユーザーを追加するよう、管理者にお問い合わせください。',
    ],

    'change_page_menu' =>[
        'change_page_label' => 'テーブル詳細設定',
        'custom_table' => 'テーブル設定',
        'custom_column' => 'カスタム列設定',
        'custom_view' => 'ビュー設定',
        'custom_form' => 'フォーム設定',
        'custom_relation' => 'リレーション設定',
        'custom_copy' => 'データコピー設定',
        'custom_value' => 'データ一覧',
        'error_select' => '行を1行のみ選択してください',
    ],

    'custom_table' => [
        'header' => 'カスタムテーブル設定',
        'description' => '独自に変更できるカスタムテーブルの設定を行います。',
        'table' => 'テーブル',
        'table_name' => 'テーブル名(英数字)',
        'table_view_name' => 'テーブル表示名',
        'order' => '表示順',
        'field_description' => '説明',
        'color' => '色',
        'icon' => 'アイコン',
        'search_enabled' => '検索可能',
        'one_record_flg' => '1件のみ登録可能',
        'attachment_flg' => '添付ファイル使用',
        'comment_flg' => 'コメント使用',
        'use_label_id_flg' => 'IDをラベルに使用する',
        'revision_flg' => 'データ変更履歴使用',
        'revision_count' => '変更履歴バージョン数',
        'notify_flg' => '登録・更新時通知',
        'custom_columns' => '列一覧',
        'all_user_editable_flg' => 'すべてのユーザーが編集可能',
        'all_user_viewable_flg' => 'すべてのユーザーが閲覧可能',
        'all_user_accessable_flg' => 'すべてのユーザーが参照可能',
        'add_parent_menu_flg' => 'メニューに追加する',
        'add_parent_menu' => '追加先の親メニュー',
        'help' => [
            'color' => '検索などで使用する、テーブルの色を設定します。',
            'icon' => 'メニューなどに表示するアイコンを選択してください。',
            'search_enabled' => 'YESにした場合、検索画面から検索可能になります。',
            'one_record_flg' =>'データを1件のみ登録可能かどうかの設定です。自社情報など、データが1件しか存在しないテーブルの場合、YESにしてください。',
            'attachment_flg' => 'YESにした場合、各データに添付ファイルを追加することができます。',
            'comment_flg' => 'YESにした場合、各データにコメントを追加することができます。',
            'use_label_id_flg' => 'YESにした場合、データのidの値を見出しの項目として表示します。詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
            'revision_flg' => 'YESにした場合、各データの保存時、データの変更履歴を保存します。また、各データ画面で、以前の保存情報を復元することができます。',
            'revision_count' => 'データの変更履歴を保存する最大件数です。それ以上の履歴を保存する場合、過去の履歴は削除されます。',
            'notify_flg' => 'YESにした場合、データの追加・更新時、権限のあるユーザーに通知を送信します。',
            'all_user_editable_flg' => 'YESにした場合、すべてのユーザーが、このテーブルのすべてのデータを編集可能になります。',
            'all_user_viewable_flg' => 'YESにした場合、すべてのユーザーが、このテーブルのすべてのデータを閲覧可能になります。',
            'all_user_accessable_flg' => 'YESにした場合、すべてのユーザーが、このテーブルのすべてのデータを参照可能になります。<br/>※メニューや一覧画面では表示されず、内部データや、他のテーブルからの参照でのみ表示できます。',
            'add_parent_menu_flg' => '新規作成後、メニューに追加することができます。追加する場合はYESにしてください。<br/>※ブラウザ更新後に表示されます。<br />※テーブルの新規作成時のみ設定できます。更新時は「メニュー」画面より設定してください。',
            'add_parent_menu' => '親にするメニュー名を選択してください。',
            'saved_redirect_column' => '保存しました！次はカスタム列を設定してください。',
        ],
    ],
    
    'custom_column' => [
        'header' => 'カスタム列設定',
        'description' => 'カスタム列ごとの設定を行います。列の必須項目、検索可能フィールドなどを定義します。',
        'column_name' => '列名(英数字)',
        'column_view_name' => '列表示名',
        'column_type' => '列種類',
        'order' => '表示順',
        'add_custom_form_flg' => '既定のフォームに追加する',
        'add_custom_view_flg' => '既定のビューに追加する',
        'auto_number_format_rule' => '自動採番フォーマットのルール',
        'options' => [
            'header' => '詳細オプション',
            'index_enabled' => '検索インデックス',
            'unique' => 'ユニーク(一意)',
            'default' => '初期値',
            'placeholder' => 'プレースホルダー',
            'help' => 'ヘルプ',
            'string_length' => '最大文字数',
            'rows' => '高さ',
            'available_characters' => '使用可能文字',
            'number_min' => '最小値',
            'number_max' => '最大値',
            'number_format' => '数値 カンマ文字列',
            'decimal_digit' => '小数点以下の桁数',
            'updown_button' => '+-ボタン表示',
            'datetime_now_creating' => '作成時に実行日時を登録',
            'datetime_now_updating' => '更新時に実行日時で更新',
            'select_item' => '選択肢',
            "select_valtext" => "選択肢(値とテキスト)",
            'select_target_table' => '対象テーブル',
            'true_value' => '選択肢1のときの値',
            'true_label' => '選択肢1のときの表示',
            'true_label_default' => 'はい',
            'false_value' => '選択肢2のときの値',
            'false_label' => '選択肢2のときの表示',
            'false_label_default' => 'いいえ',
            'auto_number_length' => '桁数',
            'auto_number_type' => '採番種類',
            'auto_number_type_format' => 'フォーマット',
            'auto_number_type_random25' => 'ランダム(ライセンスコード)',
            'auto_number_type_random32' => 'ランダム(UUID)',
            'auto_number_format' => '採番フォーマット',
            'multiple_enabled' => '複数選択を許可する',
            'use_label_flg' => 'ラベルで使用する',
            'calc_formula' => '計算式',
            'currency_symbol' => '通貨の表示形式',
        ],
        'column_type_options' => [
            "text" => "1行テキスト",
            "textarea" => "複数行テキスト",
            "editor" => "テキストエディタ",
            "url" => "URL",
            "email" => "メールアドレス",
            "integer" => "整数",
            "decimal" => "小数",
            "calc" => "計算結果",
            "currency" => "通貨",
            "date" => "日付",
            "time" => "時刻",
            "datetime" => "日付と時刻",
            "select" => "選択肢",
            "select_valtext" => "選択肢 (値・見出しを登録)",
            "select_table" => "選択肢 (他のテーブルの値一覧から選択)",
            "yesno" => "YES/NO",
            "boolean" => "2値の選択",
            "auto_number" => "自動採番",
            "image" => "画像",
            "file" => "ファイル",
            "user" => "ユーザー",
            "organization" => "組織",
        ],
        'help' => [
            'index_enabled' => 'YESにすることで、検索インデックスが追加されます。これにより、検索時やビューで、条件絞り込みが出来ます。<br/>詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
            'unique' => '同じ値を、他のデータで重複して登録させない場合にYESにしてください。<br/>※件数が多いデータの場合、「検索インデックス」をYESにすることをおすすめします。',
            'default' => '新規登録時の、項目の初期値です。',
            'help' => 'フィールドの下に表示されるヘルプ文字列です。',
            'use_label_flg' => 'データを選択時、画面に表示する文言の列です。1以上を値を入力した場合、1から順に見出しの項目として表示します。<br/>詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
            'number_format' => 'YESにすることで、テキストフィールドがカンマ値で表示されます。',
            'rows' => '入力フォームの高さを設定してください。',
            'updown_button' => 'YESにすることで、フォームに+-ボタンを表示します。',
            'select_item' => '改行区切りで選択肢を入力してください。',
            'datetime_now_creating' => 'データの新規作成時に、実行した日時で、値を自動的に登録します。※ユーザーによる値の設定はできなくなります。',
            'datetime_now_updating' => 'データの更新時に、実行した日時で、値を自動的に更新します。※ユーザーによる値の設定はできなくなります。',
            'select_item_valtext' => '改行区切りで選択肢を入力します。カンマの前が値、後が見出しとなります。<br/>例：<br/>「1,成人<br/>2,未成年」→"1"が選択時にデータとして登録する値、"成人"が選択時の見出し',
            'select_target_table' => '選択対象となるテーブルを選択してください。',
            'true_value' => '1つ目の選択肢を保存した場合に登録する値を入力してください。',
            'true_label' => '1つ目の選択肢を保存した場合に表示する文字列を入力してください。',
            'false_value' => '2つ目の選択肢を保存した場合に登録する値を入力してください。',
            'false_label' => '2つ目の選択肢を保存した場合に表示する文字列を入力してください。',
            'available_characters' => '入力可能な文字を選択してください。すべてのチェックを外すと、すべての文字を入力できます。',
            'auto_number_format' => '登録する採番のルールを設定します。詳細のルールは&nbsp;<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>&nbsp;をご参照ください。',
            'calc_formula' => '他のフィールドを使用した、計算式を入力します。※現在β版です。',
            'currency_symbol' => '画面に表示する通貨の形式を選択してください。',
            'add_custom_form_flg' => '新規作成後、既定のフォームに列を追加することができます。追加する場合はYESにしてください。<br/>※列の新規作成時のみ設定できます。更新時は「フォーム」画面より設定してください。',
            'add_custom_view_flg' => '新規作成後、既定のビューに列を追加することができます。追加する場合はYESにしてください。<br/>※列の新規作成時のみ設定できます。更新時は「ビュー」画面より設定してください。',
            'select_table_deny' => '参照先のテーブル「%s」の権限がありません。システム管理者に問い合わせし、権限の追加を依頼してください。',
        ],
        'available_characters' => [
            'lower' => '英小文字', 
            'upper' => '英大文字', 
            'number' => '数字', 
            'hyphen_underscore' => '"-"または"_"',
            'symbol' => '記号',
        ],
        
        'calc_formula' => [
             'calc_formula' => '計算式',
             'dynamic' => '列',
             'fixed' => '固定値',
             'symbol' => '記号',
             'input_number' => '数値を入力',
        ],
    ],

    'custom_form' => [
        'default_form_name' => 'フォーム',
        'header' => 'カスタムフォーム設定',
        'description' => 'ユーザーが入力できるフォーム画面を定義します。このページで設定した内容が、データフォーム画面に反映されます。',
        'form_view_name' => 'フォーム表示名',
        'table_default_label' => 'テーブル - ',
        'table_one_to_many_label' => '子テーブル - ',
        'table_many_to_many_label' => '関連テーブル - ',
        'suggest_column_label' => 'テーブル列',
        'suggest_other_label' => 'その他',
        'form_block_name' => 'フォームブロック名',
        'view_only' => '表示専用',
        'hidden' => '隠しフィールド',
        'text' => 'テキスト',
        'html' => 'HTML',
        'available' => '使用する',
        'hasmany_type' => 'フォームをテーブル形式にする',
        'header_basic_setting' => 'ヘッダー基本設定',
        'changedata' => 'データ連動設定',
        'items' => 'フォーム項目',
        'suggest_items' => '候補一覧',
        'add_all_items' => 'すべて項目に追加',
        'changedata_target_column' => '列を選択',
        'changedata_target_column_available' => '設定済',
        'changedata_target_column_when' => 'の項目を選択したとき',
        'changedata_column' => 'リンク列を選択',
        'changedata_column_then' => 'の値をコピーする',

        'form_column_type_other_options' => [
            'header' => '見出し',
            'html' => 'HTML',
            'explain' => '説明文',
        ],

        'help'=> [
            'items' => 'データフォームに表示する項目を設定します。<br />「フォーム項目 候補一覧」の中から、フォームに表示したい項目を、「フォーム項目 列1」「フォーム項目 列2」にドラッグ＆ドロップで設定してください。',
            'changedata' => 'フォーム内の他の項目を選択したときに、選択したデータの値を、項目にコピーすることができます。<br />詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
            'changedata_no_item' => '※列の種類が「選択肢 (他のテーブルの値一覧から選択)」、「ユーザー」、「組織」となる列がテーブル内に存在しません。データ連動設定を使用する場合、これらの列を登録してください。',
        ],
    ],

    'custom_view' => [
        'header' => 'カスタムビュー設定',
        'description' => 'カスタムビューの設定を行います。',
        'view_view_name' => 'ビュー表示名',
        'view_datalist' => 'このビューでデータ一覧表示',
        'custom_view_columns' => '表示列選択',
        'custom_view_groups' => 'グループ列選択',
        'view_column_name' => '別名表示',
        'view_kind_type' => 'ビュー種類',
        'custom_view_summaries' => '集計列選択',
        'custom_view_sorts' => 'データ並べ替え',
        'view_column_target' => '対象列',
        'view_column_start_date' => '開始日',
        'view_column_end_date' => '終了日',
        'color' => '表示色',
        'font_color' => '文字色',
        'order' => '表示順',
        'sort' => '並べ替え',
        'priority' => '優先順位',
        'custom_view_filters' => '表示条件',
        'view_filter_condition' => '検索条件',
        'view_filter_condition_value_text' => '検索値',
        'view_summary_condition' => '集計タイプ',
        'default_view_name' => '既定のビュー',
        'description_custom_view_columns' => 'ビューに表示する列を設定します。',
        'description_custom_view_calendar_columns' => 'カレンダーに表示する日付列を選択します。<br/>※「対象列」にカスタム列が表示されない場合、<a href="%s" target="_blank">検索インデックス<i class="fa fa-external-link"></i></a>が設定されていません。リンク先の内容をご確認いただき、設定を行ってください。',
        'description_custom_view_groups' => 'ビューをグループ化するキーとなる列を設定します。<br/>※「対象列」にカスタム列が表示されない場合、<a href="%s" target="_blank">検索インデックス<i class="fa fa-external-link"></i></a>が設定されていません。リンク先の内容をご確認いただき、設定を行ってください。',
        'description_custom_view_summaries' => 'ビューに表示する集計列を設定します。<br/>※集計対象は、「ID」「整数」「小数」「通貨」「日付」となる列です。',
        'description_custom_view_sorts' => 'ビューに表示するデータの並べ替え(表示順序)を設定します。<br/>※「対象列」にカスタム列が表示されない場合、<a href="%s" target="_blank">検索インデックス<i class="fa fa-external-link"></i></a>が設定されていません。リンク先の内容をご確認いただき、設定を行ってください。',
        'description_custom_view_filters' => 'ビューに表示する条件を設定します。<br/>※この設定の他に、ログインユーザーが所有する権限のデータのみ表示するよう、データのフィルターを行います。<br/>※「対象列」にカスタム列が表示されない場合、<a href="%s" target="_blank">検索インデックス<i class="fa fa-external-link"></i></a>が設定されていません。リンク先の内容をご確認いただき、設定を行ってください。',

        'summary_condition_options' => [
            'sum' => '合計',
            'avg' => '平均',
            'count' => '件数',
            'min' => '最小値',
            'max' => '最大値',
        ],
        'filter_condition_options' => [
            'eq' => '検索値と合致する', 
            'ne' => '検索値と合致しない', 
            'eq-user' => 'ログインユーザーに合致する', 
            'ne-user' => 'ログインユーザーに合致しない', 
            'on' => '指定日',
            'on-or-after' => '指定日以降',
            'on-or-before' => '指定日以前',
            'today' => '今日',
            'today-or-after' => '今日以降',
            'today-or-before' => '今日以前',
            'yesterday' => '昨日',
            'tomorrow' => '明日',
            'this-month' => '今月',
            'last-month' => '先月',
            'next-month' => '来月',
            'this-year' => '今年',
            'last-year' => '去年',
            'next-year' => '来年',
            'last-x-day-after' => 'X日前の日付以降', 
            'next-x-day-after' => 'X日後の日付以降', 
            'last-x-day-or-before' => 'X日前の日付以前', 
            'next-x-day-or-before' => 'X日後の日付以前', 
            'not-null' => '値が空でない',
            'null' => '値が空',
            'gt' => '検索値より大きい', 
            'lt' => '検索値より小さい', 
            'gte' => '検索値以上である', 
            'lte' => '検索値以下である', 
            'select-eq' => '検索値を含む', 
            'select-ne' => '検索値を含まない', 
        ],
        
        'custom_view_menulist' => [
            'current_view_edit' => '現在のビュー設定変更',
            'create' => 'ビュー新規作成',
            'create_sum' => '集計ビュー新規作成',
            'create_calendar' => 'カレンダービュー新規作成',
        ],
        'message' => [
            'over_filters_max' => '表示条件は6件以上設定できません。',
            'over_sorts_max' => 'データ並べ替えは6件以上設定できません。',
        ],

        'custom_view_button_label' => 'ビュー',
        'custom_view_type_options' => [
            'system' => 'システムビュー',
            'user' => 'ユーザービュー',
        ],
        'custom_view_kind_type_options' => [
            'default' => '通常ビュー',
            'aggregate' => '集計ビュー',
            'calendar' => 'カレンダービュー',
        ],
    ],

    'role' => [
        'header' => '役割設定',
        'description' => '役割の設定を行います。役割は複数の権限を持ち、ユーザーのアクセス制御を行います。',
        'role_name' => '役割名(英数字)',
        'role_view_name' => '役割表示名',
        'role_type' => '役割の種類',
        'default_flg' => '既定の役割',
        'default_flg_true' => '既定',
        'default_flg_false' => '',
        'description_field' => '説明文',
        'permissions' => '権限詳細',
        'permission_header' => '権限設定',

        'description_form' => [
            'system' => 'システム全体を対象に、権限を付与するユーザー・組織を選択します。',
            'system_disableorg' => 'システム全体を対象に、権限を付与するユーザーを選択します。',
            'custom_table' => 'このテーブルを対象に、権限を付与するユーザー・組織を選択します。',
            'custom_table_disableorg' => 'このテーブルを対象に、権限を付与するユーザーを選択します。',
            'custom_value' => 'このデータを対象に、権限を付与するユーザー・組織を選択します。',
            'custom_value_disableorg' => 'このデータを対象に、権限を付与するユーザーを選択します。',
            'plugin' => 'このプラグインを対象に、権限を付与するユーザー・組織を選択します。',
            'plugin_disableorg' => 'このプラグインを対象に、権限を付与するユーザーを選択します。',
            'manual_link' => '<br />権限・役割についての詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。'
        ],

        'role_type_options' => [
            'system' => 'システム',
            'table' => 'テーブル',
            'value' => 'データ',
            'plugin' => 'プラグイン',
        ],

        'role_type_option_system' => [
            'system' => ['label' => 'システム情報', 'help' => 'システム情報を変更できます。'],
            'custom_table' => ['label' => 'カスタムテーブル', 'help' => 'カスタムテーブルを追加・変更・削除できます。'],
            'custom_form' => ['label' => 'フォーム', 'help' => 'カスタムフォームを追加・変更・削除できます。'],
            'custom_view' => ['label' => 'ビュー', 'help' => 'カスタムビューを追加・変更・削除できます。'],
            'custom_value_edit_all' => ['label' => 'すべてのデータ', 'help' => 'すべてのデータを追加・変更・削除できます。'],
        ],
        'role_type_option_table' => [
            'custom_table' => ['label' => 'テーブル', 'help' => 'テーブル定義を変更、またはテーブルを削除できます。'],
            'custom_form' => ['label' => 'フォーム', 'help' => 'フォームを追加・変更・削除できます。'],
            'custom_view' => ['label' => 'ビュー', 'help' => 'ビューを追加・変更・削除できます。'],
            'custom_value_edit_all' => ['label' => 'すべてのデータの編集', 'help' => 'すべてのデータを追加・編集・削除できます。'],
            'custom_value_view_all' => ['label' => 'すべてのデータの閲覧', 'help' => 'すべてのデータを閲覧できます。'],
            'custom_value_access_all' => ['label' => 'すべてのデータの参照', 'help' => 'すべてのデータを参照できます。<br />※メニューや一覧画面では表示されず、内部データや、他のテーブルからの参照でのみ表示できます。'],
            'custom_value_edit' => ['label' => '担当者データの編集', 'help' => '自分に権限のあるデータを追加・編集・削除できます。'],
            'custom_value_view' => ['label' => '担当者データの閲覧', 'help' => '自分に権限のあるデータを閲覧できます。'],
            'custom_value_access' => ['label' => '担当者データの参照', 'help' => '自分に権限のあるデータを参照できます。<br />※メニューや一覧画面では表示されず、内部データや、他のテーブルからの参照でのみ表示できます。'],
        ], 
        'role_type_option_value' => [
            'custom_value_edit' => ['label' => '編集者', 'help' => '対象のデータを編集できます。'],
            'custom_value_view' => ['label' => '閲覧者', 'help' => '対象のデータを閲覧できます。'],
        ], 
        'role_type_option_plugin' => [
            'plugin_access' => ['label' => '利用', 'help' => 'このプラグインを利用できます。'],
            'plugin_setting' => ['label' => '設定変更', 'help' => '設定変更をもつプラグインの場合、このプラグインの設定を変更できます。'],
        ],
    ],

    'custom_relation' => [
        'header' => 'リレーション設定',
        'description' => 'テーブル間同士の関連性(リレーション)を定義します。',
        'relation_type' => 'リレーション種類',
        'relation_type_options' => [
            'one_to_many'  => '1対多',
            'many_to_many'  => '多対多',
        ],
        'parent_custom_table' => '親テーブル',
        'child_custom_table' => '子テーブル',

        'help' => [
            'relation_caution' => '<span class="red bold"><i class="fa fa-exclamation-circle"></i> Exmentのテーブル間の関連付け設定方法は、この画面の他に、もう1種類あります。</span><br />登録前に、必ず<a href="%s" target="_blank">マニュアル</a>をご確認いただき、適切な選択を行うようにしてください。',
        ]
    ],

    'custom_copy' => [
        'header' => 'データコピー設定',
        'description' => 'テーブルからテーブルにデータをコピーするための設定を定義します。',
        'from_custom_table_view_name' => 'コピー元テーブル',
        'to_custom_table_view_name' => 'コピー先テーブル',
        'custom_copy_columns' => 'コピー列設定',
        'from_custom_column' => 'コピー元テーブル列',
        'to_custom_column' => 'コピー先テーブル列',
        'custom_copy_input_columns' => '入力ダイアログ設定',
        'input_custom_column' => '対象テーブル列',
        'column_description' => 'コピー元の列と、コピー先の列をそれぞれ一覧から選択してください。',
        'input_column_description' => 'コピー実施時に、コピー後の値を変更するフォーム(ダイアログ)を表示することができます。<br/>コピー時にフォームに入力させる対象の列を設定してください。',
        'dialog_description' => "この%sのデータをもとに、%sを作成します。<br/>作成する%sのデータに登録する、値を記入してください。",

        'help' => [
            'to_custom_table_view_name' => 'コピー先のテーブルを選択してください。',
        ],
    ],

    'search' => [
        'placeholder' => 'データ検索',
        'header_freeword' => '全データ検索',
        'description_freeword' => '全データ検索の結果一覧です。',
        'header_relation' => '関連データ検索',
        'description_relation' => '関連データ検索の結果一覧です。',
        'no_result' => '検索結果がありませんでした',
        'result_label' => '「%s」 の検索結果' ,
        'view_list' => '一覧表示',
    ],

    'menu' => [
        'menu_type' => 'メニュー種類',
        'description' => '左メニューの項目を定義します。ブラウザの更新後、変更内容が反映されます。',
        'menu_target' => '対象',
        'menu_name' => 'メニュー名(英数字)',
        'title' => 'メニュー表示名',
        'menu_type_options' => [
            'system' => 'システムメニュー',
            'plugin' => 'プラグイン',
            'table' => 'テーブルデータ',
            'parent_node' => '親階層',
            'custom' => 'カスタムURL',
        ],
        
        'system_definitions' => [
            'home' => 'HOME',
            'system' => 'システム設定',
            'plugin' => 'プラグイン',
            'custom_table' => 'カスタムテーブル',
            'role' => '役割',
            'menu' => 'メニュー',
            'template' => 'テンプレート',
            'backup' => 'バックアップ',
            'loginuser' => 'ログインユーザー',
            'notify' => '通知',
            'master' => 'マスター管理',
            'admin' => '管理者設定',
        ],
    ],

    'mail_template' => [
        'disable_body' => '(セキュリティのため、本文は非表示になります)',
    ],

    'template' =>[
        'header' => 'テンプレート',
        'header_export' => 'テンプレート - エクスポート',
        'header_import' => 'テンプレート - インポート',
        'description' => 'Exmentのテーブル、列、フォーム情報をインポート、またはエクスポートします。',
        'description_export' => 'システムに登録している、テーブル・列・フォーム情報をエクスポートします。このテンプレートファイルは、他のシステムでインポートすることができます。',
        'description_import' => 'エクスポートされたExmentテンプレート情報を、このシステムにインポートし、テーブル・列・フォーム情報をインストールします。<br />以下の3つの項目から、1つを選択し、実施してください。',
        'template_name' => 'テンプレート名(英数字)',
        'template_view_name' => 'テンプレート表示名',
        'form_description' => 'テンプレート説明文',
        'thumbnail' => 'サムネイル',
        'upload_template' => 'アップロード(zip)',
        'upload_template_excel' => 'アップロード(Excel)',
        'export_target' => 'エクスポート対象',
        'target_tables' => 'エクスポート対象テーブル',
        
        'help' => [
            'thumbnail' => '推奨サイズ：256px*256px',
            'upload_template' => '他のシステムでエクスポートした、テンプレートzipファイルをアップロードして、このシステムに設定をインポートします。',
            'upload_template_excel' => 'Excelフォーマットで作成した、設定ファイルをアップロードして、システムに設定をインポートします。',
            'export_target' => 'エクスポートする対象を選択してください。',
            'target_tables' => 'エクスポートするテーブルを選択してください。未選択の場合、すべてのテーブル情報をエクスポートします。',
        ],

        'export_target_options' => [
            'table' => 'テーブル',
            'dashboard' => 'ダッシュボード',
            'menu' => 'メニュー',
            'role' => '権限',
            'mail_template' => 'メールテンプレート',
        ]
    ],

    'custom_value' => [
        'template' => 'テンプレート出力',
        'import_export' => 'インポート・エクスポート',
        'export' => 'エクスポート',
        'import' => [
            'manual_id' => 'データインポート',
            'import_file' => 'インポートファイル',
            'import_file_select' => 'CSVもしくはExcelファイルを選択',
            'primary_key' => '主キー',
            'error_flow' => 'エラー時処理',
            'import_error_message' => 'エラーメッセージ',
            'import_error_format' => '行%d : %s',
            'help' => [
                'description' => 'Exmentに、各テーブルのデータをインポートすることができます。<br />手順など、詳細は<a href="%s" target="_blank">こちら<i class="fa fa-external-link"></i></a>をご参照ください。',
                'custom_table_file' => 'テンプレート出力した、CSVファイル、もしくはExcelファイル(xlsx形式)を選択してください。',
                'primary_key' => '更新データを絞り込む対象のフィールドを選択します。<br />このフィールド値が、すでにあるデータと合致していた場合、更新データとして取り込みを行います。<br />合致するデータが存在しなかった場合、新規データとして取り込みます。',
                'error_flow' => 'データ不備などでエラーが発生した場合、正常データを取り込むかどうか選択します。',
                'import_error_message' => '取込ファイルに不備があった場合、この項目に、行番号と、エラーメッセージを表示します。',
            ],
            'key_options' => [
                'id' => 'ID',
                'suuid' => 'SUUID(内部ID)',
            ],
            'error_options' => [
                'stop' => 'すべてのデータを取り込まない。',
                'skip' => '正常データは取り込むが、エラーデータは取り込まない。',
            ],
        ],
        'data_detail' => 'データ確認',

        'bootstrap_duallistbox_container' => [
            'nonSelectedListLabel' => '候補データ一覧',
            'selectedListLabel' => '選択済データ一覧',
            'help' => '左の列から、該当するデータを選択し、右の列に移動してください。',
        ],
        'auto_number_create' => '(※保存後、値が自動的に登録されます)',

        'help' => [
            'no_columns_admin' => 'カスタム列が登録されていません。先にカスタム列を登録してください。',
            'no_columns_user' => 'カスタム列が登録されていません。管理者に問い合わせし、カスタム列を追加の依頼を行ってください。',
            'reference_error' => 'このデータは別のテーブルから参照されているため、削除できません。',
        ],
    ],

    'revision' => [
        'update_history' => '更新履歴',
        'revision' => 'リビジョン',
        'revision_select' => 'リビジョン選択',
        'revision_no' => 'リビジョンNo',
        'revision_id' => 'リビジョンID',
        'old_revision' => '過去リビジョン',
        'new_revision' => '最新リビジョン',
        'revision_info' => 'リビジョン情報',
        'restore_revision' => 'このリビジョンを復元',
        'new' => '最新',
        'compare_revision' => 'リビジョン比較',
    ],

    'notify' => [
        'header' => '通知設定',
        'header_trigger' => '通知条件設定',
        'header_action' => '通知アクション設定',
        'description' => '特定の条件で、通知を行うための設定を行います。',
        'notify_view_name' => '通知表示名',
        'custom_table_id' => '対象テーブル',
        'notify_trigger' => '実施トリガー',
        'trigger_settings' => '通知実施設定',
        'notify_target_column' => '日付対象列',
        'notify_day' => '通知日',
        'notify_beforeafter' => '通知前後',
        'notify_hour' => '通知時間',
        'notify_action' => '実施アクション',
        'action_settings' => '実施アクション設定',
        'notify_action_target' => '対象',
        'mail_template_id' => 'メールテンプレート',

        'help' => [
            'notify_day' => '通知を行う日付を入力してください。「0」と入力することで、当日に通知を行います。',
            'custom_table_id' => '通知を行う条件として使用する、テーブルを選択します。',
            'notify_trigger' => '通知を行う条件となる内容を選択してください。',
            'trigger_settings' => '通知を行うかどうかの判定を行う、日付・日時のフィールドを選択します。',
            'notify_beforeafter' => '通知を行うのが、登録している日付の「前」か「後」かを選択します。<br/>例：「通知日」が7、「通知前後」が「前」の場合、指定したフィールドの日付の7日前に通知実行',
            'notify_hour' => '通知を実行する時間です。0～23で入力します。 例：「6」と入力した場合、6:00に通知実行',
            'notify_action' => '条件に合致した場合に行う、通知アクションを選択してください。',
            'notify_action_target' => '通知先の対象を選択します。',
            'mail_template_id' => '送付するメールのテンプレートを選択します。新規作成する場合、事前にメールテンプレート画面にて、新規テンプレートを作成してください。',
        ],

        'notify_trigger_options' => [
            'time' => '時間の経過',
            'create_update_data' => 'データ新規作成・更新',
        ],
        'notify_beforeafter_options' => [
            'before' => '前', 
            'after' => '後'
        ],
        'notify_action_options' => [
            'email' => 'Eメール', 
        ],

        'notify_action_target_options' => [
            'has_roles' => '権限のあるユーザー',
        ],
    ],
    
    'chart' => [
        'chart_type_options' => [
            'bar' => '棒グラフ',
            'line' => '折れ線グラフ',
            'pie' => '円グラフ',
        ]
    ],
    
    'calendar' => [
        'calendar_type_options' => [
            'month' => '月別',
            'list' => 'リスト',
        ],
        'calendar_button_options' => [
            'month' => '月',
            'week' => '週',
            'day' => '日',
        ]
    ],
    
    'api' => [
        'scopes' => [
            'me' => 'ログインユーザー情報の取得',
            'table_read' => 'テーブル情報の取得',
            'table_write' => 'テーブル情報の取得・新規追加・更新・削除',
            'value_read' => 'データの取得',
            'value_write' => 'データの取得・新規追加・更新・削除',
        ],

        'errors' => [
            'access_denied' => '認証できませんでした。アクセストークンが誤っているか、期限が切れています。',
            'wrong_scope' => 'APIを実行するためのスコープに誤りがあります。開発者にお問い合わせください。',
        ]
    ],
];
