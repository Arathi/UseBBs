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
if ( !empty($_GET['topic']) && is_numeric($_GET['topic']) ) {
	
	//
	// Update and get the session information
	//
	$session->update('reply:'.$_GET['topic']);
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( !($result = $db->query("SELECT t.topic_title, t.status_locked, t.forum_id, f.id AS forum_id, f.name AS forum_name, f.status AS forum_status, f.auth FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."forums f WHERE t.id = ".$_GET['topic']." AND f.id = t.forum_id")) )
		$functions->usebb_die('SQL', 'Unable to get topic information!', __FILE__, __LINE__);
	
	if ( !$db->num_rows($result) ) {
		
		//
		// This topic does not exist, show an error
		//
		$template->set_page_title($lang['Error']);
		$template->parse('msgbox', array(
			'box_title' => $lang['Error'],
			'content' => sprintf($lang['NoSuchTopic'], 'ID '.$_GET['topic'])
		));
		
	} else {
		
		$topicdata = $db->fetch_result($result);
		
		if ( $topicdata['status_locked'] && !$functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) ) {
			
			$template->set_page_title($lang['TopicIsLocked']);
			$template->parse('msgbox', array(
				'box_title' => $lang['TopicIsLocked'],
				'content' => $lang['TopicIsLockedExplain']
			));
			
		} elseif ( $functions->auth($topicdata['auth'], 'reply', $topicdata['forum_id']) ) {
			
			$_POST['user'] = ( !empty($_POST['user']) ) ? $_POST['user'] : '';
			$_POST['user'] = preg_replace('/ +/', ' ', $_POST['user']);
			
			if ( ( $session->sess_info['user_id'] || ( !empty($_POST['user']) && preg_match(USER_PREG, $_POST['user']) ) ) && !empty($_POST['content']) ) {
				
				$poster_id = ( $session->sess_info['user_id'] ) ? $session->sess_info['user_id'] : 0;
				$poster_guest = ( !$session->sess_info['user_id'] ) ? $_POST['user'] : '';
				$_POST['enable_bbcode'] = ( !empty($_POST['enable_bbcode']) ) ? 1 : 0;
				$_POST['enable_smilies'] = ( !empty($_POST['enable_smilies']) ) ? 1 : 0;
				$_POST['enable_sig'] = ( $session->sess_info['user_id'] && !empty($session->sess_info['user_info']['signature']) && !empty($_POST['enable_sig']) ) ? 1 : 0;
				$_POST['enable_html'] = ( $functions->auth($topicdata['auth'], 'html', $topicdata['forum_id']) && !empty($_POST['enable_html']) ) ? 1 : 0;
				
				if ( !($result = $db->query("INSERT INTO ".TABLE_PREFIX."posts VALUES(NULL, ".$_GET['topic'].", ".$poster_id.", '".$poster_guest."', '".$session->sess_info['ip_addr']."', '".$_POST['content']."', ".gmmktime().", 0, 0, ".$_POST['enable_bbcode'].", ".$_POST['enable_smilies'].", ".$_POST['enable_sig'].", ".$_POST['enable_html'].")")) )
					$functions->usebb_die('SQL', 'Unable to insert new post!', __FILE__, __LINE__);
				
				$inserted_post_id = $db->last_id();
				$update_topic_status = ( $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) && !empty($_POST['lock_topic']) ) ? ', status_locked = 1' : '';
				
				if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."topics SET last_post_id = ".$inserted_post_id.", count_replies = count_replies+1".$update_topic_status." WHERE id = ".$_GET['topic'])) )
					$functions->usebb_die('SQL', 'Unable to update topic!', __FILE__, __LINE__);
				
				if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."forums SET posts = posts+1, last_topic_id = ".$_GET['topic']." WHERE id = ".$topicdata['forum_id'])) )
					$functions->usebb_die('SQL', 'Unable to update forum!', __FILE__, __LINE__);
				
				if ( $session->sess_info['user_id'] ) {
					
					if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."users SET posts = posts+1 WHERE id = ".$session->sess_info['user_id'])) )
						$functions->usebb_die('SQL', 'Unable to update user!', __FILE__, __LINE__);
					
				}
				
				if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."stats SET content = content+1 WHERE name = 'posts'")) )
					$functions->usebb_die('SQL', 'Unable to update stats!', __FILE__, __LINE__);
				
				header('Location: '.$functions->make_url('topic.php', array('post' => $inserted_post_id), false).'#post'.$inserted_post_id);
				
			} else {
				
				$template->set_page_title(sprintf($lang['ReplyTo'], stripslashes($topicdata['topic_title'])));
				
				$location_bar = '<a href="'.$functions->make_url('index.php').'">'.$functions->get_config('board_name').'</a> '.$template->get_config('location_arrow').' <a href="'.$functions->make_url('forum.php', array('id' => $topicdata['forum_id'])).'">'.htmlentities(stripslashes($topicdata['forum_name'])).'</a> '.$template->get_config('location_arrow').' <a href="'.$functions->make_url('topic.php', array('id' => $_GET['topic'])).'">'.htmlentities(stripslashes($topicdata['topic_title'])).'</a> '.$template->get_config('location_arrow').' '.$lang['PostReply'];
				$template->parse('location_bar', array(
					'location_bar' => $location_bar
				));
				
				$_POST['content'] = ( !empty($_POST['content']) ) ? stripslashes($_POST['content']) : '';
				if ( empty($_POST['submitted']) ) {
					
					$enable_bbcode_checked = ' checked="checked"';
					$enable_smilies_checked = ' checked="checked"';
					$enable_sig_checked = ' checked="checked"';
					$enable_html_checked = '';
					$lock_topic_checked = '';
					
				} else {
					
					if ( !$session->sess_info['user_id'] && ( empty($_POST['user']) || !preg_match(USER_PREG, $_POST['user']) ) )
						$errors[] = strtolower($lang['Username']);
					if ( empty($_POST['content']) )
						$errors[] = strtolower($lang['Content']);
					
					if ( is_array($errors) ) {
						
						$template->parse('msgbox', array(
							'box_title' => $lang['Error'],
							'content' => sprintf($lang['MissingFields'], join(', ', $errors))
						));
						
					}
					
					$enable_bbcode_checked = ( !empty($_POST['enable_bbcode']) ) ? ' checked="checked"' : '';
					$enable_smilies_checked = ( !empty($_POST['enable_smilies']) ) ? ' checked="checked"' : '';
					$enable_sig_checked = ( !empty($_POST['enable_sig']) ) ? ' checked="checked"' : '';
					$enable_html_checked = ( !empty($_POST['enable_html']) ) ? ' checked="checked"' : '';
					$lock_topic_checked = ( !empty($_POST['lock_topic']) ) ? ' checked="checked"' : '';
					
				}
				
				$options_input = array();
				$options_input[] = '<input type="checkbox" name="enable_bbcode" id="enable_bbcode" value="1"'.$enable_bbcode_checked.' /><label for="enable_bbcode"> '.$lang['EnableBBCode'].'</label>';
				$options_input[] = '<input type="checkbox" name="enable_smilies" id="enable_smilies" value="1"'.$enable_smilies_checked.' /><label for="enable_smilies"> '.$lang['EnableSmilies'].'</label>';
				if ( $session->sess_info['user_id'] && !empty($session->sess_info['user_info']['signature']) )
					$options_input[] = '<input type="checkbox" name="enable_sig" id="enable_sig" value="1"'.$enable_sig_checked.' /><label for="enable_sig"> '.$lang['EnableSig'].'</label>';
				if ( $functions->auth($topicdata['auth'], 'html', $topicdata['forum_id']) )
					$options_input[] = '<input type="checkbox" name="enable_html" id="enable_html" value="1"'.$enable_html_checked.' /><label for="enable_html"> '.$lang['EnableHTML'].'</label>';
				if ( $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) )
					$options_input[] = '<input type="checkbox" name="lock_topic" id="lock_topic" value="1"'.$lock_topic_checked.' /><label for="lock_topic"> '.$lang['LockTopicAfterPost'].'</label>';
				$options_input = join('<br />', $options_input);
				
				$template->parse('post_form', array(
					'form_begin' => '<form action="'.$functions->make_url('post.php', array('topic' => $_GET['topic'])).'" method="post">',
					'post_title' => $lang['PostReply'],
					'username' => $lang['Username'],
					'username_input' => ( $session->sess_info['user_id'] ) ? '<a href="'.$functions->make_url('profile.php', array('id' => $session->sess_info['user_info']['id'])).'">'.$session->sess_info['user_info']['name'].'</a>' : '<input type="text" size="25" maxlength="'.$functions->get_config('username_max_length').'" name="user" value="'.$_POST['user'].'" />',
					'subject' => $lang['Subject'],
					'subject_input' => '<a href="'.$functions->make_url('topic.php', array('id' => $_GET['topic'])).'">'.htmlentities(stripslashes($topicdata['topic_title'])).'</a>',
					'content' => $lang['Content'],
					'content_input' => '<textarea rows="12" cols="60" name="content">'.$_POST['content'].'</textarea>',
					'options' => $lang['Options'],
					'options_input' => $options_input,
					'submit_button' => '<input type="submit" name="submit" value="'.$lang['PostReply'].'" />',
					'reset_button' => '<input type="reset" value="'.$lang['Reset'].'" />',
					'form_end' => '<input type="hidden" name="submitted" value="true" /></form>'
				));
				
				$template->parse('location_bar', array(
					'location_bar' => $location_bar
				));
				
			}
			
		} else {
			
			//
			// The user is not granted to post replies in this forum
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
	// There's no ID! Get us back to the index...
	//
	header('Location: '.$functions->make_url('index.php', array(), false));
	
}

?>
