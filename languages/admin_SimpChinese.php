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
 * Simple Chinese files translated by Haoxian Zeng  (lonelicloud)
 * Last update: 2013.10.08
 *
 * Author URI: http://cnzhx.net/
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = '管理登录';
$lang['AdminPasswordExplain'] = '出于安全原因，您必须输入账户密码来登录管理员控制面板。';
$lang['RunningBadACPModule'] = 'UseBB 无法运行此模块，因为一个或多个部件缺失（没有找到$usebb_module 对象和/或丢失 run_module() 对象方法。）';
$lang['RunningACPModuleMinVersion'] = '要运行此模块，需要 UseBB %s 及其以上版本。';

$lang['Category-main'] = '常规';
$lang['Category-forums'] = '版块';
$lang['Category-various'] = '其它';
$lang['Category-members'] = '用户';
$lang['Category-pruning'] = '清理';
$lang['Category-security'] = '安全';
$lang['Item-index'] = 'ACP 索引';
$lang['Item-version'] = '版本检查';
$lang['Item-config'] = '常规设置';
$lang['Item-categories'] = '管理分类';
$lang['Item-forums'] = '管理版块';
$lang['Item-iplookup'] = 'IP 地址查询';
$lang['Item-sqltoolbox'] = 'SQL 工具箱';
$lang['Item-modules'] = 'ACP 模块';
$lang['Item-members'] = '编辑会员';
$lang['Item-delete_members'] = '删除会员';
$lang['Item-register_members'] = '注册会员';
$lang['Item-activate_members'] = '激活会员';
$lang['Item-prune_forums'] = '清理版块';
$lang['Item-prune_members'] = '清理会员';
$lang['Item-dnsbl'] = 'DNSBL Bans';
$lang['Item-badwords'] = '不良词汇过滤';
$lang['Item-mass_email'] = '群发邮件';
$lang['Item-bans'] = '封禁管理';
$lang['Item-logout'] = '退出管理控制面板';
$lang['IndexWelcome'] = '欢迎来到论坛管理控制面板（ACP，Admin Control Panel）。在这里，您可以控制论坛的任何方面的内容，设置参数、管理版块和会员等。';
$lang['IndexSystemInfo'] = '系统信息';
$lang['IndexUseBBVersion'] = 'UseBB 版本';
$lang['IndexPHPVersion'] = 'PHP 版本';
$lang['IndexSQLServer'] = 'SQL 服务器驱动';
$lang['IndexHTTPServer'] = 'HTTP 服务器';
$lang['IndexOS'] = '操作系统';
$lang['IndexServerLoad'] = '服务器负载';
$lang['IndexLinks'] = '链接';
$lang['IndexUnactiveMembers'] = '未激活会员';
$lang['IndexNoUnactiveMembers'] = '没有等待管理员激活的会员。';
$lang['IndexOneUnactiveMember'] = '有1位会员等待管理员激活。';
$lang['IndexMoreUnactiveMembers'] = '有 %d 位会员等待管理员激活。';
$lang['IndexWarning'] = '警告！';
$lang['IndexUnwritableConfig'] = '此时，%s 无法由 PHP 写入。不推荐进行这样的操作。要使之可写入，需要通过FTP客户端改变该文件的权限或者通过chmod操作将其权限修改为 (0777) 。有问题的话请联系主机提供商。';
$lang['IndexMultibyteUsage'] = '请注意，您目前使用的是多字符设置(%s)的翻译版本。UseBB 1 官方并不为这些翻译和字符设置提供支持。';
$lang['IndexDevelopmentEnvironment'] = 'UseBB 目前设置在测试状态运行。这样可能会向用户显示一些 PHP 提示信息，但是不包含某些安全警告。不建议在生产环境中这么设置。';
$lang['VersionFailed'] = '论坛无法确定最新版本。请经常访问 %s 以保证您使用的是最新版本的论坛程序。';
$lang['VersionLatestVersionTitle'] = '该程序是最新版本';
$lang['VersionLatestVersion'] = '该论坛使用 UseBB 的最新稳定版本 %s。';
$lang['VersionNeedUpdateTitle'] = '有新版本可用！';
$lang['VersionNeedUpdate'] = '运行 UseBB %s 的论坛需要升级到最新版本 %s 以保持安全和稳定！访问 %s 下载最新版本。';
$lang['VersionBewareDevVersionsTitle'] = '发现开发中的版本';
$lang['VersionBewareDevVersions'] = '该论坛运行的是 %s 版本，但是 %s 仍是最新的稳定版本。请注意，开发中版本可能会存在一些问题和不兼容。';
$lang['ConfigInfo'] = '您可以在本页面编辑您的 UseBB 论坛的所有设置。在改变数据库设置的时候请格外小心。有星号（*）标记的栏目为必填。';
$lang['ConfigSet'] = '新的配置已保存，在加载下一个页面时就能看到效果。';
$lang['ConfigMissingFields'] = '一些栏目丢失或者不正确（例如，应该是数字的文本区域）。请检查下列栏目：';
$lang['ConfigBoard-type'] = '类型';
$lang['ConfigBoard-server'] = '服务器';
$lang['ConfigBoard-username'] = '用户名';
$lang['ConfigBoard-passwd'] = '密码';
$lang['ConfigBoard-dbname'] = '数据库名称';
$lang['ConfigBoard-prefix'] = '表前缀';
$lang['ConfigBoard-persistent'] = '持久连接';
$lang['ConfigBoardSection-general'] = '一般设置';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = '您可以将此项留空，由程序自动检测。';
$lang['ConfigBoardSection-sessions'] = '会话';
$lang['ConfigBoardSection-page_counts'] = '页面计数';
$lang['ConfigBoardSection-date_time'] = '日期 & 时间';
$lang['ConfigBoardSection-date_time-info'] = '仅应用于游客和新注册账户。';
$lang['ConfigBoardSection-database'] = '数据库配置';
$lang['ConfigBoardSection-database-info'] = '请您确知这些设置将会立刻生效后再更改该设置。';
$lang['ConfigBoardSection-advanced'] = '高级设置';
$lang['ConfigBoardSection-email'] = 'Email';
$lang['ConfigBoardSection-additional'] = '附加特性';
$lang['ConfigBoardSection-user_rights'] = '用户权限';
$lang['ConfigBoardSection-min_levels'] = '最小可访问级别';
$lang['ConfigBoardSection-min_levels-info'] = '这些是访问每个项目所需要的最小用户级别。';
$lang['ConfigBoardSection-layout'] = '布局设置';
$lang['ConfigBoardSection-security'] = '安全';
$lang['ConfigBoardSection-rss'] = 'RSS 订阅源';
$lang['ConfigBoardSection-anti_spam'] = '反垃圾信息';
$lang['ConfigBoardSection-anti_spam-info'] = '要了解关于反垃圾信息手段的更多信息，请阅读新加入的文档 <a href="./docs/anti-spam.html">Spam Protection</a>。';
$lang['ConfigBoard-admin_email'] = '管理员 Email 地址';
$lang['ConfigBoard-board_descr'] = '论坛描述';
$lang['ConfigBoard-board_keywords'] = '论坛关键词';
$lang['ConfigBoard-board_keywords-info'] = '用（英文半角）逗号分隔。';
$lang['ConfigBoard-board_name'] = '论坛名称';
$lang['ConfigBoard-date_format'] = '日期格式';
$lang['ConfigBoard-date_format-info'] = '与PHP函数 date() 的参数相同。';
$lang['ConfigBoard-language'] = '默认语言';
$lang['ConfigBoard-language-info'] = '仅应用于游客和新注册账户。';
$lang['ConfigBoard-session_name'] = '会话名称';
$lang['ConfigBoard-session_name-info'] = '只有字母数字字符，不能有空格。至少包含一个字母。';
$lang['ConfigBoard-template'] = '默认模板';
$lang['ConfigBoard-template-info'] = '仅应用于游客和新注册账户。';
$lang['ConfigBoard-active_topics_count'] = '活跃主题数限制';
$lang['ConfigBoard-active_topics_count-info'] = '考虑到 \'主题最长活跃时间\'设置，实际显示的主题数可能小于此数目。';
+$lang['ConfigBoard-active_topics_max_age'] = '主题最长活跃时间';
+$lang['ConfigBoard-active_topics_max_age-info'] = '最长时间（最后回复）按天计算，设置为 0 则禁用此功能。';
$lang['ConfigBoard-avatars_force_height'] = '头像最大高度 (px)';
$lang['ConfigBoard-avatars_force_height-info'] = '0 表示不限制。';
$lang['ConfigBoard-avatars_force_width'] = '头像最大宽度 (px)';
$lang['ConfigBoard-avatars_force_width-info'] = '0 表示不限制。';
$lang['ConfigBoard-debug'] = '调试模式';
$lang['ConfigBoard-debug-info'] = '只有在非生产环境中才会生效（设定为源代码级别）。';
$lang['ConfigBoard-email_view_level'] = '能够查看 Email 地址的用户级别';
$lang['ConfigBoard-flood_interval'] = '刷新间隔（秒）';
$lang['ConfigBoard-members_per_page'] = '每页会员数';
$lang['ConfigBoard-online_min_updated'] = '在线会员统计时间间隔';
$lang['ConfigBoard-output_compression'] = '输出压缩';
$lang['ConfigBoard-passwd_min_length'] = '密码最小长度';
$lang['ConfigBoard-posts_per_page'] = '每页文章数';
$lang['ConfigBoard-rss_items_count'] = 'RSS 条数限制';
$lang['ConfigBoard-search_limit_results'] = '限制搜索结果条数为';
$lang['ConfigBoard-search_nonindex_words_min_length'] = '搜索关键词最小长度';
$lang['ConfigBoard-session_max_lifetime'] = '最长会话存活时间（分钟）';
$lang['ConfigBoard-show_edited_message_timeout'] = '显示编辑信息最短时间间隔';
$lang['ConfigBoard-show_edited_message_timeout-info'] = '如果文章发表后在这些秒数规定的时间内进行编辑，则不显示编辑注释，否则会在帖子/回复底部显示一条编辑信息。';
$lang['ConfigBoard-topicreview_posts'] = '主题评论数计数';
$lang['ConfigBoard-topics_per_page'] = '每页主题数';
$lang['ConfigBoard-view_active_topics_min_level'] = '活跃主题';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = '详细在线列表';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = '统计信息';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = '能查看隐藏 Email 地址的最小用户级别';
$lang['ConfigBoard-view_memberlist_min_level'] = '会员列表';
$lang['ConfigBoard-view_search_min_level'] = '搜索引擎';
$lang['ConfigBoard-view_stafflist_min_level'] = '版主列表';
$lang['ConfigBoard-view_stats_min_level'] = '统计页面';
$lang['ConfigBoard-view_contactadmin_min_level'] = '联系管理员链接';
$lang['ConfigBoard-allow_multi_sess'] = '允许每IP多个会话';
$lang['ConfigBoard-board_closed'] = '关闭论坛';
$lang['ConfigBoard-board_closed-info'] = '管理员仍能登录。';
$lang['ConfigBoard-contactadmin_custom_url'] = '自定义&quot;联系管理员&quot;链接';
$lang['ConfigBoard-contactadmin_custom_url-info'] = '用作超链接的绝对或相对 URL 路径 &ndash; 将会覆盖邮件链接和表单。';
$lang['ConfigBoard-cookie_secure'] = '安全 cookies';
$lang['ConfigBoard-cookie_secure-info'] = '加密 cookies （仅 HTTPS）';
$lang['ConfigBoard-cookie_httponly'] = '启用仅 HTTP cookies';
$lang['ConfigBoard-cookie_httponly-info'] = '在 cookies 中加入 HttpOnly 标记，使它们对于 XSS 更加安全。';
$lang['ConfigBoard-dst'] = '夏令时';
$lang['ConfigBoard-enable_contactadmin'] = '启用联系管理员链接';
$lang['ConfigBoard-enable_contactadmin_form'] = '使用邮件表单替代电邮链接来&quot;联系管理员&quot;';
$lang['ConfigBoard-enable_detailed_online_list'] = '启用详细在线列表';
$lang['ConfigBoard-enable_forum_stats_box'] = '启用论坛统计';
$lang['ConfigBoard-enable_memberlist'] = '启用会员列表';
$lang['ConfigBoard-enable_quickreply'] = '启用快速回复';
$lang['ConfigBoard-enable_rss'] = '启用一般（活跃主题） RSS feed';
$lang['ConfigBoard-enable_rss_per_forum'] = '启用分版块 RSS feeds';
$lang['ConfigBoard-enable_rss_per_topic'] = '启用分主题 RSS feeds';
$lang['ConfigBoard-enable_stafflist'] = '启用版主列表';
$lang['ConfigBoard-enable_stats'] = '启用统计页面';
$lang['ConfigBoard-friendly_urls'] = '启用 URL 友好链接';
$lang['ConfigBoard-friendly_urls-info'] = '需要 Apache 和 mod_rewrite。将会禁用 URL 中的会话 ID。';
$lang['ConfigBoard-guests_can_access_board'] = '游客访问论坛';
$lang['ConfigBoard-guests_can_see_contact_info'] = '游客查看会员个人资料中的联系方式';
$lang['ConfigBoard-guests_can_view_profiles'] = '游客查看会员资料';
$lang['ConfigBoard-hide_avatars'] = '隐藏所有头像';
$lang['ConfigBoard-hide_signatures'] = '隐藏所有个性签名';
$lang['ConfigBoard-hide_userinfo'] = '隐藏用户信息';
$lang['ConfigBoard-rel_nofollow'] = '启用 Google 的 nofollow 标记';
$lang['ConfigBoard-rel_nofollow-info'] = '该选项会使得 Google 忽略所有 BBCode 链接。';
$lang['ConfigBoard-return_to_topic_after_posting'] = '发表后转到该主题';
$lang['ConfigBoard-return_to_topic_after_posting-info'] = '仅应用于来宾和新注册会员账户。';
$lang['ConfigBoard-sig_allow_bbcode'] = '在个性签名中启用 BBCode';
$lang['ConfigBoard-sig_allow_smilies'] = '在个性签名中启用表情';
$lang['ConfigBoard-sig_max_length'] = '个性签名最大长度';
$lang['ConfigBoard-single_forum_mode'] = '单一版块模式';
$lang['ConfigBoard-single_forum_mode-info'] = '仅将可见版块显示为版块索引。';
$lang['ConfigBoard-target_blank'] = '在新窗口中打开 BBCode 链接';
$lang['ConfigBoard-target_blank-info'] = '仅应用于来宾和新注册会员账户。';
$lang['ConfigBoard-activation_mode'] = '激活方式';
$lang['ConfigBoard-activation_mode0'] = '不需激活';
$lang['ConfigBoard-activation_mode1'] = 'Email 激活';
$lang['ConfigBoard-activation_mode2'] = '管理员激活';
$lang['ConfigBoard-board_closed_reason'] = '论坛关闭原因';
$lang['ConfigBoard-board_url'] = '论坛地址（URL）';
$lang['ConfigBoard-board_url-info'] = '完整的链接地址，包括结尾的斜杠；留空则由程序自动检测。';
$lang['ConfigBoard-cookie_domain'] = 'Cookie 域名';
$lang['ConfigBoard-cookie_path'] = 'Cookie 路径';
$lang['ConfigBoard-session_save_path'] = '会话保存路径';
$lang['ConfigBoard-session_save_path-info'] = '自定义会话数据保存路径；仅支持绝对文件夹名。';
$lang['ConfigBoard-exclude_forums_active_topics'] = '从活跃主题中排除的版块';
$lang['ConfigBoard-exclude_forums_rss'] = '从一般 RSS feed 中排除的版块';
$lang['ConfigBoard-exclude_forums_stats'] = '从统计页面排除的版块';
$lang['ConfigBoard-timezone'] = '时区';
$lang['ConfigBoard-debug0'] = '禁用';
$lang['ConfigBoard-debug1'] = '简单（解析时间和计数）';
$lang['ConfigBoard-debug2'] = '扩展（简单 + SQL查询）';
$lang['ConfigBoard-email_view_level0'] = '隐藏所有 Email 地址';
$lang['ConfigBoard-email_view_level1'] = '启用 Email 表单';
$lang['ConfigBoard-email_view_level2'] = '显示防垃圾功能';
$lang['ConfigBoard-email_view_level3'] = '显示原始代码';
$lang['ConfigBoard-output_compression0'] = '禁用';
$lang['ConfigBoard-output_compression1'] = '压缩 HTML';
$lang['ConfigBoard-output_compression2'] = '启用 Gzip';
$lang['ConfigBoard-output_compression3'] = '压缩 HTML + Gzip';
$lang['ConfigBoard-level0'] = '游客';
$lang['ConfigBoard-level1'] = '会员';
$lang['ConfigBoard-level2'] = '版主';
$lang['ConfigBoard-level3'] = '管理员';
$lang['ConfigBoard-enable_acp_modules'] = '启用 ACP 模块';
$lang['ConfigBoard-disable_registrations'] = '禁止用户注册';
$lang['ConfigBoard-disable_registrations-info'] = '仍然能够通过 ACP 注册新用户。';
$lang['ConfigBoard-disable_registrations_reason'] = '禁止用户注册的原因';
$lang['ConfigBoard-allow_duplicate_emails'] = '允许重复的 Email 地址';
$lang['ConfigBoard-enable_badwords_filter'] = '启用不良词语过滤';
$lang['ConfigBoard-enable_ip_bans'] = '启用 IP 地址封禁';
$lang['ConfigBoard-show_raw_entities_in_code'] = '在 [code] 标记内部显示原始条目。';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = '显示原始条目代码而不是其超文本（HTML）格式。';
$lang['ConfigBoard-username_min_length'] = '用户名最小长度';
$lang['ConfigBoard-username_max_length'] = '用户名最大长度';
$lang['ConfigBoard-show_never_activated_members'] = '显示从未激活的会员';
$lang['ConfigBoard-show_never_activated_members-info'] = '在统计框和会员列表中显示这些。';
$lang['ConfigBoard-enable_registration_log'] = '启用注册日志';
$lang['ConfigBoard-enable_registration_log-info'] = '在文本文件中写入注册记录。';
$lang['ConfigBoard-registration_log_file'] = '注册日志';
$lang['ConfigBoard-registration_log_file-info'] = '相对于论坛目录，或者绝对路径。';
$lang['ConfigBoard-enable_email_dns_check'] = '启用 Email 地址 DNS 检测';
$lang['ConfigBoard-enable_email_dns_check-info'] = '通过搜索 MX 记录来鉴别。该方法可能并不是对所有有效域名都适用。';
$lang['ConfigBoard-edit_post_timeout'] = '编辑帖子超时时间';
$lang['ConfigBoard-edit_post_timeout-info'] = '用户只能在帖子发表后指定的秒数内立即编辑他的帖子。';
$lang['ConfigBoard-disable_xhtml_header'] = '为 XHTML 模板禁用 XHTML 头。';
$lang['ConfigBoard-disable_xhtml_header-info'] = '只有当内容编写100%符合规范的时候才能使用 XHTML Content-Type。对于非 XHTML 浏览器来说，该特性总是禁用的。';
$lang['ConfigBoard-email_reply-to_header'] = '使用Reply-To头标记';
$lang['ConfigBoard-email_reply-to_header-info'] = '为用户 Email 启用 Reply-To 以替代 From （某些主机要求）。';
$lang['ConfigBoard-mass_email_msg_recipients'] = '群发 Email 收件人计数';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = '多个消息将一直发送到所有收件人都收到邮件。';
$lang['ConfigBoard-sendmail_sender_parameter'] = '为发送邮件启用 -f 参数。';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = '在某些主机上，该特性可能会使 Email 功能失效。';
$lang['ConfigBoard-antispam_question_mode'] = '开启防垃圾消息问答模式';
$lang['ConfigBoard-antispam_question_mode-info'] = '当游客注册、发表新话题或者回复内容时，向他们显示一个简单的问题，回答正确后才能提交表单。';
$lang['ConfigBoard-antispam_question_mode0'] = '禁用';
$lang['ConfigBoard-antispam_question_mode1'] = '随机算术问题';
$lang['ConfigBoard-antispam_question_mode2'] = '随机选择自定义问题';
$lang['ConfigBoard-antispam_question_questions'] = '自定义防垃圾问题';
$lang['ConfigBoard-antispam_question_questions-info'] = '使用 "问题|回答" （不要引号）的格式编写自定义问答，每行一个。回答是大小写敏感的。';
$lang['ConfigBoard-enable_error_log'] = '开启错误记录';
$lang['ConfigBoard-enable_error_log-info'] = '使用PHP\'s记录机制记录错误。请参考 PHP error_log 配置选项。';
$lang['ConfigBoard-error_log_log_hidden'] = '记录错误，否则隐藏该选项';
+$lang['ConfigBoard-error_log_log_hidden-info'] = '在生产环境中，某些错误类型不向用户展示。其用此项则会尽可能记录这些错误提示。';
+$lang['ConfigBoard-show_posting_links_to_guests'] = '向游客显示发表主题或发表回复的链接。';
+$lang['ConfigBoard-show_posting_links_to_guests-info'] = '如果会员可发帖则显示。&ndash; 将会跳转到登录页面。';
+$lang['ConfigBoard-acp_auto_logout'] = ' x 分钟未活动后自动从管理控制台（ACP）中登出';
+$lang['ConfigBoard-acp_auto_logout-info'] = '在有些大表单页面上禁用了该特性，如一般配置页面。';
+$lang['ConfigBoard-enable_dnsbl_powered_banning'] = '启用基于 DNSBL 的封禁功能';
+$lang['ConfigBoard-enable_dnsbl_powered_banning-info'] = '需要启用 IP 地址封锁功能。';
$lang['ConfigBoard-sfs_email_check'] = '阻拦论坛垃圾：检查 Email 地址';
$lang['ConfigBoard-sfs_email_check-info'] = '限制为每天 20,000 次检查。访问 stopforumspam.com 以了解更多信息。';
$lang['ConfigBoard-sfs_max_lastseen'] = '阻拦论坛垃圾：最长 &quot;上次出现&quot; 时间';
$lang['ConfigBoard-sfs_max_lastseen-info'] = '如果上次出现于 x 天以前则不阻拦（0 表示忽略此项）';
$lang['ConfigBoard-sfs_min_frequency'] = '阻拦论坛垃圾：最小频率';
$lang['ConfigBoard-sfs_min_frequency-info'] = '如果垃圾信息频率低于 x 则不阻拦（0 表示忽略此项）';
$lang['ConfigBoard-sfs_save_bans'] = '阻拦论坛垃圾：将阻拦信息存入论坛的封禁列表';
$lang['ConfigBoard-sfs_save_bans-info'] = '这些地址将会被一直封禁，以后不会再重新检查。';
$lang['ConfigBoard-sfs_api_key'] = '阻拦论坛垃圾：API key';
$lang['ConfigBoard-sfs_api_key-info'] = '仅在提交信息时需要。访问 stopforumspam.com 来获取 keys。';
$lang['ConfigBoard-Passwd-NotSet'] = '未设置密码';
$lang['ConfigBoard-Passwd-KeepCurrent'] = '保留当前密码';
$lang['ConfigBoard-Passwd-Set'] = '已设置密码';
$lang['ConfigBoard-Passwd-Clear'] = '清除密码';
$lang['ConfigBoard-antispam_status_max_posts'] = '疑似垃圾信息发布者：最大帖子计数';
$lang['ConfigBoard-antispam_status_max_posts-info'] = '自动从疑似垃圾发布者列表中移除前需要达到的帖子数量（0 表示禁用此功能）。';
$lang['ConfigBoard-antispam_disable_post_links'] = '疑似垃圾信息发布者：禁用帖子内部链接';
$lang['ConfigBoard-antispam_disable_post_links-info'] = '使疑似垃圾信息发布者的帖子中的超级链接失效（不可点击），直到该账户自动从疑似垃圾信息发布者列表清除。';
$lang['ConfigBoard-antispam_disable_profile_links'] = '疑似垃圾信息发布者：禁用其个人页中的链接';
$lang['ConfigBoard-antispam_disable_profile_links-info'] = '疑似垃圾信息发布者将无法设置个人主页地址或者在个人签名中使用超链接。';
$lang['ConfigBoard-antispam_status_for_guests'] = '疑似垃圾信息发布者：应用到游客';
$lang['ConfigBoard-antispam_status_for_guests-info'] = '将限制同时应用到游客账户。';
$lang['ConfigBoard-ga_mode'] = 'Google 统计模式';
$lang['ConfigBoard-ga_mode0'] = '单一域名';
$lang['ConfigBoard-ga_mode1'] = '拥有多个子域名的单一域名';
$lang['ConfigBoard-ga_mode2'] = '多个顶级域名';
$lang['ConfigBoard-ga_mode-info'] = '同时在 \'跟踪代码\' 中查看你的统计账户设置。';
$lang['ConfigBoard-ga_account'] = 'Google 统计 ID';
$lang['ConfigBoard-ga_account-info'] = '将会向你的论坛页面添加统计代码。通常形式为 <code>UA-xxxxxxx-x</code>。留空则禁用该功能。';
$lang['ConfigBoard-ga_domain'] = 'Google 统计域名';
$lang['ConfigBoard-ga_domain-info'] = '如果是多个（子）域名则需要此项。';
$lang['ConfigBoard-allow_multi_sess_per_user'] = '允许每个用户保持多个会话';
$lang['ConfigBoard-allow_multi_sess_per_user-info'] = '如果禁用，则用户登录时，该用户的所有其它会话信息将被移除。';

