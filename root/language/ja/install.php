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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'インストールパネル',
	'SELECT_LANG'	=> '言語の選択',

	'STAGE_INSTALL'	=> 'phpBB のインストール',

	// Introduction page
	'INTRODUCTION_TITLE'	=> '導入',
	'INTRODUCTION_BODY'		=> 'phpBB3 へようこそ！<br /><br />phpBB® は世界で最も広く使用されているオープンソースインターネット掲示板ソフトウェアです。phpBB3 は 2000 年から現在に至るまでのパッケージラインナップの中で最も新しいパッケージです。かつての phpBB2 と同じく、phpBB3 は機能が豊富であり、ユーザーフレンドリーであり、phpBB Team によって万全にサポートされています。phpBB3 では phpBB2 の重要かつ基本的な機能に十分な改良が施され、さらに phpBB2 では備えていなかった全く新しい機能が追加されています。この phpBB3 ならきっとあなたの期待を超えられると私達は信じています。 <br /><br />このインストールシステムは phpBB3 のインストール、最新バージョンへのアップデート、phpBB3 とは異なる掲示板システム（phpBB2 など）のデータコンバートをガイドします。より詳しくは <a href="../docs/INSTALL.html">the installation guide</a> をご覧ください。<br /><br />phpBB3 のライセンスまたはサポートに関してはサイドメニューの項目からご覧いただけます。インストール、アップデート、データコンバートを始めるには上のタブからオプションを選択してください。',

	// Support page
	'SUPPORT_TITLE'		=> 'サポート',
	'SUPPORT_BODY'		=> 'phpBB3 の最新安定バージョンに関するサポートは無料で提供されています。サポートの内容は:</p><ul><li>インストール</li><li>各種設定</li><li>技術的な質問</li><li>ソフトウェアのバグに関する問題</li><li>リリース候補（RC）バージョンから最新安定バージョンへのアップデート</li><li>phpBB2.0.x から phpBB3 へのデータコンバート</li><li>他の掲示板ソフトウェアから phpBB3 へのデータコンバート（<a href="https://www.phpbb.com/community/viewforum.php?f=486">Convertors Forum</a> をご覧ください）</li></ul><p>もし phpBB3 のベータバージョンをまだ利用している場合、phpBB3 の最新安定バージョンを新しくインストールすることを強く勧めます。</p><h2>拡張機能 / スタイル</h2><p>拡張機能については <a href="https://www.phpbb.com/community/viewforum.php?f=451">Extensions Forum</a> の関連するトピックに質問・投稿してください。<br />スタイル、テンプレート、イメージセットについては、<a href="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a> の関連するトピックに質問・投稿してください。<br /><br />もし特定のバージョンについて質問したい場合、そのバージョン専用のトピックがありますのでそちらにご投稿ください。</p><h2>サポート</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">The phpBB Welcome Package</a><br /><a href="https://www.phpbb.com/support/">Support Section</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Quick Start Guide</a><br /><br />最新ニュースと最新リリースのメールを購読するには <a href="https://www.phpbb.com/support/">subscribe to our mailing list</a> にてメールアドレスを入力し送信してください。<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'			=> 'phpBB のインストールへようこそ',
	'INSTALL_INTRO_BODY'	=> 'ここでは phpBB3 のインストールを行うことができます。</p><p>インストールするにはデータベースへ接続するための情報が必要です。もしデータベースへ接続するための情報が分からない場合、サーバ管理者にお問い合わせください。データベースに接続できないとインストールを先へ進めることはできません。必要な情報は次の通りです:</p>

	<ul>
		<li>データベースの種類 - サーバがサポートしているデータベースソフトウェアの種類です</li>
		<li>データベースサーバのホスト名 または DSN - データベースサーバのアドレスです</li>
		<li>データベースサーバのポート番号 - データベースサーバが使用しているポート番号です （多くの場合、入力する必要はありません）</li>
		<li>データベースの名前 - サーバ上であなたが使用できるデータベースの名前です</li>
		<li>データベースのユーザー名とパスワード - データベースにアクセスするためのログイン情報です</li>
	</ul>

	<p><strong>注意:</strong> もしデータベースの種類として SQLite を選択した場合、“データベースサーバのホスト名 または DSN” としてデータベースファイルへのフルパスをご入力ください。さらにユーザー名とパスワードは空白のままにしてください。セキュリティ上の理由から、インターネットからアクセス可能な領域にデータベースファイルを格納すべきではありません。</p>

	<p>phpBB3 がサポートするデータベース:</p>
	<ul>
		<li>MySQL 3.23 以上 (MySQLi も可）</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 以上 （直接または ODBC 経由）</li>
		<li>MS SQL Server 2005 以上 (native)</li>
		<li>Oracle</li>
	</ul>

	<p>データベースの種類を選択する際、これらの中でサーバがサポートしているデータベースのみ表示されます',

	'ACP_LINK'	=> 'Take me to <a href="%1$s">the ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB は既にインストールされています。',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB はインストールされていません。'
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'ファイルが存在しません',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'phpBB をインストールするには、%1$s ファイルが存在する必要があります。',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'フォーラムのユーザーエクスペリエンスをよくするため、%1$s ファイルが存在することを推奨します。',
	'FILE_NOT_WRITABLE'						=> 'ファイルが書き込めません',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'phpBB をインストールするには、%1$s ファイルが書き込み可能である必要があります。',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'フォーラムのユーザーエクスペリエンスをよくするため、%1$s ファイルが書き込み可能であることを推奨します。',

	'DIRECTORY_NOT_EXISTS'						=> 'ディレクトリが存在しません',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'phpBB をインストールするには、%1$s ディレクトリが存在する必要があります。',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'フォーラムのユーザーエクスペリエンスをよくするため、%1$s ディレクトリが存在することを推奨します。',
	'DIRECTORY_NOT_WRITABLE'					=> 'ディレクトリが書き込めません',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'phpBB をインストールするには、%1$s ディレクトリが書き込み可能である必要があります。',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'フォーラムのユーザーエクスペリエンスをよくするため、%1$s ディレクトリが書き込み可能であることを推奨します。',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP バージョン',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB は PHP バージョン 5.4.0 以上が必要です。',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP関数 getimagesize() が必要',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'phpBB を正常に機能させるには、関数 getimagesize が利用可能である必要があります。',
	'PCRE_UTF_SUPPORT'					=> 'PCRE関数の UTF-8 文字列のサポート',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'もし PCRE（Perl互換正規表現）関数 が UTF-8 によるパターン文字列を取り扱えない場合、phpBB は動作しません。PHP の PCRE拡張モジュール のバージョンが古い場合、この症状が起こります。',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON サポート',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'phpBB を正常に機能させるには PHP拡張モジュール JSON が利用可能である必要があります。',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM サポート',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'phpBB を正常に機能させるには PHP拡張モジュール XML/DOM が利用可能である必要があります。',
	'PHP_SUPPORTED_DB'					=> 'データベースのサポート',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'ここで挙げられているデータベースの内、少なくとも１つは PHP拡張モジュール として利用できる必要があります。もし PHP のデータベースモジュールを１つも利用できない場合、サーバ管理者にデータベースの使用をご相談ください。',

	'RETEST_REQUIREMENTS'	=> '必須条件を再テストする',

	'STAGE_REQUIREMENTS'	=> '必須条件をチェックする'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'このブロックのフィールドは全て入力する必要があります',

	'TIMEOUT_DETECTED_TITLE'	=> 'インストーラーがタイムアウトを検出しました',
	'TIMEOUT_DETECTED_MESSAGE'	=> ' インストーラーがタイムアウトを検出したため、データ破損かもしれないページを更新しようとした可能性があります。タイムアウトを増やすか、CLI を使用することをおすすめします。',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'インストールの情報収集',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> '管理人設定',

	// Form labels
	'ADMIN_CONFIG'				=> '管理人設定',
	'ADMIN_PASSWORD'			=> '管理人のパスワード',
	'ADMIN_PASSWORD_CONFIRM'	=> '管理人のパスワード（確認）',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'パスワードは 6 字以上 30 字以下にする必要があります',
	'ADMIN_USERNAME'			=> '管理人のユーザー名',
	'ADMIN_USERNAME_EXPLAIN'	=> 'ユーザー名は 3 字以上 20 字以下にする必要があります',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> '入力した メールアドレス は無効です。',
	'INST_ERR_PASSWORD_MISMATCH'	=> '入力した パスワード が一致しません。',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '入力した パスワード が長すぎます。30 字以下にしてください。',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '入力した パスワード が短すぎます。6 字以上にしてください。',
	'INST_ERR_USER_TOO_LONG'		=> '入力した ユーザー名 が長すぎます。20 字以下にしてください。',
	'INST_ERR_USER_TOO_SHORT'		=> '入力した ユーザー名 が短すぎます。3 字以上にしてください。',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> '掲示板の設定',
	'DEFAULT_LANGUAGE'	=> 'デフォルト言語',
	'BOARD_NAME'		=> '掲示板のタイトル',
	'BOARD_DESCRIPTION'	=> '掲示板の簡潔な説明',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'データベース設定',

	// Form labels
	'DB_CONFIG'				=> 'データベースの環境設定',
	'DBMS'					=> 'データベースの種類',
	'DB_HOST'				=> 'データベースサーバのホスト名 または DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN とはデータソース名のことです。ODBC経由 でデータベース接続を行っている場合は DSN を入力する必要があります。 PostgreSQL の場合、UNIXドメインソケット経由 でローカルホストに接続するには localhost を、 TCP経由 で接続するには 127.0.0.1 をご入力ください。SQLite の場合、データベースファイルへのフルパスをご入力ください。',
	'DB_PORT'				=> 'データベースサーバのポート番号',
	'DB_PORT_EXPLAIN'		=> '非標準ポートを使用している場合のみご入力ください',
	'DB_PASSWORD'			=> 'データベースのパスワード',
	'DB_NAME'				=> 'データベースの名前',
	'DB_USERNAME'			=> 'データベースのユーザー名',
	'DATABASE_VERSION'		=> 'データベースのバージョン',  
	'TABLE_PREFIX'			=> 'データベーステーブルの接頭辞',
	'TABLE_PREFIX_EXPLAIN'	=> '接頭辞はラテン系文字で始まり、以降はラテン系文字・数字・アンダースコアのみにする必要があります',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> '選択したデータベースを扱うために必要な PHP拡張モジュール のロードに失敗しました',
	'INST_ERR_DB_INVALID_PREFIX'	=> '入力したテーブル接頭辞が不正です。ラテン系文字で始まり、以降はラテン系文字・数字・アンダースコアのみにする必要があります。',
	'INST_ERR_PREFIX_TOO_LONG'		=> '入力した テーブル接頭辞 が長すぎます。%d 字以下にしてください。',
	'INST_ERR_DB_NO_NAME'			=> 'データベースの名前が入力されていません',
	'INST_ERR_DB_FORUM_PATH'		=> 'データベースファイルへのパスが掲示板ディレクトリツリー内に指定されています。セキュリティ上の理由から、データベースファイルをインターネットからアクセスできない場所に格納すべきです。',
	'INST_ERR_DB_CONNECT'			=> 'データベースに接続できませんでした。下のエラーメッセージをご確認ください。',
	'INST_ERR_DB_NO_ERROR'			=> 'このエラーに対するメッセージは用意されていません',
	'INST_ERR_PREFIX'				=> '入力した テーブル接頭辞 を持つテーブルが既にデータベース内に存在します。接頭辞を変更してください。',
	'INST_ERR_DB_NO_MYSQLI'			=> 'サーバにインストールされている MySQL のバージョンでは “MySQL with MySQLi Extension” をご利用になれません。かわりにオプション “MySQL” を選択してください。',
	'INST_ERR_DB_NO_SQLITE3'		=> 'SQLite のバージョンが古すぎます。少なくとも 3.6.15 以上にアップグレードしてください。.',
	'INST_ERR_DB_NO_ORACLE'			=> 'サーバにインストールされている Oracle のバージョンでは <var>NLS_CHARACTERSET</var> パラメータを <var>UTF8</var> に設定しておく必要があります。パラメータを変更するかバージョンを 9.2+ にアップグレードしてください。',
	'INST_ERR_DB_NO_POSTGRES'		=> '選択したデータベースの文字エンコーディングが <var>UNICODE</var> または <var>UTF8</var> ではありません。文字エンコーディングを <var>UNICODE</var> または <var>UTF8</var> にしてもう一度データベースを作成してください。',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'スキーマファイルが書き込みできません',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail 設定',

	// Package info
	'PACKAGE_VERSION'					=> 'インストールされているパッケージのバージョン',
	'UPDATE_INCOMPLETE'				=> 'phpBB のインストールは正常にアップデートできませんでした',
	'UPDATE_INCOMPLETE_MORE'		=> 'このエラーを修復するには、以下の情報をご覧ください。',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>未完了のアップデート</h1>

		<p>前回の phpBB のアップデートが完了していないことが判明しました。<a href="%1$s" title="%1$s">データベースアップデータ</a>をクリックし、<em>データベースのみを更新</em>が選択されていることを確認して<strong>Submit</strong>をクリックしてください。データベースの更新が成功してから、"install" ディレクトリを削除するのを忘れないようにしてください。</p>',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'サーバー設定',
	'SCRIPT_PATH'				=> 'スクリプトパス',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBBルートディレクトリ へのパスです。ドメインから見た相対パスで指定する必要があります。例: <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Thanks, The Management',
	'CONFIG_SITE_DESC'				=> 'A short text to describe your forum',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'この記事は phpBB3 のインストールがうまくいってるかどうかを確認するために投稿されたテスト記事です。この記事が表示されるということは phpBB3 がきちんと動作している証拠です。この記事は削除してかまいません。このカテゴリとフォーラムには特別グループ (Admin、ボット、グローバルモデレータ、ゲスト、登録ユーザー、COPPA-登録ユーザー) に対して最初から適切なパーミッションが与えられています。このカテゴリとフォーラムを削除して別の新しいカテゴリとフォーラムを作成する場合、特別グループに適切なフォーラムパーミッションを割り当てることを忘れないでください。フォーラムパーミッションの割り当てに慣れていない phpBB3 初心者の方は次のやり方がお勧めです。まず、このカテゴリとフォーラムを削除せずに名前だけを変更します。次に、新しく作成したカテゴリとフォーラムに対してはこのカテゴリとフォーラムのパーミッションをそのままコピーします。パーミッションの割り当てに慣れるに従って、自分の好きなようにフォーラムパーミッションをカスタマイズしていけるようになるでしょう。',

	'FORUMS_FIRST_CATEGORY'			=> 'はじめてのカテゴリ',
	'FORUMS_TEST_FORUM_DESC'		=> 'これはテストフォーラムです。',
	'FORUMS_TEST_FORUM_TITLE'		=> 'テストフォーラム その壱',

	'RANKS_SITE_ADMIN_TITLE'		=> '管理人',
	'REPORT_WAREZ'					=> 'この投稿記事には海賊版ソフト販売へのリンクが含まれています',
	'REPORT_SPAM'					=> 'この投稿記事には販売広告へのリンクが含まれています',
	'REPORT_OFF_TOPIC'				=> 'この投稿記事はトピックの話題から外れています',
	'REPORT_OTHER'					=> 'その他。詳細に記述します。',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'phpBB3 へようこそ',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> '概要',
	'MENU_INTRO'		=> '導入',
	'MENU_LICENSE'		=> 'ライセンス',
	'MENU_SUPPORT'		=> 'サポート',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> '構成ファイルの作成',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> '構成設定を追加',
	'TASK_ADD_DEFAULT_DATA'				=> 'データベースにデフォルト設定を追加',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'データベーススキーマファイルの作成',
	'TASK_SETUP_DATABASE'				=> 'データベースのセットアップ',
	'TASK_CREATE_TABLES'				=> 'テーブルの作成',

	// Install data
	'TASK_ADD_BOTS'			=> 'ボットの登録',
	'TASK_ADD_LANGUAGES'	=> '利用可能な言語のインストール',
	'TASK_ADD_MODULES'		=> 'モジュールのインストール',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> '拡張機能のインストール',
	'TASK_NOTIFY_USER'			=> '通知メールの送信',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'インストーラーは正常に終了しました',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'モジュールが見つかりません',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'サービス %s が未定義のため、モジュールが見つかりませんでした。',

	'TASK_NOT_FOUND'				=> 'タスクが見つかりません',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'サービス %s が未定義のため、タスクが見つかりませんでした。',

	'SKIP_MODULE'	=> 'モジュール“%s”をスキップ',
	'SKIP_TASK'		=> 'タスク“%s”をスキップ',

	'TASK_SERVICE_INSTALLER_MISSING'	=> '全てのインストーラータスクサービスは“installer”で始まっているはずです',
	'TASK_CLASS_NOT_FOUND'				=> 'インストーラータスクサービス定義が無効です。サービス名“%1$s”を指定した場合、予想されるクラス名前空間は“%2$s”です。詳細な情報は、taks_interfaceのドキュメントを参照してください。',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'インストーラーの構成ファイルは書き込み可能ではありません。',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'phpBB のインストール',
	'CLI_UPDATE_BOARD'				=> 'phpBB のアップデート',
	'CLI_INSTALL_SHOW_CONFIG'		=> '使用する設定を表示する',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> '構成ファイルを検証する',
	'CLI_CONFIG_FILE'				=> '使用する構成ファイル',
	'MISSING_FILE'					=> 'ファイル %1$s にアクセスできません',
	'MISSING_DATA'					=> '構成ファイルにデータがないか、無効な設定が含まれている可能性があります。',
	'INVALID_YAML_FILE'				=> 'YAML ファイル %1$s をパースできませんでした',
	'CONFIGURATION_VALID'			=> '構成ファイルは有効です',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'phpBB3 のアップデート',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'ここでは phpBB のアップデートを行うことができます。<br />アップデートプロセスの中には phpBB3 の各ファイルについてアップデートすべきファイルかどうかをチェックするものもあります。アップデートを実行する前にこれらアップデートされるファイルの差分コードを確認できます。<br /><br />ファイルアップデートは２つの方法から選択できます。</p><h2>手動アップデート</h2><p>このアップデート方法では、MOD などでハックされているファイルについて、ハック部分を損なうことなくアップデート差分を追加したファイルを作成し、そのパッケージをダウンロードすることが可能です。このパッケージをダウンロード後、パッケージ内ファイルを phpBB3 ディレクトリ下の正しい位置にアップロードしてください。アップロードが完了したら “ファイル再チェック” を実行して正しい位置にファイルがアップロードされたかどうかを確認してください。</p><h2>FTP による自動アップデート</h2><p>このアップデート方法ではアップデートは自動で行われます。この方法を使用するには FTPサーバ へのログイン情報が必要です。自動アップデートが完了するとファイル再チェックが自動的に始まり、ファイルがきちんとアップデートされたかどうかを確認できます。<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>リリースのお知らせ</h1>

		<p>アップデートを行う前に最新バージョンのリリース告知をご覧ください。そちらにダウンロードリンクとアップデートによる変更ログが含まれています。</p>

		<br />

		<h1>自動アップデートパッケージによる更新方法</h1>

		<p>以下の手順で自動アップデートすることが推奨されています。INSTALL.html で紹介されているアップデート方法でアップデートすることももちろん可能です。自動アップデートのステップは:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li><a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">phpBB.com downloads page</a> をクリックして "Automatic Update Package" をダウンロードする<br /><br /></li>
			<li>ダウンロードしたパッケージを解凍する<br /><br /></li>
			<li>解凍して出てきたフォルダ "install" と "vendor" を phpBB3ルートディレクトリ（config.php が存在するディレクトリ） にアップロードする<br /><br /></li>
		</ul>

		<p>アップロードが完了すると一般ユーザーは全てオフライン状態に移行します<br /><br />
		<strong><a href="%1$s" title="%1$s">こちらをクリック</a>してアップデートを開始してください</strong><br />
		<br />
		アップデートを開始したら各プロセスの指示に従ってください。アップデートが完了するとその旨のメッセージが表示されます。
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> '実行するアップデートの種類',

	'UPDATE_TYPE_ALL'		=> 'ファイルシステムとデータベースを更新',
	'UPDATE_TYPE_DB_ONLY'	=> 'データベースのみを更新',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'ファイルのアップデート',

	'UPDATE_FILE_METHOD'			=> 'ファイルのアップデート方法',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'アーカイブで変更ファイルをダウンロード',
	'UPDATE_FILE_METHOD_FTP'		=> 'FTP 経由でファイルをアップデート (自動)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> '直接ファイルアクセスでアップデート (自動)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'ダウンロードするアーカイブ形式を選択してください',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP 設定',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> '有効なアップデートディレクトリが見つかりませんでした。関連ファイルがアップロードできているか確認してください。',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'phpBB のバージョンは最新バージョンです。当アップデートツールを実行する必要はありません。整合性チェックを行いたい場合は、アップデートファイルを正しくアップロードしているか確認してください。',
	'OLD_UPDATE_FILES'				=> 'アップデートファイルが最新ではありません。このアップデートファイルは phpBB %1$s から phpBB %2$s へアップデートを行います。一方、現在の phpBB の最新バージョンは %3$s です。',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'このアップデートファイルはご利用中の phpBB のバージョンと互換性がありません。お使いの phpBB のバージョンは %1$s であり、このアップデートファイルは phpBB %2$s から %3$s へアップデートするためのファイルです。',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'アップデートファイル',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'アップデートするファイルをチェック',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'アップデートファイル',

	'DOWNLOAD'							=> 'ダウンロード',
	'DOWNLOAD_CONFLICTS'				=> '競合ファイルのダウンロード',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> '競合ブロックを見つけるにはファイルをエディタで開き、 &lt;&lt;&lt; を検索してください',
	'DOWNLOAD_UPDATE_METHOD'			=> 'アップデートパッケージのダウンロード',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'ここではアップデートファイルをダウンロードできます。圧縮形式を選択してアップデートファイルをダウンロードしてください。ダウンロード後、解凍して phpBBルートディレクトリ へアップロードしてください。アップデートファイルを全てアップロードし終わったら “ファイル再チェック” をクリックしてアップデートがきちんと完了したかをご確認ください。',

	'FILE_ALREADY_UP_TO_DATE'		=> 'このファイルは既にアップデートされています',
	'FILE_DIFF_NOT_ALLOWED'			=> 'このファイルは差分表示を許可されていません',
	'FILE_USED'						=> '使用情報',			// Single file
	'FILES_CONFLICT'				=> 'ハックファイル [ 競合 ]',
	'FILES_CONFLICT_EXPLAIN'		=> '以下のファイルはハックファイルです。これらのファイルはハック部分がアップデート部分と競合しています。アップデートするには競合部分を調べて手動で競合部分を取り除くか、表示されているオプションの中からアップデート方法を選択してください。手動で競合部分を取り除いた場合、“ファイル再チェック” をクリックして競合部分が本当に取り除かれているか確認してください。アップデート方法のオプションは各ファイル毎に選ぶことができます。ハック部分とアップデート部分をマージ（共存・統合）する場合、１番目のオプションでは競合部分にアップデートコードが使用されハックコードは破棄されます。２番目のオプションでは競合部分にハックコードが使用されアップデートコードは破棄されます。',
	'FILES_DELETED'					=> '不要ファイル',
	'FILES_DELETED_EXPLAIN'			=> '以下のファイルは最新バージョンでは不要です。これらのファイルは削除する必要があります。',
	'FILES_MODIFIED'				=> 'ハックファイル',
	'FILES_MODIFIED_EXPLAIN'		=> '以下のファイルはハックファイルです。ハック部分とアップデート部分のマージ（共存・統合）が可能です。',
	'FILES_NEW'						=> '新しいファイル',
	'FILES_NEW_EXPLAIN'				=> '以下のファイルは当アップデートで新しく追加されたファイルです。これらのファイルはご利用中の phpBB3 に新しく追加されます。',
	'FILES_NEW_CONFLICT'			=> '新しいファイル [ 競合 ]',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '以下のファイルは当アップデートで新しく追加されたファイルです。しかしこの追加ファイルと同じ位置、同じファイル名のファイルが phpBB3 内に既に存在しています。アップデートファイルをアップロードするとこのファイルは上書きされます。',
	'FILES_NOT_MODIFIED'			=> '純正ファイル',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '以下のファイルは純正ファイルです。ハックは一切されていません。',
	'FILES_UP_TO_DATE'				=> 'アップデート済みファイル',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下のファイルは既にアップデートが完了しているため、アップロードする必要はありません。',
	'FILES_VERSION'					=> 'ファイルバージョン',  
	'TOGGLE_DISPLAY'				=> 'ファイルリストの 表示/非表示',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'ファイルのアップデート',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'ファイルを再チェックする',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'データベースのアップデート',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'データベースアップデートが成功しました。',

	'TASK_UPDATE_EXTENSIONS'	=> '拡張機能のアップデート',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'コンバータが存在していません',
	'DEV_NO_TEST_FILE'			=> 'コンバータプログラム内で変数 $test_file に値が設定されていません。コンバータ利用者に対してこのエラーは表示されないはずですが、もし表示されている場合はこのメッセージをコンバータ開発者に報告していただきますようお願いします。コンバータ開発者は、コンバータ利用者の指定パスが正確であるかどうかテストするために旧掲示板システム内に存在するファイル名を変数 $test_file に文字列として与えなければいけません。',
	'COULD_NOT_FIND_PATH'		=> '“旧掲示板システムへのパス” で指定されたディレクトリが見つかりませんでした。設定を見直してもう一度実行してください。<br />» 指定された “旧掲示板システムへのパス” は %s です。',
	'CONFIG_PHPBB_EMPTY'		=> 'phpBB3 のコンフィグ変数 “%s” が空です',

	'MAKE_FOLDER_WRITABLE'		=> 'このフォルダの 存在 及び アクセス権の書き込み可 を確認した後、もう一度お試しください:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'これらフォルダの 存在 及び アクセス権の書き込み可 を確認した後、もう一度お試しください:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> '再テスト',

	'NO_TABLES_FOUND'			=> 'テーブルが１つも見つかりません',
	'TABLES_MISSING'			=> 'テーブルが見つかりません<br />» <strong>%s</strong>',
	'CHECK_TABLE_PREFIX'		=> 'テーブル接頭辞を確認後、もう一度お試しください',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'データコンバート続行',
	'CONTINUE_CONVERT_BODY'		=> '中断されたデータコンバートを検出しました。データコンバートを最初からやり直すか、以前に開始されたデータコンバートを再開するかを選択してください。',
	'CONVERT_NEW_CONVERSION'	=> '新しくデータコンバートを開始する',
	'CONTINUE_OLD_CONVERSION'	=> '中断されたデータコンバートを再開する',

	// Start conversion
	'SUB_INTRO'					=> 'はじめに',
	'CONVERT_INTRO'				=> 'phpBBコンバータフレームワーク へようこそ',
	'CONVERT_INTRO_BODY'		=> 'ここでは他の掲示板システムのデータを phpBB3 へコンバートできます。使用していた掲示板ソフトウェア用のコンバータがもしリストにない場合、お望みのコンバータが存在しているかどうかを phpBB公式サイト を訪れてチェックしてみてください。もしかするとお望みのコンバータがダウンロード可能になっているかもしれません。',
	'AVAILABLE_CONVERTORS'		=> '利用可能なコンバータ',
	'NO_CONVERTORS'				=> '利用可能なコンバータはありません',
	'CONVERT_OPTIONS'			=> 'オプション',
	'SOFTWARE'					=> '掲示板ソフトウェア',
	'VERSION'					=> 'バージョン',
	'CONVERT'					=> 'データコンバート',

	// Settings
	'STAGE_SETTINGS'			=> '設定',
	'TABLE_PREFIX_SAME'			=> 'テーブル接頭辞は旧掲示板システムが使用しているテーブルの接頭辞である必要があります。<br />» 指定されたテーブル接頭辞 %s',
	'DEFAULT_PREFIX_IS'			=> '指定のデータベース内に、指定された接頭辞をもつテーブルが見つかりませんでした。旧掲示板システムのデータベース情報が正確に入力されているかどうかをご確認ください。旧掲示板システム %1$s におけるデフォルト接頭辞は <strong>%2$s</strong> です。',
	'SPECIFY_OPTIONS'			=> 'コンバートオプションの指定',
	'FORUM_PATH'				=> '旧掲示板へのパス',
	'FORUM_PATH_EXPLAIN'		=> '<strong>phpBB3ルートディレクトリ</strong> から見た旧掲示板システムへの<strong>相対</strong>パスです',
	'REFRESH_PAGE'				=> '各ステップをページ毎にリフレッシュする',
	'REFRESH_PAGE_EXPLAIN'		=> '“はい” にした場合、ページを進める度にコンバータは各コンバートステップの処理を完了します。きちんとデータコンバートが最後まで完了するかどうか判断できない場合、前もってエラーを発見しておくために最初は “いいえ” にすることを勧めます。',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'データコンバート進行中',

	'AUTHOR_NOTES'				=> 'コンバータ開発者からの注意<br />» %s',
	'STARTING_CONVERT'			=> 'データコンバートの開始',
	'CONFIG_CONVERT'			=> 'コンフィグファイルのデータコンバート',
	'DONE'						=> '完了',
	'PREPROCESS_STEP'			=> 'コンバートプリプロセス 関数/クエリ の遂行',
	'FILLING_TABLE'				=> 'テーブル <strong>%s</strong> へデータ挿入',
	'FILLING_TABLES'			=> 'テーブルへデータ挿入',
	'DB_ERR_INSERT'				=> 'クエリ <code>INSERT</code> の実行中にエラーが発生しました',
	'DB_ERR_LAST'				=> '<var>query_last</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST'		=> '<var>query_first</var> の実行中にエラーが発生しました',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '<var>query_first</var> の実行中にエラーが発生しました, %s (“%s”)',
	'DB_ERR_SELECT'				=> 'クエリ <code>SELECT</code> の実行中にエラーが発生しました',
	'STEP_PERCENT_COMPLETED'	=> 'ステップ <strong>%d</strong> ／ <strong>%d</strong>',
	'FINAL_STEP'				=> '最終ステップの処理',
	'SYNC_FORUMS'				=> 'フォーラムの同期',
	'SYNC_POST_COUNT'			=> 'post_counts の同期',
	'SYNC_POST_COUNT_ID'		=> '<var>エントリー</var> %1$s から %2$s までの post_counts を同期中',
	'SYNC_TOPICS'				=> 'トピックの同期',
	'SYNC_TOPIC_ID'				=> '<var>topic_id</var> %1$s から %2$s までのトピックを同期中',
	'PROCESS_LAST'					=> 'プロセスの実行',
	'UPDATE_TOPICS_POSTED'		=> 'トピック情報の生成',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'トピック情報の生成中にエラーが発生しました。データコンバート完了後に AdminCP でこのステップをリトライできます。',
	'CONTINUE_LAST'				=> '次のステップへ',
	'CLEAN_VERIFY'				=> '最終段階におけるデータ構築の確認とクリーニング',
	'NOT_UNDERSTAND'			=> 'Could not understand %s #%d, table %s (“%s”)',
	'NAMING_CONFLICT'			=> 'ユーザー名の競合: %s と %s は同じユーザーと見なされます<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'データコンバート完了',
	'CONVERT_COMPLETE_EXPLAIN'	=> '旧掲示板システムのデータは新掲示板 phpBB 3.2 へコンバートされました。新掲示板にログインするには<a href="../">こちら</a>をクリックしてください。旧掲示板システムの基本設定が新掲示板にきちんと移転・反映されているかをご確認ください。もし問題がなければ installディレクトリ を削除することによって一般ユーザーが新掲示板にアクセスできるようになります。<a href="https://www.phpbb.com/support/docs/en/3.2/ug/">ドキュメント</a>や<a href="https://www.phpbb.com/community/viewforum.php?f=466">サポートフォーラム</a>にて phpBB のヘルプが利用可能です。',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '旧掲示板システムで FTPアップロード によるファイル添付が許可されているようです。旧掲示板システムの FTPアップロードオプション を無効に設定してください。そして旧掲示板システムにおけるアップロード先ディレクトリを正しく設定し直し、サーバ に置かれている全アップロードファイルをそのディレクトリへコピーしてください。コピーが完了し次第、データコンバートを再開してください。',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'コンバート可能なコンフィグ情報はありません',
	'CONV_ERROR_FORUM_ACCESS'			=> 'フォーラムのアクセス情報を取得できませんでした',
	'CONV_ERROR_GET_CATEGORIES'			=> 'カテゴリ情報を取得できませんでした',
	'CONV_ERROR_GET_CONFIG'				=> '旧掲示板システムのコンフィグ情報を取得できませんでした',
	'CONV_ERROR_COULD_NOT_READ'			=> '“%s” へのアクセスまたは読み取りに失敗しました',
	'CONV_ERROR_GROUP_ACCESS'			=> 'グループのパーミッション情報を取得できませんでした',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '関数 add_bots() を実行中にグループテーブル内のデータに不一致が見られました。手動でグループを追加する場合、特別グループを全て追加する必要があります。',
	'CONV_ERROR_INSERT_BOT'				=> 'テーブル users にボットを追加できませんでした',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'テーブル bots にボットを追加できませんでした',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'テーブル user_group にユーザーを追加できませんでした',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'メッセージパースエラー',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'avatar_path\'] を指定する必要があります',
	'CONV_ERROR_NO_FORUM_PATH'			=> '新掲示板ルートディレクトリへの相対パスが指定されていません',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '開発者への注意: %s を使用するには $convertor[\'avatar_gallery_path\'] を指定する必要があります',
	'CONV_ERROR_NO_GROUP'				=> '%2$s でグループ “%1$s” を見つけられませんでした',
	'CONV_ERROR_NO_RANKS_PATH'			=> '開発者への注意: %s を使用するには $convertor[\'ranks_path\'] を指定する必要があります',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '開発者への注意: %s を使用するには $convertor[\'smilies_path\'] を指定する必要があります',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '開発者への注意: %s を使用するには $convertor[\'upload_path\'] を指定する必要があります',
	'CONV_ERROR_PERM_SETTING'			=> 'パーミッションの 付与/変更 に失敗しました',
	'CONV_ERROR_PM_COUNT'				=> 'Unable to select folder pm count.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '旧カテゴリを新フォーラムにデータコンバートすることに失敗しました',
	'CONV_ERROR_REPLACE_FORUM'			=> '旧フォーラムを新フォーラムにデータコンバートすることに失敗しました',
	'CONV_ERROR_USER_ACCESS'			=> 'ユーザーのパーミッション情報を取得できませんでした',
	'CONV_ERROR_WRONG_GROUP'			=> '不正なグループ “%1$s” が %2$s で定義されています',
	'CONV_OPTIONS_BODY'					=> 'フォームに既に入力されている情報は当 phpBB3（以下“新掲示板”） のデータベース情報です。もし新掲示板のデータベース情報と旧掲示板システムのデータベース情報が異なる場合、入力されている情報を旧掲示板システムのデータベース情報に変更してください。コンバータはここで指定されたデータベース内のテーブルとその格納データを一切変更しません。コンバータが途中で中断されないよう、旧掲示板を使用不可にしておくべきです。',
	'CONV_SAVED_MESSAGES'				=> '保存メッセージ',

	'PRE_CONVERT_COMPLETE'			=> 'コンバートプリステップを全て完了しました。データコンバートを開始してください。コンバート完了後、手動で調整しなければならない点がいくつかあるかもしれない点にご注意ください。特にパーミッションが正しく割り当てられているかチェックしてください。必要であれば検索インデクスを再構築してください。アバターやスマイリーのような画像ファイルが正確にコピーされているかどうかもご確認ください。',
));
