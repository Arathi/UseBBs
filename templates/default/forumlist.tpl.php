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
// Forum list templates
//

$templates['forumlist_header'] = '
';

$templates['forumlist_cat_header'] = '
	<table class="maintable">
		<tr>
			<td colspan="5" class="forumcat">&raquo; {cat_name}</td>
		</tr>
		<tr>
			<th></th>
			<th>{forum}</th>
			<th>{topics}</th>
			<th>{posts}</th>
			<th>{latest_post}</th>
		</tr>
';

$templates['forumlist_forum'] = '
		<tr>
			<td class="icon"><img src="{img_dir}{forum_icon}" alt="{forum_status}" /></td>
			<td><div class="forumname">{forum_name}</div><div class="forumdescr">{forum_descr}</div><div class="forummods">{forum_mods}</div></td>
			<td class="count">{total_topics}</td>
			<td class="count">{total_posts}</td>
			<td class="lastpostinfo">{latest_post}<br />{by_author}<br />{on_date}</td>
		</tr>
';

$templates['forumlist_cat_footer'] = '
	</table>
';

$templates['forumlist_footer'] = '
';

?>