$lang['CategoriesInfo'] = '本节为你控制论坛中存在的所有分类提供设置。';
$lang['CategoriesAddNewCat'] = '增加一个新分类（即分论坛）';
$lang['CategoriesAdjustSortIDs'] = '调整排序编号';
$lang['CategoriesSortAutomatically'] = '自动为分类进行排序';
$lang['CategoriesNoCatsExist'] = '该论坛还没有分类。';
$lang['CategoriesCatName'] = '类别名称';
$lang['CategoriesSortID'] = '排序编号';
$lang['CategoriesMissingFields'] = '某些必填的项目为空，请正确填写完整。';
$lang['CategoriesSortChangesApplied'] = '为排序编号所做更改已经保存。';
$lang['CategoriesConfirmCatDelete'] = '确认删除分类';
$lang['CategoriesConfirmCatDeleteContent'] = '你确认要删除类别 %s 吗？该操作无法撤销！';
$lang['CategoriesMoveContents'] = '将该类别下面的所有内容移动到 %s';
$lang['CategoriesDeleteContents'] = '删除所有内容';
$lang['CategoriesEditingCat'] = '编辑类别 %s';
$lang['ForumsInfo'] = '本节为你控制论坛中存在的所有版块提供设置。';
$lang['ForumsAddNewForum'] = '增加一个新版块';
$lang['ForumsAdjustSortIDs'] = '调整排序编号';
$lang['ForumsSortAutomatically'] = '自动排序各版块';
$lang['ForumsNoForumsExist'] = '该论坛还没有创建任何版块。';
$lang['ForumsForumName'] = '版块名称';
$lang['ForumsCatName'] = '上级分类';
$lang['ForumsDescription'] = '描述';
$lang['HTMLEnabledField'] = '该区域支持 HTML。如果你要使用特殊字符，请确认使用它们对应的 HTML 代码（例如，使用 &amp;
 代替 &）。';
