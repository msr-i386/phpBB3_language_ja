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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> '拡張機能',
	'EXTENSIONS'				=> '拡張機能',
	'EXTENSIONS_ADMIN'			=> '拡張機能マネージャ',
	'EXTENSIONS_EXPLAIN'		=> '拡張機能マネージャは phpBB の拡張機能を管理するためのツールです。拡張機能の有効化・無効化とバージョンや詳細情報を確認できます。',
	'EXTENSION_INVALID_LIST'	=> '拡張機能 “%s” は不正です<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> '選択した拡張機能は利用できません。phpBB と PHP のバージョンをご確認ください（詳細情報ページをご覧ください）。',
	'EXTENSION_DIR_INVALID'		=> '選択した拡張機能はディレクトリ構成が不正なため、有効化できません',
	'EXTENSION_NOT_ENABLEABLE'	=> '選択した拡張機能は有効化できません。拡張機能を利用するための必須条件をご確認ください。',

	'DETAILS'				=> '詳細情報',

	'EXTENSIONS_DISABLED'	=> '有効化されていない拡張機能',
	'EXTENSIONS_ENABLED'	=> '有効化された拡張機能',

	'EXTENSION_DELETE_DATA'	=> 'データを消去する',
	'EXTENSION_DISABLE'		=> '無効化する',
	'EXTENSION_ENABLE'		=> '有効化する',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> '拡張機能のデータと設定を全て消去します。拡張機能のファイル群本体は保持されるので、再び有効化すれば拡張機能を利用できます。',
	'EXTENSION_DISABLE_EXPLAIN'		=> '拡張機能を無効化すると掲示板からその機能が取り除かれますが、拡張機能のディレクトリ本体とデータと設定は保持されます',
	'EXTENSION_ENABLE_EXPLAIN'		=> '拡張機能を有効化すると掲示板に新しい機能が追加されます',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> '拡張機能のデータを消去しています。処理が完了するまでページを移動またはリフレッシュしないでください。',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> '拡張機能を無効化しています。処理が完了するまでページを移動またはリフレッシュしないでください。',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> '拡張機能を有効化しています。処理が完了するまでページを移動またはリフレッシュしないでください。',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> '拡張機能のデータの消去に成功しました',
	'EXTENSION_DISABLE_SUCCESS'		=> '拡張機能の無効化に成功しました',
	'EXTENSION_ENABLE_SUCCESS'		=> '拡張機能の有効化に成功しました',

	'EXTENSION_NAME'			=> '拡張機能の名前',
	'EXTENSION_ACTIONS'			=> 'アクション',
	'EXTENSION_OPTIONS'			=> 'オプション',
	'EXTENSION_INSTALL_HEADLINE'=> '拡張機能をインストールするには',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>phpBBの拡張機能データベースから拡張機能をダウンロードします</li>
			<li>ダウンロードしたファイルを解凍し、<samp>ext/</samp>ディレクトリにアップロードします</li>
			<li>拡張機能を有効化します</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> '拡張機能をアップデートするには',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>拡張機能を無効化します</li>
			<li>ファイルシステムから拡張機能のディレクトリを削除します</li>
			<li>拡張機能の最新ディレクトリをアップロードします</li>
			<li>拡張機能を有効化します</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> '拡張機能を掲示板から完全に取り除くには',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>拡張機能を無効化します</li>
			<li>拡張機能のデータを消去します</li>
			<li>ファイルシステムから拡張機能のディレクトリを削除します</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> '“%s” に関連するデータを本当に消去してもよろしいですか？<br /><br />消去されたデータを元に戻す機能は用意されていない点にご注意ください',
	'EXTENSION_DISABLE_CONFIRM'		=> '“%s” を無効化してもよろしいですか？',
	'EXTENSION_ENABLE_CONFIRM'		=> '“%s” を有効化してもよろしいですか？',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> '不安定なバージョンを使用することになりますがよろしいですか？',

	'RETURN_TO_EXTENSION_LIST'	=> '拡張機能のリストへ戻る',

	'EXT_DETAILS'			=> '拡張機能の詳細',
	'DISPLAY_NAME'			=> '表示名',
	'CLEAN_NAME'			=> 'クリーン名',
	'TYPE'					=> 'タイプ',
	'DESCRIPTION'			=> '説明',
	'VERSION'				=> 'バージョン',
	'HOMEPAGE'				=> 'ホームページ',
	'PATH'					=> 'ファイルパス',
	'TIME'					=> 'リリースした日',
	'LICENSE'				=> 'ライセンス',

	'REQUIREMENTS'			=> '必須要件',
	'PHPBB_VERSION'			=> 'phpBBバージョン',
	'PHP_VERSION'			=> 'PHPバージョン',
	'AUTHOR_INFORMATION'	=> '作者情報',
	'AUTHOR_NAME'			=> '名前',
	'AUTHOR_EMAIL'			=> 'メール',
	'AUTHOR_HOMEPAGE'		=> 'ホームページ',
	'AUTHOR_ROLE'			=> '役割',

	'NOT_UP_TO_DATE'		=> '%s は最新ではありません',
	'UP_TO_DATE'			=> '%s は最新です',
	'ANNOUNCEMENT_TOPIC'	=> 'リリース告知',
	'DOWNLOAD_LATEST'		=> '最新バージョンのダウンロード',
	'NO_VERSIONCHECK'		=> 'バージョンチェック情報はありません',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'バージョンを全て再チェックする',
	'FORCE_UNSTABLE'					=> 'アップデートを強制しない',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'バージョンチェックの設定',

	'BROWSE_EXTENSIONS_DATABASE'		=> '拡張機能データベースを参照する',

	'META_FIELD_NOT_SET'	=> '必須なメタフィールド %s がセットされていません',
	'META_FIELD_INVALID'	=> 'メタフィールド %s が不正です',
));
