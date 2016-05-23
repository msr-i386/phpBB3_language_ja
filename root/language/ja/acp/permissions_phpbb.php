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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
		'ACL_CAT_ACTIONS'		=> 'アクション',
		'ACL_CAT_CONTENT'		=> '記事コンテンツ',
		'ACL_CAT_FORUMS'		=> 'フォーラム',
		'ACL_CAT_MISC'			=> 'その他',
		'ACL_CAT_PERMISSIONS'	=> 'パーミッション',
		'ACL_CAT_PM'			=> 'プライベートメッセージ',
		'ACL_CAT_POLLS'			=> '投票',
		'ACL_CAT_POST'			=> '投稿',
		'ACL_CAT_POST_ACTIONS'	=> '記事アクション',
		'ACL_CAT_POSTING'		=> '投稿',
		'ACL_CAT_PROFILE'		=> 'プロフィール',
		'ACL_CAT_SETTINGS'		=> '設定',
		'ACL_CAT_TOPIC_ACTIONS'	=> 'トピックアクション',
		'ACL_CAT_USER_GROUP'	=> 'ユーザー&amp;グループ',
));

// User Permissions
$lang = array_merge($lang, array(
		'ACL_U_VIEWPROFILE'	=> 'プロフィール、メンバーリスト、オンラインデータの閲覧',
		'ACL_U_CHGNAME'		=> 'ユーザー名の変更',
		'ACL_U_CHGPASSWD'	=> 'パスワードの変更',
		'ACL_U_CHGEMAIL'	=> 'メールアドレスの変更',
		'ACL_U_CHGAVATAR'	=> 'アバターの変更',
		'ACL_U_CHGGRP'		=> 'デフォルトグループの変更',
		'ACL_U_CHGPROFILEINFO'	=> 'プロフィールフィールドの変更',

		'ACL_U_ATTACH'		=> 'ファイルの添付',
		'ACL_U_DOWNLOAD'	=> 'ファイルのダウンロード',
		'ACL_U_SAVEDRAFTS'	=> '下書きのセーブ',
		'ACL_U_CHGCENSORS'	=> '言語フィルタの無効化',
		'ACL_U_SIG'			=> 'サインの使用',

		'ACL_U_SENDPM'		=> 'プライベートメッセージの送信',
		'ACL_U_MASSPM'		=> '複数のユーザーに対してプライベートメッセージの送信',
		'ACL_U_MASSPM_GROUP'=> 'グループに対してプライベートメッセージの送信',
		'ACL_U_READPM'		=> 'プライベートメッセージの閲覧',
		'ACL_U_PM_EDIT'		=> 'プライベートメッセージの編集',
		'ACL_U_PM_DELETE'	=> 'プライベートメッセージの削除',
		'ACL_U_PM_FORWARD'	=> 'プライベートメッセージの転送',
		'ACL_U_PM_EMAILPM'	=> 'プライベートメッセージのメール送信',
		'ACL_U_PM_PRINTPM'	=> 'プライベートメッセージの印刷ビューの表示',
		'ACL_U_PM_ATTACH'	=> 'プライベートメッセージでファイルの添付',
		'ACL_U_PM_DOWNLOAD'	=> 'プライベートメッセージでファイルのダウンロード',
		'ACL_U_PM_BBCODE'	=> 'プライベートメッセージで BBCode の使用',
		'ACL_U_PM_SMILIES'	=> 'プライベートメッセージでスマイリーの使用',
		'ACL_U_PM_IMG'		=> 'プライベートメッセージで [img] BBCode の使用',
		'ACL_U_PM_FLASH'	=> 'プライベートメッセージで [flash] BBCode の使用',

		'ACL_U_SENDEMAIL'	=> 'メールの送信',
		'ACL_U_SENDIM'		=> 'インスタントメッセージの送信',
		'ACL_U_IGNOREFLOOD'	=> '連続投稿制限の無視t',
		'ACL_U_HIDEONLINE'	=> 'お忍びユーザー',
		'ACL_U_VIEWONLINE'	=> 'オンラインデータページでお忍びユーザーの表示',
		'ACL_U_SEARCH'		=> '掲示板全体で検索',
));

