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
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

define('INCLUDED', true);
define('ROOT_PATH', './');

//
// Include usebb engine
//
require(ROOT_PATH.'sources/common.php');

//
// If an ID has been passed
//
if ( ( !empty($_GET['id']) && is_numeric($_GET['id']) ) || ( !empty($_GET['post']) && is_numeric($_GET['post']) ) ) {
	
	//
	// Look up the topic ID for post ID's
	//
	if ( !empty($_GET['post']) && is_numeric($_GET['post']) ) {
		
		if ( !($result = $db->query("SELECT topic_id FROM ".TABLE_PREFIX."posts WHERE id = ".$_GET['post'])) )
			$functions->usebb_die('SQL', 'Unable to post parent topic!', __FILE__, __LINE__);
		$out = $db->fetch_result($result);
		$_GET['id'] = $out['topic_id'];
		
	}
	
	//
	// Update and get the session information
	//
	$session->update('topic:'.$_GET['id']);
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( !($result = $db->query("SELECT t.topic_title, t.status_locked, t.forum_id, f.id AS forum_id, f.name AS forum_name, f.status AS forum_status, f.auth FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."forums f WHERE t.id = ".$_GET['id']." AND f.id = t.forum_id")) )
		$functions->usebb_die('SQL', 'Unable to get topic information!', __FILE__, __LINE__);
	
	if ( !$db->num_rows($result) ) {
		
		//
		// This topic does not exist, show an error
		//
		$template->set_page_title($lang['Error']);
		$template->parse('msgbox', array(
			'box_title' => $lang['Error'],
			'content' => sprintf($lang['NoSuchTopic'], 'ID '.$_GET['id'])
		));
		
	} else {
		
		$topicdata = $db->fetch_result($result);
		
		if ( $functions->auth($topicdata['auth'], 'read', $topicdata['forum_id']) ) {
			
			$template->set_page_title(stripslashes($topicdata['topic_title']));
			
			$location_bar = '<a href="'.$functions->make_url('index.php').'">'.$functions->get_config('board_name').'</a> '.$template->get_config('location_arrow').' <a href="'.$functions->make_url('forum.php', array('id' => $topicdata['forum_id'])).'">'.htmlentities(stripslashes($topicdata['forum_name'])).'</a> '.$template->get_config('location_arrow').' '.htmlentities(stripslashes($topicdata['topic_title']));
			$template->parse('location_bar', array(
				'location_bar' => $location_bar
			));
			
			if ( !($result = $db->query("SELECT p.id, p.poster_id, p.poster_guest, p.poster_ip_addr, p.content, p.post_time, p.enable_bbcode, p.enable_smilies, p.enable_sig, p.enable_html, u.name AS poster_name, u.level, u.rank, u.avatar_type, u.avatar_remote, u.signature FROM ( ".TABLE_PREFIX."posts p LEFT JOIN ".TABLE_PREFIX."users u ON p.poster_id = u.id ) WHERE p.topic_id = ".$_GET['id']." ORDER BY p.post_time ASC")) )
				$functions->usebb_die('SQL', 'Unable to get posts in topic!', __FILE__, __LINE__);
			
			$topic_links = array();
			$topic_links[] = ( $topicdata['forum_status'] ) ? '<a href="'.$functions->make_url('post.php', array('forum' => $topicdata['forum_id'])).'">'.$lang['PostNewTopic'].'</a>' : '<a href="'.$functions->make_url('post.php', array('forum' => $topicdata['forum_id'])).'">'.$lang['ForumIsLocked'].'</a>';
			$topic_links[] = ( !$topicdata['status_locked'] ) ? '<a href="'.$functions->make_url('post.php', array('topic' => $_GET['id'])).'">'.$lang['PostReply'].'</a>' : '<a href="'.$functions->make_url('post.php', array('topic' => $_GET['id'])).'">'.$lang['TopicIsLocked'].'</a>';
			$topic_links = join(' '.$template->get_config('item_delimiter').' ', $topic_links);
			
			//
			// Output the posts
			//
			$template->parse('topic_header', array(
				'author' => $lang['Author'],
				'post' => $lang['Post'],
				'topic_links' => $topic_links
			));
			
			while ( $postsdata = $db->fetch_result($result) ) {
				
				$colornum = ( !isset($colornum) || $colornum !== 1 ) ? 1 : 2;
				
				if ( !empty($postsdata['poster_name']) ) {
					
					switch ( $postsdata['level'] ) {
						
						case 3:
							$levelclass = ' class="administrator"';
							break;
						case 2:
							$levelclass = ' class="moderator"';
							break;
						case 1:
							$levelclass = '';
							break;
						
					}
					
					$poster_name = '<a href="'.$functions->make_url('profile.php', array('id' => $postsdata['poster_id'])).'"'.$levelclass.'>'.$postsdata['poster_name'].'</a>';
					
					$poster_rank = ( !empty($postsdata['rank']) ) ? stripslashes($postsdata['rank']) : $lang['Member'];
					
					if ( !$postsdata['avatar_type'] )
						$avatar = '';
					elseif ( intval($postsdata['avatar_type']) === 1 )
						$avatar = '<img src="'.$postsdata['avatar_remote'].'" alt="'.$postsdata['poster_name'].'" />';
					
				} else {
					
					$poster_name = $postsdata['poster_guest'];
					$poster_rank = $lang['Guest'];
					$avatar = '';
					
				}
				
				$post_links = array();
				if ( $functions->auth($topicdata['auth'], 'edit', $topicdata['forum_id']) )
					$post_links[] = $postsdata['poster_ip_addr'];
				if ( $session->sess_info['user_id'] && $postsdata['poster_id'] == $session->sess_info['user_id'] || $functions->auth($topicdata['auth'], 'edit', $topicdata['forum_id']) )
					$post_links[] = '<a href="'.$functions->make_url('edit.php', array('post' => $postsdata['id'])).'">'.$lang['Edit'].'</a>';
				if ( $functions->auth($topicdata['auth'], 'delete', $topicdata['forum_id']) )
					$post_links[] = '<a href="'.$functions->make_url('edit.php', array('post' => $postsdata['id'], 'delete' => 1)).'">'.$lang['Delete'].'</a>';
				$post_links[] = '<a href="'.$functions->make_url('post.php', array('topic' => $_GET['id'], 'quotepost' => $postsdata['id'])).'">'.$lang['Quote'].'</a>';
				$post_links = join(' '.$template->get_config('item_delimiter').' ', $post_links);
				
				$post_content = stripslashes($postsdata['content']);
				if ( !empty($postsdata['signature']) && $postsdata['enable_sig'] )
					$post_content .= "\n\n".$template->get_config('sig_divider')."\n".stripslashes($postsdata['signature']);
				$post_content = $functions->markup($post_content, $postsdata['enable_bbcode'], $postsdata['enable_smilies'], $postsdata['enable_html']);
				
				$i = ( !isset($i) ) ? 1 : $i+1;
				$template->parse('topic_post', array(
					'poster_name' => $poster_name,
					'poster_rank' => $poster_rank,
					'poster_avatar' => $avatar,
					'post_anchor' => '<a href="'.$functions->make_url('topic.php', array('post' => $postsdata['id'])).'#post'.$postsdata['id'].'" name="post'.$postsdata['id'].'">#'.$i.'</a>',
					'post_date' => $functions->make_date($postsdata['post_time']),
					'post_links' => $post_links,
					'post_content' => $post_content,
					'colornum' => $colornum
				));
				
			}
			
			$template->parse('topic_footer', array(
				'topic_links' => $topic_links
			));
			
			$template->parse('location_bar', array(
				'location_bar' => $location_bar
			));
			
			//
			// Update views count
			//
			if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."topics SET count_views = count_views+1 WHERE id = ".$_GET['id'])) )
				$functions->usebb_die('SQL', 'Unable to update topic views count!', __FILE__, __LINE__);
			
		} else {
			
			//
			// The user is not granted to view this forum
			//
			$functions->redir_to_login();
			
		}
		
	}
	
	//
	// Include the page footer
	//
	require(ROOT_PATH.'sources/page_foot.php');
	
} else {
	
	//
	// There's no forum ID! Get us back to the index...
	//
	header('Location: '.$functions->make_url('index.php', array(), false));
	
}

?>
