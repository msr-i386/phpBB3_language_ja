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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'ここでは検索インデクスを管理できます。サーバの負担を少しでも軽くするため、利用していない検索バックエンドのインデクスは削除すべきです。検索設定を変更しても既に存在しているインデクスは影響を受けません。既存のインデクスに対して新しいインデクス設定ルールを反映するにはインデクスを再構築する必要があります。',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'ここでは検索バックエンドを指定できます（検索バックエンドは記事のインデクス作成と検索処理を行います）。また、検索処理に制限を課す事によってサーバ負荷を減らす事もできます。バックエンド共通の設定項目もありますが、バックエンド独自の設定項目もあります。<br /><br /><em>インデクス（index）とは索引付けの事であり、具体的には記事が投稿された際に記事の件名と文章中に含まれるキーワードを抜き出してデータベースに保管する事を意味します。検索処理はデータベースに保管されたこのインデクス情報を基にして行われます。</em>',

	'COMMON_WORD_THRESHOLD'					=> 'コモンワード判定レベル',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'ある検索キーワードが全体の記事数に対してこのパーセンテージ （％） 以上の記事数をヒットする場合、その検索キーワードは コモンワード (common word) とみなされ検索処理されません。コモンワードは検索クエリ （データベースへの問い合わせ） の際に無視されます。この機能が働くのは記事数が １００ を超えている場合のみです。もしこの機能を無効化したい場合は 0 をご入力ください。コモンワード判定レベルを変更した場合、新しいコモンワード判定レベルを過去に投稿された記事に対して適用するにはインデクスを再構築する必要があります。',
	'CONFIRM_SEARCH_BACKEND'				=> '検索バックエンドを本当に変更してもよろしいですか？ 検索バックエンドを変更した後は新しい検索バックエンドで検索インデクスを再構築する必要があります。その際、以前の検索バックエンドに戻るつもりがないならサーバ負荷を少しでも軽くするため以前のバックエンドのインデクスは削除しておくべきです。',
	'CONTINUE_DELETING_INDEX'				=> '継続中のインデクス削除処理を再開する',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'インデクス削除中です。“検索インデクス” ページへアクセスするには削除を完了させるかキャンセルする必要があります。',
	'CONTINUE_INDEXING'						=> '継続中のインデクス作成処理を再開する',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'インデクス作成中です。“検索インデクス” ページへアクセスするには作成を完了させるかキャンセルする必要があります。',
	'CREATE_INDEX'							=> 'インデクス作成',

	'DELETE_INDEX'							=> 'インデクス削除',
	'DELETING_INDEX_IN_PROGRESS'			=> 'インデクス削除の処理中です',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '検索バックエンドは現在、インデクスを削除中です。処理が終わるには数分かかる事もあります。',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Fulltext mysql は MySQL4 以上で使用できます',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Fulltext mysql を使用するにはデータベースのテーブルフォーマットが MyISAM または InnoDB である必要があります。InnoDB の場合、MySQL のバージョンは 5.6.8 以上である必要があります。',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'インデクス済み記事数',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'この数より小さい字数のキーワードはインデクスの対象となりません。	この設定を変更するには MySQL のコンフィグ設定を変更する必要があります。',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'この数を超える字数のキーワードはインデクスの対象となりません。この設定を変更するには MySQL のコンフィグ設定を変更する必要があります。',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'PostgreSQL Fulltext はデータベースが PostgreSQL の場合に限り利用できます',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'				=> 'インデクス済み記事数',
	'FULLTEXT_POSTGRES_VERSION_CHECK'			=> 'PostgreSQLバージョン',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'	=> 'この検索バックエンドを利用するには PostgreSQL のバージョンが 8.3 以上である必要があります',
	'FULLTEXT_POSTGRES_TS_NAME'					=> 'テキスト検索環境構成:',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'			=> 'パーサと辞書を決定するために使われます',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'キーワードの最小字数',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'	=> 'この字数に満たないキーワードは検索処理されません',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'キーワードの最小字数',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'	=> 'この字数を越えるキーワードは検索処理されません',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Sphinx の構成には sphinx.conf ファイルが必要です。sphinx.conf のコードを生成するには以下の設定項目に入力して送信してください。',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'データディレクトリへのパス',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'このディレクトリにインデクスファイルとログファイルが格納されます。パスの最後にスラッシュ(/)を含めてください。セキュリティ上の理由から、インターネットからアクセス可能な領域にデータディレクトリを作るべきではありません。',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> '差分インデクス更新記事数',
	'FULLTEXT_SPHINX_HOST'					=> '検索デーモン起動ホスト名',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> '検索デーモン（searchd) を実行させるホストの名前です。空のままにするとデフォルトの localhost になります。',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'インデクサのメモリ上限',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'ローカルコンピュータの RAM の値より常に低く設定してください。もしコンピュータのパフォーマンスが落ちるようならこの値をより低く設定してみるべきでしょう。',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'メインインデクス更新記事数',
	'FULLTEXT_SPHINX_PORT'					=> '検索デーモン使用ポート番号',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> '検索デーモン（searchd) が使用するポート番号です。空のままにするとデフォルトの Sphinx API ポート番号である 9312 が使われます。',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'phpBB に於いて Sphinx がサポートする検索は MySQL と PostgreSQL だけです',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinxコンフィグファイル（sphinx.conf）',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> '生成されたコード内容です。コードを sphinx.conf ファイルにペーストしてください。[dbuser] と [dbpassword] はプレースホルダです。ペーストする際にプレースホルダ各々を正しいデータベース接続情報に置き換えてください。',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'データディレクトリへのパスが入力されていません。パスは Sphinx のコンフィグファイルのコード内容を生成するために必要です。',

	'GENERAL_SEARCH_SETTINGS'				=> '検索バックエンド共通設定',
	'GO_TO_SEARCH_INDEX'					=> '“検索インデクス” ページへ移動',

	'INDEX_STATS'							=> 'インデクス統計',
	'INDEXING_IN_PROGRESS'					=> 'インデクス作成中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '検索バックエンドは現在、掲示板の全投稿記事をインデクスしています。記事数によっては数分から数時間かかる事もあります',

	'LIMIT_SEARCH_LOAD'						=> 'サーバCPU使用率の制限',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '検索処理で CPU使用率 がこの値を超えた時、掲示板は自動的にオフライン状態に移行します。0 から 1.0 の範囲の数字をご入力ください。 1.0 は CPU使用率100％ を意味します。この機能は UNIX系OS に対してのみ効果があります。',

	'MAX_SEARCH_CHARS'						=> 'インデクスの最大文字数',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'この数を超える字数のキーワードはインデクスの対象となりません',
	'MAX_NUM_SEARCH_KEYWORDS'				=> '検索キーワードの最大数',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> '同時に検索できるキーワードの最大数です。0 にすると上限はありません。',
	'MIN_SEARCH_CHARS'						=> 'インデクスの最小文字数',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'この数より小さい字数のキーワードはインデクスの対象となりません',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '投稿者名の最小文字数',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ワイルドカード(*)を用いて投稿者検索をする際、この数以上の文字を入力する必要があります。この数未満の文字数の投稿者を検索するには投稿者のユーザー名を完全に入力する必要があります。',

	'PROGRESS_BAR'							=> '進行状況',

	'SEARCH_GUEST_INTERVAL'					=> 'ゲストに対する連続検索制限',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'ゲストが連続して検索する際、検索と検索の間にインターバルとして挟まれる秒数です。個々のゲストに対してチェックされます。この機能を無効にしたい場合は 0 をご入力ください。',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> '記事ID %2$d までインデクスの作成を完了しました。このステップで %1$d 個の記事のインデクスを作成しました。<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> '現在のインデクス作成速度はおよそ１秒間に %1$.1f 個です。<br />インデクスの作成はまだ進行中です…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> '記事ID %2$d までのインデクスを削除しました。<br />インデクスの削除はまだ進行中です…',
	),
	'SEARCH_INDEX_CREATED'					=> 'インデクスの作成に成功しました',
	'SEARCH_INDEX_REMOVED'					=> 'インデクスの削除に成功しました',
	'SEARCH_INTERVAL'						=> '登録ユーザーに対する連続検索制限',
	'SEARCH_INTERVAL_EXPLAIN'				=> '登録ユーザーが連続して検索する際、検索と検索の間にインターバルとして挟まれる秒数です。個々の登録ユーザーに対してチェックされます。この機能を無効にしたい場合は 0 をご入力ください。',
	'SEARCH_STORE_RESULTS'					=> '検索結果のキャッシュの有効期間',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'この秒数が過ぎると検索結果のキャッシュ情報は破棄されます。0 に設定した場合、検索結果はキャッシュされません。',
	'SEARCH_TYPE'							=> '検索バックエンド',
	'SEARCH_TYPE_EXPLAIN'					=> '記事のインデクス作成と検索処理を行うエンジンを選択します。デフォルトで phpBB Native Fulltext を利用します。',
	'SWITCHED_SEARCH_BACKEND'				=> '検索バックエンドを変更しました。記事を検索するには、検索バックエンドの検索インデクスが作成されている必要があります。',

	'TOTAL_WORDS'							=> 'インデクスされたキーワードの総数',
	'TOTAL_MATCHES'							=> 'インデクスされたキーワードとマッチする記事の のべ総数',

	'YES_SEARCH'							=> '検索機能を有効にする',
	'YES_SEARCH_EXPLAIN'					=> '記事検索機能とメンバー検索機能を有効にします',
	'YES_SEARCH_UPDATE'						=> 'インデクスを作成する',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '記事投稿時にインデクスを作成します。検索機能が無効に設定されている場合は作成されません。',
));