$lang['ForumsStatus'] = '状态';
$lang['ForumsStatusOpen'] = '打开';
$lang['ForumsAutoLock'] = '自动锁定';
$lang['ForumsAutoLockXReplies'] = '%s 条回复后自动锁定主题。';
$lang['ForumsIncreasePostCount'] = '增加用户帖子计数';
$lang['ForumsModerators'] = '版主';
$lang['ForumsModeratorsExplain'] = '用户名（不是昵称），用逗号（英文半角）分隔。大小写敏感。';
$lang['ForumsModeratorsUnknown'] = '未知会员： %s。';
$lang['ForumsHideModsList'] = '隐藏版主列表';
$lang['ForumsSortID'] = '排序编号';
$lang['ForumsMissingFields'] = '某些必填的项目为空，请正确填写完整。';
$lang['ForumsSortChangesApplied'] = '为排序编号所做更改已经保存。';
$lang['ForumsConfirmForumDelete'] = '确认删除版块';
$lang['ForumsConfirmForumDeleteContent'] = '你确认要删除版块 %s 吗？该操作无法撤销！';
$lang['ForumsMoveContents'] = '将所有内容移动到版块 %s';
$lang['ForumsMoveModerators'] = '当你移动内容时，同时移动版主。';
$lang['ForumsDeleteContents'] = '删除内容';
$lang['ForumsEditingForum'] = '编辑版块 %s';
$lang['ForumsGeneral'] = '常规设置';
$lang['ForumsAuth'] = '授权设置';
$lang['ForumsAuthNote'] = '设置间彼此没有继承关系！';
$lang['Forums-level0'] = '游客';
$lang['Forums-level1'] = '会员';
$lang['Forums-level2'] = '版主';
$lang['Forums-level3'] = '管理员';
$lang['Forums-auth0'] = '查看版块';
$lang['Forums-auth1'] = '阅读主题';
$lang['Forums-auth2'] = '发表新主题';
$lang['Forums-auth3'] = '回复';
$lang['Forums-auth4'] = '编辑别人的帖子';
$lang['Forums-auth5'] = '移动主题';
$lang['Forums-auth6'] = '删除主题和回复';
$lang['Forums-auth7'] = '锁定主题';
$lang['Forums-auth8'] = '置顶主题';
$lang['Forums-auth9'] = '以 HTML 格式发表帖子（危险）';
$lang['IPLookupSearchHostname'] = '搜索用户名';
$lang['IPLookupSearchUsernames'] = '搜索多个用户名';
$lang['IPLookupHostname'] = '用户名';
$lang['IPLookupHostnameNotFound'] = '没有找到对应的用户名。';
$lang['IPLookupUsernames'] = '用户名';
$lang['IPLookupUsernamesNotFound'] = '没有找到任何对应的用户名。';
$lang['SQLToolboxWarningTitle'] = '重要警告！';
$lang['SQLToolboxWarningContent'] = '谨慎使用原始数据查询工具！执行更改、删除、截断或者其它类型的查询可能会对你的论坛造成无法挽回的损害！只有当你非常清楚自己在做什么的时候才能使用该工具。';
$lang['SQLToolboxExecuteQuery'] = '执行查询';
$lang['SQLToolboxExecuteQueryInfo'] = '输入一条 SQL 查询指令来执行。执行结果会显示在一个文本框中。';
$lang['SQLToolboxExecute'] = '执行';
$lang['SQLToolboxExecutedSuccessfully'] = '数据库查询执行成功！';
$lang['SQLToolboxMaintenance'] = '维护';
$lang['SQLToolboxMaintenanceInfo'] = '该功能优化（同时修复）UseBB使用的 SQL 数据库表。对于大型论坛，推荐经常对数据库表进行优化。';
$lang['SQLToolboxRepairTables'] = '修复数据库表';
$lang['SQLToolboxOptimizeTables'] = '优化数据库表';
$lang['SQLToolboxMaintenanceNote'] = '提示：该操作不会恢复数据库中任何丢失的数据。';
$lang['ModulesInfo'] = 'ACP 模块使你能够为 ACP 增加你自己的，或者来自第三方开发的特色功能。你可以从UseBB网站找到一些模块：%s。';
$lang['ModulesLongName'] = '完整名称';
$lang['ModulesShortName'] = '缩写名称';
$lang['ModulesCategory'] = '分类';
$lang['ModulesFilename'] = '文件名';
$lang['ModulesDeleteNotPermitted'] = '不允许';
$lang['ModulesDisabled'] = '已禁用 ACP 模块';
$lang['ModulesDisabledInfo'] = '论坛设置中禁用了 ACP 模块。';
$lang['ModulesNoneAvailable'] = '目前没有模块可用。';
$lang['ModulesUpload'] = '上传模块';
$lang['ModulesUploadInfo'] = '输入一个 UseBB ACP 模块的本地文件名来上传。';
$lang['ModulesUploadDuplicateModule'] = '已经存在一个文件名为 %s 的模块。请先删除。';
$lang['ModulesUploadNoValidModule'] = '文件 %s 不是一个有效的 UseBB 模块。';
$lang['ModulesUploadFailed'] = '无法安装模块 %s。复制失败。';
$lang['ModulesUploadDisabled'] = '模块目录无法写入。上传被禁用。要启用，请将该目录 %s 改为服务器可写。';
$lang['ModulesConfirmModuleDelete'] = '确认删除模块';
$lang['ModulesConfirmModuleDeleteInfo'] = '你确认要删除模块 %s (%s)吗？';
$lang['MembersSearchMember'] = '搜索会员';
$lang['MembersSearchMemberInfo'] = '输入完整（或部分）用户名、昵称或 Email 地址进行编辑。';
$lang['MembersSearchMemberExplain'] = '用户名、昵称或 Email 地址';
$lang['MembersSearchMemberNotFound'] = '没有找到与 %s 相关的会员。';
$lang['MembersSearchMemberList'] = '找到以下会员';
$lang['MembersEditingMember'] = '编辑会员 %s';
$lang['MembersEditingMemberInfo'] = '更新用户信息后提交表单。星号（*）标记的栏目为必填。';
$lang['MembersEditingMemberUsernameExists'] = '用户名 %s 已经被用作用户名或者昵称。';
$lang['MembersEditingMemberDisplayedNameExists'] = '昵称 %s 已经被用作用户名或者昵称。';
$lang['MembersEditingMemberBanned'] = '被封禁';
$lang['MembersEditingMemberBannedReason'] = '封禁原因';
$lang['MembersEditingMemberCantChangeOwnLevel'] = '你不能改变自己的论坛级别。';
$lang['MembersEditingMemberCantBanSelf'] = '你不能封禁自己的帐号。';
$lang['MembersEditingMemberCantDeleteSelf'] = '你不能删除自己的帐号。';
$lang['MembersEditingComplete'] = '成功编辑会员 %s 的资料。';
$lang['MembersEditingLevelModInfo'] = '要将某人提升为版主，编辑一个版块并将该会员的用户名添加到版主列表。';
$lang['MembersEditingActivation'] = '激活状态';
$lang['MembersEditingMemberCantChangeOwnActivation'] = '你不能更改自己的激活状态。';
$lang['MembersEditingActivationInactive'] = '未激活';
$lang['MembersEditingActivationActive'] = '激活';
$lang['MembersEditingActivationPotentialSpammer'] = '疑似垃圾信息发布者';
$lang['MembersEditingActivationInfo'] = '在这里更改激活状态将不会发送邮件给相应用户。 &mdash; 疑似垃圾信息发布者状态会自动根据你在&quot;疑似垃圾信息发布者：最大帖子计数&quot;中设置的条件清除。';

