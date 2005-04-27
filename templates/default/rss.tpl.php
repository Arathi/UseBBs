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
// RSS templates
//

$templates['topiclist_header'] = '<?xml version="1.0" encoding="{character_encoding}"?>
<rss version="0.92" xml:lang="{language_code}">
	<channel>
		<title>{board_name}</title>
		<link>{board_url}</link>
		<description><![CDATA[{board_descr}]]></description>
';

$templates['topiclist_topic'] = '
		<item>
			<title><![CDATA[{title}]]></title>
			<link>{link}</link>
			<comments>{comments}</comments>
			<category><![CDATA[{category}]]></category>
			<pubDate>{pubDate}</pubDate>
			<guid>{guid}</guid>
		</item>
';

$templates['topiclist_footer'] = '
	</channel>
</rss>
';

?>