// Forum Permissions
$lang = array_merge($lang, array(
		'ACL_F_LIST'		=> 'フォーラムの閲覧',
		'ACL_F_READ'		=> 'フォーラムへ入室',
		'ACL_F_SEARCH'		=> 'フォーラム内検索',
		'ACL_F_SUBSCRIBE'	=> 'フォーラムのウォッチ',
		'ACL_F_PRINT'		=> 'トピックの印刷ビューの表示',
		'ACL_F_EMAIL'		=> 'トピックのメール送信',
		'ACL_F_BUMP'		=> 'トピックの “上げ”',
		'ACL_F_USER_LOCK'	=> 'トピックの閉鎖',
		'ACL_F_DOWNLOAD'	=> 'ファイルのダウンロード',
		'ACL_F_REPORT'		=> '記事の通報',

		'ACL_F_POST'		=> '新規トピックの作成',
		'ACL_F_STICKY'		=> '注目トピックの作成',
		'ACL_F_ANNOUNCE'	=> '告知トピックの作成',
		'ACL_F_REPLY'		=> 'トピックへ返信',
		'ACL_F_EDIT'		=> '記事の編集',
		'ACL_F_DELETE'		=> '記事の削除',
		'ACL_F_SOFTDELETE'	=> '記事の暫定削除<br /><em>パーミッションオプション“記事の承認と復元” を与えられたモデレータは暫定削除された記事を復元できます</em>',
		'ACL_F_IGNOREFLOOD' => '連続投稿制限の無視',
		'ACL_F_POSTCOUNT'	=> '投稿数のカウント<br /><em>記事が投稿された場合のみカウントされる点にご注意ください。記事が削除、移動された場合にカウント数が影響を受ける事はありません。</em>',
		'ACL_F_NOAPPROVE'	=> '承認なしで掲載',

		'ACL_F_ATTACH'		=> 'ファイルの添付',
		'ACL_F_ICONS'		=> 'トピック/返信アイコン の使用',
		'ACL_F_BBCODE'		=> 'BBCode の使用',
		'ACL_F_FLASH'		=> '[flash] BBCode の使用',
		'ACL_F_IMG'			=> '[img] BBCode の使用',
		'ACL_F_SIGS'		=> 'サインの使用',
		'ACL_F_SMILIES'		=> 'スマイリーの使用',

		'ACL_F_POLL'		=> '投票トピックの作成',
		'ACL_F_VOTE'		=> '投票トピックへ投票',
		'ACL_F_VOTECHG'		=> '投票先の変更',
));

