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
// Set the page title
//
$template->set_page_title($lang['Subscriptions']);

//
// Unsubscribe topics
//
if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['unsubscribe']) && is_array($_POST['unsubscribe']) && count($_POST['unsubscribe']) ) {
	
	$to_unsubscribe = array();
	foreach ( $_POST['unsubscribe'] as $topic_id ) {
		
		if ( !empty($topic_id) && valid_int($topic_id) )
			$to_unsubscribe[] = $topic_id;
		
	}
	
	if ( count($to_unsubscribe) ) {
		
		if ( !($result = $db->query("DELETE FROM ".TABLE_PREFIX."subscriptions WHERE user_id = ".$session->sess_info['user_id']." AND topic_id IN(".join(', ', $to_unsubscribe).")")) )
			$functions->usebb_die('SQL', 'Unable to unsubscribe topics!', __FILE__, __LINE__);
		
	}
	
	$template->parse('msgbox', 'global', array(
		'box_title' => $lang['Note'],
		'content' => $lang['SelectedTopicsUnsubscribed']
	));
	
} else {
	
	if ( !($result = $db->query("SELECT t.id, t.forum_id, t.topic_title, t.last_post_id, t.count_replies, t.count_views, t.status_locked, t.status_sticky, f.name AS forum_name, p.poster_guest, p2.poster_guest AS last_poster_guest, p2.post_time AS last_post_time, u.id AS poster_id, u.displayed_name AS poster_name, u.level AS poster_level, u2.id AS last_poster_id, u2.displayed_name AS last_poster_name, u2.level AS last_poster_level FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."forums f, ".TABLE_PREFIX."posts p LEFT JOIN ".TABLE_PREFIX."members u ON p.poster_id = u.id, ".TABLE_PREFIX."posts p2 LEFT JOIN ".TABLE_PREFIX."members u2 ON p2.poster_id = u2.id, ".TABLE_PREFIX."subscriptions s WHERE p.id = t.first_post_id AND p2.id = t.last_post_id AND f.id = t.forum_id AND t.id = s.topic_id AND s.user_id = ".$session->sess_info['user_id']." ORDER BY p2.post_time DESC")) )
		$functions->usebb_die('SQL', 'Unable to get topic list!', __FILE__, __LINE__);
	
	if ( !$db->num_rows($result) ) {
		
		$template->parse('msgbox', 'global', array(
			'box_title' => $lang['Note'],
			'content' => $lang['NoSubscribedTopics']
		));
		
	} else {
		
		$template->parse('subscriptions_header', 'panel', array(
			'form_begin' => '<form action="'.$functions->make_url('panel.php', array('act' => 'subscriptions')).'" method="post">'
		));
		
		while ( $topicdata = $db->fetch_result($result) ) {
			
			//
			// Loop through the topics, generating output...
			//
			$topic_name = '<a href="'.$functions->make_url('topic.php', array('id' => $topicdata['id'])).'">'.unhtml(stripslashes($topicdata['topic_title'])).'</a>';
			if ( $topicdata['status_sticky'] )
				$topic_name = $lang['Sticky'].': '.$topic_name;
			$last_post_author = ( $topicdata['last_poster_id'] > 0 ) ? $functions->make_profile_link($topicdata['last_poster_id'], $topicdata['last_poster_name'], $topicdata['last_poster_level']) : $topicdata['last_poster_guest'];
			
			list($topic_icon, $topic_status) = $functions->topic_icon($topicdata['id'], $topicdata['status_locked'], $topicdata['last_post_time']);
			
			if ( $topic_status == $lang['NewPosts'] || $topic_status == $lang['LockedNewPosts'] ) {
				
				$topic_name = sprintf($template->get_config('newpost_link_format'), $functions->make_url('topic.php', array('id' => $topicdata['id'], 'act' => 'getnewpost')).'#newpost', 'templates/'.$functions->get_config('template').'/gfx/'.$template->get_config('newpost_link_icon'), $topic_status) . $topic_name;
				
			}
			
			//
			// Parse the topic template
			//
			$template->parse('subscriptions_topic', 'panel', array(
				'topic_icon' => $topic_icon,
				'topic_status' => $topic_status,
				'topic_name' => $topic_name,
				'topic_page_links' => ( $topicdata['count_replies']+1 > $functions->get_config('posts_per_page') ) ? $functions->make_page_links(ceil(intval($topicdata['count_replies']+1) / $functions->get_config('posts_per_page')), '0', $topicdata['count_replies']+1, $functions->get_config('posts_per_page'), 'topic.php', $topicdata['id'], FALSE) : '',
				'forum' => '<a href="'.$functions->make_url('forum.php', array('id' => $topicdata['forum_id'])).'">'.unhtml(stripslashes($topicdata['forum_name'])).'</a>',
				'author' => ( $topicdata['poster_id'] > 0 ) ? $functions->make_profile_link($topicdata['poster_id'], $topicdata['poster_name'], $topicdata['poster_level']) : unhtml(stripslashes($topicdata['poster_guest'])),
				'replies' => $topicdata['count_replies'],
				'views' => $topicdata['count_views'],
				'author_date' => sprintf($lang['AuthorDate'], $last_post_author, $functions->make_date($topicdata['last_post_time'])),
				'by_author' => sprintf($lang['ByAuthor'], $last_post_author),
				'on_date' => sprintf($lang['OnDate'], $functions->make_date($topicdata['last_post_time'])),
				'last_post_url' => $functions->make_url('topic.php', array('post' => $topicdata['last_post_id'])).'#post'.$topicdata['last_post_id'],
				#'unsubscribe' => '<a href="'.$functions->make_url('topic.php', array('id' => $topicdata['id'], 'act' => 'unsubscribe')).'">'.$lang['UnsubscribeTopic'].'</a>',
				'unsubscribe_check' => '<input type="checkbox" name="unsubscribe[]" value="'.$topicdata['id'].'" />',
			));
			
		}
		
		$template->parse('subscriptions_footer', 'panel', array(
			'unsubscribe_submit' => '<input type="submit" name="submit" value="'.$lang['UnsubscribeSelected'].'" />',
			'form_end' => '</form>'
		));
		
	}
	
}

?>
