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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'ここでは掲示板の基本動作を設定できます。目的に沿ったサイト名とサイト説明をご入力ください。また、タイムゾーンとデフォルト言語をこの掲示板を運用している地域に合わせてください。',
	'BOARD_INDEX_TEXT'				=> 'トップページの名称',
	'BOARD_INDEX_TEXT_EXPLAIN'		=> 'トップページの名称を変更したい場合はご入力ください。入力しなかった場合、デフォルトの “掲示板トップ” となります。',
	'BOARD_STYLE'					=> '掲示板のスタイル',
	'CUSTOM_DATEFORMAT'				=> 'カスタム…',
	'DEFAULT_DATE_FORMAT'			=> '日付形式',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'PHP言語 の <code>date</code> 関数で使われる形式と同じです',
	'DEFAULT_LANGUAGE'				=> 'デフォルト言語',
	'DEFAULT_STYLE'					=> 'デフォルトスタイル',
	'DEFAULT_STYLE_EXPLAIN'			=> 'ユーザー設定で初期に設定される掲示板のスタイルです',
	'DISABLE_BOARD'					=> '掲示板の停止',
	'DISABLE_BOARD_EXPLAIN'			=> '“はい” に設定すると Admin とモデレータ以外の全ユーザーが掲示板を利用できなくなります。掲示板を停止した場合、掲示板に訪れたユーザーに対して停止理由（最大２５５字）が表示されます。',
	'DISPLAY_LAST_SUBJECT'			=> '最新記事の件名をフォーラムリストに表示する',
	'DISPLAY_LAST_SUBJECT_EXPLAIN'	=> '最新記事へのハイパーリンクをトップページの各フォーラムに表示させます。パスワードで保護されたフォーラム または フォーラム閲覧のパーミッションを持たないユーザー に対しては表示されません。',
	'GUEST_STYLE'					=> 'ゲストのスタイル',
	'GUEST_STYLE_EXPLAIN'			=> 'ゲストに表示される掲示板のスタイルです',
	'OVERRIDE_STYLE'				=> 'スタイルの強制',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'ユーザー設定（と “ゲストのスタイル”）を無視してデフォルトスタイルを強制的に使用します。',
	'SITE_DESC'						=> 'サイト説明',
	'SITE_HOME_TEXT'				=> 'ホームページの名前',
	'SITE_HOME_TEXT_EXPLAIN'		=> '“ホームページの URL” を入力している場合、そのホームページに名前があればご入力ください。入力しなかった場合、デフォルトの “ホーム” となります。',
	'SITE_HOME_URL'					=> 'ホームページの URL',
	'SITE_HOME_URL_EXPLAIN'			=> 'この掲示板を一コンテンツとして利用するメインなサイトがあればその URL を入力できます。入力した場合、掲示板のパンくずリストにホームページへのリンクが前置され、掲示板のロゴがこの URL にリンクされます。URL は 絶対URL である必要があります。例 <samp>http://www.phpbb.com</samp>',
	'SITE_NAME'						=> 'サイト名',
	'SYSTEM_TIMEZONE'				=> 'ゲストのタイムゾーン',
	'SYSTEM_TIMEZONE_EXPLAIN'		=> 'ログインしていないユーザー（ゲスト、ボット）に表示されるタイムゾーンです。ログインユーザーはユーザーコントロールパネルでタイムゾーンを設定できます。',
	'WARNINGS_EXPIRE'				=> '警告の有効期間',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'この日数が過ぎると警告が自動的に消えます。古い警告がユーザーの警告数にカウントされなくなります。警告を自動的に消したくない場合は 0 をご入力ください。',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'ここでは掲示板の機能について 有効/無効 を設定できます',

	'ALLOW_ATTACHMENTS'			=> 'ファイル添付を許可する',
 	'ALLOW_BIRTHDAYS'			=> '誕生日フィールドを有効にする',
 	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'プロフィールページで誕生日フィールドを表示します。トップページで誕生日リストを表示するには下の “サーバ負荷の設定” で該当の機能を有効にしてください。',
	'ALLOW_BOOKMARKS'			=> 'トピックのブックマークを許可する',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '登録ユーザーがトピックのブックマーク（お気に入り）を保存できるようになります',
	'ALLOW_BBCODE'				=> 'BBCode を許可する',
	'ALLOW_FORUM_NOTIFY'		=> 'フォーラムのウォッチを許可する',
	'ALLOW_NAME_CHANGE'			=> 'ユーザー名の変更を許可する',
	'ALLOW_NO_CENSORS'			=> '言語フィルタの無効化を許可する',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '登録ユーザーがユーザーコントロールパネルで言語フィルタ機能を無効に設定できるようになります',
	'ALLOW_PM_ATTACHMENTS'		=> 'プライベートメッセージでファイル添付を許可する',
	'ALLOW_PM_REPORT'			=> 'プライベートメッセージの 通報 を許可する',
	'ALLOW_PM_REPORT_EXPLAIN'	=> '“はい” にした場合、登録ユーザーがプライベートメッセージを通報できるようになります。通報されたプライベートメッセージはモデレータに送られます。',
	'ALLOW_QUICK_REPLY'			=> 'クイック返信を許可する',
	'ALLOW_QUICK_REPLY_EXPLAIN'	=> '“いいえ” にした場合、掲示板全体に渡って機能は無効化されます。“はい” にした場合、機能の 有効/無効 はフォーラム個々の設定に依存します。',
	'ALLOW_QUICK_REPLY_BUTTON'	=> '送信 & 全てのフォーラムで有効にする',
	'ALLOW_SIG'					=> 'サインを許可する',
	'ALLOW_SIG_BBCODE'			=> 'サインで BBCode を許可する',
	'ALLOW_SIG_FLASH'			=> 'サインで <code>[FLASH]</code> BBCode を許可する',
	'ALLOW_SIG_IMG'				=> 'サインで <code>[IMG]</code> BBCode を許可する',
	'ALLOW_SIG_LINKS'			=> 'サインでリンクを許可する',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> ' “いいえ” を選択すると <code>[URL]</code> BBCode とマジックリンク（URLの自動リンク化）が無効化されます',
	'ALLOW_SIG_SMILIES'			=> 'サインでスマイリーを許可する',
	'ALLOW_SMILIES'				=> 'スマイリーを許可する',
	'ALLOW_TOPIC_NOTIFY'		=> 'トピックのウォッチを許可する',
	'BOARD_PM'					=> 'プライベートメッセージを許可する',
	'BOARD_PM_EXPLAIN'			=> '登録ユーザーがプライベートメッセージ機能を利用できるようになります',
	'ALLOW_BOARD_NOTIFICATIONS' => '掲示板の通知を許可する',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'アバターとは自分の分身となるキャラクター、またはその画像の事です。スタイルによりますが、アバター画像はトピックページ内ユーザー名の真下に表示されます。ここではユーザーが自分のアバターを掲示板に載せる方法について設定できます。アバター画像をアップロードするには、アバターのアップロードディレクトリが存在していて且つアクセス権が書き込み可である必要があります。またファイルサイズの上限はアップロードされるアバター画像にのみ適用される点にご注意ください。リンク経由で表示されるアバターはこの限りではありません。',

	'ALLOW_AVATARS'					=> 'アバターを有効にする',
	'ALLOW_AVATARS_EXPLAIN'			=> 'アバター機能の使用を許可します：<br />“いいえ” に設定した場合、または下の設定で特定のモードのアバターを無効にした場合、それまで表示されていたアバターは無効化されユーザーコントロールパネルの “アバター画像の編集” ページを除く全てのページで表示されなくなります。',
	'ALLOW_GRAVATAR'				=> 'Gravatar を有効にする',
	'ALLOW_LOCAL'					=> 'アバターギャラリーを有効にする',
	'ALLOW_REMOTE'					=> 'リモートアバターを有効にする',
	'ALLOW_REMOTE_EXPLAIN'			=> '他サイトのアバター画像をリンク経由で表示します',
	'ALLOW_REMOTE_UPLOAD'			=> 'アップロードを有効にする [ リモートコンピュータ ]',
	'ALLOW_REMOTE_UPLOAD_EXPLAIN'	=> '他サイトのアバター画像をこのサイトにコピーします',
	'ALLOW_UPLOAD'					=> 'アップロードを有効にする [ ローカルコンピュータ ]',
	'AVATAR_GALLERY_PATH'			=> 'アバターギャラリーへのパス',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります: 例 <samp>images/avatars/gallery</samp>。<br /><samp>../</samp> の様なダブルドットはセキュリティ上の理由から自動的にパスから削ぎ落とされます。',
	'AVATAR_STORAGE_PATH'			=> 'アバター保管ディレクトリへのパス',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります: 例 <samp>images/avatars/upload</samp>。<br />このパスのアクセス権が書き込み不可だった場合、アバターのアップロード機能を<strong>利用することはできない</strong>点にご注意ください。<br /><samp>../</samp> の様なダブルドットはセキュリティ上の理由から自動的にパスから削ぎ落とされます。',
	'MAX_AVATAR_SIZE'				=> '画像の最大サイズ',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '高さ x 横幅 を pixel 単位で指定してください',
	'MAX_FILESIZE'					=> 'ファイルサイズの上限',
	'MAX_FILESIZE_EXPLAIN'			=> 'アップロードされるアバター画像にのみ適用されます。0 に設定するとファイルサイズの上限はサーバの PHP設定 に依存します。',
	'MIN_AVATAR_SIZE'				=> '画像の最小サイズ',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '高さ x 横幅 を pixel 単位で指定してください',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'ここではプライベートメッセージ（PM）のデフォルト設定を変更できます',

	'ALLOW_BBCODE_PM'			=> 'BBCode を許可する',
	'ALLOW_FLASH_PM'			=> '<code>[FLASH]</code> BBCode を許可する',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'プライベートメッセージでの Flash の使用はパーミッションにも依存する点にご注意ください',
	'ALLOW_FORWARD_PM'			=> '転送を許可する',
	'ALLOW_IMG_PM'				=> '<code>[IMG]</code> BBCode を許可する',
	'ALLOW_MASS_PM'				=> '複数のユーザーまたはグループへの送信を許可する',
	'ALLOW_MASS_PM_EXPLAIN'		=> 'グループへ送信するには、そのグループのグループ管理ページにおける “プライベートメッセージを受信する”オプション を有効にしておく必要があります',
	'ALLOW_PRINT_PM'			=> '印刷ビューを許可する',
	'ALLOW_QUOTE_PM'			=> '引用を許可する',
	'ALLOW_SIG_PM'				=> 'サインを許可する',
	'ALLOW_SMILIES_PM'			=> 'スマイリーを許可する',
	'BOXES_LIMIT'				=> 'ユーザー１人あたりのプライベートメッセージの最大保管件数',
	'BOXES_LIMIT_EXPLAIN'		=> 'ユーザーはプライベートメッセージボックス内にこの件数以上のメッセージを溜めておくことができません。0 に設定すると上限はありません。',
	'BOXES_MAX'					=> 'PMフォルダ の最大数',
	'BOXES_MAX_EXPLAIN'			=> 'ユーザーが作成できる PMフォルダ の最大数を指定してください',
	'ENABLE_PM_ICONS'			=> 'トピックアイコンの使用を許可する',
	'FULL_FOLDER_ACTION'		=> '満杯フォルダのデフォルト動作',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'フォルダが満杯状態時の、新しい受信メッセージに対するデフォルト動作です。各ユーザーはユーザーコントロールパネルでこの動作を変更できます。この設定がユーザー設定を上書きする事はありません。例外として “送信済みメッセージ” フォルダだけは必ず古いメッセージから順に削除していきます。',
	'HOLD_NEW_MESSAGES'			=> '新しいメッセージを待機状態にしておく',
	'PM_EDIT_TIME'				=> '編集のタイムリミット',
	'PM_EDIT_TIME_EXPLAIN'		=> 'まだ相手側に届いていない作成済みメッセージが編集可能状態でいられる時間の長さです。プライベートメッセージ作成後、この時間が経過してしまうとそのプライベートメッセージを編集する事はできなくなります。0 に設定すると時間制限はありません。',
	'PM_MAX_RECIPIENTS'			=> '送信先ユーザーの最大数',
	'PM_MAX_RECIPIENTS_EXPLAIN'	=> 'プライベートメッセージの送信先として指定できるユーザー数の上限です。0 に設定すると上限はありません。送信者のデフォルトグループのグループ設定が優先される点にご注意ください。グループ設定ページにおける “プライベートメッセージ送信先ユーザーの最大数” が 0 に設定されている場合のみ、この設定が適用されます。',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'ここでは投稿に関する設定を行う事ができます',
	'ALLOW_POST_LINKS'					=> '記事/プライベートメッセージ でリンクを許可する',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '許可しなかった場合、<code>[URL]</code> BBCode とマジックリンク（URLの自動リンク化）は無効化されます',
	'ALLOWED_SCHEMES_LINKS'				=> 'リンク内で使用可能なスキーム',
	'ALLOWED_SCHEMES_LINKS_EXPLAIN'		=> '許可するスキームをカンマ区切り形式で記述します。スキームのないURL、またはこのリストにあるスキームのみ許可します。',
	'ALLOW_POST_FLASH'					=> '記事で <code>[FLASH]</code> BBCode を許可する',
	'ALLOW_POST_FLASH_EXPLAIN'			=> '許可しなかった場合、<code>[FLASH]</code> BBCode を記事で使用できません。許可した場合、どのユーザーが <code>[FLASH]</code> BBCode を使用できるかはパーミッションに依存します。',

	'BUMP_INTERVAL'					=> 'トピックの上げ期間',
	'BUMP_INTERVAL_EXPLAIN'			=> '記事投稿後、この期間が経過するまで "このトピックを上げる"リンク は表示されません。0 に設定するとトピックの上げ機能は無効化されます。',
	'CHAR_LIMIT'					=> '記事/PM １件あたりの最大文字数',
	'CHAR_LIMIT_EXPLAIN'			=> '記事/PM に書き込める文字数の上限です。0 に設定すると上限はありません。',
	'DELETE_TIME'					=> '削除のタイムリミット',
	'DELETE_TIME_EXPLAIN'			=> '記事が削除可能状態でいられる時間の長さです。記事を投稿してからこの時間が過ぎるとその記事を削除する事はできなくなります。0 に設定するといつでも削除できます。',
	'DISPLAY_LAST_EDITED'			=> '最終編集時間の表示',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '記事が最後に編集された時間を記事内に表示しますか？',
	'EDIT_TIME'						=> '編集のタイムリミット',
	'EDIT_TIME_EXPLAIN'				=> '記事が編集可能状態でいられる時間の長さです。記事を投稿してからこの時間が過ぎるとその記事を編集する事はできなくなります。0 に設定するといつでも編集できます。',
	'FLOOD_INTERVAL'				=> '連続投稿制限の間隔',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'ユーザーが投稿後に再び投稿できるようになるまでの時間（秒単位）です。この設定を無視して連続投稿するにはパーミッションが必要です。',
	'HOT_THRESHOLD'					=> '人気トピックになるまでの返信数',
	'HOT_THRESHOLD_EXPLAIN'			=> 'トピックが人気トピックになるのに必要な返信数です。0 に設定するとトピックが人気トピックになる事はありません。',
	'MAX_POLL_OPTIONS'				=> '投票オプションの最大数',
	'MAX_POST_FONT_SIZE'			=> 'フォントサイズの最大値',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '記事で使用可能なフォントサイズの上限です。0 に設定すると上限はありません。',
	'MAX_POST_IMG_HEIGHT'			=> '画像の高さ上限',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '記事で使用可能な 画像/Flash の高さの上限です。0 に設定すると上限はありません。',
	'MAX_POST_IMG_WIDTH'			=> '画像の横幅上限',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '記事で使用可能な 画像/Flash の横幅の上限です。0 に設定すると上限はありません。',
	'MAX_POST_URLS'					=> 'リンクの最大数',
	'MAX_POST_URLS_EXPLAIN'			=> '記事で使用可能なハイパーリンクの数の上限です。0 に設定すると上限はありません。',
	'MIN_CHAR_LIMIT'				=> '記事/PM １件あたりの最小文字数',
	'MIN_CHAR_LIMIT_EXPLAIN'		=> '記事/PM に最低限書き込む必要のある文字数です。0 に設定することはできません。',
	'POSTING'						=> '投稿',
	'POSTS_PER_PAGE'				=> '１ページあたりの記事表示数',
	'QUOTE_DEPTH_LIMIT'				=> '引用入れ子の深さ制限',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '引用の中に引用を繰り返し含める事ができる深さ（回数）の制限です。0 に設定すると上限はありません。',
	'SMILIES_LIMIT'					=> 'スマイリーの最大数',
	'SMILIES_LIMIT_EXPLAIN'			=> '記事で使用可能なスマイリーの数の上限です。0 に設定すると上限はありません。',
	'SMILIES_PER_PAGE'				=> '１ページあたりのスマイリー表示数',
	'TOPICS_PER_PAGE'				=> '１ページあたりのトピック表示数',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'ここではサインのデフォルト設定を変更できます',

	'MAX_SIG_FONT_SIZE'				=> 'フォントサイズの最大値',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'サインで使用可能なフォントサイズの上限です。0 に設定すると上限はありません。',
	'MAX_SIG_IMG_HEIGHT'			=> '画像の最大サイズ（高さ）',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'サインで使用可能な 画像/Flash の高さの上限です。0 に設定すると上限はありません。',
	'MAX_SIG_IMG_WIDTH'				=> '画像の最大サイズ（横幅）',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'サインで使用可能な 画像/Flash の横幅の上限です。0 に設定すると上限はありません。',
	'MAX_SIG_LENGTH'				=> '最大文字数',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'サインで使用可能な文字数の上限です',
	'MAX_SIG_SMILIES'				=> 'スマイリーの最大数',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'サインで使用可能なスマイリー数の上限です。0 に設定すると上限はありません。',
	'MAX_SIG_URLS'					=> 'リンクの最大数',
	'MAX_SIG_URLS_EXPLAIN'			=> 'サインで使用可能なハイパーリンク数の上限です。0 に設定すると上限はありません。',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'ここではユーザー登録とユーザープロフィールに関する設定を行うことができます',

	'ACC_ACTIVATION'				=> 'アカウントの有効化（アクティベーション）',
	'ACC_ACTIVATION_EXPLAIN'		=> '停止： ユーザー登録を停止します<br />なし： 自動的にアカウントを有効化します<br />ユーザー： アカウント有効化メールを送信します<br />Admin： Admin が手動でアカウントを有効化します<br /><em>掲示板の “メール送信機能” を無効化している場合、“ユーザー” と “Admin” は表示されません。</em>',
	'ACC_ACTIVATION_WARNING'		=> 'アカウントの有効化にメールを利用していた為、ユーザー登録が停止されました。ユーザー登録を再開するには アカウントの有効化をメールを利用しないものに変更する か メール送信機能を有効化する 必要があります。',
	'NEW_MEMBER_POST_LIMIT'			=> '一見さん卒業までの投稿数',
	'NEW_MEMBER_POST_LIMIT_EXPLAIN'	=> '新しく登録したユーザーは一見さんとみなされ自動的に <em>一見さん</em> グループに追加されます。一見さんユーザーは、この数以上の記事を投稿するまでずっと一見さんで居続けます。逆に言うと、この数以上の記事を投稿するとそのユーザーは自動的に一見さんから除名されます。一見さんに適切なパーミッションを与えることによって掲示板の安全性とフォーラム個々の秩序を高めることができます。<strong>一見さん機能を無効化したい場合は 0 をご入力ください。</strong>',
	'NEW_MEMBER_GROUP_DEFAULT'		=> '一見さんをデフォルトグループにする',
	'NEW_MEMBER_GROUP_DEFAULT_EXPLAIN'	=> '“はい” に設定し、且つ “一見さん卒業までの投稿数” を 0 以外に指定している場合、新しく登録したユーザーのデフォルトグループは <em>登録ユーザー</em> ではなく <em>一見さん</em> に設定されます。デフォルトグループとはユーザーのグループカラー・グループランク・グループアバターを決定するためのグループです。グループカラー・グループランク・グループアバターで <em>一見さん</em> を他のグループ、特に <em>登録ユーザー</em> と区別したい場合は有効にしてください。',
	
	'ACC_ADMIN'					=> 'Admin',
	'ACC_DISABLE'				=> '停止',
	'ACC_NONE'					=> 'なし',
	'ACC_USER'					=> 'ユーザー',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'メールアドレスの再使用',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'ユーザー登録の際、既に他のユーザーが使用しているメールアドレスの再使用を許可します',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA FAX番号',
	'COPPA_MAIL'				=> 'COPPA 住所',
	'COPPA_MAIL_EXPLAIN'		=> '１３歳以下のユーザーに対し、このフォーラムサイトへの参加についての両親または保護者による承諾書をこの住所に郵送させます',
	'ENABLE_COPPA'				=> 'COPPA を有効にする',
	'ENABLE_COPPA_EXPLAIN'		=> 'アメリカ合衆国で施行されている COPPA（児童オンラインプライバシー保護法） に準拠し、１４歳以上である事を自ら宣言する事をユーザー登録の際にユーザーに対して要求します。無効に設定された場合、ユーザー登録ページとプロフィールページで COPPA に関する表示はされません。',
	'MAX_CHARS'					=> '最大',
	'MIN_CHARS'					=> '最小',
	'NO_AUTH_PLUGIN'			=> '適切な認証プラグインが見つかりませんでした',
	'PASSWORD_LENGTH'			=> 'パスワードの長さ',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'パスワードの 最小・最大 字数です',
	'REG_LIMIT'					=> 'ユーザー登録試行の最大回数',
	'REG_LIMIT_EXPLAIN'			=> 'ユーザー登録ページでこの回数を超えて CAPTCHA認証コード が一致しなかった場合、強制的にセッションを終了します',
	'USERNAME_ALPHA_ONLY'		=> 'アルファベット、数字のみ',
	'USERNAME_ALPHA_SPACERS'	=> 'アルファべット、数字、スペイサーのみ',
	'USERNAME_ASCII'			=> 'ASCII（半角英数字、句読点や記号）のみ',
	'USERNAME_LETTER_NUM'		=> 'ラテン系文字、数字のみ',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'ラテン系文字、数字、スペイサーのみ',
	'USERNAME_CHARS'			=> 'ユーザー名として使用可能な文字の制限',
	'USERNAME_CHARS_ANY'		=> '全ての文字（数字・記号を含むあらゆる文字）',
	'USERNAME_CHARS_EXPLAIN'	=> 'ユーザー名として使用可能な文字を制限してください。スペイサーとは半角スペースと記号 -+_[] の事です。',
	'USERNAME_LENGTH'			=> 'ユーザー名の長さ',
	'USERNAME_LENGTH_EXPLAIN'	=> 'ユーザー名の 最小・最大 字数です',
));