// Moderator Permissions
$lang = array_merge($lang, array(
		'ACL_M_EDIT'		=> '記事の編集',
		'ACL_M_DELETE'		=> '記事の削除',
		'ACL_M_SOFTDELETE'	=> '記事の暫定削除<br /><em>パーミッションオプション“記事の承認と復元” を与えられたモデレータは暫定削除された記事を復元できます</em>',
		'ACL_M_APPROVE'		=> '記事の承認と復元',
		'ACL_M_REPORT'		=> '通報の審査と削除',
		'ACL_M_CHGPOSTER'	=> '投稿者の変更',

		'ACL_M_MOVE'	=> 'トピックの移動',
		'ACL_M_LOCK'	=> 'トピックの閉鎖',
		'ACL_M_SPLIT'	=> 'トピックの分割',
		'ACL_M_MERGE'	=> 'トピックの統合',

		'ACL_M_INFO'	=> '記事の詳細の閲覧',
		'ACL_M_WARN'	=> 'ユーザーに警告<br /><em>このオプションはグローバルパーミッションとして適用されます。ローカルパーミッションとして適用されることはありません。</em>', // This moderator setting is only global (and not local)
		'ACL_M_PM_REPORT'	=> 'プライベートメッセージの通報の審査と削除<br /><em>このオプションはグローバルパーミッションとして適用されます。ローカルパーミッションとして適用されることはありません。</em>', // This moderator setting is only global (and not local)
		'ACL_M_BAN'		=> 'アクセス禁止の管理<br /><em>このオプションはグローバルパーミッションとして適用されます。ローカルパーミッションとして適用されることはありません。</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
		'ACL_A_BOARD'		=> '掲示板の設定/更新チェック の変更',
		'ACL_A_SERVER'		=> 'サーバ/クライアントコミュミケイション の設定の変更',
		'ACL_A_JABBER'		=> 'Jabberの設定 の変更',
		'ACL_A_PHPINFO'		=> 'PHP情報 の閲覧',

		'ACL_A_FORUM'		=> 'フォーラムの管理',
		'ACL_A_FORUMADD'	=> 'フォーラムの作成',
		'ACL_A_FORUMDEL'	=> 'フォーラムの削除',
		'ACL_A_PRUNE'		=> 'フォーラムの剪定',

		'ACL_A_ICONS'		=> 'トピックアイコン と スマイリー の変更',
		'ACL_A_WORDS'		=> '言語フィルタの変更',
		'ACL_A_BBCODE'		=> 'BBCode の作成',
		'ACL_A_ATTACH'		=> 'ファイル添付の設定 の変更',

		'ACL_A_USER'		=> 'ユーザーの管理<br /><em>オンラインデータページにおけるブラウザ情報（httpユーザーエージェント）の表示も含みます</em>',
		'ACL_A_USERDEL'		=> 'ユーザーの削除と剪定',
		'ACL_A_GROUP'		=> 'グループの管理',
		'ACL_A_GROUPADD'	=> 'グループの追加',
		'ACL_A_GROUPDEL'	=> 'グループの削除',
		'ACL_A_RANKS'		=> 'ランクの管理',
		'ACL_A_PROFILE'		=> 'カスタムプロフィールフィールドの管理',
		'ACL_A_NAMES'		=> '禁止ユーザー名の管理',
		'ACL_A_BAN'			=> 'アクセス禁止の管理',

		'ACL_A_VIEWAUTH'	=> 'パーミッションマスクの表示',
		'ACL_A_AUTHGROUPS'	=> 'パーミッションの変更 [ グループ ]',
		'ACL_A_AUTHUSERS'	=> 'パーミッションの変更 [ ユーザー ]',
		'ACL_A_FAUTH'		=> 'フォーラムパーミッションロールの変更',
		'ACL_A_MAUTH'		=> 'モデレータパーミッションロールの変更',
		'ACL_A_AAUTH'		=> 'Adminパーミッションロール の変更',
		'ACL_A_UAUTH'		=> 'ユーザーパーミッションロールの変更',
		'ACL_A_ROLES'		=> 'パーミッションロールの管理',
		'ACL_A_SWITCHPERM'	=> 'パーミッションテストの使用',

		'ACL_A_STYLES'		=> 'スタイルの管理',
		'ACL_A_EXTENSIONS'	=> '拡張機能の管理',
		'ACL_A_VIEWLOGS'	=> 'ログの閲覧',
		'ACL_A_CLEARLOGS'	=> 'ログの消去',
		'ACL_A_MODULES'		=> 'モジュールの管理',
		'ACL_A_LANGUAGE'	=> '言語パックの管理',
		'ACL_A_EMAIL'		=> '一括メールの送信',
		'ACL_A_BOTS'		=> 'ボットの管理',
		'ACL_A_REASONS'		=> '通報・却下の理由 の管理',
		'ACL_A_BACKUP'		=> 'データベースのバックアップと復元',
		'ACL_A_SEARCH'		=> '検索バックエンドと検索設定の管理',
));
