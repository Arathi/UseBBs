<?php

/*
	Copyright (C) 2003-2004 UseBB Team
	http://www.usebb.net
	
	$Header$
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	02111-1307	USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Topic templates
//

$templates['topic_header'] = '
	<table class="maintable">
	 <tr>
		 <td colspan="2" class="toolbar">
			 <div align="right">{new_topic_link}{reply_link}</div>
		 </td>
	 </tr>
	 <tr class="tablehead">
		 <th>{author}</th>
		 <th>{post}</th>
	 </tr>
';

$templates['topic_post'] = '
		<tr class="post">
			<td class="td{colornum}" width="150">
				<b>{poster_name}</b><br />
				<small>{poster_rank}</small>
				<div class="avatar">{poster_avatar}</div>
				<div class="posterinfo">{registered}<br />{posts}<br />{location}</div>
			</td>
			<td class="td{colornum}">
				<div class="postlinks">{post_links}</div>
				<small><b>&laquo;{topic_title}&raquo;</b><br />{post_anchor} - {post_date}</small>
				<hr /><div class="postcontent">{post_content}</div>{poster_sig}
			</td>
		</tr>
';

$templates['topic_footer'] = '
		<tr>
			<td colspan="2" class="toolbar">
				<div align="right">{new_topic_link}{reply_link}</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" class="td2">
				<small>{action_links}</small>
			</td>
		</tr>
	</table>
';

$templates['quick_reply'] = '
	{form_begin}
	<table class="maintable">
		<tr class="tablehead">
			<th colspan="2">{quick_reply}</th>
		</tr>
		<tr>
			<td width="25%" class="td2">{username}</td><td class="td1">{username_input}</td>
		</tr>
		<tr>
			<td width="25%" class="td2">{content}</td><td class="td1">{content_input}</td>
		</tr>
		<tr>
			<td colspan="2" class="td2"><div align="center">{submit_button}</div></td>
		</tr>
	</table>
	{form_end}
';

?>