$lang['DeleteMembersSearchMember'] = '搜索会员';
$lang['DeleteMembersSearchMemberInfo'] = '输入完整（或部分）用户名、昵称或 email 地址进行编辑。';
$lang['DeleteMembersSearchMemberExplain'] = '用户名、昵称或 email 地址';
$lang['DeleteMembersSearchMemberNotFound'] = '没有找到与 %s 相关的会员。';
$lang['DeleteMembersSearchMemberList'] = '找到以下会员';
$lang['DeleteMembersConfirmMemberDelete'] = '确认删除会员';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '你确认要删除会员 %s 吗？该操作无法撤销！';
$lang['DeleteMembersComplete'] = '成功删除会员 %s 。';
$lang['DeleteMembersDeletePosts'] = '同时永久删除该用户发表的所有帖子。';
$lang['DeleteMembersBanEmail'] = '封锁 Email 地址';
$lang['DeleteMembersBanIPAddress'] = '封禁最后使用的 IP 地址';
$lang['DeleteMembersSFSSubmit'] = '将 &quot;%s; %s; %s&quot; 提交给 Stop Forum Spam。';

$lang['RegisterMembersExplain'] = '你可以在这里预注册会员账号。只需要填写下面的表格并成功提交就可以创建一个账户。';
$lang['RegisterMembersComplete'] = '成功注册用户 %s。该用户马上就可以登录了。';
$lang['RegisterMembersEditMember'] = '你还可以进一步编辑该会员的账户信息：%s。';

