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
	'ADD_ATTACHMENT'			=> 'ファイル添付',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'ファイルを添付します',
	'ADD_FILE'					=> 'ファイル追加',
	'ADD_POLL'					=> '投票の作成',
	'ADD_POLL_EXPLAIN'			=> '投票トピックにしたくない場合はフィールドを空白のままにしてください',
	'ALREADY_DELETED'			=> '記事は既に削除されています',
	'ATTACH_DISK_FULL'			=> 'このファイルを添付するのに必要なディスクスペースがありません',
	'ATTACH_QUOTA_REACHED'		=> '掲示板の添付ファイル保管スペースが限界に達したため、これ以上ファイルをアップロードすることはできません',
	'ATTACH_SIG'				=> 'サインを追加する（サインはユーザーコントロールパネルで変更できます）',

	'BBCODE_A_HELP'				=> '添付ファイルのインライン表示: [attachment=]ファイル名.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'ボールド（太字）: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'コード表示: [code]code[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'フォントサイズ: [size=85]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s: <em>OFF</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s: <em>ON</em>',
	'BBCODE_I_HELP'				=> 'イタリック（斜体）: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'リスト: [list][*]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'リスト要素: [*]text',
	'BBCODE_O_HELP'				=> '番号付きリスト: 例. [list=1][*]候補１[/list] または [list=a][*]候補 a[/list]',
	'BBCODE_P_HELP'				=> '画像: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> '引用: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'フォントカラー: [color=red]text[/color] または [color=#FF0000]text[/color]',
	'BBCODE_U_HELP'				=> 'アンダーライン（下線）: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'ハイパーリンク: [url]http://url[/url] または [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'リスト: リスト要素の追加',
	'BUMP_ERROR'				=> 'トピックに記事が投稿されて間もないため、しばらく時間が経つまでトピックを上げることはできません',

	'CANNOT_DELETE_REPLIED'		=> '既に返信された記事を削除することはできません',
	'CANNOT_EDIT_POST_LOCKED'	=> '凍結されているため記事を編集することはできません',
	'CANNOT_EDIT_TIME'			=> '一定時間経過したため記事を編集または削除できません',
	'CANNOT_POST_ANNOUNCE'		=> '告知トピックを投稿する権限がありません',
	'CANNOT_POST_STICKY'		=> '注目トピックを投稿する権限がありません',
	'CHANGE_TOPIC_TO'			=> 'トピックタイプの変更',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> '%1$d 字のメッセージです',
	//	2	=> 'Your message contains %1$d characters.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> '%1$d 字のサインです',
	//	2	=> 'Your signature contains %1$d characters.',
	),
	'CLOSE_TAGS'				=> 'タグを閉じる',
	'CURRENT_TOPIC'				=> '現在のトピック',

	'DELETE_FILE'				=> 'ファイル削除',
	'DELETE_MESSAGE'			=> '【削除済みメッセージ】',
	'DELETE_MESSAGE_CONFIRM'	=> 'このメッセージを本当に削除してもよろしいですか？',
	'DELETE_OWN_POSTS'			=> 'この記事を削除することはできません。削除できるのはユーザー自身が投稿した記事だけです。',
	'DELETE_PERMANENTLY'		=> '永久的に削除する',
	'DELETE_POST_CONFIRM'		=> 'この記事を本当に削除してもよろしいですか？',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'この記事を<strong>永久的に</strong>削除してもよろしいですか？',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> '永久的に削除されたこの記事を復元することはできません',
		2	=> '永久的に削除された %1$d 記事を復元することはできません',
	),
	'DELETE_POSTS_CONFIRM'		=> 'これらの記事を本当に削除してもよろしいですか？',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'これらの記事を<strong>永久的に</strong>削除してもよろしいですか？',
	'DELETE_REASON'				=> '削除の理由',
	'DELETE_REASON_EXPLAIN'		=> 'モデレータに対して表示されます',
	'DELETE_POST_WARN'			=> 'この記事を削除する',
	'DELETE_TOPIC_CONFIRM'		=> 'このトピックを本当に削除してもよろしいですか？',
	'DELETE_TOPIC_PERMANENTLY'	=> '永久的に削除された記事を復元することはできません',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> '永久的に削除されたこの記事を復元することはできません',
		2	=> '永久的に削除された %1$d 記事を復元することはできません',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'このトピックを<strong>永久的に</strong>削除してもよろしいですか？',
	'DELETE_TOPICS_CONFIRM'		=> 'これらのトピックを本当に削除してもよろしいですか？',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'これらのトピックを<strong>永久的に</strong>削除してもよろしいですか？',
	'DISABLE_BBCODE'			=> 'BBCode を無効にする',
	'DISABLE_MAGIC_URL'			=> 'URL を自動的にパースしない',
	'DISABLE_SMILIES'			=> 'スマイリーを無効にする',
	'DISALLOWED_CONTENT'		=> 'アップロードファイルの内容と MIME Type が一致しなかったため、アップロードファイルを拒否しました',
	'DISALLOWED_EXTENSION'		=> '拡張子 %s は許可されていません',
	'DRAFT_LOADED'				=> '下書きをロードしました。記事を完成させてください。<br />記事を投稿すると下書きは自動的に削除されます。',
	'DRAFT_LOADED_PM'			=> '下書きをロードしました。プライベートメッセージを完成させてください。<br />プライベートメッセージを投稿すると下書きは自動的に削除されます。',
	'DRAFT_SAVED'				=> '下書きのセーブに成功しました',
	'DRAFT_TITLE'				=> '下書きの件名',

	'EDIT_REASON'				=> '記事の編集理由',
	'EMPTY_FILEUPLOAD'			=> 'アップロードファイルが空です',
	'EMPTY_MESSAGE'				=> '投稿するにはメッセージを入力する必要があります',
	'EMPTY_REMOTE_DATA'			=> 'ファイルをアップロードできませんでした。手動でアップロードしてください。',

	'FLASH_IS_OFF'				=> '[flash]: <em>OFF</em>',
	'FLASH_IS_ON'				=> '[flash]: <em>ON</em>',
	'FLOOD_ERROR'				=> '連続して投稿する権限がありません。しばらく時間が経ってから投稿してください。',
	'FONT_COLOR'				=> 'フォントカラー',
	'FONT_COLOR_HIDE'			=> 'フォントカラーを隠す',
	'FONT_HUGE'					=> '極大',
	'FONT_LARGE'				=> '大',
	'FONT_NORMAL'				=> '標準',
	'FONT_SIZE'					=> 'フォントサイズ',
	'FONT_SMALL'				=> '小',
	'FONT_TINY'					=> '極小',

	'GENERAL_UPLOAD_ERROR'		=> '%s にファイルをアップロードできませんでした',

	'IMAGES_ARE_OFF'			=> '[img]: <em>OFF</em>',
	'IMAGES_ARE_ON'				=> '[img]: <em>ON</em>',
	'INVALID_FILENAME'			=> ' %s は正常なファイル名ではありません',

	'LOAD'						=> 'ロード',
	'LOAD_DRAFT'				=> '下書きをロードする',
	'LOAD_DRAFT_EXPLAIN'		=> '下書きをロード（読み込み）します。下書きをロードするとフォーム内テキストが全て下書きに置き換わりますのでご注意ください。下書きの閲覧、編集、削除はユーザーコントロールパネルで行うことができます。',
	'LOGIN_EXPLAIN_BUMP'		=> 'このフォーラムでトピックを上げるにはログインが必要です',
	'LOGIN_EXPLAIN_DELETE'		=> 'このフォーラムで記事を削除するにはログインが必要です',
	'LOGIN_EXPLAIN_POST'		=> 'このフォーラムで記事を投稿するにはログインが必要です',
	'LOGIN_EXPLAIN_QUOTE'		=> 'このフォーラムで返信記事を投稿するにはログインが必要です',
	'LOGIN_EXPLAIN_REPLY'		=> 'このフォーラムで返信記事を投稿するにはログインが必要です',

	'MAX_FONT_SIZE_EXCEEDED'	=> '使用できるフォントの最大サイズは %d です',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
			1	=> '使用できる Flashファイル の最大サイズ（高さ）は %d pix です',
	//		2	=> 'Your flash files may only be up to %d pixels high.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
			1	=> '使用できる Flashファイル の最大サイズ（横幅）は %d pix です',
	//		2	=> 'Your flash files may only be up to %d pixels wide.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
			1	=> '使用できる画像ファイルの最大サイズ（高さ）は %d pix です',
	//		2	=> 'Your images may only be up to %1$d pixels high.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
			1	=> '使用できる画像ファイルの最大サイズ（横幅）は %d pix です',
	//		2	=> 'Your images may only be up to %d pixels wide.',
	),
	
	'MESSAGE_BODY_EXPLAIN'		=> array(
			0	=> '', // zero means no limit, so we don't view a message here.
			1	=> 'こちらにメッセージをご入力ください。<strong>%d</strong> 字まで入力できます。',
	//		2	=> 'Enter your message here, it may contain no more than <strong>%d</strong> characters.',
	),
	'MESSAGE_DELETED'			=> 'メッセージを削除しました',
	'MORE_SMILIES'				=> 'スマイリーを全て表示する',

	'NOTIFY_REPLY'				=> '返信が投稿されたら通知する',
	'NOT_UPLOADED'				=> 'ファイルをアップロードできませんでした',
	'NO_DELETE_POLL_OPTIONS'	=> '投票オプションに既に票が存在するため削除できません',
	'NO_PM_ICON'				=> 'アイコンなし',
	'NO_POLL_TITLE'				=> '投票のお題をご入力ください',
	'NO_POST'					=> 'その記事は存在しません',
	'NO_POST_MODE'				=> '投稿モードが指定されていません',
	'NO_TEMP_DIR'				=> '一時フォルダーが見つからない、または書き込み可能ではありません',

	'PARTIAL_UPLOAD'			=> 'ファイルは一部だけアップロードされました',
	'PHP_UPLOAD_STOPPED'		=> 'A PHP extension has stopped the file upload.',
	'PHP_SIZE_NA'				=> '添付ファイルのサイズが大き過ぎます。<br />PHP設定ファイル php.ini の設定オプション upload_max_filesize の値の取得に失敗しました。',
	'PHP_SIZE_OVERRUN'			=> '添付ファイルのサイズが大き過ぎます。アップロードできるファイルの最大サイズは %1$d %2$s です。<br />PHP設定ファイル php.ini の設定オプション upload_max_filesize の値を phpBB3 が上書きすることはできません。',
	'PLACE_INLINE'				=> 'インライン表示',
	'POLL_DELETE'				=> '投票を削除する',
	'POLL_FOR'					=> '投票の受付期間',
	'POLL_FOR_EXPLAIN'			=> '0 にすると投票の受付が終了することはありません',
	'POLL_MAX_OPTIONS'			=> 'ユーザー１人あたりの投票可能オプション数',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ユーザーが投票する際、いくつまで投票オプションを選択できるかを指定してください',
	'POLL_OPTIONS'				=> '投票オプション',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> '１行につき１つのオプションをご入力ください。<strong>%d</strong> 個までオプションを作成できます。',
	//	2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> '１行につき１つのオプションをご入力ください。<strong>%d</strong> 個までオプションを作成できます。オプションを削除または追加した場合、投票結果は全てリセットされます。',
	//	2	=> 'Place each option on a new line. You may enter up to <strong>%d</strong> options. If you remove or add options all previous votes will be reset.',
	),
	'POLL_QUESTION'				=> '投票のお題',
	'POLL_TITLE_TOO_LONG'		=> '投票のお題は １００ 字以下にしてください',
	'POLL_TITLE_COMP_TOO_LONG'	=> '投票のお題が画面上、大きくなりすぎる怖れがあります。BBCode またはスマイリーの削除をご検討ください。',
	'POLL_VOTE_CHANGE'			=> '再投票を許可する',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> '許可した場合、ユーザーは投票先オプションを自由に変更できます',
	'POSTED_ATTACHMENTS'		=> '添付ファイル',
	'POST_APPROVAL_NOTIFY'		=> '記事が承認されるとその旨のメッセージがあなたに通知されます',
	'POST_CONFIRMATION'			=> '投稿の確認',
	'POST_CONFIRM_EXPLAIN'		=> '不正プログラムによる投稿を防ぐため、CAPTCHA認証コード の入力を強制しています。認証コードは画像に表示されています。CAPTCHA が表示されない、もしくは視覚的に問題がある場合は%s管理人%sにご連絡ください。',
	'POST_DELETED'				=> '記事の削除に成功しました',
	'POST_EDITED'				=> '記事の編集に成功しました',
	'POST_EDITED_MOD'			=> '記事の編集に成功しました。編集内容はモデレータの承認後に記事に反映されます。',
	'POST_GLOBAL'				=> '全体告知',
	'POST_ICON'					=> '記事アイコン',
	'POST_NORMAL'				=> '通常',
	'POST_REVIEW'				=> '記事のレビュー',
	'POST_REVIEW_EDIT'			=> '編集記事のレビュー',
	'POST_REVIEW_EDIT_EXPLAIN'	=> '記事編集中に他のユーザーがこの記事を編集しました。送信前に編集された記事をご確認ください。',
	'POST_REVIEW_EXPLAIN'		=> '記事作成中に他のユーザーがこのトピックに記事を投稿しました。投稿する前に返信記事を全てご確認ください。',
	'POST_STORED'				=> '記事の投稿に成功しました',
	'POST_STORED_MOD'			=> '記事の投稿に成功しました。モデレータが記事を承認すると掲載されます。',
	'POST_TOPIC_AS'				=> 'トピックタイプ',
	'PROGRESS_BAR'				=> '進行状況',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
			1	=> '引用入れ子の深さ制限は %1$d です',
	//		2	=> 'You may embed only %d quotes within each other.',
	),
	'QUOTE_NO_NESTING'			=> '引用の中に引用を含めることはできません',
	
	'REMOTE_UPLOAD_TIMEOUT'		=> 'リクエストがタイムアウトしたためファイルのアップロードに失敗しました',
	'SAVE'						=> 'セーブ',
	'SAVE_DATE'					=> 'セーブした日付',
	'SAVE_DRAFT'				=> '下書きのセーブ',
	'SAVE_DRAFT_CONFIRM'		=> '下書きをセーブすると記事の件名と本文以外の情報 - 添付ファイルと投票 - は失われる点にご注意ください。下書きをセーブしてもよろしいですか？',
	'SMILIES'					=> 'スマイリー',
	'SMILIES_ARE_OFF'			=> 'スマイリー: <em>OFF</em>',
	'SMILIES_ARE_ON'			=> 'スマイリー: <em>ON</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'この期間が過ぎるとトピックは通常トピックに自動的に変更されます',
	'STICK_TOPIC_FOR'			=> '注目/告知/全体告知 の有効期間',
	'STICK_TOPIC_FOR_EXPLAIN'	=> '0 にすると 注目/告知/全体告知 トピックが通常トピックに自動的に変更されることはありません',
	'STYLES_TIP'				=> 'Tip: テキストを選択した状態で BBCodeボタン をクリックすると選択部分がタグで囲まれます',

	'TOO_FEW_CHARS'				=> 'メッセージが短すぎます',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> '%1$d 字以上にする必要があります',
	//	2	=> 'You need to enter at least %1$d characters.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> '投票オプションを少なくとも２つ作成してください',
	'TOO_MANY_ATTACHMENTS'		=> 'これ以上ファイルを添付することはできません。添付可能なファイルの最大数は %d です。',
	'TOO_MANY_CHARS'			=> 'メッセージが長すぎます',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> '入力可能な最大字数は %1$d 字です',
	),
	'TOO_MANY_POLL_OPTIONS'		=> '投票オプションが多すぎます',
	'TOO_MANY_SMILIES'			=> 'メッセージに含まれているスマイリーが多過ぎます。使用可能なスマイリーの最大数は %d です。',
	'TOO_MANY_URLS'				=> 'メッセージに含まれている URL が多すぎます。使用可能な URL の最大数は %d です。',
	'TOO_MANY_USER_OPTIONS'		=> 'ユーザー１人あたりの投票可能オプション数を、存在する投票オプション数以上に設定することはできません。',
	'TOPIC_BUMPED'				=> 'トピックの 上げ に成功しました',

	'UNAUTHORISED_BBCODE'		=> 'BBCode を使用する権限がありません： %s',
	'UNGLOBALISE_EXPLAIN'		=> 'トピックの表示先フォーラムを選択してください',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'メッセージにサポート外の字が含まれています:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> '件名にサポート外の字が含まれています:<br />%s',
	'UPDATE_COMMENT'			=> 'コメントの更新',
	'URL_INVALID'				=> '入力した URL が正しくありません',
	'URL_NOT_FOUND'				=> '指定したファイルが見つかりませんでした',
	'URL_IS_OFF'				=> '[url]: <em>OFF</em>',
	'URL_IS_ON'					=> '[url]: <em>ON</em>',
	'USER_CANNOT_BUMP'			=> 'このフォーラムのトピックを上げる権限がありません',
	'USER_CANNOT_DELETE'		=> 'このフォーラムのトピックを削除する権限がありません',
	'USER_CANNOT_EDIT'			=> 'このフォーラムの記事を編集する権限がありません',
	'USER_CANNOT_REPLY'			=> 'このフォーラムで返信記事を投稿する権限がありません',
	'USER_CANNOT_FORUM_POST'	=> 'このフォーラムに記事を投稿することはできません',

	'VIEW_MESSAGE'				=> '%s投稿した記事を表示する%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%s送信済みプライベートメッセージを表示する%s',

	'WRONG_FILESIZE'			=> 'ファイルサイズが大き過ぎます。許可されているファイルの最大サイズは %1$d %2$s です。',
	'WRONG_SIZE'				=> '画像サイズ（横幅 x 高さ、単位は pix）を最小 %1$s x %2$s から最大 %3$s x %4$s の大きさに収めてください。アップロードされた画像のサイズは %5$s x %6$s です。',
));