// Feeds
$lang = array_merge($lang, array(
	'ACP_FEED_MANAGEMENT'				=> 'フィード設定',
	'ACP_FEED_MANAGEMENT_EXPLAIN'		=> 'ここではフィードの設定を行うことができます。<br /><br /><em>フィード（Feed）とは XML形式 による更新情報の配信、または 配信された情報 のことです。サイトから配信されたフィードを受け取ることによって、サイト利用者はサイトの更新履歴を確認できるようになります。これによってサイト利用者は更新ページへダイレクトにアクセスできるので、情報取得にかかる時間を大幅に減らせたり、重要な情報を見落したりすることが少なくなります。</em><br /><br />phpBB3 ではフィードフォーマットとして ATOMフィード を利用します： BBCode やスマイリーはフィードリーダーできちんとパースされて表示されます。',

	'ACP_FEED_GENERAL'					=> '一般設定',
	'ACP_FEED_POST_BASED'				=> '記事のフィード設定',
	'ACP_FEED_TOPIC_BASED'				=> 'トピックのフィード設定',
	'ACP_FEED_SETTINGS_OTHER'			=> 'その他',
	
	'ACP_FEED_ENABLE'					=> 'フィード機能',
	'ACP_FEED_ENABLE_EXPLAIN'			=> '掲示板のフィード機能を有効にするかどうかを決定します。<br />無効にした場合、掲示板がフィードを配信することはありません。',
	'ACP_FEED_LIMIT'					=> 'フィードアイテム最大数',
	'ACP_FEED_LIMIT_EXPLAIN'			=> 'フィードするアイテム（項目）の最大数です',

	'ACP_FEED_OVERALL'					=> '掲示板フィード',
	'ACP_FEED_OVERALL_EXPLAIN'			=> '掲示板の全ての記事をフィードします',
	'ACP_FEED_FORUM'					=> 'フォーラムフィード',
	'ACP_FEED_FORUM_EXPLAIN'			=> 'フォーラムの記事をフィードします。サブフォーラムの記事も含まれます。',
	'ACP_FEED_TOPIC'					=> 'トピックフィード',
	'ACP_FEED_TOPIC_EXPLAIN'			=> 'トピックの記事をフィードします',
	
	'ACP_FEED_TOPICS_NEW'				=> '新着トピックフィード',
	'ACP_FEED_TOPICS_NEW_EXPLAIN'		=> '新着トピックをフィードします。掲示板の全てのトピックが新着順にフィードされます。フィード情報にトピックの最初の記事が含まれます。',
	'ACP_FEED_TOPICS_ACTIVE'			=> '最近のトピックフィード',
	'ACP_FEED_TOPICS_ACTIVE_EXPLAIN'	=> '“最近のトピック” をフィードします。掲示板の一週間以内のトピックだけがフィードされます。フィード情報にトピックの最後の記事が含まれます。',
	'ACP_FEED_NEWS'						=> 'ニュースフィード',
	'ACP_FEED_NEWS_EXPLAIN'				=> '複数のフォーラムのトピックをまとめてフィードします。“ニュースフィード” としてまとめたいフォーラムを選択してください。フォーラムを１つも選択しなかった場合、“ニュースフィード”機能 は無効化されます。<br />複数選択するにはマウスとキーボードをうまく活用してください（<samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',

	'ACP_FEED_OVERALL_FORUMS'			=> '全フォーラムフィード',
	'ACP_FEED_OVERALL_FORUMS_EXPLAIN'	=> 'フォーラムをフィードします。掲示板の全てのフォーラムが対象です。',
  
	'ACP_FEED_HTTP_AUTH'				=> 'HTTP認証',
	'ACP_FEED_HTTP_AUTH_EXPLAIN'		=> '有効にした場合、フィードURL の末尾にパラメータ <samp>auth=http</samp> を追加することによって HTTP認証 を行うようになります。認証に成功したユーザーは、プライベートな（ゲストが見れない） フォーラム/トピック/記事 を含んだフィードを受け取れます。PHP の設定によっては phpBB3ルートディレクトリ直下 のファイル .htaccess を編集する必要がある点にご注意ください。詳しくはその .htaccess ファイルをご覧ください。',
  	'ACP_FEED_ITEM_STATISTICS'			=> '統計データの表示',
	'ACP_FEED_ITEM_STATISTICS_EXPLAIN'	=> '有効にした場合、統計データ（投稿者、投稿日時、返信数、閲覧数）を表示します',
  	'ACP_FEED_EXCLUDE_ID'				=> 'フィードの無効化',
	'ACP_FEED_EXCLUDE_ID_EXPLAIN'		=> 'ここで選択されたフォーラムは<strong>フィードされません</strong>。フォーラム内のトピックと記事も同様です。<br />複数選択するにはマウスとキーボードをうまく活用してください（<samp>SHIFT</samp>キー または <samp>CTRL</samp>キー を押しながらクリック）',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'				=> 'ここでは CAPTCHAの設定 を行うことができます。CAPTCHA はスパムボットによる投稿やユーザー登録から掲示板を守ってくれます。',
	'ACP_VC_EXT_GET_MORE'					=> '他の（多分もっと良い） CAPTCHAプラグイン については <a href="https://www.phpbb.com/go/anti-spam-ext"><strong>phpBB.com Extensions Database</strong></a> をご覧ください。	スパムを防ぐ多くの情報については <a href="https://www.phpbb.com/go/anti-spam"><strong>phpBB.com Knowledge Base</strong></a> をご覧ください。',
	'AVAILABLE_CAPTCHAS'					=> 'プラグイン',
	'CAPTCHA_UNAVAILABLE'					=> 'コンフィグ設定が不十分なため、その CAPTCHA を利用することはできません',
	'CAPTCHA_GD'							=> 'GD画像',
	'CAPTCHA_GD_3D'							=> 'GD3D画像',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> '表面ノイズ',
	'CAPTCHA_GD_EXPLAIN'					=> 'より高度な画像を描画するため、GD拡張モジュール を使用します',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'より複雑な画像を描画するため、表面ノイズを使用します',
	'CAPTCHA_GD_X_GRID'						=> '背景ノイズ x-軸',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'より複雑な画像を描画するには数字を小さくしてください。0 に設定すると x-軸 の背景ノイズは無効化されます。',
	'CAPTCHA_GD_Y_GRID'						=> '背景ノイズ y-軸',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'より複雑な画像を描画するには数字を小さくしてください。0 に設定すると y-軸 の背景ノイズは無効化されます。',
	'CAPTCHA_GD_WAVE'						=> '波形歪み',
	'CAPTCHA_GD_WAVE_EXPLAIN'				=> '画像全体を波の形に歪ませます',
	'CAPTCHA_GD_3D_NOISE'					=> '3Dノイズオブジェクト の追加',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'			=> 'ノイズオブジェクトを描画します。ノイズオブジェクトは文字にまとわりつくように描画されます。',
	'CAPTCHA_GD_FONTS'						=> '文字シェイプ',
	'CAPTCHA_GD_FONTS_EXPLAIN'				=> '文字の形の複雑さを指定します。小文字の使用を選択できます。',
	'CAPTCHA_FONT_DEFAULT'					=> 'デフォルト',
	'CAPTCHA_FONT_NEW'						=> '新しいシェイプ',
	'CAPTCHA_FONT_LOWER'					=> '小文字も使用する',
	'CAPTCHA_NO_GD'							=> 'シンプル画像',    	
	'CAPTCHA_PREVIEW_MSG'					=> '設定はまだ保存されていません。これはプレビューに過ぎません。',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '選択中の CAPTCHA が表示されます',

	'CAPTCHA_SELECT'						=> 'CAPTCHAプラグイン',
	'CAPTCHA_SELECT_EXPLAIN'				=> '掲示板の CAPTCHA を選択します。灰色表示のプラグインはコンフィグ設定が不十分であることを意味しています。灰色表示のプラグインを選択した場合は下の “コンフィグ”ボタン をクリックしてコンフィグ設定を行ってください。',
	'CAPTCHA_CONFIGURE'						=> 'プラグインのコンフィグ設定',
	'CAPTCHA_CONFIGURE_EXPLAIN'				=> '選択中の CAPTCHA プラグインのコンフィグ設定を変更できます',
	'CONFIGURE'								=> 'コンフィグを設定する',
	'CAPTCHA_NO_OPTIONS'					=> 'この CAPTCHA には設定オプションが１つもありません',
	
	'VISUAL_CONFIRM_POST'					=> 'ゲストに対して CAPTCHA を行う',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '大量投稿によるサイト攻撃を防ぐため、匿名ユーザーに対して CAPTCHA認証コード の入力を強制します',
	'VISUAL_CONFIRM_REG'					=> 'ユーザー登録の際に CAPTCHA を行う',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '大量登録によるサイト攻撃を防ぐため、新規ユーザーに対して CAPTCHA認証コード の入力を強制します',
	'VISUAL_CONFIRM_REFRESH'				=> 'CAPTCHA画像 のリフレッシュ',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'		=> '表示された CAPTCHA画像 をユーザーがリフレッシュできるようになります。CAPTCHA画像 が複雑すぎて 文字/数字 を判読できない時がある場合は有効にすると良いでしょう。CAPTCHAプラグイン によってはこの機能を利用できないものもあります。',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'	=> 'ここでは Cookie の設定を行うことができます。多くの場合、デフォルト設定のままで十分です。デフォルト設定を変更する場合は十分注意して行ってください。間違った設定をしてしまうと登録ユーザーがログインできなくなります。ログアウトできないユーザーが存在する場合は、<strong><a href="https://www.phpbb.com/support/go/cookie-settings">phpBB.com Knowledge Base - Fixing incorrect cookie settings</a></strong>を参照してください。',

	'COOKIE_DOMAIN'				=> 'Cookieドメイン',
	'COOKIE_DOMAIN_EXPLAIN'		=> '多くの場合、Cookieドメインは必須ではありません。よくわからない場合は空のままにしてください。<br /><br /> 他のソフトウェアと統合したり、複数のドメインが存在する場合、Cookieドメインを指定する必要があります。たとえば、<i>example.com</i> と <i>forums.example.com</i> もしくは <i>forums.example.com</i> と <i>blog.example.com</i>を使用しているとすると、<i>example.com</i> のように共通のドメイン名になるまでサブドメインを消去します。そして、.example.com のように共通ドメインの先頭にドット(.)を追加します。',
	'COOKIE_NAME'				=> 'Cookie名',
	'COOKIE_NAME_EXPLAIN'		=> 'これはどのような名前であってもかまいません。Cookieの設定を変更するときはCookie名を変更するべきです。',
	'COOKIE_NOTICE'				=> 'Cookie の通知',
	'COOKIE_NOTICE_EXPLAIN'		=> 'Cookie の通知を有効にすると、掲示板にアクセスしたユーザーに表示されるようになります。これは、掲示板の内容や有効な拡張機能によって法律で必要となる場合があります。',
	'COOKIE_PATH'				=> 'Cookieパス',
	'COOKIE_PATH_EXPLAIN'		=> 'Cookieをサイトドメイン間でアクセス可能にするために、大抵の場合スクリプトパスか単純にスラッシュのいずれかになります。',
	'COOKIE_SECURE'				=> 'Cookieセキュア',
	'COOKIE_SECURE_EXPLAIN'		=> 'もしサーバが SSL経由 で動作している場合は有効にしてください。そうでない場合は無効のままにしてください。もし SSL経由 でないサーバ上で有効に設定してしまった場合、リダイレクト中にサーバエラーが発生するでしょう。',
	'ONLINE_LENGTH'				=> 'オンラインデータの有効期限',
	'ONLINE_LENGTH_EXPLAIN'		=> 'ユーザーがサイトを閉じても “オンラインデータ”リスト にそのユーザーを表示しておく時間の長さです。この時間が長ければ長い程サーバに負担がかかります。',
	'SESSION_LENGTH'			=> 'セッションの有効期間',
	'SESSION_LENGTH_EXPLAIN'	=> 'セッションが発生してからこの時間が経過すると、サーバはそのセッションを破棄します',
));

