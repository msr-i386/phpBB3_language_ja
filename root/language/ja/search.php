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
	'ALL_AVAILABLE'			=> 'すべて',
	'ALL_RESULTS'			=> 'すべて',

	'DISPLAY_RESULTS'		=> '検索結果の表示',

	'FOUND_SEARCH_MATCHES'		=> array(
			1	=> '検索結果 %d 件',
	//		2	=> 'Search found %d matches',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
			1	=> '検索結果 %d 件以上',
	//		2	=> 'Search found more than %d matches',
	),
		
	'GLOBAL'				=> '全体告知トピック',

	'IGNORED_TERMS'			=> '無効な検索キーワード',
	'IGNORED_TERMS_EXPLAIN'	=> '次の検索キーワードは無効です: <strong>%s</strong>',

	'JUMP_TO_POST'			=> '記事へ移動',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '投稿記事を確認するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> '未読記事を確認するにはユーザー登録とログインが必要です',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> '最新記事を確認するにはユーザー登録とログインが必要です',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
			1	=> '検索キーワードが多すぎます。 %1$d 個以上の検索キーワードを同時に検索しないようお願い致します。',
	//		2	=> 'You specified too many words to search for. Please do not enter more than %1$d words.',
	),
	
	'NO_KEYWORDS'			=> '有効な検索キーワードを少なくとも１つご入力ください。検索キーワードは %s 以上 %s 以下である必要があります。',
	'NO_RECENT_SEARCHES'	=> '最近検索されたキーワードはありません',
	'NO_SEARCH'				=> '検索機能を使用する権限がありません',
	'NO_SEARCH_RESULTS'		=> '検索に一致する記事が見つかりませんでした',
	'NO_SEARCH_LOAD'		=> '申し訳ありませんが、現在サーバーが高負荷のため検索機能を使用することができません。後でもう一度お試しください。',
	'NO_SEARCH_TIME'		=> array(
		1	=> '連続して検索することはできません。数分後に再度お試しください。',
	//	2	=> 'Sorry but you cannot use search at this time. Please try again in %d seconds.',
	),
	'NO_SEARCH_UNREADS'		=> '未読記事を検索することはできません',
	'WORD_IN_NO_POST'		=> '検索キーワード <strong>%s</strong> を含む記事が存在しないため検索結果は 0 件です',
	'WORDS_IN_NO_POST'		=> '検索キーワード <strong>%s</strong> を含む記事が存在しないため検索結果は 0 件です',

	'POST_CHARACTERS'		=> '文字',
	'PHRASE_SEARCH_DISABLED'	=> 'フレーズの完全一致検索はサポートされていません',
	
	'RECENT_SEARCHES'		=> '最近検索されたキーワード',
	'RESULT_DAYS'			=> '期間内検索',
	'RESULT_SORT'			=> 'ソート',
	'RETURN_FIRST'			=> '表示文字数',
	'GO_TO_SEARCH_ADV'		=> '詳細検索ページへ移動する',
	
	'SEARCHED_FOR'				=> '有効な検索キーワード',
	'SEARCHED_TOPIC'			=> '検索トピック',
	'SEARCHED_QUERY'			=> '検索クエリ',
	'SEARCH_ALL_TERMS'			=> 'AND検索 または クエリ検索',
	'SEARCH_ANY_TERMS'			=> 'OR検索',
	'SEARCH_AUTHOR'				=> '投稿者検索',
	'SEARCH_AUTHOR_EXPLAIN'		=> '部分一致としてワイルドカード(*)を使用できます',
	'SEARCH_FIRST_POST'			=> 'トピックの最初の記事のみ',
	'SEARCH_FORUMS'				=> 'フォーラム',
	'SEARCH_FORUMS_EXPLAIN'		=> '検索を行いたいフォーラムを選択します。下の “サブフォーラム” を “いいえ” にしていない限り、サブフォーラム内の記事も自動的に検索されます。',
	'SEARCH_IN_RESULTS'			=> 'この検索結果からさらに検索',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '検索したくない記事のキーワードには <strong>-</strong> をキーワードの直前に置いてください。部分一致としてワイルドカード(*)を使用できます。-* を使用する場合はクエリ検索を選択してください。',
	'SEARCH_MSG_ONLY'			=> 'メッセージのみ',
	'SEARCH_OPTIONS'			=> '検索オプション',
	'SEARCH_QUERY'				=> '検索クエリ',
	'SEARCH_SUBFORUMS'			=> 'サブフォーラム',
	'SEARCH_TITLE_MSG'			=> '記事の件名とメッセージ',
	'SEARCH_TITLE_ONLY'			=> 'トピックの件名のみ',
	'SEARCH_WITHIN'				=> '検索対象',
	'SORT_ASCENDING'			=> '昇順',
	'SORT_AUTHOR'				=> '投稿者',
	'SORT_DESCENDING'			=> '降順',
	'SORT_FORUM'				=> 'フォーラム',
	'SORT_POST_SUBJECT'			=> '記事の件名',
	'SORT_TIME'					=> '投稿日時',
	'SPHINX_SEARCH_FAILED'		=> '検索に失敗しました: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> '検索を実行できませんでした。詳細はエラーログをご確認ください。',
	
	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> '投稿者名は %d 字以上である必要があります',
	//	2	=> 'You must specify at least %d characters of the authors name.',
	),
));
