<?php

/*
	Copyright (C) 2003-2004 UseBB Team
	http://usebb.sourceforge.net
	
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
if ( $functions->get_config('email_view_level') != 1 ) {
	
	header('Location: index.php');
	exit();
	
}
	
if ( !empty($_GET['id']) && is_numeric($_GET['id']) ) {
	
	//
	// Update and get the session information
	//
	$session->update('sendemail:'.$_GET['id']);
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( $session->sess_info['user_id'] == 0 ) {
		
		$functions->redir_to_login();
		
	} else {
		
		//
		// Get the user information
		//
		if ( $_GET['id'] == $session->sess_info['user_id'] ) {
			
			//
			// This user wants to send an email to himself, so we don't need a new query
			//
			$own_mailpage = TRUE;
			
		} else {
			
			//
			// This user is not emailing himself, so we need a new query
			//
			$own_mailpage = FALSE;
			
			if ( !($result = $db->query("SELECT name, email, email_show FROM ".TABLE_PREFIX."users WHERE id = ".$_GET['id'])) )
				$functions->usebb_die('SQL', 'Unable to get user information!', __FILE__, __LINE__);
			
		}
		
		if ( $db->num_rows($result) === 1 || $own_mailpage ) {
			
			if ( $own_mailpage )
				$user_to_mail = $session->sess_info['user_info'];
			else
				$user_to_mail = $db->fetch_result($result);
			
			$template->set_page_title(sprintf($lang['SendEmail'], $user_to_mail['name']));
			
			if ( !$user_to_mail['email_show'] && $session->sess_info['user_info']['level'] < $functions->get_config('view_hidden_email_addresses_min_level') && !$own_mailpage ) {
				
				//
				// You can't e-mail this user if he/she chose not to receive e-mails
				// unless you are an admin or your are trying to e-mail yourself :p
				//
				$template->parse('msgbox', array(
					'box_title' => $lang['Error'],
					'content' => $lang['NoMails']
				));
				
			} else {
				
				$_POST['subject'] = ( !empty($_POST['subject']) ) ? stripslashes($_POST['subject']) : '';
				$_POST['body'] = ( !empty($_POST['body']) ) ? stripslashes($_POST['body']) : '';
				if ( !empty($_POST['subject']) && !empty($_POST['body']) ) {
					
					//
					// All information is passed, now send the mail
					//
					$functions->usebb_mail($_POST['subject'], $lang['UserEmailBody'], array(
						'username' => $session->sess_info['user_info']['name'],
						'body' => $_POST['body']
					), $session->sess_info['user_info']['name'], $session->sess_info['user_info']['email'], $user_to_mail['email']);
					
					$template->parse('msgbox', array(
						'box_title' => sprintf($lang['SendEmail'], $user_to_mail['name']),
						'content' => sprintf($lang['EmailSent'], '<i>'.$user_to_mail['name'].'</i>')
					));
					
				} else {
					
					if ( !empty($_POST['submitted']) ) {
						
						//
						// Some fields have not been filled in,
						//
						if ( empty($_POST['subject']) )
							$errors[] = strtolower($lang['Subject']);
						if ( empty($_POST['body']) )
							$errors[] = strtolower($lang['Body']);
						
						//
						// Show an error message
						//
						if ( is_array($errors) ) {
							
							$template->parse('msgbox', array(
								'box_title' => $lang['Error'],
								'content' => sprintf($lang['MissingFields'], join(', ', $errors))
							));
							
						}
						
					}
					
					//
					// Show the mail form
					//
					$_POST['subject'] = ( !empty($_POST['subject']) ) ? htmlentities($_POST['subject']) : '';
					$_POST['body'] = ( !empty($_POST['body']) ) ? htmlentities($_POST['body']) : '';
					$template->parse('mail_form', array(
						'form_begin' => '<form action="'.$functions->make_url('mail.php', array('id' => $_GET['id'])).'" method="post">',
						'sendemail' => sprintf($lang['SendEmail'], $user_to_mail['name']),
						'to' => $lang['To'],
						'to_v' => '<a href="'.$functions->make_url('profile.php', array('id' => $_GET['id'])).'">'.$user_to_mail['name'].'</a>',
						'from' => $lang['From'],
						'from_v' => '<a href="'.$functions->make_url('profile.php', array('id' => $session->sess_info['user_info']['id'])).'">'.$session->sess_info['user_info']['name'].'</a>',
						'subject' => $lang['Subject'],
						'subject_input' => '<input type="text" name="subject" size="50" value="'.$_POST['subject'].'" />',
						'body_input' => '<textarea rows="12" cols="60" name="body">'.$_POST['body'].'</textarea>',
						'everything_required' => $lang['EverythingRequired'],
						'submit_button' => '<input type="submit" name="submit" value="'.$lang['Send'].'" />',
						'reset_button' => '<input type="reset" value="'.$lang['Reset'].'" />',
						'form_end' => '<input type="hidden" name="submitted" value="true" /></form>'
					));
					
				}
				
			}
			
		} else {
			
			//
			// This user does not exist, show an error
			//
			$template->set_page_title($lang['Error']);
			$template->parse('msgbox', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['NoSuchUser'], 'ID '.$_GET['id'])
			));
			
		}
		
	}
	
	//
	// Include the page footer
	//
	require(ROOT_PATH.'sources/page_foot.php');
	
} else {
	
	//
	// There's no user ID! Get us back to the index...
	//
	header('Location: index.php');
	
}

?>