$lang['ActivateMembersExplain'] = '这是你的论坛上未激活账户列表。你可以在这里手动激活这些账户。有星号（*）标记的账户表示以前激活过。';
$lang['ActivateMembersNoMembers'] = '没有未激活会员。';
$lang['ActivateMembersListAdmin'] = '管理员激活';
$lang['ActivateMembersListEmail'] = '邮件激活';
$lang['ActivateMembersListAll'] = '所有';
$lang['PruneForumsStart'] = '开始清理';
$lang['PruneForumsExplain'] = '通过清理论坛，你可以删除或者移动旧的主题，以保持论坛整洁。';
$lang['PruneForumsForums'] = '要清理的版块';
$lang['PruneForumsAction'] = '动作';
$lang['PruneForumsActionLock'] = '锁定';
$lang['PruneForumsActionMove'] = '移动';
$lang['PruneForumsActionDelete'] = '删除';
$lang['PruneForumsMoveTo'] = '将主题移动到';
$lang['PruneForumsTopicAge'] = '主题年龄';
$lang['PruneForumsTopicAgeField'] = '最后回复是在 %s 天前。';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '要"移动到"的版块无法进行清理。';
$lang['PruneForumsConfirm'] = '确认';
$lang['PruneForumsConfirmText'] = '我理解该操作无法撤销。';
$lang['PruneForumsNotConfirmed'] = '你必须先确认该操作。';
$lang['PruneForumsDone'] = '清理成功。主题 %d 已经清理。';
$lang['PruneForumsExcludeStickies'] = '排除置顶的主题';
$lang['PruneMembersExplain'] = '通过清理会员，你可以通过删除未激活或者长时间不活跃的会员的账户以清理论坛会员。';
$lang['PruneMembersTypeNeverActivated'] = '从未激活的会员';
$lang['PruneMembersRegisteredDaysAgo'] = '注册至少 %s 天。';
$lang['PruneMembersTypeNeverPosted'] = '从未发帖的会员';
$lang['PruneMembersTypeInactive'] = '不活跃会员';
$lang['PruneMembersLastLoggedIn'] = '最后一次登录至少在 %s 天前。';
$lang['PruneMembersTypeProfileSpam'] = '垃圾个人资料账户';
$lang['PruneMembersTypeProfileSpamExplain'] = '那些没有发帖但是在个人资料（签名）中有链接的会员。';
$lang['PruneMembersExclude'] = '排除';
$lang['PruneMembersOptions'] = '选项';
$lang['PruneMembersDeletePosts'] = '删除所有被清理会员发表的帖子。';
$lang['PruneMembersPreview'] = '预览会员';
$lang['PruneMembersPreviewList'] = '根据提交的设定，%d 位会员将被删除。';
$lang['PruneMembersUsesCurrentSettings'] = '警告！%s 会使用当前给出的设定，而不是根据最后预览的会员列表。';
$lang['PruneMembersConfirmText'] = '我理解该操作无法撤销。';
$lang['PruneMembersStart'] = '开始清理';
$lang['PruneMembersType'] = '清理类型';
$lang['PruneMembersNotConfirmed'] = '你必须先确认该操作。';
$lang['PruneMembersDone'] = '清理成功。%d 位会员已被清理。';