// Contact Settings
$lang = array_merge($lang, array(
	'ACP_CONTACT_SETTINGS_EXPLAIN'	=> 'ここではお問い合わせページの設定を行う事ができます。お問い合わせページを利用する場合、お問い合わせページで表示されるテキストメッセージを作成してください。',

	'CONTACT_US_ENABLE'				=> 'お問い合わせページを有効にする',
	'CONTACT_US_ENABLE_EXPLAIN'		=> 'お問い合わせページはゲストを含む一般ユーザーが Admin にメールを送信するためのページです。メール送信機能を有効にしなければならないことに注意してください。メール送信機能はACPの [メイン > クライアントコミュニケイション > メール設定] から設定できます。',

	'CONTACT_US_INFO'				=> '連絡情報',
	'CONTACT_US_INFO_EXPLAIN'		=> 'このメッセージはお問い合わせページで表示されます',
	'CONTACT_US_INFO_PREVIEW'		=> 'お問い合わせページ情報 - プレビュー',
	'CONTACT_US_INFO_UPDATED'		=> 'お問い合わせページ情報を更新しました',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'		=> 'ここではサーバの CPU負荷 を減らすため、掲示板の機能をいくつか無効にできます。ほとんどのサーバではどの機能も無効にする必要はないでしょう。しかしシェアされたホスティング環境などでは必要のない機能を無効化すると有益かもしれません。またロードアベレージや有効なセッション数を制限する事によって、無効なセッションを割り当てられたユーザーに対して掲示板を自動的にオフラインに移行させたりする事もできます。',

	'ALLOW_CDN'						=> 'サードパーティによるコンテンツ配信網を利用する',
	'ALLOW_CDN_EXPLAIN'				=> '“はい” にした場合、ファイルのいくつかが外部のサードパーティによるサーバから提供されます。これよってサーバのネットワーク処理量を減らせますが、管理人によってはプライバシーの問題となるかもしれません。この機能によって phpBB が Google から “jQuery” や “Open Sans”フォント 等のファイルの提供を受けるようになります。',
	'ALLOW_LIVE_SEARCHES'			=> 'ライブサーチを有効にする',
	'ALLOW_LIVE_SEARCHES_EXPLAIN'	=> '“はい” にした場合、掲示板のあらゆる検索フィールドでキーワードを入力する際、キーワードのマッチ候補が自動で表示されます。',
	'CUSTOM_PROFILE_FIELDS'			=> 'カスタムプロフィールフィールド',
	'LIMIT_LOAD'					=> 'ロードアベレージの上限',
	'LIMIT_LOAD_EXPLAIN'			=> 'もしサーバの１分間におけるロードアベレージがこの値を超えた場合、掲示板はオフライン状態に移行します。ロードアベレージはシステム負荷の指標です（一般的にはロードアベレージが CPUの個数 を超えなければシステムは良好とされています）。この機能は UNIX系OS においてのみ利用できます。もしサーバのロードアベレージを phpBB3 が取得できなかった場合、この設定値は強制的に 0 に上書きされます。',
	'LIMIT_SESSIONS'				=> 'セッション数の制限',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'もしセッション数がこの値を超えた場合、掲示板は自動的にオフライン状態に移行します。0 に設定するとセッション数の制限は無くなります。',
	'LOAD_CPF_MEMBERLIST'			=> 'メンバーリストページでカスタムプロフィールフィールドを表示する（スタイルによっては表示されません）',
	'LOAD_CPF_PM'					=> 'プライベートメッセージでカスタムプロフィールフィールドを表示する',
	'LOAD_CPF_VIEWPROFILE'			=> 'プロフィールページでカスタムプロフィールフィールドを表示する',
	'LOAD_CPF_VIEWTOPIC'			=> 'トピックページでカスタムプロフィールフィールドを表示する',
	'LOAD_USER_ACTIVITY'			=> 'ユーザーの投稿割合データを表示する',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '最も多く投稿した トピック/フォーラム に対するユーザーの投稿割合データをプロフィールページとユーザーコントロールパネルで表示します。記事が100万件を超える場合はこの機能を無効にしておく事を勧めます。',
	'LOAD_USER_ACTIVITY_LIMIT'		=> 'ユーザーの投稿割合データの表示を制限する',
	'LOAD_USER_ACTIVITY_LIMIT_EXPLAIN'	=> 'この投稿数よりも多いユーザーは、アクティブなトピック/フォーラムを表示しないようにします。0に設定することで無制限にできます。',
	'READ_NOTIFICATION_EXPIRE_DAYS'	=> '通知の有効期間',
	'READ_NOTIFICATION_EXPIRE_DAYS_EXPLAIN' => 'この日数が過ぎると通知が自動的に消えます。古い通知がユーザーに通知されなくなります。通知を自動的に消したくない場合は 0 をご入力ください。',
	'RECOMPILE_STYLES'				=> 'テンプレートファイルの再コンパイル',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'スタイルを構成する各テンプレートファイルが更新されているかどうかを常にチェックし、更新されていた場合は再コンパイルします',
	'YES_ACCURATE_PM_BUTTON'			=> 'トピックページのパーミッションに応じて PM ボタンを表示する',
	'YES_ACCURATE_PM_BUTTON_EXPLAIN'	=> '“はい” にした場合、プライベートメッセージの読込権限があるユーザーにのみプライベートメッセージボタンが表示されるようになります。',
	'YES_ANON_READ_MARKING'			=> 'ゲストに対してもトピックの 既読/未読 を有効にする',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'ゲストに対するトピックの 既読/未読 情報を保存します。無効に設定した場合、ゲストに対して全てのトピックが既読状態になります。',
	'YES_BIRTHDAYS'					=> '誕生日リストを有効にする',
 	'YES_BIRTHDAYS_EXPLAIN'			=> '“はい” にした場合、トップページで誕生日リストを表示します。この設定が効果を持つには “掲示板の機能” の “誕生日フィールドを有効にする”オプション を “はい” にする必要があります。',
	'YES_JUMPBOX'					=> 'ジャンプボックスの表示を有効にする',
	'YES_MODERATORS'				=> 'モデレータの表示を有効にする',
	'YES_ONLINE'					=> 'オンラインデータを有効にする',
	'YES_ONLINE_EXPLAIN'			=> 'トップページ、フォーラムページ、トピックページでオンライン情報を表示します',
	'YES_ONLINE_GUESTS'				=> 'オンラインデータページでゲストの表示を有効にする',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'オンラインデータページでゲストの情報を表示します',
	'YES_ONLINE_TRACK'				=> '登録ユーザーの オンライン/オフライン 情報の表示を有効にする',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'プロフィールページとトピックページで登録ユーザーのオンライン情報を表示します',
	'YES_POST_MARKING'				=> 'トピックの投稿マークを有効にする',
	'YES_POST_MARKING_EXPLAIN'		=> 'トピックにユーザー自身が返信または新規投稿したかどうかを判別するためのドット（点）マークをトピックアイコン上に表示します',
	'YES_READ_MARKING'				=> 'サーバサイドによるトピックの既読を有効にする',
	'YES_READ_MARKING_EXPLAIN'		=> 'トピックの 既読/未読 情報を Cookie ではなくデータベースに保存します',
	'YES_UNREAD_SEARCH'				=> '未読記事の検索を有効にする',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB ではユーザー認証がサポートされています。ここでは認証方式 - ユーザーがログインする際に認証をどのようにして行うか - を決定できます。DB、LDAP、Apache、OAuth がデフォルトで用意されています。認証方式それぞれについて必ずしも全項目を埋める必要はありません。関連のある項目だけご入力ください。',

	'AUTH_METHOD'				=> '認証方式の選択',

	'AUTH_PROVIDER_OAUTH_ERROR_ELEMENT_MISSING'	=> 'OAuth認証サービスプロバイダ を利用するにはそのプロバイダから ConsumerKey と ConsumerSecret を取得している必要があります。１つの OAuth認証サービスプロバイダ につき、ConsumerKey と ConsumerSecret の両方をご入力ください。片方だけしか入力されていません。',
	'AUTH_PROVIDER_OAUTH_EXPLAIN'				=> '外部の OAuth認証サービスプロバイダ にフォーラムユーザーのログインを認証してもらうには、そのプロバイダが発行する ConsumerKey と ConsumerSecret が必要です。それらはあなたがあなたのウェブサイトを OAuth認証サービスプロバイダ で登録する事によって得られます。あなたに提供された ConsumerKey と ConsumerSecret を正確にご入力ください。	<br />ConsumerKey と ConsumerSecret のどちらか一方でも欠くとフォーラムユーザーがその OAuth認証サービス を利用して掲示板にログインできません。なお、フォーラムユーザーが外部認証サービスを利用するかどうかは自由であり依然として掲示板の DB認証 でログインする事もできるという点にはご留意ください。',
	'AUTH_PROVIDER_OAUTH_KEY'					=> 'ConsumerKey',
	'AUTH_PROVIDER_OAUTH_TITLE'					=> 'OAuth認証',
	'AUTH_PROVIDER_OAUTH_SECRET'				=> 'ConsumerSecret',

	'APACHE_SETUP_BEFORE_USE'	=> 'Apache認証 を使用するには先に Apache認証 をセットアップする必要があります。Apache認証 で使用するユーザー名と phpBB で使用するユーザー名は一致している必要があります。Apache認証 は mod_php（CGIバージョンは不可） と safe_mode が無効の時に限り使用可能です。',

	'LDAP'							=> 'LDAP',
	'LDAP_DN'						=> 'LDAPベース <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'dn は Distinguished Name （識別名） の略です。dn はユーザー情報を識別します。例: o=My Company, c=US',
	'LDAP_EMAIL'					=> 'LDAPメールアドレス',
	'LDAP_EMAIL_EXPLAIN'			=> '新規ユーザーの LDAPメールアドレス をあなたの LDAPメールアドレス を使って自動登録するため、あなたのユーザーエントリ情報にもしメールアドレスがあればそちらをご入力ください。',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '入力した ユーザー名/パスワード を用いて LDAPサーバ へ接続を試みましたが失敗しました',
	'LDAP_NO_EMAIL'					=> 'メールアドレスが存在していません',
	'LDAP_NO_IDENTITY'				=> '%s についての ログインID が見つかりません',
	'LDAP_PASSWORD'					=> 'LDAPパスワード',
	'LDAP_PASSWORD_EXPLAIN'			=> '匿名で接続する場合は空白にしてください。匿名で接続しない場合は上記ユーザーのパスワードをご入力ください。ActiveDirectoryサーバ では必須です。<br /><em><strong>注意:</strong> このパスワードは暗号化されずにデータベースに保管されます。データベースにアクセスできる人物またはこのページにアクセスできるユーザーもこのパスワードを閲覧できる点にご注意ください。</em>',
	'LDAP_PORT'						=> 'LDAPサーバポート番号',
	'LDAP_PORT_EXPLAIN'				=> 'お望みであれば LDAPサーバ へ接続するためのポート番号を指定できます。デフォルトポート番号 389 と異なるポート番号を使用している場合のみご入力ください。',
	'LDAP_SERVER'					=> 'LDAPサーバ名',
	'LDAP_SERVER_EXPLAIN'			=> 'もし LDAP を使用する場合、LDAPサーバ の IPアドレス かホスト名をご入力ください。あるいは ldap://hostname:port/ のように URL をご入力ください。',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'ログインID の検索に使われるキー情報です。例: uid, sn 等',
	'LDAP_USER'						=> 'LDAPユーザー <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> '匿名で接続する場合は空白にしてください。phpBB のユーザー名を入力した場合、その名前の LDAPユーザー を検索してログインを試みます（例: <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>）。dn は ActiveDirectoryサーバ では必須です。',
	'LDAP_USER_FILTER'				=> 'LDAPユーザーフィルタ',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'お望みであればフィルタを設定することで検索対象を絞り込めます。例えば <samp>objectClass=posixGroup</samp> は <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp> となります。',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'ここではサーバ設定とパス設定を行うことができます。ここで入力したデータが正確であることを確認してください。エラーが起こった場合、エラー内容を含むメールが管理人に送信されます。ドメインを入力する際は http:// などのプロトコルを併記してください。もしサーバポート番号が通常と異なる場合、ポート番号を変更してください。多くの場合 80 番ポートのままで問題ありません。',

	'ENABLE_GZIP'				=> 'GZip圧縮 を有効にする',
	'ENABLE_GZIP_EXPLAIN'		=> '読み込まれたページは圧縮されてユーザーに送られます。圧縮するとネットワークトラフィックは軽減されますが、そのかわりにサーバとクライアントの CPU負荷 は増大します。この機能を利用するには PHP拡張モジュール zlib がサポートされている必要があります。',
	'FORCE_SERVER_VARS'			=> 'サーバ設定 と URL設定 の強制',
	'FORCE_SERVER_VARS_EXPLAIN'	=> ' “はい” を選択すると下の サーバ設定 と URL設定 が強制的に使用されます。 “いいえ” を選択すると phpBBプログラム が自動的に割り出した設定情報が使用されます。',
	'ICONS_PATH'				=> '記事アイコン画像の格納パス',
	'ICONS_PATH_EXPLAIN'		=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります。例: <samp>images/icons</samp>',
	'MOD_REWRITE_ENABLE'		=> 'URLリライティング を有効にする',
	'MOD_REWRITE_ENABLE_EXPLAIN' => '有効化した場合、掲示板の URL に ’app.php’ があれば取り除かれます（app.php/foo は /foo となります）。<strong>この機能を利用するには Apacheサーバ が mod_rewriteモジュール をサポートしている必要があります。もし mod_rewrite のサポートなしでこのオプションを有効化した場合、掲示板の URL が壊れてしまう可能性があります。</strong>',
	'MOD_REWRITE_DISABLED'		=> 'Apacheウェブサーバ が <strong>mod_rewrite</strong>モジュール を無効化しています。モジュールを有効化するかサーバ管理者にお問い合わせください。',
	'MOD_REWRITE_INFORMATION_UNAVAILABLE' => 'このサーバで URLリライティング がサポートされているどうかを判定できませんでした。この機能を有効化してもかまいませんが、URLリライティング がもし利用できなかった場合、掲示板が生成するパス（例えばハイパーリンクで使われるような）が壊れてしまうかもしれません。もしご心配であればサーバ管理者にお問い合わせください。',
	'PATH_SETTINGS'				=> 'パス設定',
	'RANKS_PATH'				=> 'ランク画像の格納パス',
	'RANKS_PATH_EXPLAIN'		=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります。例: <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'スクリプトパス',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBBルートディレクトリ へのパスです。ドメインから見た相対パスで指定する必要があります。例: <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'ドメイン',
	'SERVER_NAME_EXPLAIN'		=> 'この掲示板が運用されるドメインです（例: <samp>www.example.com</samp>）',
	'SERVER_PORT'				=> 'サーバポート番号',
	'SERVER_PORT_EXPLAIN'		=> 'サーバが使用するポート番号です。多くの場合、ポート番号は 80 です。もし違う場合は変更してください。',
	'SERVER_PROTOCOL'			=> 'サーバプロトコル',
	'SERVER_PROTOCOL_EXPLAIN'	=> '“サーバ設定 と URL設定 の強制” を “はい” にしている場合、このプロトコルが強制使用されます。もし空白か “いいえ” にしている場合、Cookieセキュア設定 に基づいてプロトコルが使用されます（<samp>http://</samp> または <samp>https://</samp>）。',
	'SERVER_URL_SETTINGS'		=> 'サーバ設定 と URL設定',
	'SMILIES_PATH'				=> 'スマイリー画像の格納パス',
	'SMILIES_PATH_EXPLAIN'		=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります。例: <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> '拡張子グループアイコン画像の格納パス',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'phpBBルートディレクトリ から見た相対パスで指定する必要があります。例: <samp>images/upload_icons</samp>',
	'USE_SYSTEM_CRON'			=> 'システム管理 cron で定期的なタスクを実行する',
	'USE_SYSTEM_CRON_EXPLAIN'	=> 'オフにした場合、phpBB が定期的なタスクを自動的に実行します。オンにした場合、phpBB がタスクを自動実行することはありません。その場合、システム管理者は cron を使って定期的（例えば 5 分毎）に <code>bin/phpbbcli.php cron:run</code> が自動実行されるようにする必要があります。',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'	=> 'ここではセッションとログインの設定を行うことができます',

	'ALL'							=> '全て',
	'ALLOW_AUTOLOGIN'				=> '自動ログインを許可する', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'ユーザーが掲示板に訪れた時に自動的にログインできるようになります', 
	'ALLOW_PASSWORD_RESET'			=> 'パスワードのリセットを許可する',
	'ALLOW_PASSWORD_RESET_EXPLAIN'	=> '"パスワードを忘れてしまいました"リンク をログインページで表示し、ユーザーがアカウントのログインパスワードを新しく入手できるようになります。外部ログイン認証を利用している場合はこの機能を無効化しておいた方が良いでしょう。',
	'AUTOLOGIN_LENGTH'				=> '自動ログインキーの有効期間', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '自動ログインキーが失効するまでの日数です。0 に設定するとキーが削除される事はありません。', 
	'BROWSER_VALID'					=> 'ブラウザ認証',
	'BROWSER_VALID_EXPLAIN'			=> 'よりセキュリティを確かなものにするため、各セッションについてユーザーの使用ブラウザを確認します',
	'CHECK_DNSBL'					=> 'DNSブラックリスト による IPアドレス のチェック',
	'CHECK_DNSBL_EXPLAIN'			=> '“はい” にした場合、ユーザー登録と記事投稿の際に、次に挙げる DNSBLサービス とのやり取りによってユーザーの IPアドレス がチェックされます：<a href="http://spamcop.net">spamcop.net</a>, <a href="http://www.spamhaus.org">www.spamhaus.org</a>。サーバの設定によってはこのやり取りはしばらく時間がかかるかもしれません。もし時間がかかったりチェックが不正確であるようならこのチェック機能を無効にすることを勧めます。',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '有効な MXレコード によるメールアドレスのチェック',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '“はい” にした場合、ユーザー登録とプロフィール変更の際に入力されたメールアドレスのドメインは、有効な MXレコード を基にチェックされます',
	'FORCE_PASS_CHANGE'				=> 'パスワードの有効期間',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'この日数が経過する度にユーザーに対してパスワードの変更を要求します。0 に設定すると変更の要求はされません。',
	'FORM_TIME_MAX'					=> 'フォーム送信のタイムリミット',
	'FORM_TIME_MAX_EXPLAIN'			=> 'ページアクセス後、ユーザーはこの時間が経過する前にそのページのフォームを送信する必要があります。-1 にするとこの機能は無効化されます。その場合でもセッションの有効期間が過ぎれば送信フォームは無効化される点にご注意ください。',
	'FORM_SID_GUESTS'				=> 'ゲストの送信フォームをセッションで照合する',
	'FORM_SID_GUESTS_EXPLAIN'		=> '“はい” にした場合、ゲストによる２重投稿やスパムを防止します。プロバイダによっては問題を引き起こす可能性があります。',
	'FORWARDED_FOR_VALID'			=> '<var>X_FORWARDED_FOR</var> ヘッダ認証',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'クライアントのリクエストヘッダにおける <var>X_FORWARDED_FOR</var> 情報が直前のリクエストと一致する時だけセッションは持続されます。IPアドレス によるアクセス禁止も <var>X_FORWARDED_FOR</var> ヘッダ情報を基にチェックされます。',
	'IP_VALID'						=> 'セッションIP認証',
	'IP_VALID_EXPLAIN'				=> 'セッションを認証する際にユーザーの IPアドレス のどの部分まで照合するかを決定します。<br /><samp>全て</samp> ： IPアドレスの全範囲を照合します<br /><samp>A.B.C</samp> ： 最初の x.x.x 部分のみ<br /><samp>A.B</samp> ： 最初の x.x 部分のみ<br /><samp>なし</samp> ： 照合しません<br />IPv6 の場合、<samp>A.B.C</samp> は最初の４ブロックを、<samp>A.B</samp> は最初の３ブロックを照合します。',
	'IP_LOGIN_LIMIT_MAX'			=> 'ログイン試行の最大回数 - IPアドレス',
	'IP_LOGIN_LIMIT_MAX_EXPLAIN'	=> 'この回数を超えてログインに失敗したユーザー（IPアドレス）に対して CAPTCHA認証コード の入力を強制します。この機能を無効化したい場合は 0 をご入力ください。',
	'IP_LOGIN_LIMIT_TIME'			=> 'IPアドレス によるログイン試行記録の有効期間',
	'IP_LOGIN_LIMIT_TIME_EXPLAIN'	=> 'ログインを試みた IPアドレス の記録はこの時間が経過するまで有効です',
	'IP_LOGIN_LIMIT_USE_FORWARDED'	=> '<var>X_FORWARDED_FOR</var> ヘッダ情報でログイン試行を制限する',
	'IP_LOGIN_LIMIT_USE_FORWARDED_EXPLAIN'	=> 'ログイン試行を IPアドレス で制限するかわりに <var>X_FORWARDED_FOR</var> ヘッダ情報の値で制限します。<br /><em><strong>警告:</strong> ネットワーク管理下でホストサーバを管理していない限り、この機能を有効化するべきではありません。</em>',
	'MAX_LOGIN_ATTEMPTS'			=> 'ログイン試行の最大回数 - ユーザー名',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'この回数を超えてログインに失敗したユーザー（ユーザー名）に対して CAPTCHA認証コード の入力を強制します。この機能を無効化したい場合は 0 をご入力ください。',
	'NO_IP_VALIDATION'				=> 'なし',
	'NO_REF_VALIDATION'				=> 'なし',
	'PASSWORD_TYPE'					=> 'パスワードの複雑さレベル',
	'PASSWORD_TYPE_EXPLAIN'			=> 'パスワードを入力・変更する際、どの程度まで複雑にする必要があるかを決定します。各レベルはそれより低いレベルの条件を含みます。',
	'PASS_TYPE_ALPHA'				=> 'アルファベットと数字を含めなければならない',
	'PASS_TYPE_ANY'					=> '条件なし',
	'PASS_TYPE_CASE'				=> '大文字アルファベットと小文字アルファベットを含めなければならない',
	'PASS_TYPE_SYMBOL'				=> '記号/符号 どちらかを含めなければならない',
	'REF_HOST'						=> 'ホストのみ',
	'REF_PATH'						=> 'ホストとスクリプトパス',
	'REFERRER_VALID'				=> 'リファラチェック',
	'REFERRER_VALID_EXPLAIN'		=> '有効にした場合、POSTリクエスト 受信時にリファラ情報がチェックされ、CSRF（クロスサイトリクエストフォージェリ） から掲示板を守ります。掲示板が複数のドメインを使用している場合、または他サーバでログイン認証を行っている場合は問題が生じる可能性があります。',
	'TPL_ALLOW_PHP'					=> 'テンプレートファイル内で PHPコード の使用を許可する',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'このオプションが有効な場合、テンプレートファイル内の <code>PHP</code> と <code>INCLUDEPHP</code> 宣言部分は認識されプログラム処理されます',
	'UPLOAD_CERT_VALID'				=> 'アップロード証明書を検証する',
	'UPLOAD_CERT_VALID_EXPLAIN'		=> '有効にすると、リモートアップロードの証明書が有効になります。これには、CA バンドルを php.ini の<samp>openssl.cafile</samp> や <samp>curl.cainfo</samp>設定で定義する必要があります。',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'ここで設定された情報は phpBB がユーザーにメールを送る際に使われます。ここで指定されたメールアドレスが正しいものであることを確認してください。配信不能メールは全てこのアドレスに送られて来るでしょう。もしホストサーバが PHP のメール送信機能を提供していない場合、かわりに SMTP を使ってメールを送る必要があります。その場合、SMTPサーバ のアドレスが必要となります（判らなければプロバイダに問い合わせてください）。もしサーバが認証を要求する場合、接続に必要なユーザー名とパスワードをご入力ください。phpBB の SMTP認証 に関して、実装されているのは基本的な認証方式のみであり他の認証方式は現在サポートされていない点にご注意ください。',

	'ADMIN_EMAIL'					=> '返信先メールアドレス',
	'ADMIN_EMAIL_EXPLAIN'			=> 'このメールアドレスはユーザーに送られるメールの返信先メールアドレスです。ユーザーからの問い合わせ先です。メールヘッダにおける <samp>Sender</samp> 情報に当たります。',
	'BOARD_EMAIL_FORM'				=> '掲示板経由でのユーザーによるメールの送信',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'ユーザーのメールアドレスを表示する代わりに、掲示板経由でのユーザーによるメールの送信を可能にします',
	'BOARD_HIDE_EMAILS'				=> 'ユーザーのメールアドレスを公開しない',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'ユーザーのメールアドレスを完全に非公開にします',
	'CONTACT_EMAIL'					=> '連絡先メールアドレス',
	'CONTACT_EMAIL_EXPLAIN'			=> 'このメールアドレスはスパム、エラー通知などの、ユーザーからのメールとは別のメールを受け取るためのメールアドレスです。メールヘッダにおける <samp>From</samp> と <samp>Reply-To</samp> 情報に当たります。',
	'CONTACT_EMAIL_NAME'			=> '対応者名',
	'CONTACT_EMAIL_NAME_EXPLAIN'	=> 'メール受信者が見るメールの送信者の名前です。特に対応者名を設けたくない場合、空のままにしてください。',
	'EMAIL_FORCE_SENDER'			=> '優先返信先メールアドレス',
	'EMAIL_FORCE_SENDER_EXPLAIN'	=> 'サーバーのローカルユーザーやホスト名の代わりに <samp>Return-Path</samp> を送信元のメールアドレスに設定します。この設定はSMTP使用時には適用されません。<br /><em><strong>注意:</strong> sendmail設定に信頼されるユーザーとして追加するには、ウェブサーバーを実行するユーザーが必要です。</em>',
	'EMAIL_PACKAGE_SIZE'			=> 'メールパッケージの大きさ',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '一括で送信されるメールの最大件数です。この設定値はプログラム内部のメッセージキューに適用されます。もし配信不能通知メールが連絡先メールアドレスに来るようなら 0 に設定してください。',
	'EMAIL_SIG'						=> 'メールのサイン',
	'EMAIL_SIG_EXPLAIN'				=> 'ここに書かれた内容は掲示板が送信する全メールに追記されます',
	'ENABLE_EMAIL'					=> 'メール送信機能',
	'ENABLE_EMAIL_EXPLAIN'			=> '無効に設定した場合、掲示板がメールを送信することはありません。<em>“ユーザー登録の設定”ページ における “アカウントの有効化”設定オプション で選択肢 “ユーザー” または “Admin” を出現させるにはこの機能を有効にしておく必要があります。もしそこで "ユーザー" または "Admin" を選択していて且つこのメール送信機能を無効にした場合、ユーザー登録は停止されます。</em>',
	'SEND_TEST_EMAIL'				=> 'テストメールを送信',
	'SEND_TEST_EMAIL_EXPLAIN'		=> 'アカウントに定義されたメールアドレスにテストメールを送信します。',
	'SMTP_ALLOW_SELF_SIGNED'		=> 'SSL証明書の自己署名を許可する',
	'SMTP_ALLOW_SELF_SIGNED_EXPLAIN'=> '自己署名されたSSL証明書を持ったSMTPサーバーへの接続を許可します。<br /><em><strong>注意:</strong> 自己署名SSL証明書を許可すると、セキュリティ上の問題を引き起こす可能性があります。</em>',
	'SMTP_AUTH_METHOD'				=> 'SMTP認証方式',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '“SMTPユーザー名”オプション と “SMTPパスワード”オプション が設定された場合のみ使用されます。認証方式が判らない場合、プロバイダにどの認証方式を使用しているか問い合わせてください。',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTPパスワード',
	'SMTP_PASSWORD_EXPLAIN'			=> 'SMTPサーバ が要求する場合のみご入力ください。<br /><em><strong>注意:</strong> このパスワードは暗号化されずにデータベースに保管されます。データベースにアクセスできる人物またはこのページにアクセスできるユーザーもこのパスワードを閲覧できる点にご注意ください。</em>',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTPサーバポート番号',
	'SMTP_PORT_EXPLAIN'				=> 'SMTPサーバポート番号 が通常（25番ポート）と異なっている場合のみ変更してください',
	'SMTP_SERVER'					=> 'SMTPサーバ アドレスとプロトコル',
	'SMTP_SERVER_EXPLAIN'			=> 'SMTPサーバ が使用するプロトコルを入力する必要があることに注意してください。SSL を使用している場合、"ssl://your.mailserver.com" のように設定しなければなりません',
	'SMTP_SETTINGS'					=> 'SMTP設定',
	'SMTP_USERNAME'					=> 'SMTPユーザー名',
	'SMTP_USERNAME_EXPLAIN'			=> 'SMTPサーバ が要求する場合のみご入力ください',
	'SMTP_VERIFY_PEER'				=> 'SSL証明書を検証する',
	'SMTP_VERIFY_PEER_EXPLAIN'		=> 'SMTPサーバが使用するSSL証明書の検証を行います。<br /><em><strong>注意:</strong> 未検証のSSL証明書を使用した接続はセキュリティ上の問題を引き起こす可能性があります。</em>',
	'SMTP_VERIFY_PEER_NAME'			=> 'SMTPピア名を検証する',
	'SMTP_VERIFY_PEER_NAME_EXPLAIN'	=> 'SSL / TLS接続時にSMTPサーバのピア名の検証を行います。<br /><em><strong>注意:</strong> 未検証の接続先へ接続すると、セキュリティ上の問題を引き起こす可能性があります。</em>',
	'TEST_EMAIL_SENT'				=> 'テストメールの送信が完了しました。<br />受信できない場合は、メールアドレスが正しいことを確認してください。<br /><br />ヘルプが必要な場合は、<a href="https://www.phpbb.com/community/">phpBB サポートフォーラム</a>にアクセスしてください。',

	'USE_SMTP'						=> 'SMTPサーバ の使用',
	'USE_SMTP_EXPLAIN'				=> 'PHP のメール関数を使うかわりに SMTPサーバ を使いたい場合、 “はい” を選択してください',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'ここでは Jabber の設定を行うことができます。掲示板から登録ユーザーへ Jabber経由 でメッセージを通知できます。Jabber を利用する登録ユーザーが多い場合は利用すると良いでしょう。Jabber はオープンソースプロトコル XMPP を採用したメッセージングサーバであり、誰でも利用できます。Jabberサーバ のいくつかは MSN Messenger, Yahoo! Insant Messenger, IRC, ICQ などのインスタントメッセンジャのネットワークへ接続可能なゲートウェイを持っており、これらのネットワークへメッセージを送ることができます。全ての Jabberサーバ が全てのプロトコルに対応しているわけではなく、そのためプロトコルの違いによってデータの転送に失敗する事もありえます。入力されたデータがすでに登録済みのアカウントデータである事を確認してください - phpBB はここで入力されたデータを基に Jabberサーバ へ接続します。',

	'JAB_ALLOW_SELF_SIGNED'			=> 'SSL証明書の自己署名を許可する',
	'JAB_ALLOW_SELF_SIGNED_EXPLAIN'	=> '自己署名されたSSL証明書をJabberサーバへ接続することを許可します。<br /><em><strong>注意:</strong> 自己署名SSL証明書を許可すると、セキュリティ上の問題を引き起こす可能性があります。</em>',
	'JAB_ENABLE'				=> 'Jabber を有効にする',
	'JAB_ENABLE_EXPLAIN'		=> 'Jabber によるメッセージと通知を有効にする',
	'JAB_GTALK_NOTE'			=> '<samp>dns_get_record</samp> 関数が見つからないため、GTalk を使用できない点にご注意ください。 この関数を PHP4 で利用することはできませんし、Windowsプラットフォーム で実装されてもいません。さらに MacOS を含む現在の BSDベースシステム 上でも機能しません。',
	'JAB_PACKAGE_SIZE'			=> 'Jabberパッケージサイズ',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> '溜まってから一括で送信されるメッセージの量です。0 に設定するとメッセージは即座に送信され溜まる事はありません。',
	'JAB_PASSWORD'				=> 'Jabberパスワード',
	'JAB_PASSWORD_EXPLAIN'		=> '<em><strong>注意:</strong> このパスワードは暗号化されずにデータベースに保管されます。データベースにアクセスできる人物またはこのページにアクセスできるユーザーもこのパスワードを閲覧できる点にご注意ください。</em>',
	'JAB_PORT'					=> 'Jabberポート番号',
	'JAB_PORT_EXPLAIN'			=> 'Jabberポート番号 が 5222 でない場合だけ変更してください',
	'JAB_SERVER'				=> 'Jabberサーバ',
	'JAB_SERVER_EXPLAIN'		=> 'サーバリストを参照するには %sjabber.org%s を参照してください',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber設定 の変更に成功しました',
	'JAB_USE_SSL'				=> 'サーバ接続に SSL を使用する',
	'JAB_USE_SSL_EXPLAIN'		=> '“はい” に設定した場合、セキュアサーバ接続の確立が試みられます。Jabberポート番号 を 5222 に指定している場合、5223 が使用されます。',
	'JAB_USERNAME'				=> 'Jabberユーザー名 または JID',
	'JAB_USERNAME_EXPLAIN'		=> 'Jabber登録済みユーザー名 または有効な JID を正確にご入力ください。ユーザー名が有効かどうかはチェックされません。有効な JID の例：user@jabber.org',
	'JAB_VERIFY_PEER'				=> 'SSL証明書を検証する',
	'JAB_VERIFY_PEER_EXPLAIN'		=> 'Jabberサーバが使用するSSL証明書の検証を行います。<br /><em><strong>注意:</strong> 未検証のSSL証明書を使用した接続はセキュリティ上の問題を引き起こす可能性があります。</em>',
	'JAB_VERIFY_PEER_NAME'			=> 'Jabberのピア名を検証する',
	'JAB_VERIFY_PEER_NAME_EXPLAIN'	=> 'SSL / TLS接続時にJabberサーバのピア名の検証を行います。<br /><em><strong>注意:</strong> 未検証の接続先へ接続すると、セキュリティ上の問題を引き起こす可能性があります。</em>',
));
