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
	'ACP_FILES'						=> 'Admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'ここでは言語パックの インストール/アンインストール を行うことができます。アスタリスク（*）は掲示板のデフォルト言語を意味しています。',

	'DELETE_LANGUAGE_CONFIRM'		=> '“%s” を本当にアンインストールしてもよろしいですか？',

	'INSTALLED_LANGUAGE_PACKS'		=> 'インストール済みの言語パック',
		
	'LANGUAGE_DETAILS_UPDATED'			=> '言語データの更新に成功しました',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'この言語パックは既にインストールされています',
	'LANGUAGE_PACK_DELETED'				=> '言語パック “%s” のアンインストールに成功しました。同時にこの言語パックを使用していた全ユーザーのユーザー設定オプション “掲示板の言語” を “掲示板のデフォルト言語” に変更しました。',
	'LANGUAGE_PACK_DETAILS'				=> '言語パックのデータ',
	'LANGUAGE_PACK_INSTALLED'			=> '言語パック “%s” のインストールに成功しました',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'カスタムプロフィールフィールドの文字情報はデフォルト言語のものを受け継ぎました。必要であれば変更してください。',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'ローカル言語名',
	'LANGUAGE_PACK_NAME'				=> '名前',
	'LANGUAGE_PACK_NOT_EXIST'			=> '言語パックが存在していません',
	'LANGUAGE_PACK_USED_BY'				=> '使用ユーザー数（ボット含む）',
	'LANGUAGE_VARIABLE'					=> '言語値',
	'LANG_AUTHOR'						=> '言語パック作成者',
	'LANG_ENGLISH_NAME'					=> '英語名',
	'LANG_ISO_CODE'						=> 'ISOコード',
	'LANG_LOCAL_NAME'					=> 'ローカル言語名',

	'MISSING_LANG_FILES'			=> '言語ファイルが見つかりません',
	'MISSING_LANG_VARIABLES'		=> '言語値が見つかりません',

	'NO_FILE_SELECTED'				=> '言語ファイルを指定していません',
	'NO_LANG_ID'					=> '言語パックを指定していません',
	'NO_REMOVE_DEFAULT_LANG'		=> 'デフォルト言語である言語パックをアンインストールする事はできません。<br />この言語パックをアンインストールするには掲示板のデフォルト言語を先に変更してください。',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '言語パックがインストールされていません',

	'THOSE_MISSING_LANG_FILES'			=> '次の言語ファイルが言語フォルダ “%s” 内に見つかりませんでした',
	'THOSE_MISSING_LANG_VARIABLES'		=> '次の言語値が言語パック “%s” 内に見つかりませんでした',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '未インストール状態の言語パック',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> '言語パックデータベースを参照する',
));
