<?php

/*
    Copyright (C) 2003-2004 UseBB Team
	http://usebb.sourceforge.net

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
if ( !empty($_GET['id']) && is_numeric($_GET['id']) ) {
	
	//
	// Update and get the session information
	//
	$sess_info = $session->update('profile');
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( !$config['guests_can_view_profiles'] && $sess_info['user_id'] == 0 ) {
		
		$template->set_page_title($lang['Note']);
		$template->parse('msgbox', array(
			'box_title' => $lang['Note'],
			'content' => $lang['NeedToBeLoggedIn']
		));
		
	} else {
		
		//
		// Get the user information
		//
		if ( $_GET['id'] == $sess_info['user_id'] ) {
			
			//
			// This user is viewing his own profile, so we don't need a new query
			//
			$own_profile = TRUE;
			
		} else {
			
			//
			// This user is not viewing his own profile, so we need a new query
			//
			$own_profile = FALSE;
			
			if ( !($result = $db->query("SELECT * FROM ".TABLE_PREFIX."users WHERE id = ".$_GET['id'])) )
				usebb_die('SQL', 'Unable to get user information!', __FILE__, __LINE__);
			
		}
		
		if ( $db->num_rows($result) === 1 || $own_profile ) {
			
			//
			// The user exists, show its profile
			//
			
			if ( $own_profile )
				$profiledata = $sess_info['user_info'];
			else
				$profiledata = $db->fetch_result($result);
			
			$template->set_page_title(sprintf($lang['Profile'], $profiledata['name']));
			
			if ( $own_profile ) {
				
				//
				// View the panel menu if the user is viewing his own profile
				//
				$template->parse('panel_menu', array(
					'panel_home' => '<a href="'.usebb_make_url('panel.php').'">'.$lang['PanelHome'].'</a>',
					'view_profile' => '<a href="'.usebb_make_url('profile.php', array('id' => $sess_info['user_info']['id'])).'">'.$lang['ViewProfile'].'</a>',
					'panel_profile' => '<a href="'.usebb_make_url('panel.php', array('a' => 'editprofile')).'">'.$lang['EditProfile'].'</a>',
					'panel_options' => '<a href="'.usebb_make_url('panel.php', array('a' => 'editoptions')).'">'.$lang['EditOptions'].'</a>',
					'panel_passwd' => '<a href="'.usebb_make_url('panel.php', array('a' => 'editpwd')).'">'.$lang['EditPasswd'].'</a>',
				));
				
			}
			
			switch ( $profiledata['level'] ) {
				
				case 3:
					$level = $lang['Administrator'];
					break;
				case 2:
					$level = $lang['Moderator'];
					break;
				case 1:
					$level = $lang['Member'];
					break;
				
			}
			
			if ( $profiledata['last_login_show'] || $own_profile || ( isset($sess_info['user_info']) && $sess_info['user_info']['level'] == 3 ) )
				$last_login = ( $profiledata['last_login'] != 0 ) ? usebb_make_date($profiledata['last_login']) : $lang['Never'];
			else
				$last_login = $lang['Hidden'];
			
			if ( !$profiledata['avatar_type'] )
				$avatar = '';
			elseif ( $profiledata['avatar_type'] == 1 )
				$avatar = '<img src="'.$profiledata['avatar_remote'].'" alt="'.$profiledata['name'].'" />';
			
			$template->parse('profile', array(
				'title'         => sprintf($lang['Profile'], $profiledata['name']),
				'username'      => $lang['Username'],
				'username_v'    => $profiledata['name'],
				'userid'        => $lang['UserID'],
				'userid_v'      => $_GET['id'],
				'level'         => $lang['Level'],
				'level_v'       => $level,
				'rank'          => $lang['Rank'],
				'rank_v'        => ( !empty($profiledata['rank']) ) ? stripslashes($profiledata['rank']) : '',
				'avatar'        => $lang['Avatar'],
				'avatar_v'      => $avatar,
				'regdate'       => $lang['Registered'],
				'regdate_v'     => usebb_make_date($profiledata['regdate']),
				'posts'         => $lang['Posts'],
				'posts_v'       => $profiledata['posts'],
				'postsperday'   => $lang['PostsPerDay'],
				'postsperday_v' => round($profiledata['posts'] / ( ( gmmktime() - $profiledata['regdate'] ) / 86400 ), 2),
				'lastlogin'     => $lang['LastLogin'],
				'lastlogin_v'   => $last_login,
				'location'      => $lang['Location'],
				'location_v'    => stripslashes($profiledata['location']),
				'website'       => $lang['Website'],
				'website_v'     => ( !empty($profiledata['website']) ) ? '<a href="'.$profiledata['website'].'" target="_blank">'.$profiledata['website'].'</a>' : '',
				'occupation'    => $lang['Occupation'],
				'occupation_v'  => stripslashes($profiledata['occupation']),
				'interests'     => $lang['Interests'],
				'interests_v'   => stripslashes($profiledata['interests']),
				'signature'     => $lang['Signature'],
				'signature_v'   => usebb_markup(stripslashes($profiledata['signature']), true, true),
				'contact_info'  => $lang['ContactInfo'],
				'email'         => $lang['Email'],
				'email_v'       => usebb_show_email($profiledata),
				'msnm'          => $lang['MSNM'],
				'msnm_v'        => stripslashes($profiledata['msnm']),
				'yahoom'        => $lang['YahooM'],
				'yahoom_v'      => stripslashes($profiledata['yahoom']),
				'aim'           => $lang['AIM'],
				'aim_v'         => stripslashes($profiledata['aim']),
				'icq'           => $lang['ICQ'],
				'icq_v'         => stripslashes($profiledata['icq']),
				'jabber'        => $lang['Jabber'],
				'jabber_v'      => stripslashes($profiledata['jabber'])
			));
			
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