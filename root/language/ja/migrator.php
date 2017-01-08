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
	'CONFIG_NOT_EXIST'					=> 'The config setting "%s" unexpectedly does not exist.',

	'GROUP_NOT_EXIST'					=> 'The group "%s" unexpectedly does not exist.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Apply dependencies of %s.',
	'MIGRATION_DATA_DONE'				=> 'インストールされたデータ: %1$s; 処理時間: %2$.2f 秒',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'インストール中のデータ: %1$s; 処理時間: %2$.2f 秒',
	'MIGRATION_DATA_RUNNING'			=> 'インストール中のデータ: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'データの移転は既に完了しています: %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'リクエスト処理の実行中に問題が発生したため、処理を中断しました。エラー発生前の状態に出来る限り巻き戻しましたが、本当に巻き戻ったかどうかを掲示板をチェックして確かめるべきです。',
	'MIGRATION_NOT_FULFILLABLE'			=> 'The migration "%1$s" is not fulfillable, missing migration "%2$s".',
	'MIGRATION_NOT_VALID'				=> '%s is not a valid migration.',
	'MIGRATION_SCHEMA_DONE'				=> 'インストールされたスキーマ: %1$s; 処理時間: %2$.2f 秒',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'スキーマをインストール中: %1$s; 処理時間: %2$.2f 秒',  
	'MIGRATION_SCHEMA_RUNNING'			=> 'インストールされたスキーマ: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'A migration is invalid. An if statement helper is missing a condition.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'A migration is invalid. An if statement helper is missing a valid call to a migration step.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'A migration is invalid. A custom callable function could not be called.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'A migration is invalid. An unknown migration tool type was encountered.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'A migration is invalid. An undefined migration tool was encountered.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'A migration is invalid. An undefined migration tool method was encountered.',

	'MODULE_ERROR'						=> 'モジュール構成中にエラーが発生しました: %s',
	'MODULE_EXISTS'						=> 'モジュールは既に存在します: %s',
	'MODULE_EXIST_MULTIPLE'				=> '指定された親モジュールの言語名を持ついくつかのモジュールが既に存在します: %s. 前後のキーを使用して、モジュールの配置を明確にしてください。',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'モジュール情報ファイルがありません: %2$s',
	'MODULE_NOT_EXIST'					=> 'モジュールがありません: %s',

	'PARENT_MODULE_FIND_ERROR'			=> '親モジュールの識別子を特定できません: %s',
	'PERMISSION_NOT_EXIST'				=> 'The permission setting "%s" unexpectedly does not exist.',

	'ROLE_NOT_EXIST'					=> 'The permission role "%s" unexpectedly does not exist.',
));