$lang['DNSBLIPBansDisabled'] = 'IP 地址封锁被禁用';
$lang['DNSBLIPBansDisabledInfo'] = '要启用 DNSBL 式封禁，必须启用 IP 地址封锁。';
$lang['DNSBLDisabled'] = 'DNSBL 封锁被禁用';
$lang['DNSBLDisabledInfo'] = '论坛设置为禁用 DNSBL 封禁功能。';
$lang['DNSBLGeneralInfo'] = '开放代理经常被用于发表垃圾贴子或攻击性消息。使用 UseBB 的保护系统，多数这样的代理都能被自动检测并封禁。因此也就需要查询黑名单来确认来访者的 IP 地址信息。';
$lang['DNSBLServers'] = 'DNS 黑名单（DNSBL）服务器';
$lang['DNSBLServersInfo'] = '每行一个 DNSBL 服务器。请注意，同时使用多个这样的黑名单将会降低论坛响应速度。';
$lang['DNSBLMinPositiveHits'] = '至少需要 %s 次有效点击来封锁一个 IP 地址。';
$lang['DNSBLRecheckMinutes'] = '每隔 %s 分钟（0表示禁用此功能）重新检查一次允许的 IP 地址。';
$lang['DNSBLSettingsSaved'] = 'DNSBL 封禁设置保存成功。';
$lang['DNSBLWhitelist'] = '白名单';
$lang['DNSBLWhitelistInfo'] = '每行一个 IP 地址或主机名（支持通配符 * 和 ? ）。';
$lang['DNSBLGlobally'] = '进行全面性能检查而不是只针对注册/发帖进行检查（不推荐）。';

