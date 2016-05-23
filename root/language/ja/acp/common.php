<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Adminパーミッション',
	'ACP_ADMIN_LOGS'			=> 'Adminログ',
	'ACP_ADMIN_ROLES'			=> 'Adminパーミッションロール',
	'ACP_ATTACHMENTS'			=> 'ファイル添付',
	'ACP_ATTACHMENT_SETTINGS'	=> 'ファイル添付の設定',
	'ACP_AUTH_SETTINGS'			=> 'ログイン認証の設定',
	'ACP_AUTOMATION'			=> 'オートメイション',
	'ACP_AVATAR_SETTINGS'		=> 'アバターの設定',
	
	'ACP_BACKUP'				=> 'バックアップ',
	'ACP_BAN'					=> 'アクセス禁止',
	'ACP_BAN_EMAILS'			=> 'アクセス禁止 - メールアドレス',
	'ACP_BAN_IPS'				=> 'アクセス禁止 - IPアドレス',
	'ACP_BAN_USERNAMES'			=> 'アクセス禁止 - ユーザー名',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> '掲示板の構成',
	'ACP_BOARD_FEATURES'		=> '掲示板の機能',
	'ACP_BOARD_MANAGEMENT'		=> '掲示板の管理',
	'ACP_BOARD_SETTINGS'		=> '掲示板の設定',
	'ACP_BOTS'					=> 'スパイダー/ボット',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'カスタマイズ',
	'ACP_CAT_DATABASE'			=> 'データベース',
	'ACP_CAT_DOT_MODS'			=> '拡張機能',
	'ACP_CAT_FORUMS'			=> 'フォーラム',
	'ACP_CAT_GENERAL'			=> 'メイン',
	'ACP_CAT_MAINTENANCE'		=> 'メンテナンス',
	'ACP_CAT_PERMISSIONS'		=> 'パーミッション',
	'ACP_CAT_POSTING'			=> '投稿',
	'ACP_CAT_STYLES'			=> 'スタイル',
	'ACP_CAT_SYSTEM'			=> 'システム',
	'ACP_CAT_USERGROUP'			=> 'ユーザー＆グループ',
	'ACP_CAT_USERS'				=> 'ユーザー',
	'ACP_CLIENT_COMMUNICATION'	=> 'クライアントコミュニケイション',
	'ACP_COOKIE_SETTINGS'		=> 'Cookieの設定',
	'ACP_CONTACT'				=> 'お問い合わせページ',
	'ACP_CONTACT_SETTINGS'		=> 'お問い合わせページの設定',
	'ACP_CRITICAL_LOGS'			=> 'エラーログ',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'カスタムプロフィールフィールド',

	'ACP_DATABASE'				=> 'データベースの管理',
	'ACP_DISALLOW'				=> '禁止',
	'ACP_DISALLOW_USERNAMES'	=> 'ユーザー名の禁止',
	
	'ACP_EMAIL_SETTINGS'		=> 'メールの設定',
	'ACP_EXTENSION_GROUPS'		=> '拡張子グループの管理',
	'ACP_EXTENSION_MANAGEMENT'	=> '拡張機能管理',
	'ACP_EXTENSIONS'			=> '拡張機能の管理',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'ローカルパーミッション',
	'ACP_FORUM_LOGS'				=> '掲示板のログ',
	'ACP_FORUM_MANAGEMENT'			=> 'フォーラム管理',
	'ACP_FORUM_MODERATORS'			=> 'モデレータパーミッション',
	'ACP_FORUM_PERMISSIONS'			=> 'フォーラムパーミッション',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'フォーラムパーミッションのコピー',
	'ACP_FORUM_ROLES'				=> 'フォーラムパーミッションロール',

	'ACP_GENERAL_CONFIGURATION'		=> '一般設定',
	'ACP_GENERAL_TASKS'				=> '一般タスク',
	'ACP_GLOBAL_MODERATORS'			=> 'グローバルモデレータパーミッション',
	'ACP_GLOBAL_PERMISSIONS'		=> 'グローバルパーミッション',
	'ACP_GROUPS'					=> 'グループ',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'ローカルパーミッション [ グループ ]',
	'ACP_GROUPS_MANAGE'				=> 'グループの管理',
	'ACP_GROUPS_MANAGEMENT'			=> 'グループ管理',
	'ACP_GROUPS_PERMISSIONS'		=> 'グローバルパーミッション [ グループ ]',
	'ACP_GROUPS_POSITION'			=> 'グループの順序',
	
	'ACP_ICONS'					=> 'トピックアイコン',
	'ACP_ICONS_SMILIES'			=> 'トピックアイコン/スマイリー',
	'ACP_INACTIVE_USERS'		=> '無効アカウント',
	'ACP_INDEX'					=> 'ACP	index',

	'ACP_JABBER_SETTINGS'		=> 'Jabberの設定',
	
	'ACP_LANGUAGE'				=> '言語管理',
	'ACP_LANGUAGE_PACKS'		=> '言語パック',
	'ACP_LOAD_SETTINGS'			=> 'サーバ負荷の設定',
	'ACP_LOGGING'				=> 'ログ',
	
	'ACP_MAIN'					=> 'ACP index',
	
	'ACP_MANAGE_ATTACHMENTS'			=> '添付ファイルの管理',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'ここでは記事とプライベートメッセージに添付されたファイルを閲覧・削除できます',

	'ACP_MANAGE_EXTENSIONS'		=> 'ファイル拡張子の管理',
	'ACP_MANAGE_FORUMS'			=> 'フォーラムの管理',
	'ACP_MANAGE_RANKS'			=> 'ランクの管理',
	'ACP_MANAGE_REASONS'		=> '通報・却下の理由',
	'ACP_MANAGE_USERS'			=> 'ユーザーの管理',
	'ACP_MASS_EMAIL'			=> '一括メール',
	'ACP_MESSAGES'				=> 'メッセージ',
	'ACP_MESSAGE_SETTINGS'		=> 'プライベートメッセージの設定',
	'ACP_MODULE_MANAGEMENT'		=> 'モジュール管理',
	'ACP_MOD_LOGS'				=> 'モデレータログ',
	'ACP_MOD_ROLES'				=> 'モデレータパーミッションロール',
	
	'ACP_NO_ITEMS'				=> 'データなし',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> '孤立ファイル',
	
	'ACP_PERMISSIONS'			=> 'パーミッション',
	'ACP_PERMISSION_MASKS'		=> 'パーミッションマスク',
	'ACP_PERMISSION_ROLES'		=> 'パーミッションロール',
	'ACP_PERMISSION_TRACE'		=> 'パーミッショントレース',
	'ACP_PHP_INFO'				=> 'PHP情報',
	'ACP_POST_SETTINGS'			=> '投稿の設定',
	'ACP_PRUNE_FORUMS'			=> 'フォーラムの剪定',
	'ACP_PRUNE_USERS'			=> 'ユーザーの剪定',
	'ACP_PRUNING'				=> '剪定',
	
	'ACP_QUICK_ACCESS'			=> 'クイックアクセス',
	
	'ACP_RANKS'					=> 'ランク',
	'ACP_REASONS'				=> '通報・却下の理由',
	'ACP_REGISTER_SETTINGS'		=> 'ユーザー登録の設定',

	'ACP_RESTORE'				=> '復元',

	'ACP_FEED'					=> 'フィード管理',
	'ACP_FEED_SETTINGS'			=> 'フィードの設定',

	'ACP_SEARCH'				=> '検索',
	'ACP_SEARCH_INDEX'			=> '検索インデクス',
	'ACP_SEARCH_SETTINGS'		=> '検索の設定',

	'ACP_SECURITY_SETTINGS'		=> 'セキュリティの設定',
	'ACP_SEND_STATISTICS'		=> '設定情報の提供',
	'ACP_SERVER_CONFIGURATION'	=> 'サーバの構成',
	'ACP_SERVER_SETTINGS'		=> 'サーバの設定',
	'ACP_SIGNATURE_SETTINGS'	=> 'サインの設定',
	'ACP_SMILIES'				=> 'スマイリー',
	'ACP_STYLE_MANAGEMENT'		=> 'スタイル管理',
	'ACP_STYLES'				=> 'スタイル',
	'ACP_STYLES_CACHE'			=> 'キャッシュの消去',
	'ACP_STYLES_INSTALL'		=> 'スタイルのインストール',
		
	'ACP_SUBMIT_CHANGES'		=> '更新',
	
	'ACP_TEMPLATES'				=> 'テンプレート',
	'ACP_THEMES'				=> 'テーマ',
	
	'ACP_UPDATE'					=> 'アップデート',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'ローカルパーミッション [ ユーザー ]',
	'ACP_USERS_LOGS'				=> 'ユーザーログ',
	'ACP_USERS_PERMISSIONS'			=> 'グローバルパーミッション [ ユーザー ]',
	'ACP_USER_ATTACH'				=> '添付ファイル',
	'ACP_USER_AVATAR'				=> 'アバター',
	'ACP_USER_FEEDBACK'				=> 'メモ',
	'ACP_USER_GROUPS'				=> 'グループ',
	'ACP_USER_MANAGEMENT'			=> 'ユーザー管理',
	'ACP_USER_OVERVIEW'				=> 'アカウント情報',
	'ACP_USER_PERM'					=> 'パーミッション',
	'ACP_USER_PREFS'				=> 'ユーザー設定',
	'ACP_USER_PROFILE'				=> 'プロフィール',
	'ACP_USER_RANK'					=> 'ランク',
	'ACP_USER_ROLES'				=> 'ユーザーパーミッションロール',
	'ACP_USER_SECURITY'				=> 'ユーザーセキュリティ',
	'ACP_USER_SIG'					=> 'サイン',
	'ACP_USER_WARNINGS'				=> '警告',

	'ACP_VC_SETTINGS'					=> 'CAPTCHAの設定',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHAのプレビュー',
	'ACP_VERSION_CHECK'					=> '更新チェック',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Adminパーミッションマスク',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'モデレータパーミッションマスク',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'フォーラムパーミッションマスク',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'グローバルモデレータパーミッションマスク',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'ユーザーパーミッションマスク',
	
	'ACP_WORDS'					=> '言語フィルタ',

	'ACTION'				=> 'アクション',
	'ACTIONS'				=> 'アクション',
	'ACTIVATE'				=> '有効にする',
	'ADD'					=> '追加',
	'ADMIN'					=> 'Admin',
	'ADMIN_INDEX'			=> 'AdminCPトップ',
	'ADMIN_PANEL'			=> 'AdminCP',

	'ADM_LOGOUT'			=> 'ACP&nbsp;ログアウト',
	'ADM_LOGGED_OUT'		=> 'Adminコントロールパネル からログアウトしました',

	'BACK'					=> '戻る',

	'COLOUR_SWATCH'			=> '色の見本',
	'CONFIG_UPDATED'		=> '設定の更新に成功しました',
	'CRON_LOCK_ERROR'		=> 'cronロック を取得できませんでした',
	'CRON_NO_SUCH_TASK'		=> 'cronタスク “%s” が見つかりませんでした',
	'CRON_NO_TASK'			=> '今すぐに実行が必要な cronタスク はありません',
	'CRON_NO_TASKS'			=> 'cronタスク が１つも見つかりませんでした',
		
	'DEACTIVATE'				=> '無効にする',
	'DIRECTORY_DOES_NOT_EXIST'	=> '入力したパス “%s” にディレクトリが存在していません',
	'DIRECTORY_NOT_DIR'			=> '入力したパス “%s” はディレクトリではありません',
	'DIRECTORY_NOT_WRITABLE'	=> '入力したパス “%s” のディレクトリに書き込めません',
	'DISABLE'					=> '無効にする',
	'DOWNLOAD'					=> 'ダウンロード',
	'DOWNLOAD_AS'				=> 'ダウンロード形式',
	'DOWNLOAD_STORE'			=> 'ダウンロード or 保管',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'ファイルをダウンロードするか <samp>store/</samp> フォルダに保管するかを選択してください',
	'DOWNLOADS'					=> 'ダウンロード数',
	
	'EDIT'					=> '編集',
	'ENABLE'				=> '有効にする',
	'EXPORT_DOWNLOAD'		=> 'ダウンロード',
	'EXPORT_STORE'			=> '保管',

	'GENERAL_OPTIONS'		=> '一般オプション',
	'GENERAL_SETTINGS'		=> '一般設定',
	'GLOBAL_MASK'			=> 'グローバルパーミッションマスク',

	'INSTALL'				=> 'インストール',
	'IP'					=> 'IPアドレス',
	'IP_HOSTNAME'			=> 'IPアドレス/ホスト名',

	'LOAD_NOTIFICATIONS'			=> '通知を表示する',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> '通知のリストを各ページ (大抵はページのトップ）に表示させます。',
	'LOGGED_IN_AS'			=> 'ログイン名：',
	'LOGIN_ADMIN'			=> 'AdminCP へ入室するにはログインする必要があります',
	'LOGIN_ADMIN_CONFIRM'	=> 'AdminCP へ入室するにはもう一度ユーザー認証する必要があります',
	'LOGIN_ADMIN_SUCCESS'	=> '認証に成功しました。AdminCP へ自動的にリダイレクトします。',
	'LOOK_UP_FORUM'			=> 'フォーラムの選択',
	'LOOK_UP_FORUMS_EXPLAIN'=> '複数のフォーラムを選択できます',

	'MANAGE'				=> '管理',
	'MENU_TOGGLE'			=> 'サイドメニュー 表示/非表示',
	'MORE'					=> 'More',			// Not used at the moment
	'MORE_INFORMATION'		=> '詳しくはこちら »',
	'MOVE_DOWN'				=> '下に移動',
	'MOVE_UP'				=> '上に移動',

	'NOTIFY'				=> '通知',
	'NO_ADMIN'				=> 'ユーザー認証されていないため、AdminCP へ入室できません',
	'NO_EMAILS_DEFINED'		=> 'メールアドレスが見つかりませんでした',
	'NO_FILES_TO_DELETE'	=> '選択した添付ファイルを削除しようと試みましたがファイルが存在していませんでした',
	'NO_PASSWORD_SUPPLIED'	=> 'AdminCP へアクセスするにはパスワードを入力する必要があります',	

	'OFF'					=> 'オフ',
	'ON'					=> 'オン',

	'PARSE_BBCODE'						=> 'BBCode をパースする',
	'PARSE_SMILIES'						=> 'スマイリーをパースする',
	'PARSE_URLS'						=> 'URL をパースする',
	'PERMISSIONS_TRANSFERRED'			=> 'パーミッションテスト中',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'ユーザー %1$s のパーミッションをテストしています。Adminパーミッション をテストすることはできないため、パーミッションテスト中は AdminCP へ入室することはできません。あなたはいつでも<a href="%2$s"><strong>パーミッションテストを終了する</strong></a>事ができます。',
	'PROCEED_TO_ACP'					=> '%sAdminCP へ%s',

	'REMIND'							=> 'アカウント有効化メールの送信',
	'RESYNC'							=> '同期',

	'RUNNING_TASK'			=> '実行中のタスク: %s',
	'SELECT_ANONYMOUS'		=> '匿名ユーザーの選択',
	'SELECT_OPTION'			=> 'オプションを選択してください',

	'SETTING_TOO_LOW'		=> '“%1$s” の値が小さすぎます。%2$d 以上にしてください。',
	'SETTING_TOO_BIG'		=> '“%1$s” の値が大きすぎます。%2$d 以下にしてください。',
	'SETTING_TOO_LONG'		=> '“%1$s” が長すぎます。%2$d 字以下にしてください。',
	'SETTING_TOO_SHORT'		=> '“%1$s” が短すぎます。%2$d 字以上にしてください。',
	'SHOW_ALL_OPERATIONS'	=> 'Show all operations',

	'TASKS_NOT_READY'		=> '準備中のタスク:',
	'TASKS_READY'			=> '待機中のタスク:',
	'TOTAL_SIZE'			=> 'サイズ合計',

	'UCP'					=> 'ユーザーCP',
	'USERNAMES_EXPLAIN'		=> '１行につき１つのユーザー名をご入力ください',
	'USER_CONTROL_PANEL'	=> 'ユーザーコントロールパネル',

	'WARNING'				=> '警告',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'ここではサーバにインストールされている PHP の設定情報を確認できます。設定情報には拡張モジュール、利用可能な変数、デフォルト設定の詳細が含まれています。これらの情報はサイトに何か問題が生じた場合、その問題を診断する時に役立つはずです。ホスティングサービスを利用している場合、サーバ運営会社によってはセキュリティ上の理由で表示される情報が制限されている可能性があります。www.phpbb.com のサポートフォーラムの<a href="https://www.phpbb.com/about/team/">オフィシャルチームメンバー</a>に質問する時以外はこのページにおけるいかなる情報も口外すべきではありません。',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP の設定情報を取得できません。セキュリティ上の理由で phpinfo() が使えなくなっています。',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'ここでは Admin によって実行された全アクションのログを確認できます。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'ここでは掲示板システムが自ら実行したアクションのログを確認できます。もし掲示板になんらかの問題（例えばメールの配達不能）が起こった場合、それを解決するための情報としてログが記録されます。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'ここではフォーラム、トピック、返信記事において、アクセス禁止アクションも含めモデレータが実行した全アクションのログを確認できます。ログはユーザー名、日時、IPアドレス、アクションでソート可能です。パーミッション次第でログの削除も可能です。',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'ここではユーザーによって、あるいはユーザーに対して実行された全アクションのログを確認できます',
	'ALL_ENTRIES'				=> '全ログ',

	'DISPLAY_LOG'	=> '期間内表示',

	'NO_ENTRIES'	=> 'ログはありません',

	'SORT_IP'		=> 'IPアドレス',
	'SORT_DATE'		=> '日時',
	'SORT_ACTION'	=> 'ログアクション',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Adminコントロールパネル (AdminCP) へようこそ。AdminCP では掲示板を管理するための様々な機能を利用できます。',
	'ADMIN_LOG'					=> 'Adminログ',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Admin によって実行された最近５件のアクションです。全ログを確認するには Adminログページ へ移動してください。',
	'AVATAR_DIR_SIZE'			=> 'アバターディレクトリのサイズ',

	'BOARD_STARTED'		=> '掲示板開始日時',
 	'BOARD_VERSION'		=> 'phpBB バージョン',

	'DATABASE_SERVER_INFO'	=> 'データベース',
	'DATABASE_SIZE'			=> 'データベースサイズ',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> '関数のオーバーロード の値が不適切です',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> の値は 0 か 4 である必要があります。 <samp>PHP情報</samp> ページで設定値をご確認ください。',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> '透過的な文字エンコーディングフィルタ の値が不適切です',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> の値は 0 である必要があります。 <samp>PHP情報</samp> ページで設定値をご確認ください。',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP入力文字エンコーディングの自動変換 の値が不適切です',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> の値は <samp>pass</samp> である必要があります。 <samp>PHP情報</samp> ページで設定値をご確認ください。',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP出力文字エンコーディングの自動変換 の値が不適切です',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> の値は <samp>pass</samp> である必要があります。 <samp>PHP情報</samp> ページで設定値をご確認ください。',

	'FILES_PER_DAY'		=> '１日あたりのファイル添付数',
	'FORUM_STATS'		=> '掲示板の統計データ',

	'GZIP_COMPRESSION'	=> 'GZip圧縮',

	'NO_SEARCH_INDEX'	=> '選択した検索バックエンドは検索インデクスがまだ作成されていません。<br />%2$s検索インデクス%3$s で “%1$s” の検索インデクスを作成してください。',
	'NOT_AVAILABLE'		=> '利用できません',
	'NUMBER_FILES'		=> '添付ファイル数',
	'NUMBER_POSTS'		=> '記事数',
	'NUMBER_TOPICS'		=> 'トピック数',
	'NUMBER_USERS'		=> 'ユーザー数',
	'NUMBER_ORPHAN'		=> '孤立ファイル数',

	'PHP_VERSION_OLD'	=> 'サーバにインストールされている PHP のバージョンは将来的に phpBB のサポート外となります。%s詳しくはこちら%s',

	'POSTS_PER_DAY'		=> '１日あたりの投稿数',

	'PURGE_CACHE'			=> 'キャッシュの消去',
	'PURGE_CACHE_CONFIRM'	=> 'キャッシュを本当に消去してもよろしいですか?',
	'PURGE_CACHE_EXPLAIN'	=> '掲示板のキャッシュデータを全て消去します。テンプレートキャッシュファイルと SQLキャッシュファイル の消去を含みます。',
	'PURGE_CACHE_SUCCESS'	=> 'キャッシュの消去に成功しました',
	
	'PURGE_SESSIONS'			=> 'セッションの消去',
	'PURGE_SESSIONS_CONFIRM'	=> 'セッションを本当に消去してもよろしいですか? ユーザーは全て強制的にログアウトします。',
	'PURGE_SESSIONS_EXPLAIN'	=> 'セッションを全て消去します。ユーザーは全て強制的にログアウトされます。',
	'PURGE_SESSIONS_SUCCESS'	=> 'セッションの消去に成功しました',
	
	'RESET_DATE'					=> '掲示板の開始日時をリセットする',
	'RESET_DATE_CONFIRM'			=> '掲示板の開始日時を本当にリセットしてもよろしいですか？',
	'RESET_DATE_SUCCESS'			=> '掲示板の開始日時をリセットしました',
	'RESET_ONLINE'					=> '最大同時ユーザーオンライン数をリセットする',
	'RESET_ONLINE_CONFIRM'			=> '最大同時ユーザーオンライン数を本当にリセットしてもよろしいですか？',
	'RESET_ONLINE_SUCCESS'			=> '最大同時ユーザーオンライン数をリセットしました',
	'RESYNC_POSTCOUNTS'				=> '記事数の同期',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> '現存している記事のみカウントされます。剪定された記事はカウントされません。',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> '記事数を本当に同期してもよろしいですか？',
	'RESYNC_POSTCOUNTS_SUCCESS'		=> '記事数を同期しました',
	'RESYNC_POST_MARKING'			=> 'トピックの投稿マークの同期',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'トピックの投稿マークを本当に同期してもよろしいですか？',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'トピックの投稿マークを全て一旦解除し、その後過去６ヶ月間に返信されているトピックのみを再マークします',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'トピックの投稿マークを同期しました',
	'RESYNC_STATS'					=> '統計の同期',
	'RESYNC_STATS_CONFIRM'			=> '統計データを本当に同期してもよろしいですか？',
	'RESYNC_STATS_EXPLAIN'			=> '全返信数、全トピック数、全ユーザー数、全添付ファイル数を再計算します',
	'RESYNC_STATS_SUCCESS'			=> '統計データを同期しました',
	'RUN'							=> '実行する',

	'STATISTIC'					=> '統計',
	'STATISTIC_RESYNC_OPTIONS'	=> '統計データの 同期／リセット',

	'TIMEZONE_INVALID'	=> '選択したタイムゾーンは無効です',
	'TIMEZONE_SELECTED'	=> '（選択中）',
	'TOPICS_PER_DAY'	=> '１日あたりのトピック数',

	'UPLOAD_DIR_SIZE'	=> 'アップロードディレクトリのサイズ',
	'USERS_PER_DAY'		=> '１日あたりの登録ユーザー数',

	'VALUE'						=> '値',
	'VERSIONCHECK_FAIL'			=> '最新バージョン情報の取得に失敗しました',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'バージョン再チェック',
	'VIEW_ADMIN_LOG'			=> 'Adminログ ページへ',
	'VIEW_INACTIVE_USERS'		=> '無効アカウント ページへ',

	'WELCOME_PHPBB'			=> 'phpBB へようこそ',
	'WRITABLE_CONFIG'		=> 'コンフィグファイル（config.php）のアクセス権の設定が非常に危険です。サーバの全ユーザーに対して書き込みが許可されており、誰でも修正できる状態にあります。今すぐにファイルアクセス権を 640 または少なくとも 644 に設定（<a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php）してください。',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'アカウント無効化日時',
	'INACTIVE_REASON'				=> '無効理由',
	'INACTIVE_REASON_MANUAL'		=> 'Admin がアカウントを無効化したため',
	'INACTIVE_REASON_PROFILE'		=> 'Admin がカスタムプロフィールフィールド設定を変更したため',
	'INACTIVE_REASON_REGISTER'		=> '新規アカウントのため',
	'INACTIVE_REASON_REMIND'		=> 'Admin がアカウントの再有効化を要求したため',
	'INACTIVE_REASON_UNKNOWN'		=> '不明',
	'INACTIVE_USERS'				=> '無効アカウント',
	'INACTIVE_USERS_EXPLAIN'		=> 'アカウントが無効（停止）状態の登録ユーザーのリストです。無効アカウントに対して、有効化、削除、アカウント有効化メールの送信 を行うことができます。',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'アカウントが無効（停止）状態の登録ユーザーの最近１０件のリストです。全ての無効アカウントを確認するには 無効アカウントページ へ移動してください。ユーザー登録設定ページのアクティベーション設定によっては無効アカウントが発生しない状況もあります。移動先のページで アカウントの有効化、削除、アカウント有効化メールの送信 を行うことができます。',

	'NO_INACTIVE_USERS'	=> '無効アカウントはありません',

	'SORT_INACTIVE'		=> 'アカウント無効化日時',
	'SORT_LAST_VISIT'	=> '最近の訪問日時',
	'SORT_REASON'		=> '理由',
	'SORT_REG_DATE'		=> '登録日時',
	'SORT_LAST_REMINDER'=> '最近のアカウント有効化メール送信日時',
	'SORT_REMINDER'		=> 'アカウント有効化メール送信数',

	'USER_IS_INACTIVE'		=> '無効アカウント',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'サーバと掲示板の設定情報を phpBB Limited に提供します。この情報は主に phpBB の今後の開発方針を決定する際に参考として利用されます。ユーザーの皆様のご協力をお願い致します。またこの情報は一般公開され、プログラミング言語 PHP の開発にも利用されます。提供情報には、ユーザーまたはサイトを特定するような情報は一切含まれませんのでご安心ください - それら個人情報は全て <strong>匿名</strong> として扱われます。',
	'EXPLAIN_SHOW_STATISTICS'	=> '下のボタンをクリックすると提供情報の全データが表示されます',
	'DONT_SEND_STATISTICS'		=> 'AdminCP トップに戻る',
	'GO_ACP_MAIN'				=> 'AdminCP トップへ',
	'HIDE_STATISTICS'			=> '提供情報を隠す',
	'SEND_STATISTICS'			=> 'サーバと掲示板の設定情報を phpBB Limited に提供する',
	'SHOW_STATISTICS'			=> '提供情報を表示する',
	'THANKS_SEND_STATISTICS'	=> 'ご協力していただきありがとうございました',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>ユーザーパーミッションを追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>ユーザーパーミッションを追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Adminパーミッション を追加 or 変更しました</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>グローバルモデレータパーミッションを追加 or 変更しました</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>モデレータパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>フォーラムパーミッションを追加 or 変更しました - </strong> %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Adminパーミッション を削除しました</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>グローバルモデレータパーミッションを削除しました</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>モデレータパーミッションを削除しました - </strong> %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>フォーラムパーミッションを削除しました - </strong> %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>パーミッションテストを開始しました</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>パーミッションテストを終了しました</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>AdminCP へのログインに失敗しました</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>AdminCP へのログインに成功しました</strong>',

 	'LOG_ATTACHMENTS_DELETED'	=> '<strong>添付ファイルを削除しました</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>添付ファイルの拡張子を追加 or 変更しました</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>添付ファイルの拡張子を削除しました</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>添付ファイルの拡張子を更新しました</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>拡張子グループを追加しました</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>拡張子グループを編集しました</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>拡張子グループを削除しました</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>孤立ファイルを記事に添付しました</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>孤立ファイルを削除しました</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>アクセス禁止リストからユーザー名を削除しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>アクセス禁止リストから IPアドレス を削除しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>アクセス禁止リストからメールアドレスを削除しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>アクセス禁止リストにユーザー名を追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>アクセス禁止リストに IPアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>アクセス禁止リストにメールアドレスを追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>アクセス禁止リストからユーザー名を削除しました</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>アクセス禁止リストから IPアドレス を削除しました</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>アクセス禁止リストからメールアドレスを削除しました</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>BBCode を追加しました</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode を編集しました</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode を削除しました</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>ボットを追加しました</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>ボットを削除しました</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>ボットを更新しました</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Adminログ を消去しました</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>エラーログを消去しました</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>モデレータログを消去しました</strong>',
	'LOG_CLEAR_USER'		=> '<strong>ユーザーログを消去しました</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>全ユーザーログを消去しました</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>添付ファイルの設定を変更しました</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>ログイン認証の設定を変更しました</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>アバターの設定を変更しました</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Cookieの設定 を変更しました</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>メールの設定を変更しました</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>掲示板の機能を変更しました</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>サーバ負荷の設定を変更しました</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>プライベートメッセージの設定を変更しました</strong>',
	'LOG_CONFIG_POST'			=> '<strong>投稿の設定を変更しました</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>ユーザー登録の設定を変更しました</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>フィードの設定を変更しました</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>検索の設定を変更しました</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>セキュリティの設定を変更しました</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>サーバの設定を変更しました</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>掲示板の設定を変更しました</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>サインの設定を変更しました</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>CAPTCHAの設定 を変更しました</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>トピックを承認しました</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>トピックを上げました</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>次の理由でユーザー “%2$s” の記事 “%1$s” を永久削除しました</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>シャドウトピックを削除しました</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>次の理由でユーザー “%2$s” のトピック “%1$s” を永久削除しました</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>トピックをコピーしました</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>トピックを閉鎖しました</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>記事を凍結しました</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>記事をトピックに統合しました</strong><br />» %s',
	'LOG_MOVE'					=> '<strong>トピックを移動しました</strong><br />» from %1$s to %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>トピックを移動しました</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>通報 [ PM ] の審査を完了しました</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>通報 [ PM ] を削除しました</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>記事を承認しました</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>次の理由でユーザー “%3$s” の記事 “%1$s” の承認を却下しました</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>次の理由でユーザー “%2$s” の記事 “%1$s” を編集しました</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>記事を復元しました</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>通報の審査を完了しました</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>通報を削除しました</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>ユーザーのトピック “%1$s” を復元しました</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>次の理由でユーザー “%2$s” の記事 “%1$s” を暫定削除しました</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>次の理由でユーザー “%2$s” のトピック “%1$s” を暫定削除しました</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>分割した記事を移動しました</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>記事を分割しました</strong><br />» from %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>トピックを承認しました</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>トピックを復元しました</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>次の理由でユーザー “%3$s” のトピック “%1$s” の承認を却下しました</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>トピックカウンタを同期しました</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>トピックタイプを変更しました</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>トピックを閉鎖しました</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>記事の凍結を解除しました</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>拒否リストにユーザー名を追加しました</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>拒否リストからユーザー名を削除しました</strong>',

	'LOG_DB_BACKUP'			=> '<strong>データベースをバックアップしました</strong>',
	'LOG_DB_DELETE'			=> '<strong>データベースのバックアップを削除しました</strong>',
	'LOG_DB_RESTORE'		=> '<strong>データベースを復元しました</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>ダウンロードリストに IPアドレス/ホスト名 を例外として追加しました</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>ダウンロードリストに IPアドレス/ホスト名 を追加しました</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>ダウンロードリストから IPアドレス/ホスト名 を削除しました</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabberエラー</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>メールエラー</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHAエラー</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>フォーラムを作成しました</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>フォーラムパーミッションを</strong> %1$s から<strong>コピーしました</strong><br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>フォーラムを削除しました</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>フォーラムとそのサブフォーラムを削除しました</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>フォーラムを削除しサブフォーラムを</strong> %1$s へ<strong>移動しました</strong><br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>フォーラムを削除し記事を</strong> %1$s へ<strong>移動しました</strong><br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>フォーラムとそのサブフォーラムを削除し記事を</strong> %1$s へ<strong>移動しました</strong><br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>フォーラムを削除し記事を</strong> %1$s へ<strong>移動しサブフォーラムを</strong> %2$s へ<strong>移動しました</strong><br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>フォーラムと記事を削除しました</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>フォーラムと記事とサブフォーラムを削除しました</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>フォーラムと記事を削除しサブフォーラムを</strong> %1$s へ<strong>移動しました</strong><br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>フォーラム設定を編集しました</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>フォーラム</strong> %1$s <strong>を</strong> %2$s <strong>の下に移動しました</strong>',
	'LOG_FORUM_MOVE_UP'						=> '<strong>フォーラム</strong> %1$s <strong>を</strong> %2$s <strong>の上に移動しました</strong>',
	'LOG_FORUM_SYNC'						=> '<strong>フォーラムを同期しました</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>一般エラーが発生しました</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>グループを作成しました</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>グループ “%1$s” をデフォルトグループにしました</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>グループを削除しました</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>グループ</strong> %1$s <strong>のリーダーが解任されました</strong><br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>グループ</strong> %1$s <strong>でリーダーが任命されました</strong><br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>グループ</strong> %1$s <strong>からメンバーが除名されました</strong><br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>グループ設定を更新しました</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>グループ</strong> %1$s <strong>で新しいリーダーを任命しました</strong><br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>グループ</strong> %1$s <strong>にメンバーを追加しました</strong><br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>ユーザーがグループへの参加を承認されました</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>ユーザーがグループ “%1$s” へ参加を申請しました</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>画像作成中にエラーが発生しました</strong><br />» Error in %1$s on line %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>アカウントを有効化しました</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>無効アカウントを削除しました</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>無効アカウントにアカウント有効化メールを送信しました</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>%1$s から phpBB %2$s へデータコンバートしました</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s をインストールしました</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>IPアドレス/ブラウザ/X_FORWARDED_FOR によるセッションチェックが一致しませんでした</strong><br />»ユーザーの IPアドレス “<em>%1$s</em>” を セッションIPアドレス “<em>%2$s</em>” でチェックし、ユーザーのブラウザ “<em>%3$s</em>” をセッションブラウザ “<em>%4$s</em>” でチェックし、ユーザーの X_FORWARDED_FOR “<em>%5$s</em>” を セッションX_FORWARDED_FOR “<em>%6$s</em>” でチェックしました',

	'LOG_JAB_CHANGED'			=> '<strong>Jabberアカウント を変更しました</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabberパスワード を変更しました</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabberアカウント を登録しました</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabberの設定 を変更しました</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>言語パックを削除しました</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>言語パックをインストールしました</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>言語パックの設定を更新しました</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>言語ファイルを置き換えました</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>言語パックを保管フォルダに格納しました</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>一括メールを送信しました</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>トピック “%1$s” の投稿者を変更しました</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>モジュールを無効化しました</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>モジュールを有効化しました</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>モジュールを下に移動しました</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>モジュールを上に移動しました</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>モジュールを削除しました</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>モジュールを追加しました</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>モジュールを編集しました</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Adminパーミッションロール を追加しました</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Adminパーミッションロール を変更しました</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Adminパーミッションロール を削除しました</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>フォーラムパーミッションロールを追加しました</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>フォーラムパーミッションロールを変更しました</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>フォーラムパーミッションロールを削除しました</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>モデレータパーミッションロールを追加しました</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>モデレータパーミッションロールを変更しました</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>モデレータパーミッションロールを削除しました</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>ユーザーパーミッションロールを追加しました</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>ユーザーパーミッションロールを変更しました</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>ユーザーパーミッションロールを削除しました</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>ファイル整理の為に %1$s を開けようとしましたができませんでした。アクセス権をお調べください</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>プロフィールフィールドを有効化しました</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>プロフィールフィールドを追加しました</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>プロフィールフィールドを無効化しました</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>プロフィールフィールドを変更しました</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>プロフィールフィールドを削除しました</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>フォーラムを剪定しました</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>フォーラムを定期剪定しました</strong><br />» %s',
	'LOG_PRUNE_SHADOW'			=> '<strong>定期剪定されたシャドウトピック</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>アカウントを無効化しました（剪定）</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>アカウントを剪定し、記事も削除しました</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>アカウントを剪定し、記事は保持しました</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>キャッシュを消去しました</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>セッションを消去しました</strong>',

	'LOG_RANK_ADDED'		=> '<strong>ランクを追加しました</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>ランクを削除しました</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>ランクを更新しました</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>通報・却下の理由を追加しました</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>通報・却下の理由を削除しました</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>通報・却下の理由を更新しました</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>不正なリファラを検出しました</strong><br />»検出されたリファラは “<em>%1$s</em>” です。リファラが一致しなかったため、受信リクエストを破棄し、セッションを削除しました。',
	'LOG_RESET_DATE'			=> '<strong>掲示板開始日時をリセットしました</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>最大同時ユーザーオンライン数をリセットしました</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>添付ファイルの統計データを同期しました</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>記事数を同期しました</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>トピックの投稿マークを同期しました</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>統計データ（記事数、トピック数、ユーザー数）を同期しました</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>検索インデクスを作成しました</strong><br />»for %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>検索インデクスを削除しました</strong><br />»for %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinxエラー</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>スタイルを追加しました</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>スタイルを削除しました</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>スタイルを編集しました</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>スタイルをエクスポートしました</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>テンプレートをデータベースに追加しました</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>テンプレートを該当のディレクトリにアップロードしてください</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>テンプレート <em>%1$s</em> のキャッシュファイルを削除しました</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>テンプレートを削除しました</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>テンプレート <em>%1$s</em> を編集しました</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>テンプレート設定を編集しました</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>テンプレートをエクスポートしました</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>テンプレートをリフレッシュしました</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>新しいテーマをデータベースに追加しました</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>新しいテーマを該当のディレクトリにアップロードしてください</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>テーマを削除しました</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>テーマ設定を編集しました</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>テーマ <em>%1$s</em> を編集しました</strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>テーマ <em>%1$s</em> を編集しました</strong><br />» ハックファイル <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>テーマをエクスポートしました</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>テーマをリフレッシュしました</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>データベースをバージョン %1$s からバージョン %2$s へ更新しました</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB をバージョン %1$s からバージョン %2$s へ更新しました</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>アカウントを有効化しました</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>アクセス禁止リストにユーザー名を追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>アクセス禁止リストに IPアドレス を追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>アクセス禁止リストにメールアドレスを追加しました</strong> -理由- “<em>%1$s</em>” <br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>ユーザーを削除しました</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>添付ファイルを削除しました</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>アバターを削除しました</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>送信ボックスを空にしました</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>全記事を削除しました</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>サインを削除しました</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>アカウントを無効化しました</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>記事を移動しました</strong><br />» posts by “%1$s” to forum “%2$s” ',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>パスワードを変更しました</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>アカウントの再有効化を要求しました</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>ユーザーを一見さんから登録ユーザーに変更しました</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>ユーザー “%1$s” がメールアドレスを変更しました</strong><br />» from “%2$s” to “%3$s” ',
	'LOG_USER_UPDATE_NAME'	=> '<strong>ユーザー名を変更しました</strong><br />» from “%1$s” to “%2$s” ',
	'LOG_USER_USER_UPDATE'	=> '<strong>ユーザー設定を更新しました</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>アカウントを有効化しました</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>アバターを削除しました</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>サインを削除しました</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>メモを追加しました</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>メモ:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>アカウントを無効化しました</strong>',
	'LOG_USER_LOCK'				=> '<strong>自分のトピックを閉鎖しました</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>フォーラムの全記事を移動しました</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>アカウントの再有効化を要求しました</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>自分のトピックを開放しました</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>警告しました</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>警告しました</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>デフォルトグループを変更しました</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>グループからユーザーを除名しました</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>グループに参加しました</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>グループに参加しました（承認を必要としています）</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>グループから脱退しました</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>ユーザーの警告を削除しました</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>ユーザーの警告を削除しました</strong><br />» %1$s',
		2 => '<strong>ユーザー %2$d 名の警告を削除しました</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>ユーザーの警告をすべて削除しました</strong><br />» %s',
	
	'LOG_WORD_ADD'			=> '<strong>言語フィルタを追加しました</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>言語フィルタを削除しました</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>言語フィルタを編集しました</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>拡張機能を有効化しました</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>拡張機能を無効化しました</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>拡張機能のデータを削除しました</strong><br />» %s',
));
