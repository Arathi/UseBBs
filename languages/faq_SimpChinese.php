<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: faq_English.php 1758 2011-07-24 17:02:56Z pc_freak $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', '账户');
$faq[] = array('我需要注册吗？', '您可能需要注册才能在论坛里发布消息，这取决于论坛管理员是否允许访客发布内容（可具体到论坛版块）。通常，注册后您将能够使用更多的论坛功能。');
$faq[] = array('注册有什么好处？', '首先，您将得到一个使用您的昵称的个人账户，该账户只能由您个人使用。如果您愿意的话，您还能设置个人资料，提供关于您个人的附加信息。同时，您还可以通过“编辑选项”来调整论坛按照您的喜好来显示，比如选择语言和模板设置。一个非常实用的功能是，注册后您就可以订阅某些主题了，如果该主题有新的内容，您就会收到一封提示邮件。');
$faq[] = array('为了注册账户，我需要提供什么资料？', '要注册会员，您需要选择一个昵称（用户名），它将是您的账户的唯一标志。如果您愿意，您还可以使用您的真实姓名而不是昵称。请注意，注册后您自己将不能更改您的用户名。不过您可以随意更改显示名称，而用户名保持不变。您还需要一个真实的 e-mail 地址（您可能需要通过该邮箱来激活您的账户）。您还必须为账户设置密码（您以后还可以更改此密码）。');
$faq[] = array('我没有收到激活邮件！', '您不需要激活就能够登录论坛。如果不行，请尝试获取一个新密码。如果还不行，请联系管理员。');
$faq[] = array('如果我忘记了自己的登录信息或者 Email 地址失效了怎么办？', '您随时都能够通过登录页面的链接来获取一个新密码。如果您的 Email 地址失效，请联系管理员。他（她）将会告诉您，您的注册邮箱地址，或者更新您的账户信息以使用新的邮箱地址。');
$faq[] = array('什么是版主和管理员？', '版主是负责检查一个或多个版块的帖子是否符合论坛规定的会员，他/她同时还负责帮助自己所管理的版块的用户解决问题。管理员也是版主，只不过他/她负责的是整个论坛（所有版块），可以任命版主、更改论坛的所有设定。');
$faq[] = array('我可以成为版主或者管理员吗？', '通常情况下不行，但是如果您非常感兴趣，您可以向管理员申请。');
$faq[] = array('我可以更改我的用户级别吗？', '不行，只有管理员才给用户设定某个特定级别。');

$faq[] = array('--', '订阅');
$faq[] = array('如何订阅一个主题？', '在每个主题的下方，您应该能看到一个订阅链接。只有当您以会员的身份登录后才能进行订阅。');
$faq[] = array('如何取消订阅一个主题？', '您可以直接点击“取消订阅”链接，或者通过个人中心（控制面板）中的订阅管理来取消订阅。');

$faq[] = array('--', '个人资料');
$faq[] = array('我应该怎么更改我的用户名？', '您自己不能更改用户名（登录名称）。只有论坛管理员才有权进行此操作。但是您可以随时更改自己的显示名。');
$faq[] = array('用户名、显示名和真实姓名之间的区别是什么？', '用户名，就是您用来登录论坛的名称，是固定的，您不能更改。显示名（一般与您的用户名相同），是在论坛中公开显示的名称。您可以随时更改显示名，但是您必须始终使用用户名进行登录。真实姓名，这是可选项，只显示在您的个人资料页面。');
$faq[] = array('在下拉菜单中没有我的语言！', '请咨询该论坛的管理员，看他/她是否愿意为您的语言增加一个翻译。');
$faq[] = array('我为什么不能选择另一个模板？', '可能该论坛没有提供其它可用模板。');

$faq[] = array('--', '主题和帖子');
$faq[] = array('什么是主题和帖子？', '主题是某个版块中的一组信息（帖子）。如果您点击版块导航上的版块名称，就能看到该版块中的主题列表。');
$faq[] = array('什么是置顶主题？', '置顶主题就是一置处于主题列表的顶部的主题。通常，普通用户不能够创建置顶主题，只有版主或者管理员才可以。');
$faq[] = array('为什么我不能发表新话题或回复？', '如果没有显示创建新话题或者帖子的链接，说明该版块不允许您创建新话题。这可能是该版块的限制，或者该主题已被版主关闭。如果还有疑问，请联系管理员。');
$faq[] = array('什么是 BBCode 和表情符号？', 'BBCode 是可以用来向帖子中添加特定元素的标记。您可以试用一下，然后预览您的帖子来看看效果。表情符号是用来在帖子中表达心情的小图片。');
$faq[] = array('发表帖子后我的帖子计数没有增加！', '在某些论坛，帖子计数功能被禁用。对于测试或者一般聊天型论坛而言这是很正常的。');
$faq[] = array('为什么在两次发表帖子之间我必须等待一段时间？', '论坛使用防灌水机制来过滤垃圾信息或者对服务器的攻击。请稍等片刻再重新提交帖子。');
$faq[] = array('为什么我的个人签名和/或帖子中的链接无法点击？', '论坛可能给新注册账户设置了一个 &quot;疑似垃圾信息发布者&quot; 状态，这将导致处于该阶段的会员无法在论坛中发布链接。多数情况下，该状态会在会员具有一定的活跃度（发帖等）之后自动清除。如果没有，或者存在问题，请联系管理员。');

$faq[] = array('--', '其它');
$faq[] = array('我收不到来自论坛的 Email！', '请确保防垃圾邮件过滤器没有屏蔽论坛邮件。否则的话，可能是因为您在个人资料中设置的 Email 地址已经失效。');
$faq[] = array('什么是 RSS 源？', '您可以通过新闻/RSS阅读器或者浏览器，从 RSS 源中获取一个网站或者论坛的最新信息。');
$faq[] = array('我可以在个人资料的哪个地方设置我的 Google Talk 账户？', 'Google Talk 是一个使用 Jabber/XMPP 协议的聊天软件。您可以将您的用户名（完整的，包括域名部分）填写在 Jabber/XMPP 信息栏。');

$faq[] = array('--', 'UseBB 相关');
$faq[] = array('谁制作了该论坛？什么是 UseBB？', '该电子公告板，称为 <em>UseBB</em>，是由 UseBB 项目开发的。UseBB 是一个基于 GPL 发布协议的开源软件。您可以从 <a href="http://www.usebb.net">www.usebb.net</a> 免费下载和使用 UseBB。该论坛/网站的管理员可能为 UseBB 增添了附加的功能。');
$faq[] = array('UseBB 创作者为该论坛承担责任吗？', '不，该论坛由网站的所有者进行维护。UseBB 项目对该论坛不负有任何形式的责任。');
$faq[] = array('对该论坛有意见，我应该向谁提？', '如果您对该论坛软件本身而不是内容有意见，欢迎您 <a href="http://www.usebb.net">联系 UseBB 开发团队</a>。如果有其它任何诉求，请联系该论坛/网站的管理员。');

?>