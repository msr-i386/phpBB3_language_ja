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
	'APPROVE'							=> '承認',
	'ATTACHMENT'						=> '添付ファイル',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ファイル添付機能は無効に設定されています',

	'BOOKMARK_ADDED'		=> 'トピックをブックマークしました',
	'BOOKMARK_ERR'			=> 'トピックのブックマークに失敗しました。もう一度お試しください。',
	'BOOKMARK_REMOVED'		=> 'トピックのブックマークを解除しました',
	'BOOKMARK_TOPIC'		=> 'このトピックをブックマークする',
	'BOOKMARK_TOPIC_REMOVE'	=> 'このトピックのブックマークを解除する',
	'BUMPED_BY'				=> 'トピックを最後に上げたユーザー %1$s on %2$s',
	'BUMP_TOPIC'			=> 'このトピックを上げる',

	'CODE'					=> 'コード',

	'DELETE_TOPIC'			=> 'トピックを削除する',
	'DELETED_INFORMATION'	=> '暫定削除したユーザー %1$s on %2$s',
	'DISAPPROVE'			=> '却下',
	'DOWNLOAD_NOTICE'		=> 'ファイル閲覧権限がありません',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> '最後に編集したユーザー %2$s on %3$s [ 編集 %1$d 回目 ]',
	//	2	=> 'Last edited by %2$s on %3$s, edited %1$d times in total.',
	),
	'EMAIL_TOPIC'			=> '友達にメールで知らせる',
	'ERROR_NO_ATTACHMENT'	=> '添付ファイルが存在していません',

	'FILE_NOT_FOUND_404'	=> 'ファイル <strong>%s</strong> は存在していません',
	'FORK_TOPIC'			=> 'トピックをコピーする',
	'FULL_EDITOR'			=> '投稿画面へ',

	'LINKAGE_FORBIDDEN'		=> 'サイト内の画像またはファイルについて、表示・ダウンロード・リンクをサイトから拒否されました',
	'LOGIN_NOTIFY_TOPIC'	=> 'トピックにお知らせがあります。ログインしてご確認ください。',
	'LOGIN_VIEWTOPIC'		=> 'このトピックを閲覧するにはユーザー登録とログインが必要です',

	'MAKE_ANNOUNCE'				=> '“告知トピック” へ変更する',
	'MAKE_GLOBAL'				=> '“全体告知トピック” へ変更する',
	'MAKE_NORMAL'				=> '“通常トピック” へ変更する',
	'MAKE_STICKY'				=> '“注目トピック” へ変更する',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> '<strong>%d</strong> 個のオプションを選択できます',
	//	2	=> 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'	=> '添付ファイル <strong>%s</strong> がありません',
	'MOVE_TOPIC'				=> 'トピックを移動する',

	'NO_ATTACHMENT_SELECTED'=> 'ダウンロードまたは表示する添付ファイルを選択していません',
	'NO_NEWER_TOPICS'		=> 'このフォーラムにはこれ以上新しいトピックはありません',
	'NO_OLDER_TOPICS'		=> 'このフォーラムにはこれ以上古いトピックはありません',
	'NO_UNREAD_POSTS'		=> 'このトピックに未読記事はありません',
	'NO_VOTE_OPTION'		=> '投票オプションを選択してください',
	'NO_VOTES'				=> '0 票',
	'NO_AUTH_PRINT_TOPIC'	=> 'トピックを印刷する権限がありません',

	'POLL_ENDED_AT'			=> '投票は %s を以って終了致しました',
	'POLL_RUN_TILL'			=> '投票は %s を以って終了致します',
	'POLL_VOTED_OPTION'		=> 'このオプションに投票しました',
	'POST_DELETED_RESTORE'	=> 'この記事は暫定削除されています。記事は復元できます。',
	'PRINT_TOPIC'			=> '印刷ビュー',

	'QUICK_MOD'				=> 'モデレータ用クイックツール',
	'QUICKREPLY'			=> 'クイック返信',
	'QUOTE'					=> '引用',

	'REPLY_TO_TOPIC'		=> 'トピックへ返信する',
	'RESTORE'				=> '復元',
	'RESTORE_TOPIC'			=> 'トピックを復元する',
	'RETURN_POST'			=> '%s記事に戻る%s',

	'SUBMIT_VOTE'			=> '投票する',

	'TOPIC_TOOLS'			=> 'トピックツール',
	'TOTAL_VOTES'			=> '投票総数',

	'UNLOCK_TOPIC'			=> 'トピックを開放する',

	'VIEW_INFO'				=> '記事の詳細',
	'VIEW_NEXT_TOPIC'		=> '次のトピックへ',
	'VIEW_PREVIOUS_TOPIC'	=> '１つ前のトピックへ',
	'VIEW_RESULTS'			=> '投票結果を見る',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d 件の記事',
	//	2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> '未読記事へ',
	'VOTE_SUBMITTED'		=> '投票しました',
	'VOTE_CONVERTED'		=> 'データコンバートされた投票トピックの投票オプションを変更することはできません。残念ながら現在はサポート外です。',

));
