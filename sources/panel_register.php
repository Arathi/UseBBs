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

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// User wants to register
//
$session->update('register');

//
// Include the page header
//
require(ROOT_PATH.'sources/page_head.php');

$template->set_page_title($lang['Register']);

$_POST['user'] = ( !empty($_POST['user']) ) ? $_POST['user'] : '';
$_POST['user'] = preg_replace('/ +/', ' ', $_POST['user']);
$_POST['email'] = ( !empty($_POST['email']) ) ? $_POST['email'] : '';
$_POST['passwd1'] = ( !empty($_POST['passwd1']) ) ? $_POST['passwd1'] : '';
$_POST['passwd2'] = ( !empty($_POST['passwd2']) ) ? $_POST['passwd2'] : '';

//
// If all necessary information has been posted and the user accepted the terms
//
if ( preg_match(USER_PREG, $_POST['user']) && preg_match(EMAIL_PREG, $_POST['email']) && strlen($_POST['passwd1']) >= 5 && preg_match(PWD_PREG, $_POST['passwd1']) && $_POST['passwd1'] == $_POST['passwd2'] && !empty($_POST['accepted']) ) {
	
	//
	// Check if this username already exists
	//
	if ( !($result = $db->query("SELECT id FROM ".TABLE_PREFIX."members WHERE name = '".$_POST['user']."'")) )
		$functions->usebb_die('SQL', 'Unable to get user information!', __FILE__, __LINE__);
	if ( $db->num_rows($result) == 1 ) {
		
		//
		// If it does, show this error
		//
		$template->parse('msgbox', 'global', array(
			'box_title' => $lang['Error'],
			'content' => sprintf($lang['UserAlreadyExists'], '<i>'.$_POST['user'].'</i>')
		));
		
	} else {
		
		//
		// Get banned usernames and e-mail addresses
		//
		if ( !($result = $db->query("SELECT name, email FROM ".TABLE_PREFIX."bans WHERE name <> '' OR email <> ''")) )
			$functions->usebb_die('SQL', 'Unable to get banned usernames and e-mail adresses!', __FILE__, __LINE__);
		
		$username_banned = FALSE;
		$email_banned = FALSE;
		
		if ( $db->num_rows($result) > 0 ) {
			
			$banned = array();
			$banned['usernames'] = array();
			$banned['emails'] = array();
			while ( $out = $db->fetch_result($result) ) {
				
				//
				// Store all the usernames and e-mail addresses in an array
				//
				if ( !empty($out['name']) )
					$banned['usernames'][] = $out['name'];
				if ( !empty($out['email']) )
					$banned['emails'][] = $out['email'];
				
			}
			
			foreach ( $banned['usernames'] as $banned_username ) {
				
				$banned_username = str_replace('.', '\.', $banned_username);
				$banned_username = str_replace('-', '\-', $banned_username);
				$banned_username = str_replace('+', '\+', $banned_username);
				$banned_username = str_replace('*', '[a-z0-9\.\-_\+ ]+', $banned_username);
				$banned_username = str_replace('?', '[a-z0-9\.\-_\+ ]', $banned_username);
				if ( preg_match('/^'.$banned_username.'$/i', $_POST['user']) ) {
					
					//
					// If the username matches a banned one, stop registration
					//
					$username_banned = TRUE;
					break;
					
				}
				
			}
			
			foreach ( $banned['emails'] as $banned_email ) {
				
				$banned_email = str_replace('.', '\.', $banned_email);
				$banned_email = str_replace('-', '\-', $banned_email);
				$banned_email = str_replace('*', '[a-z0-9\.\-_]+', $banned_email);
				$banned_email = str_replace('?', '[a-z0-9\.\-_]', $banned_email);
				if ( preg_match('/^'.$banned_email.'$/', $_POST['email']) ) {
					
					//
					// If the e-mail address matches a banned one, stop registration
					//
					$email_banned = TRUE;
					break;
					
				}
				
			}
			
		}
		
		if ( $username_banned ) {
			
			$template->parse('msgbox', 'global', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['BannedUsername'], '<i>'.$_POST['user'].'</i>')
			));
			
		} elseif ( $email_banned ) {
			
			$template->parse('msgbox', 'global', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['BannedEmail'], $_POST['email'])
			));
			
		} else {
			
			//
			// Generate the activation key if necessary
			//
			$active = ( $functions->get_config('users_must_activate') ) ? 0 : 1;
			$active_key = ( $functions->get_config('users_must_activate') ) ? $functions->random_key() : '';
			
			if ( !($result = $db->query("SELECT id FROM ".TABLE_PREFIX."members")) )
				$functions->usebb_die('SQL', 'Unable to get user count!', __FILE__, __LINE__);
			if ( $db->num_rows($result) == 0 )
				$level = 3;
			else
				$level = 1;
			
			//
			// Create a new row in the user table
			//
			if ( !($result = $db->query("INSERT INTO ".TABLE_PREFIX."members ( id, name, email, passwd, regdate, level, active, active_key, template, language, date_format, enable_quickreply, return_to_topic_after_posting, target_blank, hide_avatars, hide_signatures ) VALUES ( NULL, '".$_POST['user']."', '".$_POST['email']."', '".md5($_POST['passwd1'])."', ".gmmktime().", ".$level.", ".$active.", '".md5($active_key)."', '".$functions->get_config('template')."', '".$functions->get_config('language')."', '".$functions->get_config('date_format')."', ".$functions->get_config('enable_quickreply').", ".$functions->get_config('return_to_topic_after_posting').", ".$functions->get_config('target_blank').", ".$functions->get_config('hide_avatars').", ".$functions->get_config('hide_signatures')." )")) )
				$functions->usebb_die('SQL', 'Unable to insert user information!', __FILE__, __LINE__);
			
			if ( $functions->get_config('users_must_activate') ) {
				
				//
				// Send the activation e-mail if necessary
				//
				$functions->usebb_mail($lang['RegistrationActivationEmailSubject'], $lang['RegistrationActivationEmailBody'], array(
					'account_name' => $_POST['user'],
					'activate_link' => $functions->get_config('board_url').$functions->make_url('panel.php', array('act' => 'activate', 'id' => $db->last_id(), 'key' => $active_key), false),
					'password' => $_POST['passwd1']
				), $functions->get_config('board_name'), $functions->get_config('admin_email'), $_POST['email']);
				
			} else {
				
				//
				// Send the activation e-mail if necessary
				//
				$functions->usebb_mail($lang['RegistrationEmailSubject'], $lang['RegistrationEmailBody'], array(
					'account_name' => $_POST['user'],
					'password' => $_POST['passwd1']
				), $functions->get_config('board_name'), $functions->get_config('admin_email'), $_POST['email']);
				
			}
			
			//
			// Update the statistics
			//
			if ( !($result = $db->query("UPDATE usebb_stats SET content = content+1 WHERE name = 'members'")) )
				$functions->usebb_die('SQL', 'Unable to update statistics!', __FILE__, __LINE__);
			
			//
			// Registration was succesful!
			//
			$template->parse('msgbox', 'global', array(
				'box_title' => $lang['Register'],
				'content' => ( $functions->get_config('users_must_activate') ) ? sprintf($lang['RegisteredNotActivated'], '<i>'.$_POST['user'].'</i>', $_POST['email']) : sprintf($lang['RegisteredActivated'], '<i>'.$_POST['user'].'</i>', $_POST['email'])
			));
			
		}
		
	}
	
} elseif ( !empty($_POST['accepted']) ) {
	
	//
	// The user agreed to the terms of use, show the registration form
	//
	
	if ( !empty($_POST['submitted']) ) {
		
		//
		// The form has been submitted but there are missing fields
		//
		
		//
		// Define missing fields
		//
		$errors = array();
		if ( !preg_match(USER_PREG, $_POST['user']) )
			$errors[] = $lang['Username'];
		if ( !preg_match(EMAIL_PREG, $_POST['email']) )
			$errors[] = $lang['Email'];
		if ( strlen($_POST['passwd1']) < 5 || !preg_match(PWD_PREG, $_POST['passwd1']) || $_POST['passwd1'] != $_POST['passwd2'] )
			$errors[] = $lang['Password'];
		
		//
		// Show an error message
		//
		if ( count($errors) ) {
			
			$template->parse('msgbox', 'global', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['MissingFields'], join(', ', $errors))
			));
			
		}
		
	}
	
	//
	// Show the registration form
	//
	$_POST['user'] = ( preg_match(USER_PREG, $_POST['user']) ) ? $_POST['user'] : '';
	$_POST['email'] = ( preg_match(EMAIL_PREG, $_POST['email']) ) ? $_POST['email'] : '';
	$template->parse('register_form', 'various', array(
		'form_begin'          => '<form action="'.$functions->make_url('panel.php', array('act' => 'register')).'" method="post">',
		'register_form'       => $lang['Register'],
		'user'                => $lang['Username'],
		'user_input'          => '<input type="text" name="user" size="25" maxlength="'.$functions->get_config('username_max_length').'" value="'.$_POST['user'].'" />',
		'email'               => $lang['Email'],
		'email_input'         => '<input type="text" name="email" size="25" maxlength="255" value="'.$_POST['email'].'" />',
		'passwd1'             => $lang['Password'],
		'passwd1_input'       => '<input type="password" name="passwd1" size="25" maxlength="255" />',
		'passwd2'             => $lang['PasswordAgain'],
		'passwd2_input'       => '<input type="password" name="passwd2" size="25" maxlength="255" />',
		'everything_required' => $lang['EverythingRequired'],
		'submit_button'       => '<input type="submit" name="submit" value="'.$lang['Register'].'" />',
		'reset_button'        => '<input type="reset" value="'.$lang['Reset'].'" />',
		'form_end'            => '<input type="hidden" name="submitted" value="true" /><input type="hidden" name="accepted" value="true" /></form>'
	));
	
} elseif ( !empty($_POST['notaccepted']) ) {
	
	//
	// The user did not accept to the terms of use
	//
	$refere_to = ( !empty($_SESSION['referer']) && !preg_match("/act=(logout|register|activate)/", $_SESSION['referer']) ) ? $functions->attach_sid($_SESSION['referer']) : $functions->get_config('board_url').$functions->make_url('index.php', array(), false);
	unset($_SESSION['referer']);
	header('Location: '.$refere_to);
	
} else {
	
	//
	// The user did not agree yet to the terms of use
	//
	
	$_SESSION['referer'] = ( !empty($_SERVER['HTTP_REFERER']) ) ? $_SERVER['HTTP_REFERER'] : '';
	
	$template->parse('confirm_form', 'global', array(
		'form_begin' => '<form action="'.$functions->make_url('panel.php', array('act' => 'register')).'" method="post">',
		'title' => $lang['TermsOfUse'],
		'content' => nl2br(htmlentities($lang['TermsOfUseContent'])),
		'submit_button'       => '<input type="submit" name="accepted" value="'.$lang['IAccept'].'" />',
		'cancel_button'       => '<input type="submit" name="notaccepted" value="'.$lang['IDontAccept'].'" />',
		'form_end' => '</form>'
	));
	
}

//
// Include the page footer
//
require(ROOT_PATH.'sources/page_foot.php');

?>
