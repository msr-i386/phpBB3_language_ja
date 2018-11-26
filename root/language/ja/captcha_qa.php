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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> '答えを正確にご入力ください。答えられるかどうかでスパムボットか否かを判定します。',
	'CONFIRM_QUESTION_WRONG'	=> 'クイズの答え が不正解です',
	'CONFIRM_QUESTION_MISSING'	=> 'CAPTCHA用の質問が取得できませんでした。管理人にご連絡ください。',

	'QUESTION_ANSWERS'			=> '答え',
	'ANSWERS_EXPLAIN'			=> '答えを正確にご入力ください。答えは複数設定することが可能です。その場合、１行につき１つの答えをご入力ください。',
	'CONFIRM_QUESTION'			=> 'クイズ',

	'ANSWER'					=> '答え',
	'EDIT_QUESTION'				=> '答えの編集',
	'QUESTIONS'					=> 'クイズ',
	'QUESTIONS_EXPLAIN'			=> 'ここで作成された “クイズ” と “答え” が CAPTCHA として使用されます。掲示板のデフォルト言語で少なくとも１つ “クイズ” を作成するまでこの CAPTCHA は有効化されない点にご注意ください。“クイズ” はユーザーが答えられるぐらい簡単で且つ Google 検索を実行できる能力を持ったスパムボットが答えられないくらい難しいものが望ましいです。ただ一つの明確な質問が必要です。スパム登録が増えてきた場合は、質問を変更するべきです。大文字・小文字の違いや句読点、半角スペースの有無を区別する場合は、厳密なチェックを有効にしてください。',
	'QUESTION_DELETED'			=> 'クイズを削除しました',
	'QUESTION_LANG'				=> '言語',
	'QUESTION_LANG_EXPLAIN'		=> 'どの言語でクイズを作成するか指定してください。できれば言語毎にクイズを作成してください。',
	'QUESTION_STRICT'			=> '厳密にチェック',
	'QUESTION_STRICT_EXPLAIN'	=> '“はい” にした場合、大文字・小文字の違いと半角スペースの有無がチェックされます',

	'QUESTION_TEXT'				=> 'クイズ',
	'QUESTION_TEXT_EXPLAIN'		=> 'ユーザーに表示されるクイズです',

	'QA_ERROR_MSG'				=> '全てのクイズに答えてください',
	'QA_LAST_QUESTION'			=> 'この CAPTCHAプラグイン が有効な間は “クイズ” を1つ残らず削除することはできません',
));
