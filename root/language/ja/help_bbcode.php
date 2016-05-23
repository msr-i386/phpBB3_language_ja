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
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'はじめに'
	),
	array(
		0 => 'BBCode とは？',
		1 => 'BBCode はユーザーの利便性・システムの安全性のためにシステム側が用意した簡単なマークアップ言語です。BBCode を使用できるか否かは掲示板の設定によります。BBCode を使用できる場合でも投稿時に投稿画面で BBCode を無効にできます。 BBCode はマークアップ言語である点で HTML と似ていますが、タグは &lt; &gt; ではなく角カッコ [ ] で括られます。BBCode を使用することによって文章の見栄えをコントロールしたり画像やリンクを文章に挿入したりできるようになります。掲示板のスタイルによりますが、テキストエリアの真上に BBCode ボタンがずらりと並んでいるはずです。これらのボタンをクリックすれば簡単に BBCode をテキストエリア内に挿入できます。 BBCode をさらに詳しく知るには以下のガイドをご覧ください。'
	),
	array(
		0 => '--',
		1 => 'テキストの書式'
	),
	array(
		0 => 'ボールド（太字）、イタリック（斜体）、アンダーライン（下線）の作成方法',
		1 => '文字のスタイルを変更する BBCode です。スタイルの変更について： <ul><li>ボールド（太字）で表すには <strong>[b][/b]</strong> で囲みます。<br /><br /><strong>[b]</strong>Hello<strong>[/b]</strong><br /><br /> は <strong>Hello</strong> となります。</li><li>アンダーライン（下線）を引くには <strong>[u][/u]</strong> で囲みます。<br /><br /><strong>[u]</strong>Good Morning<strong>[/u]</strong><br /><br /> は <span style="text-decoration: underline">Good Morning</span> となります。</li><li>イタリック（斜体）で表すには <strong>[i][/i]</strong> で囲みます。<br /><br />This is <strong>[i]</strong>Great!<strong>[/i]</strong><br /><br /> は This is <i>Great!</i> となります。</li></ul>'
	),
	array(
		0 => '文字の色と大きさを変える方法',
		1 => '文字の色や大きさを変えるには以下のタグを使用します。どのように表示されるかはブラウザによって異なる場合がある点にご注意ください： <ul><li>文字の色を変えるには <strong>[color=][/color]</strong> で囲みます。色の特定は red, blue, yellow といった単語または十六進数（例: #F5CA09）で指定することができます： <br /><br /><strong>[color=red]</strong>Hello!<strong>[/color]</strong><br /><br /> または <br /><br /><strong>[color=#FF0000]</strong>Hello!<strong>[/color]</strong><br /><br /> は <span style="color:red">Hello!</span> となります。</li><li>文字の大きさを変えるには <strong>[size=][/size]</strong> で囲みます。掲示板のスタイルにもよりますが、お勧めの形式はテキストサイズを元の大きさのパーセント数値で指定する方法です。数値は 20 から 200 まで指定可能です： <br /><br /><strong>[size=50]</strong>SMALL<strong>[/size]</strong><br /><br /> は <span style="font-size:50%;">SMALL</span> となります。<br /><br /> 同様に <br /><br /><strong>[size=200]</strong>HUGE!<strong>[/size]</strong><br /><br /> は <span style="font-size:200%;">HUGE!</span> となります。</li></ul>'
	),
	array(
		0 => 'タグを組み合わせることはできますか？',
		1 => 'もちろんできます: <br /><br /><strong>[size=150][color=red][b]</strong>LOOK AT ME!<strong>[/b][/color][/size]</strong><br /><br /> は <span style="color:red;font-size:250%;"><strong>LOOK AT ME!</strong></span> となります。<br /><br /> ただしあまりにもたくさんのタグを組み合わせることはお勧めしません。またタグの配置は正しく行ってください。次の例は間違ったタグの配置です: <br /><br /><strong>[b][u]</strong>This is wrong<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => '引用と固定幅データの表示'
	),
	array(
		0 => '文章を引用付きで返信する方法',
		1 => '文章を引用するには２つの方法があります。<ul><li>引用したい文章を <strong>[quote=&quot;&quot;][/quote]</strong> で囲みます。&quot;&quot; の中には引用に関する情報（引用文章を書いた人物、引用した書籍など）を入力します。例えば Mr. Blobby が書いたテキストの一部を引用する場合、このように入力します： <br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Mr. Blobby の文章<strong>[/quote]</strong><br /><br /> 上記のようにすることで &quot;Mr. Blobby さんが書きました:&quot; が自動的に追加されます。名前を引用符 &quot;&quot; で<strong>必ず</strong>囲んでください。省略することはできません。</li><li>２つ目の方法はただ単に文章を <strong>[quote][/quote]</strong> で囲みます。この場合、引用した文章が誰によるものなのかは判りません。</li></ul>'
	),
	array(
		0 => 'コードまたは整形済みデータの表示',
		1 => 'プログラムのコード や タブ・スペースなどの固定幅を使用した整形済みデータ を表示するには、そのテキストを [code][/code] で囲みます：<br /><br /><strong>[code]</strong>echo &quot;これはプログラムのコードです&quot;;<strong>[/code]</strong><br /><br /> <strong>[code][/code]</strong> で囲まれた部分が固定幅で表示されます。 <strong>[code=php][/code]</strong> とすると if(){} や while(){} などの PHP構文 をハイライト表示することができ、PHPコード が読みやすくなるのでお勧めです。'
	),
	array(
		0 => '--',
		1 => 'リストの作成'
	),
	array(
		0 => '番号なしリストの作成方法',
		1 => 'BBCode は 番号なしリスト と 番号付きリスト をサポートしています。BBCode のリストは HTML の &lt;li&gt; と同じように機能します。番号なしリストは各項目の先頭に丸い点が置かれます。番号なしリストを作成するには <strong>[list][/list]</strong> タグの中で <strong>[*]</strong> を使って各項目を指定します。例えば自分の好きな色をリスト表示するには次のようにします：<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Red<br /><strong>[*]</strong>Blue<br /><strong>[*]</strong>Yellow<br /><strong>[/list]</strong><br /><br /> 上記のようにすると次のリストが表示されます：<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>'
	),
	array(
		0 => '番号付きリストの作成方法',
		1 => '番号付きリストを作成するには <strong>[list=1][/list]</strong> を用います。番号順の代わりにアルファベット順にしたい場合は <strong>[list=a][/list]</strong> を用います。番号なしリストと同様に各項目を指定するには <strong>[*]</strong> を使用します。簡単な例を紹介します：<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>お店に行って<br /><strong>[*]</strong>パソコン買って<br /><strong>[*]</strong>故障したら悪態をつく<br /><strong>[/list]</strong><br /><br /> 上記のようにすると次のリストが表示されます: <ol style="list-style-type: decimal;"><li>お店に行って</li><li>パソコン買って</li><li>故障したら悪態をつく</li></ol> 次にアルファベット順リストの例を紹介します: <br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>第一候補<br /><strong>[*]</strong>第二候補<br /><strong>[*]</strong>第三候補<br /><strong>[/list]</strong><br /><br /> 上記のようにすると次のリストが表示されます：<ol style="list-style-type: lower-alpha"><li>第一候補</li><li>第二候補</li><li>第三候補</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'ハイパーリンクの作成'
	),
	array(
		0 => '他サイトへのハイパーリンクの作成方法',
		1 => 'BBCode は URI（niform Resource Indicators の略、URL と同義） を作成する方法をいくつかサポートしています。<ul><li>リンクしたい文字を <strong>[url=][/url]</strong> で囲みます。 = の後にリンク先の URL を入力します。例えば phpBB.com へのリンクを作る場合は次のようにします: <br /><br /><strong>[url=https://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br /> 上記のようにすると <a href="https://www.phpbb.com/">Visit phpBB!</a> と表示されます。リンククリック時に同じウィンドウで開くか新しいウィンドウで開くかはブラウザの設定に依存する点にご注意ください。</li><li>URL そのものをリンクにしたい場合は単純に次のようにします: <br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br /> 上記のようにすれば <a href="https://www.phpbb.com/">https://www.phpbb.com/</a> と表示されます。</li><li>phpBB には <i>マジックリンク</i> と呼ばれる機能が備わっています。マジックリンクは構文的に正しい URL をタグなしで自動的にリンク化する機能です。https:// さえ不要です。例えば www.phpbb.com と入力すると自動的に <a href="https://www.phpbb.com/">www.phpbb.com</a> と表示されます。</li><li>同じ事がメールアドレスにも言えます：<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br /> 上記のようにすれば <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> と表示されます。そしてタグをつけずに no.one@domain.adr と入力するだけで自動的にリンク化されます。</li></ul>URLタグ は <strong>[img][/img]</strong> （このタグについては次の項目をご参照ください）、<strong>[b][/b]</strong> など他の全ての BBCodeタグ を囲むことができます。複数のタグを使用する場合は開始タグと終了タグを正しく並べてください。次のタグの使い方は間違っている例です：<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> 上記の例は<span style="text-decoration: underline">誤った並べ方</span>なのでご注意ください。'
	),
	array(
		0 => '--',
		1 => '画像の表示'
	),
	array(
		0 => '他サイトの画像を表示させる方法',
		1 => 'BBCode には他サイトの画像を記事に表示させるタグが存在します。このタグを使用する上で大切なことが２つあります。１つ目は、大抵の人は画像を大量に表示させるページを嫌がる事です。２つ目は、表示する画像がインターネット上で常に利用可能である事です（ローカルコンピュータにのみ存在する画像を記事に表示させる事はできません。もしできるとすればそのコンピュータがウェブサーバである場合だけです！）。画像を記事に表示させるには画像の URL を <strong>[img][/img]</strong> で囲みます: <br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />画像にリンクを張るには上記を <strong>[url][/url]</strong> で囲みます：<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br /> は <br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a> となります。'
	),
	array(
		0 => '添付画像を表示させる方法',
		1 => '記事に添付（アップロード）した画像を文章の中で表示（インライン表示）させるには <strong>[attachment=][/attachment]</strong> を用います。ただし管理人がファイルの添付機能を許可していて尚且つあなたにファイル添付のパーミッションが与えられている必要があります。記事に画像ファイルを添付すると、添付画像をインライン表示するためのドロップダウンボックス（または各添付画像のインライン表示ボタン）が投稿画面内に表示されます。'
	),
	array(
		0 => '--',
		1 => 'その他'
	),
	array(
		0 => '独自の BBCodeタグ を追加できますか？',
		1 => 'もしあなたが Adminユーザー で且つ BBCode作成 のパーミッションを与えられていれば、Adminコントロールパネル で新しい BBCode を追加できます。'
	),
);
