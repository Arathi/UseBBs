<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id$
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
 * Simple Chinese files translated by Haoxian Zeng (lonelicloud)
 * Last update: 2013.10.08
 *
 * Author URI: http://cnzhx.net/
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'utf-8';
$lang['language_code'] = 'zh_cn';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = '论坛首页';
$lang['YourPanel'] = '用户中心';
$lang['Register'] = '注册';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = '搜索';
$lang['ActiveTopics'] = '活跃主题';
$lang['LogIn'] = '登录';
$lang['LogOut'] = '注销本次登录 (%s)';
$lang['MemberList'] = '会员列表';
$lang['StaffList'] = '版主列表';
$lang['Statistics'] = '论坛统计';
$lang['ContactAdmin'] = '联系管理员';
$lang['Forum'] = '论坛';
$lang['Topics'] = '主题';
$lang['Posts'] = '帖子';
$lang['LatestPost'] = '最新帖子';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = '新回复';
$lang['NoNewPosts'] = '没有新回复';
$lang['LockedNewPosts'] = '已锁定（有新回复）';
$lang['LockedNoNewPosts'] = '已锁定（无新回复）';
$lang['Locked'] = '已锁定';
$lang['LastLogin'] = '上次登录';
$lang['VariousInfo'] = '其它信息';
$lang['IndexStats'] = '该论坛有文章 %d 篇，主题 %d 个，共 %d 位注册会员。';
$lang['NewestMemberExtended'] = '欢迎新会员：%s。';
$lang['Username'] = '用户名';
$lang['CurrentPassword'] = '当前密码';
$lang['UserID'] = '用户ID';
$lang['NoSuchForum'] = '请求的版块 %s 不存在（可能已经删除）！';
$lang['WrongPassword'] = '对不起，您的密码不正确！如果忘记密码，可以通过登录页面中的相应链接请求重置密码。';
$lang['Reset'] = '重置';
$lang['SendPassword'] = '发送一个新密码';
$lang['RegisterNewAccount'] = '注册账户';
$lang['RememberMe'] = '记住我';
$lang['Yes'] = '是';
$lang['No'] = '否';
$lang['NotActivated'] = '您的账户 %s 还没有激活。请查看您注册本论坛时使用的邮箱，并按照邮件的提示激活您的账户。';
$lang['NotActivatedByAdmin'] = '论坛管理员还没有激活您的账户 %s。请耐心等待。';
$lang['Error'] = '错误';
$lang['Profile'] = '%s 的个人资料';
$lang['Level'] = '会员等级';
$lang['Administrator'] = '管理员';
$lang['Moderator'] = '版主';
$lang['Registered'] = '注册会员';
$lang['Email'] = 'Email';
$lang['ContactInfo'] = '联系方式';
$lang['Password'] = '请输入密码';
$lang['PasswordAgain'] = '请再输入一次';
$lang['EverythingRequired'] = '请填写全部信息！';
$lang['RegisteredNotActivated'] = '您申请的账户 %s 已经建立。系统已经发送一封激活邮件至 %s ，请按照邮件的提示激活您的账户。您必须先激活账户才能登录。';
$lang['RegisteredActivated'] = '您的账户 %s 已经激活。您现在就可以登录了。';
$lang['Never'] = '从未';
$lang['Member'] = '会员';
$lang['RegistrationActivationEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚注册的账户 [account_name] 需要激活才能使用。请点击下面的链接进行激活：

[activate_link]

或者将链接复制并粘贴到浏览器地址栏打开。然后，您就可以使用下面的用户名和密码进行登录了：

用户名: [account_name] 
密　码: [password]

如果您忘记了密码，可以使用登录页面的链接重置密码。谢谢您的注册，请多多发言！
[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = '该论坛没有内容。管理员还没有创建任何版块。';
$lang['AlreadyActivated'] = 'ID为 %d 的账户已经激活。';
$lang['Activate'] = '激活';
$lang['Activated'] = '您的账户 %s 已经（重新）激活。现在系统将为您自动登录。如果页面长时间没有跳转，请自行点击浏览。';
$lang['WrongActivationKey'] = '我们无法激活您ID为 %d 的账户。激活密钥不正确。您是否确认在这期间没有进行重置密码的操作？';
$lang['RegisterIt'] = '您可以通过 \'注册\' 链接来创建。';
$lang['BoardClosed'] = '论坛已关闭。';
$lang['SendpwdEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚申请重置账户 [account_name] 的密码。您现在可以使用下面的用户名和密码进行登录：

用户名: [account_name]
密　码: [password]

如果您忘记了密码，可以使用登录页面的链接重置密码。谢谢您的注册，请多多发言！

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '新密码';
$lang['SendpwdActivated'] = '您的账户 %s 的新密码已经发送至 %s。';
$lang['ForumIndex'] = '论坛首页';
$lang['MissingFields'] = '您请求的下列内容不存在或者错误：%s。';
$lang['TermsOfUseContent'] = '您必须清楚该论坛的所有文章都只代表其作者的观点，而不是本网站管理员、论坛管理员或者版主的观点，除非是由他们自己发表的文章。

您同意不在本论坛的任何版块中发表攻击性、谩骂的、淫秽的或者不适宜的内容，也不会发表被法律禁止的内容。如果您违反该要求，将会导致您在本论坛的账号被禁言或删除，并可能最终会将您的行为通知您的网络服务提供商（ISP）。因此，您发表的每篇文章都会记录您使用的IP地址。同时您还同意管理员和版主有权在必要的时候对您发表的文章执行修改、删除、移动或锁定等操作。

您提交给本论坛的所有信息都会被存储在数据库中以供日后查询。没有您的允许或法律要求，本论坛管理员不会散布您的信息。但是，不管是网站管理员、论坛管理员或者版主，还是 UseBB 项目组，都不对因为受到黑客攻击而造成的任何信息泄露负责。

本论坛使用cookies在您的计算机中存储论坛系统需要的临时信息。同时，cookies文件也会存储您的用户ID和密码（加密形式）使得您可以自动登录（在您启用该功能的情况下）。如果您不希望在您的计算机中存储任何cookies，请根据您的计算机使用说明来禁用cookies功能。

一旦您单击"我接受"，就表明您同意本声明。';
$lang['TermsOfUse'] = '使用条款';
$lang['RegistrationActivationEmailSubject'] = '账户激活';



$lang['NeedToBeLoggedIn'] = '您需要登录才能进行此操作。单击 \'登录\' 链接来登录或者 \'注册\' 来创建一个新账户。';
$lang['WrongEmail'] = '对不起，您提供的 Email %s 不是您的账户 %s 的注册 Email。如果您忘记了注册 Email，请联系管理员。';
$lang['Topic'] = '主题';
$lang['Author'] = '作者';
$lang['Replies'] = '回复';
$lang['Views'] = '查看';
$lang['Note'] = '注释';
$lang['Hidden'] = '隐藏';
$lang['ACP'] = '管理控制台入口';
$lang['SendMessage'] = '发送论坛消息';
$lang['NoViewableForums'] = '您当前的用户级别无法查看任何版块。如果没有登录，请登录后再查看。如果您已经登录，可能您无权查看该内容。';
$lang['Rank'] = '头衔';
$lang['Location'] = '位置';
$lang['Website'] = '网站';
$lang['Occupation'] = '职业';
$lang['Interests'] = '兴趣';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = '您的IP地址 %s 被该论坛禁止访问。';
$lang['Avatar'] = '头像';
$lang['AvatarURL'] = '头像地址（URL）';
$lang['BannedUser'] = '被禁止帐号';
$lang['BannedUserExplain'] = '您的账号 %s 被该论坛封禁。原因是：';
$lang['BannedUsername'] = '论坛禁止使用该用户名：%s。请使用别的用户名。';
$lang['BannedEmail'] = '该 Email 地址 %s 被论坛禁止。请换一个 Email。';
$lang['PostsPerDay'] = '每日文章数';
$lang['BoardClosedOnlyAdmins'] = '论坛关闭时，只有管理员才能登录。';
$lang['NoPosts'] = '没有文章';
$lang['NoActivetopics'] = '论坛当前没有活跃主题。';
$lang['AuthorDate'] = '%s 发表于 %s';
$lang['ByAuthor'] = '作者：%s';
$lang['OnDate'] = '发表于：%s';
$lang['Re'] = '回复：';
$lang['MailForm'] = '给%s发送电子邮件';
$lang['SendEmail'] = '给%s发送论坛消息';
$lang['NoMails'] = '该用户不接受任何邮件。';
$lang['UserEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。用户 [username] 在论坛中给您发送了该消息。下面是消息内容。

[board_name]
[board_link]
[admin_email]

-----
[body]';
$lang['EmailSent'] = '您给 %s 的邮件发送成功！';
$lang['To'] = '发送给';
$lang['From'] = '来自';
$lang['Subject'] = '主题';
$lang['Body'] = '内容';
$lang['Send'] = '发送';
$lang['EditProfile'] = '编辑个人资料';
$lang['EditOptions'] = '选项设置';
$lang['EditPasswd'] = '编辑密码';
$lang['PanelHome'] = '个人首页';

$lang['NewEmailNotActivated'] = '您已经成功更新个人资料。因为您修改了账户的注册 Email %s，您需要重新验证。一封验证邮件已经发送至 %s ，请按照提示重新验证。同时，您本次的登录将会被注销。';
$lang['Required'] = '必需';
$lang['ViewProfile'] = '查看资料';

$lang['NewEmailActivationEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚变更了账户 [account_name] 的 Email，但是该 Email 尚未验证。请点击下面的链接进行验证：

[activate_link]

或者将链接复制并粘贴到浏览器地址栏打开。然后，您就可以使用下面的用户名和密码进行登录了： 用户名: [account_name] 密　码: [password]

如果您忘记了密码，可以使用登录页面的链接获取一个新密码。谢谢您的注册，请多多发言！

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = '账户重新验证';
$lang['Signature'] = '签名';
$lang['SessionInfo'] = '会话信息';
$lang['SessionID'] = '会话 ID';
$lang['IPAddress'] = 'IP 地址';
$lang['Seconds'] = '秒';
$lang['Updated'] = '已更新';
$lang['Pages'] = '页';
$lang['AutoLogin'] = '自动登录';
$lang['Enabled'] = '已启用';
$lang['Disabled'] = '已禁用';
$lang['Enable'] = '启用';
$lang['Disable'] = '禁用';
$lang['AutoLoginSet'] = '自动登录 cookies 设定成功。';
$lang['AutoLoginUnset'] = '自动登录 cookies 已重置。';

$lang['RegistrationEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚注册了账户 [account_name]，现在可以使用下面的用户名和密码进行登录：

用户名: [account_name]
密　码: [password]

如果您忘记了密码，可以使用登录页面的链接重置密码。谢谢您的注册，请多多发言！

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = '账户注册';
$lang['PublicEmail'] = '公开 Email';
$lang['PublicLastLogin'] = '公开最后登录时间';
$lang['DateFormat'] = '日期格式';
$lang['DateFormatHelp'] = '该日期参数等同于 PHP 函数 %s。';
$lang['Again'] = '重试';
$lang['NewPassword'] = '设定新密码';
$lang['NewPasswordAgain'] = '请再输入一次新密码';
$lang['PasswordEdited'] = '您的密码已经重新设定。';
$lang['DetailedOnlineList'] = '详细在线列表';
$lang['Detailed'] = '详细';
$lang['OptionsEdited'] = '您的论坛设定编辑成功。';
$lang['ProfileEdited'] = '您的个人资料编辑成功。';
$lang['Started'] = '开始';
$lang['Minutes'] = '分钟';
$lang['Hours'] = '小时';
$lang['Days'] = '天';
$lang['Weeks'] = '星期';
$lang['TotalTime'] = '总时间';


$lang['NoTopics'] = '该版块目前没有文章。请您发表第一篇帖子！';
$lang['NotPermitted'] = '您没有足够的权限进行该操作。如有疑问，请联系管理员。';
$lang['Language'] = '语言';
$lang['Template'] = '模板';
$lang['NoSuchMember'] = '本论坛没有会员 %s 。';
$lang['FeatureDisabledBecauseCookiesDisabled'] = '因为论坛无法设定或读取您的浏览器 cookies，该功能已被禁用。';
$lang['LogOutConfirm'] = '您确定要注销登录吗？';
$lang['Cancel'] = '取消';
$lang['Timezone'] = '时区';
$lang['DST'] = '夏令时';
$lang['Sticky'] = '置顶';
$lang['PostNewTopic'] = '新主题';
$lang['ForumIsLocked'] = '版块已锁定';
$lang['NoSuchTopic'] = '该论坛没有主题 %s，或者已经被删除。';
$lang['PostReply'] = '发表回复';
$lang['TopicIsLocked'] = '主题已锁定';
$lang['Post'] = '发表';
$lang['Edit'] = '编辑';
$lang['Delete'] = '删除';
$lang['Quote'] = '引用';
$lang['Wrote'] = '%s 写到';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = '您正在回复的主题已被锁定。只有认证会员能够回复。';
$lang['Content'] = '内容';
$lang['Options'] = '选项';
$lang['EnableBBCode'] = '启用 BBCode。';
$lang['EnableSmilies'] = '启用表情。';
$lang['EnableSig'] = '启用签名。';
$lang['EnableHTML'] = '启用 HTML。';
$lang['LockTopicAfterPost'] = '发表后锁定文章。';
$lang['Guest'] = '游客';
$lang['BackToPrevious'] = '回到前一页';
$lang['NoSuchPost'] = '文章 %s 不存在，或者已被删除。';
$lang['UserPostedImage'] = '用户发表的图片';
$lang['ForumIsLockedExplain'] = '该版块已被锁定。只有认证会员才能发表新主题。';
$lang['MakeTopicSticky'] = '置顶当前主题';
$lang['QuickReply'] = '快速回复';
$lang['ReturnToTopicAfterPosting'] = '发表后回到当前主题';
$lang['ModeratorList'] = '版主： %s。';
$lang['Nobody'] = 'Nobody';
$lang['DeleteTopic'] = '删除主题';
$lang['MoveTopic'] = '移动主题';
$lang['LockTopic'] = '锁定主题';
$lang['UnlockTopic'] = '解锁主题';
$lang['MakeSticky'] = '置顶';
$lang['ConfirmDeleteTopic'] = '您确定要删除主题 %s （版块：%s）吗？该操作将无法撤销！';
$lang['MakeNormalTopic'] = '发表一般主题';
$lang['OldForum'] = '旧版块';
$lang['NewForum'] = '新版块';
$lang['IAccept'] = '我接受';
$lang['IDontAccept'] = '我不接受';
$lang['OpenLinksNewWindow'] = '在新窗口中打开外部链接';
$lang['HideAllAvatars'] = '隐藏所有头像';
$lang['HideUserinfo'] = '隐藏用户信息';
$lang['HideAllSignatures'] = '隐藏所有签名';
$lang['HideFromOnlineList'] = '不显示在在线列表中';
$lang['PageLinks'] = '页： %s';
$lang['Preview'] = '预览';
$lang['DeletePost'] = '删除文章';
$lang['ConfirmDeletePost'] = '您确认要从主题 %s 中删除该帖子吗？该操作无法撤销！';
$lang['EditPost'] = '编辑文章';
$lang['PostEditInfo'] = '由 %s 最后编辑于 %s。';

$lang['PasswdInfoNew'] = '密码只能包含字母、数字和字符。为了安全，至少包含一个字母和一个数字，并且最小长度为 %d 个字符。';
$lang['PasswdInfo'] = $lang['PasswdInfoNew']; // Keep old key for mods etc.
$lang['SubscribeTopic'] = '订阅';
$lang['UnsubscribeTopic'] = '取消订阅';

$lang['NewReplyEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。有人（[poster_name]）在您的订阅（"[topic_title]"）中回复了新内容。要查看回复，请点击后面的链接：[topic_link]。

如果您想取消订阅该主题（需要登录），请点击后面的链接：[unsubscribe_link]。

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '在"%s"中的新回复';
$lang['SubscribedTopic'] = '您已经成功订阅该主题。';
$lang['UnsubscribedTopic'] = '您已经成功取消订阅该主题。';
$lang['SubscribeToThisTopic'] = '订阅该主题。';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = '订阅';
$lang['NoSubscribedTopics'] = '您目前没有订阅任何主题。';
$lang['LatestUpdate'] = '最近更新';
$lang['Unknown'] = '未知';
$lang['PostingTopic'] = '在 %s 中发表新主题';
$lang['PostingReply'] = '在 %s 中发表回复';
$lang['MovingTopic'] = '移动主题 %s';
$lang['DeletingTopic'] = '删除主题 %s';
$lang['EditingPost'] = '编辑 %s 中的文章';
$lang['DeletingPost'] = '删除 %s 中的文章';
$lang['DebugMode'] = '调试模式';
$lang['ParseTime'] = '解析时间';
$lang['ServerLoad'] = '服务器负荷';
$lang['TemplateSections'] = '模板版块';
$lang['SQLQueries'] = 'SQL 查询';
$lang['MemoryUsage'] = '内存使用';
$lang['MegaByteShort'] = 'MB';
$lang['RealName'] = '真实姓名';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = '管理员';
$lang['Moderators'] = '版主';
$lang['TopicReview'] = '主题回顾';
$lang['ViewMorePosts'] = '查看更多文章';
$lang['DisplayedName'] = '昵称';

$lang['UsernameInfo'] = '用户名只能包含字母、数字、空格、_ 和 - 。';
$lang['Code'] = 'Code';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Size';
$lang['ViewingForum'] = '版块：%s';
$lang['ViewingTopic'] = '主题：%s';

$lang['FloodIntervalWarning'] = '管理员设定的帖子发表时间间隔为 %d 秒。请等待至少 %d 秒之后再重新提交该表单。';
$lang['AutoSubscribe'] = '自动订阅';
$lang['OnPostingNewTopics'] = '发表的主题';
$lang['OnPostingNewReplies'] = '发表的回复';
$lang['UnsubscribeSelected'] = '取消订阅所选';
$lang['SelectedTopicsUnsubscribed'] = '您已经取消订阅选定的主题。';
$lang['Birthday'] = '生日';
$lang['Age'] = '年龄';
$lang['Month'] = '月';
$lang['Day'] = '日';
$lang['Year'] = '年';
$lang['PoweredBy'] = '%s 由 %s 强力驱动';
$lang['ForumSoftware'] = '论坛软件';
$lang['GeneralStats'] = '论坛统计';
$lang['Members'] = '会员';
$lang['TopicsPerDay'] = '每日主题数';
$lang['MembersPerDay'] = '每日注册用户';
$lang['BoardStarted'] = '论坛生日';
$lang['BoardAge'] = '论坛年龄';
$lang['NewestMember'] = '最新会员';
$lang['MostActiveTopics'] = '最活跃的主题';
$lang['MostViewedTopics'] = '最多查看的主题';
$lang['PostsPerMember'] = '平均发帖数';
$lang['PostsPerForum'] = '每版块平均帖子数';
$lang['Categories'] = '分类';
$lang['Forums'] = '版块';
$lang['TopicsPerMember'] = '每注册用户主题数';
$lang['TopicsPerForum'] = '每版块主题数';
$lang['MostActiveMembers'] = '活跃会员';
$lang['MostActiveForums'] = '活跃版块';
$lang['DisplayedNameTaken'] = '对不起，%s 已经被用作登录名或者昵称。';
$lang['SearchKeywords'] = '搜索关键词';
$lang['SearchMode'] = '搜索模式';
$lang['SearchAuthor'] = '搜索作者';
$lang['SearchForums'] = '搜索版块';
$lang['AllForums'] = '所有版块';
$lang['NoSearchResults'] = '对不起，没有找到与您的搜索相匹配的内容。';
$lang['SearchMembersPosts'] = '搜索会员文章';
$lang['CurrentPage'] = '当前页面';
$lang['MemberGuestOnline'] = '在过去的 %d 分钟里，有 %d 位会员（其中 %d 位隐身）和 %d 位游客访问了本论坛。';
$lang['MembersGuestOnline'] = '在过去的 %d 分钟里，有 %d 位会员（其中 %d 位隐身）和 %d 位游客访问了本论坛。';
$lang['MemberGuestsOnline'] = '在过去的 %d 分钟里，有 %d 位会员（其中 %d 位隐身）和 %d 位游客访问了本论坛。';
$lang['MembersGuestsOnline'] = '在过去的 %d 分钟里，有 %d 位会员（其中 %d 位隐身）和 %d 位游客访问了本论坛。';
$lang['WhosOnline'] = '在线会员';
$lang['Done'] = '完成';
$lang['KeywordsExplain'] = '由空格分隔的任意个关键词，每个关键词至少 %d 个字符。';
$lang['BCCMyself'] = '发送一份到我自己的邮箱。';
$lang['Save'] = '保存';
$lang['Add'] = '增加';
$lang['MarkAllAsRead'] = '全部标记为已读。';
$lang['MarkAllAsReadDone'] = '所有版块和主题都已标记为已读。';
$lang['StringTooShort'] = '%s 太短，要求至少 %d 个字符。';
$lang['StringTooLong'] = '%s 太长，只允许最多 %d 个字符。';
$lang['Upload'] = '上传';
$lang['RegistrationsDisabled'] = '停止注册';
$lang['PostFormShortcut'] = '按下 Alt+S （苹果 Mac OS 中 Control+S）快速提交。';
$lang['EditThisMember'] = '编辑该会员';
$lang['EmailTaken'] = ' Email %s 已被使用。请选择别的邮箱。';
$lang['RegisteredNotActivatedByAdmin'] = '您的账户 %s 已成功创建。必须等到管理员激活后，您才能用它登录。请耐心等待。';
$lang['AdminActivationEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚注册了账户 [account_name]，还需要等待管理员激活才能使用。管理员一旦为您激活账户，您就可以使用下面的用户名和密码登录：

用户名: [account_name]
密　码: [password]

如果您忘记了密码，可以使用登录页面的链接获取一个新密码。谢谢您的注册，请多多发言！

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = '账户等待激活';
$lang['NewEmailNotActivatedByAdmin'] = '您的个人信息编辑成功。因为您更改了账户 %s 的 Email，管理员需要重新为您激活账户。同时，您本次的登录将会被注销。';
$lang['NewEmailAdminActivationEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。您刚刚更改了注册账户 [account_name] 的 Email。管理员需要重新激活您的账户，请耐心等待。

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = '账户等待重新激活';
$lang['AdminActivatedAccountEmailBody'] = '您好，

这是由 [board_name] 自动发送的邮件。管理员已经激活了您的账户 [account_name]。您现在可以登录论坛了。

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = '账户已激活';
$lang['Sort'] = '排序';
$lang['SortBy'] = '排序依据';
$lang['SortBy-displayed_name'] = '用户名';
$lang['SortBy-real_name'] = '真实姓名';
$lang['SortBy-level'] = '论坛级别';
$lang['SortBy-rank'] = '头衔';
$lang['SortBy-regdate'] = '注册时间';
$lang['SortBy-posts'] = '文章';
$lang['SortBy-latest_post'] = '最后发表';
$lang['SortBy-topic_title'] = '主题名称';
$lang['SortBy-forum'] = '论坛';
$lang['SortBy-author'] = '作者';
$lang['SortBy-replies'] = '回复数';
$lang['SortBy-views'] = '查看数';
$lang['SortOrder-asc'] = '升序';
$lang['SortOrder-desc'] = '降序';
$lang['NoUsersFound'] = '没有找到会员';
$lang['SaveConfigManually'] = '因为配置文件 config.php 不可写入，UseBB 无法保存配置信息。如果需要的话，请将下面的内容保存到 config.php 并上传至服务器。';
$lang['ShowResultsAs'] = '将结果显示为';
$lang['ShowMode-topics'] = '主题';
$lang['ShowMode-posts'] = '文章';
$lang['Mode-and'] = '所有关键词 (AND)';
$lang['Mode-or'] = '任何关键词 (OR)';
$lang['ExactMatch'] = '精确匹配';
$lang['IncludeGuests'] = '包括游客';
$lang['Top'] = '顶部';
$lang['Bottom'] = '底部';
$lang['Action'] = '动作';
$lang['AntiSpamQuestion'] = '反垃圾测试';
$lang['AntiSpamQuestionInfo'] = '这是一个反垃圾发布测试，您需要正确回答问题然后才能使用论坛的某些功能。针对每次访问只会进行一次反垃圾测试。您可以通过注册论坛会员来避免这种测试。谢谢您的理解和支持！';
$lang['Question'] = '问题';
$lang['Answer'] = '答案';
$lang['AntiSpamQuestionMathPlus'] = ' %d + %d = ?';
$lang['AntiSpamQuestionMathMinus'] = ' %d - %d = ?';
$lang['AntiSpamWrongAnswer'] = '您提交的答案错误。请输入正确的答案。';
$lang['WrongUsernamePassword'] = '用户名 (%s) 和密码不匹配。请重新输入。';
$lang['WrongUsernameEmail'] = '用户名 (%s) 和 Email 组合不存在。请重新输入。';
$lang['All'] = '全部';
$lang['Staff'] = '版主';
$lang['Guests'] = '游客';
$lang['ShowOnly'] = '仅显示';
$lang['InvalidFormTokenNotice'] = '安全令牌无效或过期。

如果您通过点击第三方链接或网站来到此页面，请忽略此警告！

如果您正在修改并且由您自己提交了表单，请重新提交。';
$lang['InvalidURLTokenNotice']  = '安全令牌无效或过期。

如果您通过点击第三方链接或网站来到此页面，请忽略此警告！

否则请重新加载原页面然后重新访问该链接。';
$lang['Name'] = '名字';
$lang['GuestName'] = '%s (游客)';
$lang['RSSFeedForTopic'] = '主题 %s 的 RSS Feed';
$lang['RSSFeedForForum'] = '版块 %s 的 RSS Feed';
$lang['PotentialSpammer'] = '疑似垃圾信息发布者';
$lang['PotentialSpammerNoProfileLinks'] = '你的状态（暂时）为疑似垃圾信息发布者，即你无法在个人资料中设置链接，即使设置也将会被自动处理为失效链接。请你谅解！';
$lang['PotentialSpammerNoPostLinks'] = '你的状态（暂时）为疑似垃圾信息发布者，即你所发表的帖子中的链接将得不到处理（无法点击）。请你谅解！';
$lang['InvisibleToGuests'] = '个人资料目前不对匿名用户（游客）开放。';
$lang['SearchResults'] = '搜索结果';

//
// Date translations
//
$lang['date_translations'] = array();
$lang['date_translations']['Mon'] = '周一';
$lang['date_translations']['Tue'] = '周二';
$lang['date_translations']['Wed'] = '周三';
$lang['date_translations']['Thu'] = '周四';
$lang['date_translations']['Fri'] = '周五';
$lang['date_translations']['Sat'] = '周六';
$lang['date_translations']['Sun'] = '周日';
$lang['date_translations']['Monday'] = '星期一';
$lang['date_translations']['Tuesday'] = '星期二';
$lang['date_translations']['Wednesday'] = '星期三';
$lang['date_translations']['Thursday'] = '星期四';
$lang['date_translations']['Friday'] = '星期五';
$lang['date_translations']['Saturday'] = '星期六';
$lang['date_translations']['Sunday'] = '星期日';
$lang['date_translations']['Jan'] = '1月';
$lang['date_translations']['Feb'] = '2月';
$lang['date_translations']['Mar'] = '3月';
$lang['date_translations']['Apr'] = '4月';
$lang['date_translations']['May'] = '5月';
$lang['date_translations']['Jun'] = '6月';
$lang['date_translations']['Jul'] = '7月';
$lang['date_translations']['Aug'] = '8月';
$lang['date_translations']['Sep'] = '9月';
$lang['date_translations']['Oct'] = '10月';
$lang['date_translations']['Nov'] = '11月';
$lang['date_translations']['Dec'] = '12月';
$lang['date_translations']['January'] = '一月';
$lang['date_translations']['February'] = '二月';
$lang['date_translations']['March'] = '三月';
$lang['date_translations']['April'] = '四月';
$lang['date_translations']['May'] = '五月';
$lang['date_translations']['June'] = '六月';
$lang['date_translations']['July'] = '七月';
$lang['date_translations']['August'] = '八月';
$lang['date_translations']['September'] = '九月';
$lang['date_translations']['October'] = '十月';
$lang['date_translations']['November'] = '十一月';
$lang['date_translations']['December'] = '十二月';
$lang['date_translations']['st'] = 'st';
$lang['date_translations']['nd'] = 'nd';
$lang['date_translations']['th'] = 'th';
$lang['date_translations']['am'] = '上午';
$lang['date_translations']['pm'] = '下午';
$lang['date_translations']['AM'] = '上午';
$lang['date_translations']['PM'] = '下午';
?>