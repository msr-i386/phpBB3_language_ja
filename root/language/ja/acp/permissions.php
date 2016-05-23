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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>パーミッション設定は高度に細分化されており４つのセクションにグループ化されています。それらを以下にまとめると：</p>
	
		<h2>グローバルパーミッション</h2>
		<p>グローバルレベルでのパーミッションをコントロールし、掲示板全体に渡って効力を発揮します。グローバルパーミッションとして、ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション の３つがあります。</p>
	
		<h2>ローカルパーミッション</h2>
		<p>ローカルレベルでのパーミッションをコントロールし、掲示板の各フォーラムにのみ効力を発揮します。 ローカルパーミッションとして、フォーラムパーミッション と モデレータパーミッション の２つがあります。</p>
	
		<h2>パーミッションロール</h2>
		<p>パーミッションロール（原文 “permission role”）を管理できます。パーミッションロールの種類としてユーザー、フォーラム、モデレータ、Admin の４つが存在します。デフォルトで用意されているパーミッションロールは掲示板を管理しやすいように権限が大きいものから小さいものまでありますが、より掲示板を管理しやすいようにパーミッションロールの 追加/編集/削除 をあなたの裁量で自由に行うことができます。</p>
	
		<h2>パーミッションマスク</h2>
		<p>割り当てたパーミッションを閲覧・確認できます。</p>
	
		<br />
	
		<p>パーミッションの設定と管理についてのより詳しい説明が <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">User Guide : Setting permissions</a> に載ってます。</p>
	',

	'ACL_NEVER'				=> 'Never',
	'ACL_SET'				=> 'パーミッションの設定',
	'ACL_SET_EXPLAIN'		=> 'ユーザーまたはグループのパーミッションを設定するには、それぞれのユーザーまたはグループに対して パーミッションロールを与える か カスタム設定でパーミッションオプションを個別に与える（“はい” にする）必要があります。<br /><br />phpBB3 ではユーザーに対してもグループに対してもパーミッションを与えることができます。そうすると必然的にパーミッション設定値の衝突が起こります。パーミッション設定値（<strong>はい</strong>、<strong>いいえ</strong>、<strong>Never</strong>）が衝突している状況について分かり易く説明するために、	ユーザーＸ さんが グループＡ と グループＢ のメンバーである状況を例にして説明します。<br />例１： あるパーミッションオプションの設定値が グループＡ で <strong>はい</strong> 、グループＢ で <strong>いいえ</strong> に設定されている場合、たとえ ユーザーＸ でそのパーミッションオプションの設定値が  <strong>いいえ</strong> に設定されていたとしても、ユーザーＸ はそのパーミッションに関する機能を<strong>使用できます</strong>。<br />例２： あるパーミッションオプションの設定値が グループＡ で <strong>はい</strong>、グループＢ で <strong>Never</strong> に設定されている場合、たとえ ユーザーＸ でそのパーミッションオプションの設定値が <strong>はい</strong> に設定されていたとしても、ユーザーＸ はそのパーミッションに関する機能を<strong>使用できません</strong>。<br />一言で簡潔に述べると、パーミッション設定衝突時のパーミッション設定値の優先順位はユーザーかグループかに関係なく <strong>いいえ ＜ はい ＜ Never</strong> である、という事です。<br /><br />通常、 <strong>Never</strong> の使用はグループではなく個々のユーザーのみに控えた方が良いでしょう。複数のユーザーまたはグループに同じ設定をする場合、ユーザー名またはグループ名の隣にあるチェックボックスをチェックする事で設定をコピーできます。',
	'ACL_SETTING'			=> 'パーミッションオプション',

	'ACL_TYPE_A_'			=> 'Adminパーミッション',
	'ACL_TYPE_F_'			=> 'フォーラムパーミッション',
	'ACL_TYPE_M_'			=> 'モデレータパーミッション',
	'ACL_TYPE_U_'			=> 'ユーザーパーミッション',

	'ACL_TYPE_GLOBAL_A_'	=> 'Adminパーミッション',
	'ACL_TYPE_GLOBAL_U_'	=> 'ユーザーパーミッション',
	'ACL_TYPE_GLOBAL_M_'	=> 'グローバルモデレータパーミッション',
	'ACL_TYPE_LOCAL_M_'		=> 'モデレータパーミッション',
	'ACL_TYPE_LOCAL_F_'		=> 'フォーラムパーミッション',
	
	'ACL_NO'				=> 'いいえ',
	'ACL_VIEW'				=> 'パーミッションの閲覧',
	'ACL_VIEW_EXPLAIN'		=> 'ここではユーザーまたはグループに与えられているパーミッションを確認できます。赤はパーミッションが与えられていない事を示し、緑はパーミッションが与えられている事を示します。',
	'ACL_YES'				=> 'はい',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'ここではユーザーとグループに対して Adminパーミッション を与える事ができます。Adminパーミッション を与えられたユーザーは AdminCP へ入室できます。',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'ここではユーザーとグループに対してモデレータパーミッションを与える事ができます。モデレータパーミッションはグローバルモデレータパーミッションと違って選択したフォーラムにのみ効力を発揮します。',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'ここではユーザーとグループに対してフォーラムパーミッションを与える事ができます。モデレータパーミッションを与えたい場合は該当のページで行ってください。',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'ここではフォーラムのフォーラムパーミッション設定を他のフォーラムにコピーできます。',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'ここではユーザーとグループに対してグローバルモデレータパーミッションを与える事ができます。グローバルモデレータパーミッションはモデレータパーミッションと違って掲示板の全フォーラムに渡って効力を発揮します。',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここではグループに対してローカルパーミッション（フォーラムパーミッション、モデレータパーミッション）を与える事ができます。',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'ここではグループに対してグローバルパーミッション（ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション）を与える事ができます。ユーザーパーミッションはアバターやプライベートメッセージの使用などの権限を、グローバルモデレータパーミッションは記事の承認やトピック管理やアクセス禁止などの権限を、Adminパーミッション はパーミッション設定や BBCode のカスタム設定やフォーラム管理などの権限をそれぞれ含みます。ユーザー個々のパーミッションの設定は特別な事情がある場合のみに限るべきです。推奨される方法はユーザーをまずグループに振り分け、そのグループに対してパーミッションを与える方法です。',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'ここでは Adminパーミッションロール を管理できます。パーミッションロールの構成を変更するとそのパーミッションロールを与えられているユーザーとグループもその変更の影響を受ける点にご注意ください。',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'ここではフォーラムパーミッションのパーミッションロールを管理できます。パーミッションロールの構成を変更するとそのパーミッションロールを与えられているユーザーとグループもその変更の影響を受ける点にご注意ください。',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'ここではモデレータパーミッションのパーミッションロールを管理できます。パーミッションロールの構成を変更するとそのパーミッションロールを与えられているユーザーとグループもその変更の影響を受ける点にご注意ください。',
	'ACP_USER_ROLES_EXPLAIN'					=> 'ここではユーザーパーミッションのパーミッションロールを管理できます。パーミッションロールの構成を変更するとそのパーミッションロールを与えられているユーザーとグループもその変更の影響を受ける点にご注意ください。',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここではユーザーに対してローカルパーミッション（フォーラムパーミッション、モデレータパーミッション）を与える事ができます。',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'ここではユーザーに対してグローバルパーミッション（ユーザーパーミッション、グローバルモデレータパーミッション、Adminパーミッション）を与える事ができます。ユーザーパーミッションはアバターやプライベートメッセージの使用などの権限を、グローバルモデレータパーミッションは記事の承認やトピック管理やアクセス禁止などの権限を、Adminパーミッション はパーミッション設定や BBCode のカスタム設定やフォーラム管理の権限などをそれぞれ含みます。複数のユーザーに対して同じ設定をする場合は グローバルパーミッション [ グループ ] を利用した方が良いでしょう。ユーザー個々のパーミッションの設定は特別な事情がある場合のみに限るべきです。推奨される方法はユーザーをまずグループに振り分け、そのグループに対してパーミッションを与える方法です。',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'ここではユーザーまたはグループに与えられている Adminパーミッション を閲覧・確認できます',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'ここではユーザーまたはグループに与えられているグローバルモデレータパーミッションを閲覧・確認できます。',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'ここでは各フォーラムでユーザーまたはグループに与えられているフォーラムパーミッションを閲覧・確認できます。',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'ここでは各フォーラムでユーザーまたはグループに与えられているモデレータパーミッションを閲覧・確認できます。',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'ここではユーザーまたはグループに与えられているユーザーパーミッションを閲覧・確認できます。',

	'ADD_GROUPS'				=> '未設定グループ',
	'ADD_PERMISSIONS'			=> 'パーミッション付与',
	'ADD_USERS'					=> 'ユーザー抽出',
	'ADVANCED_PERMISSIONS'		=> 'カスタム設定',
	'ALL_GROUPS'				=> '全てのグループを選択',
	'ALL_NEVER'					=> '全て <strong>NEVER</strong>',
	'ALL_NO'					=> '全て <strong>いいえ</strong>',
	'ALL_USERS'					=> '全てのユーザーを選択',
	'ALL_YES'					=> '全て <strong>はい</strong>',
	'APPLY_ALL_PERMISSIONS'		=> '全体更新',
	'APPLY_PERMISSIONS'			=> '更新',
	'APPLY_PERMISSIONS_EXPLAIN'	=> '他の ユーザー/グループ のチェックボックスをチェックしてこの更新をクリックした場合、その ユーザー/グループ に対してこのカスタム設定がコピーされます',
	'AUTH_UPDATED'				=> 'パーミッションの更新に成功しました',

	'COPY_PERMISSIONS_CONFIRM'				=> '本当に実行してもよろしいですか？ フォーラムパーミッションが全て上書きされます。',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'コピー元フォーラムを選択してください。フォーラムパーミッションを他のフォーラムにコピーします。',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'コピー先フォーラムを選択してください。フォーラムパーミッションが上書きされます。',
	'COPY_PERMISSIONS_FROM'					=> 'コピー元フォーラム',
	'COPY_PERMISSIONS_TO'					=> 'コピー先フォーラム',

	'CREATE_ROLE'				=> 'パーミッションロールの作成',
	'CREATE_ROLE_FROM'			=> '…の設定をコピー',
	'CUSTOM'					=> 'カスタム設定…',

	'DEFAULT'					=> 'デフォルト',
	'DELETE_ROLE'				=> 'デフォルトパーミッションロール',
	'DELETE_ROLE_CONFIRM'		=> 'パーミッションロールを本当に削除してもよろしいですか？ もし削除しても、このパーミッションロールを与えられているユーザーとグループはパーミッションオプションを<strong>失いません</strong>。',
	'DISPLAY_ROLE_ITEMS'		=> 'このパーミッションロールを与えられた ユーザー/グループ の閲覧',

	'EDIT_PERMISSIONS'			=> 'パーミッション変更',
	'EDIT_ROLE'					=> 'パーミッションロールの編集',

	'GROUPS_NOT_ASSIGNED'		=> 'このパーミッションロールを与えられているグループはありません',

	'LOOK_UP_GROUP'				=> 'グループを選択',
	'LOOK_UP_USER'				=> 'ユーザーを選択',

	'MANAGE_GROUPS'		=> '設定済みグループ',
	'MANAGE_USERS'		=> '設定済みユーザー',

	'NO_AUTH_SETTING_FOUND'		=> 'パーミッションデータの送信に失敗しました',
	'NO_ROLE_ASSIGNED'			=> 'パーミッションロールなし',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'こちらを選択するとカスタム設定になります。未設定にしたい場合は “全て <strong>いいえ</strong>” リンクをクリックして更新してください。',
	'NO_ROLE_AVAILABLE'			=> '使用可能なパーミッションロールがありません',
	'NO_ROLE_NAME_SPECIFIED'	=> 'パーミッションロールに名前を付けてください',
	'NO_ROLE_SELECTED'			=> 'パーミッションロールが見つかりません',
	'NO_USER_GROUP_SELECTED'	=> 'ユーザーまたはグループを選択していません',

	'ONLY_FORUM_DEFINED'	=> '選択したのはフォーラムだけです。ユーザーまたはグループも選択してください。',

	'PERMISSION_APPLIED_TO_ALL'		=> 'ユーザー/グループ のチェックボックスをチェックすると、パーミッションオプションまたはパーミッションロールはそれらチェックしたユーザー/グループにも同様に設定されます',
	'PLUS_SUBFORUMS'				=> '+サブフォーラム',

	'REMOVE_PERMISSIONS'			=> 'パーミッション消去',
	'REMOVE_ROLE'					=> 'パーミッションロールの削除',
 	'RESULTING_PERMISSION'			=> '最終的なパーミッションの値です',
	'ROLE'							=> 'パーミッションロール',
	'ROLE_ADD_SUCCESS'				=> 'パーミッションロールの追加に成功しました',
	'ROLE_ASSIGNED_TO'				=> 'パーミッションロール %s を与えられた ユーザー/グループ',
	'ROLE_DELETED'					=> 'パーミッションロールの削除に成功しました',
	'ROLE_DESCRIPTION'				=> 'パーミッションロールの説明',

	'ROLE_ADMIN_FORUM'			=> 'Forum Admin',
	'ROLE_ADMIN_FULL'			=> 'Full Admin',
	'ROLE_ADMIN_STANDARD'		=> 'Standard Admin',
	'ROLE_ADMIN_USERGROUP'		=> 'User and Groups Admin',
	'ROLE_FORUM_BOT'			=> 'Bot Access',
	'ROLE_FORUM_FULL'			=> 'Full Access',
	'ROLE_FORUM_LIMITED'		=> 'Limited Access',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Limited Access + Polls',
	'ROLE_FORUM_NOACCESS'		=> 'No Access',
	'ROLE_FORUM_ONQUEUE'		=> 'On Moderation Queue',
	'ROLE_FORUM_POLLS'			=> 'Standard Access + Polls',
	'ROLE_FORUM_READONLY'		=> 'Read Only Access',
	'ROLE_FORUM_STANDARD'		=> 'Standard Access',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Newly registered User Access',
	'ROLE_MOD_FULL'				=> 'Full Moderator',
	'ROLE_MOD_QUEUE'			=> 'Queue Moderator',
	'ROLE_MOD_SIMPLE'			=> 'Simple Moderator',
	'ROLE_MOD_STANDARD'			=> 'Standard Moderator',
	'ROLE_USER_FULL'			=> 'All Features',
	'ROLE_USER_LIMITED'			=> 'Limited Features',
	'ROLE_USER_NOAVATAR'		=> 'No Avatar',
	'ROLE_USER_NOPM'			=> 'No Private Messages',
	'ROLE_USER_STANDARD'		=> 'Standard Features',
	'ROLE_USER_NEW_MEMBER'		=> 'Newly registered User Features',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'フォーラム管理とフォーラムパーミッション設定へのアクセスが可能です',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> '掲示板の全ての管理機能へのアクセスが可能です。<br />一般ユーザーに対して非推奨です。',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'ほとんどの管理機能へのアクセスが可能ですが、サーバ/システム 関連ツールの使用は許可されていません',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'グループとユーザーの管理が可能です: パーミッションの変更、パーミッションロールの設定、アクセス禁止の管理、ランクの管理',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'このパーミッションロールはボットとスパイダーに対して使用する事を勧めます',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> '告知トピックと注目トピックの投稿を含むフォーラムの全機能を使用できます。連続投稿制限を無視して投稿できます。<br />一般ユーザーに対して非推奨です。',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'フォーラム機能をいくつか使用できますが、ファイルの添付とトピックアイコンは使用できません',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> '投票トピックを作成できる事以外は Limited Access と同じです',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'フォーラムへ入室できません。表示すらされません。',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'ファイルの添付を含むほとんどのフォーラム機能を使用できますが、記事の投稿にはモデレータの承認が必要です',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> '投票トピックを作成できる事以外は Standard Access と同じです',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'フォーラムへ入室できますが、投稿はできません',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'ファイルの添付とユーザー自身が投稿したトピックの削除を含むほとんどのフォーラム機能を使用できますが、ユーザー自身が投稿したトピックの閉鎖と投票トピックの投稿はできません',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> '一見さんに対して使用する事を勧めます; ユーザー登録して間もないユーザーに対してフォーラム機能のいくつかを完全にロックするため、<strong>NEVER</strong> が使用されています。',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'アクセス禁止を含むモデレータの全機能を使用できます',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> '記事の編集と承認を実行できますが、それ以外の権限を一切持ちません',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> '記事の基本的なアクションのみ実行できます。警告の送信と記事の承認はできません。',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'ほとんどのモデレータ機能を使用できますが、アクセス禁止と投稿者の変更はできません',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'ユーザー名の変更、連続投稿制限の無視を含む、ユーザーの為に実装されたフォーラム機能の全てを使用できます',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'ユーザー機能のいくつかにアクセスできますが、ファイルの添付、メール、インスタントメッセージは許可されていません',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'アバター機能を使用できない事以外は Limited Features と同じです',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'プライベートメッセージを使用できない事以外は Limited Features と同じです',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'ほとんどのユーザー機能にアクセスできますが全てではありません。例えばユーザー名の変更、連続投稿制限の無視などです。',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> '一見さんに対して使用する事を勧めます; ユーザー登録して間もないユーザーに対してフォーラム機能のいくつかを完全にロックするため、<strong>NEVER</strong> が使用されています。',
		
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'このパーミッションロールで何ができるのか、あるいは何についてのものなのかの要約を記述できます。ここで入力された文章はパーミッション設定ページで表示されます。',
	'ROLE_DESCRIPTION_LONG'			=> 'パーミッションロールの説明文が長すぎます。４０００ 字以内にしてください。',
	'ROLE_DETAILS'					=> 'パーミッションロールの詳細',
	'ROLE_EDIT_SUCCESS'				=> 'パーミッションロールの編集に成功しました',
	'ROLE_NAME'						=> 'パーミッションロール名',
	'ROLE_NAME_ALREADY_EXIST'		=> 'パーミッションロール名 <strong>%s</strong> は既に存在しています',
	'ROLE_NOT_ASSIGNED'				=> 'このパーミッションロールを与えられている ユーザー/グループ はありません',

	'SELECTED_FORUM_NOT_EXIST'		=> 'フォーラムが存在していません',
	'SELECTED_GROUP_NOT_EXIST'		=> 'グループが存在していません',
	'SELECTED_USER_NOT_EXIST'		=> 'ユーザーが存在していません',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'サブフォーラムも含めて設定したい場合はこちらで親フォーラムを選択してください',
	'SELECT_ROLE'					=> 'パーミッションロールの選択…',
	'SELECT_TYPE'					=> 'タイプの選択',
	'SET_PERMISSIONS'				=> 'パーミッションの設定',
	'SET_ROLE_PERMISSIONS'			=> 'パーミッションロールの設定',
	'SET_USERS_PERMISSIONS'			=> 'グローバルパーミッションの設定',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'ローカルパーミッションの設定',

	'TRACE_DEFAULT'					=> 'パーミッションのデフォルトは <strong>いいえ</strong>（未設定） です。以下に続く各グループまたはユーザーのパーミッション設定値次第で暫定値は <strong>はい</strong> か <strong>NEVER</strong> に上書きされます。',
	'TRACE_FOR'						=> 'トレース',
	'TRACE_GLOBAL_SETTING'			=> '%s（グローバル）',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'			=> '<strong>NEVER</strong> に設定されています。直前も <strong>NEVER</strong> なので <strong>NEVER</strong> が保持されます。',
 	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> '<strong>NEVER</strong> に設定されています。直前も <strong>NEVER</strong> なので <strong>NEVER</strong> が保持されます。',
	'TRACE_GROUP_NEVER_TOTAL_NO'			=> '<strong>NEVER</strong> に設定されています。暫定値がまだ設定されていないのでこの値が新しい暫定値となります。',
 	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'		=> '<strong>NEVER</strong> に設定されています。暫定値がまだ設定されていないのでこの値が新しい暫定値となります。',
	'TRACE_GROUP_NEVER_TOTAL_YES'			=> '<strong>NEVER</strong> に設定されています。よって暫定値は <strong>はい</strong> から <strong>NEVER</strong> に上書きされます。',
 	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'		=> '<strong>NEVER</strong> に設定されています。よって暫定値は <strong>はい</strong> から <strong>NEVER</strong> に上書きされます。',
	'TRACE_GROUP_NO'						=> '<strong>いいえ</strong> に設定されているので、暫定値に変更はありません',
 	'TRACE_GROUP_NO_LOCAL'					=> '<strong>いいえ</strong> に設定されているので、暫定値に変更はありません',
	'TRACE_GROUP_YES_TOTAL_NEVER'			=> '<strong>はい</strong> に設定されていますが、直前の暫定値が <strong>NEVER</strong> なので、暫定値に変更はありません',
 	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'		=> '<strong>はい</strong> に設定されていますが、直前の暫定値が <strong>NEVER</strong> なので、暫定値に変更はありません',
	'TRACE_GROUP_YES_TOTAL_NO'				=> '<strong>はい</strong> に設定されています。暫定値がまだ設定されていないので、この値が新しい暫定値となります。',
 	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'		=> '<strong>はい</strong> に設定されています。暫定値がまだ設定されていないので、この値が新しい暫定値となります。',
	'TRACE_GROUP_YES_TOTAL_YES'				=> '<strong>はい</strong> に設定されています。直前の暫定値も <strong>はい</strong> なので、暫定値に変更はありません。',
 	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'		=> '<strong>はい</strong> に設定されています。直前の暫定値も <strong>はい</strong> なので、暫定値に変更はありません。',
	'TRACE_PERMISSION'				=> 'パーミッションのトレース - %s',
 	'TRACE_RESULT'					=> 'トレース結果',
	'TRACE_SETTING'					=> 'トレース',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> '<strong>はい</strong> に設定されていますが、暫定値が既に <strong>はい</strong> なので暫定値に変更はありません。%sグローバルパーミッションのトレース%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> '<strong>はい</strong> に設定されているので、現在のローカル値 <strong>NEVER</strong> は上書きされます。%sグローバルパーミッションのトレース%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> '<strong>NEVER</strong> に設定されていますが、ローカル値に影響はありません。%sグローバルパーミッションのトレース%s',

	'TRACE_USER_FOUNDER'					=> 'このユーザーはウェブマスターなので、Adminパーミッション は常に <strong>はい</strong> です',
	'TRACE_USER_KEPT'						=> '<strong>いいえ</strong> に設定されているので、暫定値に変更はありません',
	'TRACE_USER_KEPT_LOCAL'					=> '<strong>いいえ</strong> に設定されているので、暫定値に変更はありません',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> '<strong>NEVER</strong> に設定されています。暫定値も <strong>NEVER</strong> なので, 暫定値に変更はありません。',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> '<strong>NEVER</strong> に設定されています。暫定値も <strong>NEVER</strong> なので, 暫定値に変更はありません。',
	'TRACE_USER_NEVER_TOTAL_NO'				=> '<strong>NEVER</strong> に設定されています。直前が <strong>いいえ</strong> なので、暫定値は <strong>NEVER</strong> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> '<strong>NEVER</strong> に設定されています。直前が <strong>いいえ</strong> なので、暫定値は <strong>NEVER</strong> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_YES'			=> '<strong>NEVER</strong> に設定されています。よって暫定値は <strong>はい</strong> から <strong>NEVER</strong> に上書きされます。',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> '<strong>NEVER</strong> に設定されています。よって暫定値は <strong>はい</strong> から <strong>NEVER</strong> に上書きされます。',
	'TRACE_USER_NO_TOTAL_NO'				=> '<strong>いいえ</strong> に設定されています。直前の暫定値も <strong>いいえ</strong> なので、暫定値は <strong>NEVER</strong> に変更されます。',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> '<strong>いいえ</strong> に設定されています。直前の暫定値も <strong>いいえ</strong> なので、暫定値は <strong>NEVER</strong> に変更されます。',
	'TRACE_USER_YES_TOTAL_NEVER'			=> '<strong>はい</strong> に設定されていますが、直前の暫定値が <strong>NEVER</strong> なので、暫定値は上書きされません',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> '<strong>はい</strong> に設定されていますが、直前の暫定値が <strong>NEVER</strong> なので、暫定値は上書きされません',
	'TRACE_USER_YES_TOTAL_NO'				=> '<strong>はい</strong> に設定されています。直前の暫定値が <strong>いいえ</strong> なので、暫定値は <strong>はい</strong> に上書きされます。',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> '<strong>はい</strong> に設定されています。直前の暫定値が <strong>いいえ</strong> なので、暫定値は <strong>はい</strong> に上書きされます。',
	'TRACE_USER_YES_TOTAL_YES'				=> '<strong>はい</strong> に設定されています。直前の暫定値が <strong>はい</strong> なので、暫定値に変更はありません。',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> '<strong>はい</strong> に設定されています。直前の暫定値が <strong>はい</strong> なので、暫定値に変更はありません。',
	'TRACE_WHO'								=> '設定対象',
	'TRACE_TOTAL'							=> '暫定値',

	'USERS_NOT_ASSIGNED'			=> '割り当てなし',
	'USER_IS_MEMBER_OF_DEFAULT'		=> '次の特別グループのメンバーです',
	'USER_IS_MEMBER_OF_CUSTOM'		=> '次の作成グループのメンバーです',

	'VIEW_ASSIGNED_ITEMS'	=> '割り当て状況を見る',
	'VIEW_LOCAL_PERMS'		=> 'ローカルパーミッション',
	'VIEW_GLOBAL_PERMS'		=> 'グローバルパーミッション',
	'VIEW_PERMISSIONS'		=> 'パーミッションの閲覧',

	'WRONG_PERMISSION_TYPE'				=> '不適切なパーミッションタイプが選択されました',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> '送信されたパーミッション設定データ（$_POST[\'setting\']）のフォーマットが不正な為、パーミッション設定を正常に行えません',
));
