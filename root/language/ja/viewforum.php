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
	'ACTIVE_TOPICS'			=> '最近のトピック',
	'ANNOUNCEMENTS'			=> '告知トピック',

	'FORUM_PERMISSIONS'		=> 'フォーラムパーミッション',

	'ICON_ANNOUNCEMENT'		=> '告知トピック',
	'ICON_STICKY'			=> '注目トピック',

	'LOGIN_NOTIFY_FORUM'	=> 'フォーラムにお知らせがあります。ログインしてご確認ください。',

	'MARK_TOPICS_READ'		=> 'トピックを全て既読にする',

	'NEW_POSTS_HOT'			=> '新しい記事あり [ 人気 ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> '新しい記事あり [ 閉鎖中 ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> '新しい記事なし [ 人気 ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> '新しい記事なし [ 閉鎖中 ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'このフォーラムの記事を閲覧する権限がありません',
	'NO_FORUMS_IN_CATEGORY'	=> 'このカテゴリにフォーラムはありません。',
	'NO_UNREAD_POSTS_HOT'		=> '未読記事なし [ 人気 ]',
	'NO_UNREAD_POSTS_LOCKED'	=> '未読記事なし [ 閉鎖中 ]',

	'POST_FORUM_LOCKED'		=> 'フォーラムは閉鎖中 [ 投稿禁止 ] です',

	'TOPICS_MARKED'			=> 'フォーラムのトピックをすべて既読にしました',

	'UNREAD_POSTS_HOT'		=> '未読記事あり [ 人気 ]',
	'UNREAD_POSTS_LOCKED'	=> '未読記事あり [ 閉鎖中 ]',

	'VIEW_FORUM'			=> 'フォーラム閲覧',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d 件のトピック',
	//	2	=> '%d topics',
	),
));
