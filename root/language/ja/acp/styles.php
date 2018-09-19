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
	'ACP_STYLES_EXPLAIN'	=> 'ここではスタイルの管理を行うことができます。スタイルの編集、削除、有効化/無効化、作成、インストールを行うことができます。プレビューする事によってそのスタイルがどのようなデザインなのかを実際に見て確認する事もできます。スタイル名の隣の数字は登録ユーザー（ボット含む）が選択しているスタイルの数です。	ユーザーのスタイルをデフォルトスタイルに上書きするように設定している場合でもユーザーが選択しているスタイルがカウントされる点にご注意ください。',

	'CANNOT_BE_INSTALLED'			=> '未インストール状態のスタイル',
	'CONFIRM_UNINSTALL_STYLES'		=> '選択したスタイルを本当にアンインストールしてもよろしいですか？',
	'COPYRIGHT'						=> '著作権',

	'DEACTIVATE_DEFAULT'		=> 'デフォルトスタイルを無効化する事はできません',
	'DELETE_FROM_FS'			=> 'ファイルの削除',
	'DELETE_STYLE_FILES_FAILED'	=> 'スタイル "%s" を削除する際にエラーが発生しました',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'スタイル "%s" のファイルを全て削除しました',
	'DETAILS'					=> '詳細データ',

	'INHERITING_FROM'			=> '継承するスタイル',
	'INSTALL_STYLE'				=> 'スタイルのインストール',
	'INSTALL_STYLES'			=> 'スタイルのインストール',
	'INSTALL_STYLES_EXPLAIN'	=> 'ここではスタイルのインストールを行うことができます。<br />未インストール状態のスタイルは下のリストに表示されます。リストに新しいスタイルを表示させるにはスタイルを styles ディレクトリへアップロードしてください。',
	'INVALID_STYLE_ID'			=> '不正なスタイルの ID',

	'NO_MATCHING_STYLES_FOUND'	=> 'クエリに一致するスタイルはありません',
	'NO_UNINSTALLED_STYLE'		=> 'インストール可能なスタイルはありません',

	'PURGED_CACHE'				=> 'キャッシュを消去しました',

	'REQUIRES_STYLE'			=> 'このスタイルを利用するにはスタイル "%s" がインストールされている必要があります',
	
	'STYLE_ACTIVATE'			=> '有効にする',
	'STYLE_ACTIVE'				=> '有効',
	'STYLE_DEACTIVATE'			=> '無効にする',
	'STYLE_DEFAULT'				=> 'デフォルトスタイルに指定する',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'スタイルをデフォルトスタイルにするにはそのスタイルを先に有効化しておく必要があります',
	'STYLE_ERR_INVALID_PARENT'	=> '親スタイルが不正です',
	'STYLE_ERR_NAME_EXIST'		=> 'その名前のスタイルは既に存在しています',
	'STYLE_ERR_STYLE_NAME'		=> 'スタイル名を入力する必要があります。',
	'STYLE_INSTALLED'			=> 'スタイル "%s" をインストールしました',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'インストール済みスタイルのリストへ戻る',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'スタイルをさらにインストールする',
	'STYLE_NAME'				=> 'スタイル名',
	'STYLE_NAME_RESERVED'		=> 'スタイル "%s" をインストールする事はできません。スタイル名が不正です。',
	'STYLE_NOT_INSTALLED'		=> 'スタイル "%s" はインストールされませんでした',
	'STYLE_PATH'				=> 'スタイルのパス',
	'STYLE_UNINSTALL'			=> 'アンインストール',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'スタイル "%s" をアンインストールする事はできません。このスタイルを継承している子スタイルが存在しています。',
	'STYLE_UNINSTALLED'			=> 'スタイル "%s" のアンインストールに成功しました',
	'STYLE_PHPBB_VERSION'		=> 'phpBB バージョン',
	'STYLE_USED_BY'				=> '使用ユーザー数（ボット含む）',
	'STYLE_VERSION'				=> 'Style バージョン',

	'UNINSTALL_DEFAULT'		=> 'デフォルトスタイルをアンインストールする事はできません',

	'BROWSE_STYLES_DATABASE'	=> 'スタイルデータベースを参照する',
));