$lang['BadwordsInfo'] = '能够过滤或替换不良词汇，最后使用部分匹配（使用 * ）。';
$lang['BadwordsDisabled'] = '禁用不良词汇过滤';
$lang['BadwordsDisabledInfo'] = '论坛配置中禁用了不良词汇过滤功能。';
$lang['BadwordsNoBadwordsExist'] = '该论坛没有设置过滤器。';
$lang['BadwordsAddBadwordWord'] = '不良词汇';
$lang['BadwordsAddBadwordReplacement'] = '替换词汇';
$lang['MassEmailInfo'] = '向所有用户或某个级别的用户组群发 Email 消息。';
$lang['MassEmailRecipients'] = '收件人';
$lang['MassEmailRecipients-admins'] = '管理员';
$lang['MassEmailRecipients-mods'] = '版主';
$lang['MassEmailRecipients-members'] = '普通会员';
$lang['MassEmailSubject'] = '主题';
$lang['MassEmailBody'] = '邮件内容';
$lang['MassEmailTemplate'] = '您好，

这是来自 [board_name] 的群发消息，由管理员通过论坛发送。消息内容如下。 

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = '群发邮件消息已经发送给 %d 位会员，使用了 %d 条消息。';
$lang['MassEmailOptions'] = '选项';
$lang['MassEmailPublicEmailsOnly'] = '仅发送给公开 Email 地址';
$lang['MassEmailExcludeBanned'] = '排除封禁会员';
$lang['BansInfo'] = '你可以在这里控制论坛几乎所有方面的封禁设置。支持部分匹配（使用 *）。要封禁单个会员，请通过会员编辑面板。';
$lang['Bans-username'] = '封禁的用户';
$lang['Bans-email'] = '封禁的 Email 地址';
$lang['Bans-ip_addr'] = '封禁的 IP 地址';
$lang['BansUsername'] = '封禁的用户';
$lang['BansEmail'] = '封禁的 Email 地址';
$lang['BansIp_addr'] = '封禁的 IP 地址';
$lang['BansNoBansExist'] = '本论坛没有该类型的封禁。';
$lang['BansIPBansDisabledInfo'] = '论坛设置中禁用了 IP 地址封锁。';
?>