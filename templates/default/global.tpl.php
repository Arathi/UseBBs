<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header$
	
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
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new template holder array
//
$templates = array();

//
// Define configuration variables of this template set
//
$templates['config'] = array(
	'content_type'						=> 'text/html',
	'item_delimiter'					=> ' &middot; ',
	'locationbar_item_delimiter'		=> ' &raquo; ',
	'postlinks_item_delimiter'			=> ' | ',
	'open_nonewposts_icon'				=> 'open_nonewposts.gif',
	'open_newposts_icon'				=> 'open_newposts.gif',
	'closed_nonewposts_icon'			=> 'closed_nonewposts.gif',
	'closed_newposts_icon'				=> 'closed_newposts.gif',
	'newpost_link_format'				=> '<a href="%s"><img src="%s" alt="%s" /></a> ',
	'newpost_link_icon'					=> 'new.gif',
	'sig_format'						=> '<div class="signature">_______________<br />%s</div>',
	'quote_format'						=> '<blockquote class="quote"><div class="title">%s</div><div class="content">%s</div></blockquote>',
	'code_format'						=> '<pre class="code">%s</pre>',
	'post_editinfo_format'				=> '<div class="editinfo">&laquo; %s &raquo;</div>',
	'poster_ip_addr_format' 			=> '<div class="poster-ip-addr">%s</div>',
	'textarea_rows'						=> '10',
	'textarea_cols'						=> '60',
	'quick_reply_textarea_rows'			=> '5',
	'quick_reply_textarea_cols'			=> '60',
	'post_form_bbcode_seperator'		=> '',
	'post_form_smiley_seperator'		=> '',
	'debug_info_small'					=> '<div id="debug-info-small">%s</div>',
	'debug_info_large'					=> '<div id="debug-info-large">%s</div>',
	'smilies' => array(
		':)' => 'smile.gif',
		';)' => 'wink.gif',
		':D' => 'biggrin.gif',
		'8)' => 'cool.gif',
		':P' => 'razz.gif',
		':o' => 'surprised.gif',
		':?' => 'confused.gif',
		':(' => 'sad.gif',
		':x' => 'mad.gif',
		':|' => 'neutral.gif',
		':\'(' => 'cry.gif',
		':lol:' => 'lol.gif',
		':mrgreen:' => 'mrgreen.gif',
		':oops:' => 'redface.gif',
		':shock:' => 'eek.gif',
		':roll:' => 'rolleyes.gif',
		':evil:' => 'evil.gif',
		':twisted:' => 'twisted.gif',
	)
);

//
// Globally needed templates
//

$templates['normal_header'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{language_code}" lang="{language_code}" dir="{text_direction}">
<head>
	<title>{board_name}: {page_title}</title>
	<meta http-equiv="Content-Type" content="{content_type}; charset={character_encoding}" />
	<link rel="stylesheet" type="text/css" href="{css_url}" />{acp_css_head_link}
	<link rel="shortcut icon" href="{img_dir}usebb.ico" />{rss_head_link}
	<script type="text/javascript" src="sources/javascript.js"></script>
</head>
<body>
	<div id="pagebox-bg">
	<div id="shadow-left">
	<div id="shadow-right">
	
	<p id="logo"><a href="{link_home}"><img src="{img_dir}usebb.png" alt="UseBB" title="{l_Home}" /></a></p>
	<h1 id="boardname"><span id="line">{board_name}</span></h1>
	<h2 id="boarddescr">{board_descr}</h2>
	
	<div id="topmenu"><ul>
		<li><a href="{link_home}">{l_Home}</a></li><li><a href="{link_reg_panel}">{reg_panel}</a></li><li><a href="{link_faq}">{l_FAQ}</a></li><li><a href="{link_search}">{l_Search}</a></li><li><a href="{link_active}">{l_ActiveTopics}</a></li><li><a href="{link_log_inout}">{log_inout}</a></li>
	</ul></div>
	<div id="topmenu-shadow"></div>
	
	<p class="locationbar">
		&bull; {location_bar}
	</p>
';

$templates['normal_footer'] = '
	<p class="locationbar">
		&bull; {location_bar}
	</p>
	
	<p id="linkbar">
		{link_bar}
	</p>
	{debug_info_small}
	<address id="bottom">
		<!--
			We request not to remove the following copyright notice including the link to the UseBB Home Page.
			This shows your respect to everyone involved in UseBB\'s development and promotes the use of UseBB.
			If you don\'t want to show the Copyright notice, just leave the Powered by UseBB line. If you
			completely alter or remove the notice, support at our community forums or IRC channel will be affected.
		-->
		{usebb_copyright}
	</address>
	<div id="bottom-shadow"></div>
	{debug_info_large}
	</div>
	</div>
	</div>
</body>
</html>
';

$templates['msgbox'] = '
	<table class="msgbox">
		<tr>
			<th>{box_title}</th>
		</tr>
		<tr>
			<td>{content}</td>
		</tr>
	</table>
';

$templates['confirm_form'] = '
	{form_begin}
	<table class="confirmform">
		<tr>
			<th>{title}</th>
		</tr>
		<tr>
			<td class="msg">{content}</td>
		</tr>
		<tr>
			<td class="formcontrols">{submit_button}&nbsp;{cancel_button}</td>
		</tr>
	</table>
	{form_end}
';

?>
