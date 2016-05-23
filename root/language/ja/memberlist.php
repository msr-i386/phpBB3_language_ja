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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'プロフィール',
	'ACTIVE_IN_FORUM'		=> '最も活動的なフォーラム',
	'ACTIVE_IN_TOPIC'		=> '最も活動的なトピック',
	'ADD_FOE'				=> 'ブロックリストに追加する',
	'ADD_FRIEND'			=> 'フレンドリストに追加する',
	'AFTER'					=> '以後',

	'ALL'					=> '全て',

	'BEFORE'				=> '以前',

	'CC_SENDER'				=> 'このメールのコピーを自分のメールアドレスにも送信する',
	'CONTACT_ADMIN'			=> '管理人の連絡先',

	'DEST_LANG'				=> '言語',
	'DEST_LANG_EXPLAIN'		=> 'このメールをどの言語で送信するか選択してください',

	'EDIT_PROFILE'			=> 'プロフィール設定',
	
	'EMAIL_BODY_EXPLAIN'	=> 'このメッセージはプレーンテキストとして送信されますので HTML や BBCode を使用しないでください。返信先アドレスにはあなたのメールアドレスがセットされます。',
	'EMAIL_DISABLED'		=> '申し訳ありませんがメール機能が無効に設定されているためメールを送信できません',
	'EMAIL_SENT'			=> 'メールを送信しました',
	'EMAIL_TOPIC_EXPLAIN'	=> 'このメッセージはプレーンテキストとして送信されますので HTML や BBCode を使用しないでください。トピックへの URL はメッセージに自動的に挿入されます。返信先アドレスにはあなたのメールアドレスがセットされます。',
	'EMPTY_ADDRESS_EMAIL'	=> '受取人のメールアドレスが正しくありません',
	'EMPTY_MESSAGE_EMAIL'	=> 'メッセージが入力されていません',
	'EMPTY_MESSAGE_IM'		=> 'メッセージが入力されていません',
	'EMPTY_NAME_EMAIL'		=> '受取人の名前が入力されていません',
	'EMPTY_SENDER_EMAIL'	=> 'メールアドレスが有効ではありません',
	'EMPTY_SENDER_NAME'		=> '名前が入力されていません',
	'EMPTY_SUBJECT_EMAIL'	=> 'メールの件名が入力されていません',
	'EQUAL_TO'				=> '一致',

	'FIND_USERNAME_EXPLAIN'	=> 'ユーザーを検索するには以下のフォームにユーザー情報をご入力ください。部分一致としてワイルドカード（*）を使用できます。日付を入力する際はフォーマット <kbd>YYYY-MM-DD</kbd> でご入力ください（例: <samp>2004-02-29</samp>）。このページが別ウィンドウで開かれている場合、メンバーリスト内の各ユーザー名の隣に “選択” リンクかチェックボックスがあるはずです。そちらからユーザーを選択すれば元ウィンドウのフォームに選択したユーザー名が入力されます。',
	'FLOOD_EMAIL_LIMIT'		=> '連続してメールを送信することはできません。しばらく時間が経ってからもう一度送信してください。',

	'GROUP_LEADER'			=> 'グループリーダー',

	'HIDE_MEMBER_SEARCH'	=> '検索フォームを隠す',

	'IM_ADD_CONTACT'		=> 'IMリスト に追加する',
	'IM_DOWNLOAD_APP'		=> 'アプリケーションをダウンロードする',
	'IM_JABBER'				=> '勝手に送りつけられてきたインスタントメッセージを相手が拒否している可能性がある点にご注意ください',
	'IM_JABBER_SUBJECT'		=> 'フォーラムサイト %2$s のユーザー %1$s からの自動送信メッセージ',
	'IM_MESSAGE'			=> 'メッセージ',
	'IM_NAME'				=> 'あなたの名前',
	'IM_NO_DATA'			=> 'このユーザーのプロフィールには連絡先情報がありません',
	'IM_NO_JABBER'			=> '申し訳ありませんが掲示板が Jabber をサポートしていないため Jabberユーザー へ直接メッセージを送信できません。ローカルコンピュータに Jabberクライアント をインストールすればメッセージを送信できるでしょう。',
	'IM_RECIPIENT'			=> '受取人',
	'IM_SEND'				=> 'メッセージを送る',
	'IM_SEND_MESSAGE'		=> 'メッセージを送る',
	'IM_SENT_JABBER'		=> '%1$s さんへのメッセージの送信に成功しました',
	'IM_USER'				=> 'インスタントメッセージの送信',
	
	'LAST_ACTIVE'				=> '最近の訪問日時',
	'LESS_THAN'					=> 'より少ない',
	'LIST_USERS'				=> array(
		1	=> '%d 人のユーザー',
	//	2	=> '%d users',
	),
	'LOGIN_EXPLAIN_TEAM'		=> '管理・運営チームを閲覧するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'メンバーリストを閲覧するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'ユーザーを検索するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'プロフィールを表示するにはユーザー登録とログインが必要です',

	'MANAGE_GROUP'			=> 'グループの管理',
	'MORE_THAN'				=> 'より多い',

	'NO_CONTACT_FORM'		=> 'お問い合わせのフォームは無効化されています',
	'NO_CONTACT_PAGE'		=> 'お問い合わせページは無効化されています',
	'NO_EMAIL'				=> 'メールを送信できません。必要なパーミッションがあなたに与えられていないか、掲示板のメール機能が無効に設定されているか、ユーザー自身がメール機能を無効にしています。',
	'NO_VIEW_USERS'			=> 'メンバーリストまたはプロフィールを表示する権限がありません',

	'ORDER'					=> '表示順',
	'OTHER'					=> 'その他',

	'POST_IP'				=> '投稿 IP/ドメイン',

	'REAL_NAME'				=> '受取人の名前',
	'RECIPIENT'				=> '受取人',
	'REMOVE_FOE'			=> 'ブロックリストから削除',
	'REMOVE_FRIEND'			=> 'フレンドリストから削除',

	'SELECT_MARKED'			=> 'マークを選択',
	'SELECT_SORT_METHOD'	=> 'ソート',
	'SENDER_EMAIL_ADDRESS'	=> 'あなたのメールアドレス',
	'SENDER_NAME'			=> 'あなたの名前',
	'SEND_ICQ_MESSAGE'		=> 'ICQメッセージ を送る',
	'SEND_IM'				=> 'インスタントメッセージ',
	'SEND_JABBER_MESSAGE'	=> 'Jabberメッセージ を送る',
	'SEND_MESSAGE'			=> 'メッセージ',
	'SEND_YIM_MESSAGE'		=> 'YIMメッセージ を送る',
	'SORT_EMAIL'			=> 'メールアドレス',
	'SORT_LAST_ACTIVE'		=> '最近の訪問日時',
	'SORT_POST_COUNT'		=> '投稿数',

	'USERNAME_BEGINS_WITH'	=> 'ユーザー名の最初の文字',
	'USER_ADMIN'			=> 'ユーザー管理',
	'USER_BAN'				=> 'アクセス禁止',
	'USER_FORUM'			=> '統計データ',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'この日時に送信されたアカウント有効化メールはありません',
		1		=> 'アカウント有効化メールを %1$d 通送信しました<br />» %2$s',
	//	2		=> '%1$d reminder sent<br />» %2$s',
	),
	'USER_ONLINE'			=> 'オンライン',
	'USER_PRESENCE'			=> 'Board presence',
	'USERS_PER_PAGE'		=> '１ページ当たりのユーザー数',
	
	'VIEWING_PROFILE'		=> '%s のプロフィールを閲覧中',
	'VIEW_FACEBOOK_PROFILE'	=> 'Facebook Profile へ',
	'VIEW_SKYPE_PROFILE'	=> 'Skype Profile へ',
	'VIEW_TWITTER_PROFILE'	=> 'Twitter Profile へ',
	'VIEW_YOUTUBE_CHANNEL'	=> 'YouTube Channel へ',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Google+ Profile へ',
));
