<?php

/*
	Copyright (C) 2003-2006 UseBB Team
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

/**
 * ACP DNSBL ban management
 *
 * Enable or disable DNSBL powered banning.
 *
 * @author	UseBB Team
 * @link	http://www.usebb.net
 * @license	GPL-2
 * @version	$Revision$
 * @copyright	Copyright (C) 2003-2006 UseBB Team
 * @package	UseBB
 * @subpackage	ACP
 */

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

if ( !$functions->get_config('enable_ip_bans') ) {
	
	$content = '<h2>'.$lang['DNSBLIPBansDisabled'].'</h2>';
	$content .= '<p>'.$lang['DNSBLIPBansDisabledInfo'].'</p>';
	
} elseif ( !function_exists('checkdnsrr') ) {
	
	$content = '<h2>'.$lang['DNSBLNotAvailable'].'</h2>';
	$content .= '<p>'.sprintf($lang['DNSBLNotAvailableInfo'], '<code>checkdnsrr()</code>').'</p>';
	
} else {
	
	$dnsbl_servers = array(
		'dsbl_list'			=> array('DSBL list', 'http://dsbl.org/'),
		'dsbl_unconfirmed'	=> array('DSBL unconfirmed', 'http://dsbl.org/'),
		'sorbs_all'			=> array('SORBS aggregate zone', 'http://www.sorbs.net/'),
		'sorbs_http'		=> array('SORBS open HTTP proxies', 'http://www.sorbs.net/'),
		'sorbs_socks'		=> array('SORBS open SOCKS proxies', 'http://www.sorbs.net/'),
		'socks_misc'		=> array('SORBS open misc. proxies', 'http://www.sorbs.net/'),
		'spamcop'			=> array('SpamCop Blocking List', 'http://www.spamcop.net/'),
		'cbl'				=> array('Composite Blocking List (CBL)', 'http://cbl.abuseat.org/'),
		'blitzed'			=> array('Blitzed OPML (BOPM)', 'http://opm.blitzed.org/'),
		'njabl_combined'	=> array('NJABL combined', 'http://www.njabl.org/'),
		'tornevall'			=> array('TornevallNET OPM', 'http://opm.tornevall.org/'),
		'spamhaus_sbl'		=> array('Spamhaus SBL', 'http://www.spamhaus.org/sbl/index.lasso'),
		'spamhaus_xbl'		=> array('Spamhaus XBL (CBL+BOPM+NJABL)', 'http://www.spamhaus.org/xbl/index.lasso'),
		'spamhaus_sbl_xbl'	=> array('Spamhaus SBL+XBL', 'http://www.spamhaus.org/xbl/index.lasso'),
		'ahbl'				=> array('Abusive Hosts Blocking List (AHBL)', 'http://www.ahbl.org/'),
	);
	asort($dnsbl_servers);
	
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		
		$new_settings = array(
			'enable_dnsbl_powered_banning' => ( !empty($_POST['enable_dnsbl_powered_banning']) ) ? 1 : 0,
			'dnsbl_powered_banning_min_hits' => ( !empty($_POST['dnsbl_powered_banning_min_hits']) && valid_int($_POST['dnsbl_powered_banning_min_hits']) && intval($_POST['dnsbl_powered_banning_min_hits']) >= 1 ) ? intval($_POST['dnsbl_powered_banning_min_hits']) : 1,
			'dnsbl_powered_banning_recheck_minutes' => ( !empty($_POST['dnsbl_powered_banning_recheck_minutes']) && valid_int($_POST['dnsbl_powered_banning_recheck_minutes']) ) ? intval($_POST['dnsbl_powered_banning_recheck_minutes']) : 0,
			'enable_dnsbl_powered_banning_wildcard' => ( !empty($_POST['enable_dnsbl_powered_banning_wildcard']) ) ? 1 : 0,
			'dnsbl_powered_banning_whitelist' => ( !empty($_POST['dnsbl_powered_banning_whitelist']) ) ? preg_split("#[\r\n]+#", $_POST['dnsbl_powered_banning_whitelist']) : array(),
		);
		
		foreach ( $dnsbl_servers as $key => $val )
			$new_settings['enable_dnsbl_server_'.$key] = ( !empty($_POST['enable_dnsbl_server_'.$key]) ) ? 1 : 0;
		
		$admin_functions->set_config($new_settings);
		
		$content = '<p>'.$lang['DNSBLSettingsSaved'].'</p>';
		
	} else {
		
		$enable_dnsbl_powered_banning_checked = ( $functions->get_config('enable_dnsbl_powered_banning') ) ? ' checked="checked"' : '';
		$enable_dnsbl_powered_banning_wildcard_checked = ( $functions->get_config('enable_dnsbl_powered_banning_wildcard') ) ? ' checked="checked"' : '';
		$dnsbl_powered_banning_min_hits = intval($functions->get_config('dnsbl_powered_banning_min_hits'));
		$dnsbl_powered_banning_recheck_minutes = intval($functions->get_config('dnsbl_powered_banning_recheck_minutes'));
		$dnsbl_powered_banning_whitelist = $functions->get_config('dnsbl_powered_banning_whitelist');
		$dnsbl_powered_banning_whitelist = unhtml(join("\n", $dnsbl_powered_banning_whitelist));
		
		$content = '<p>'.$lang['DNSBLGeneralInfo'].'</p>';
		$content .= '<form action="'.$functions->make_url('admin.php', array('act' => 'dnsbl')).'" method="post">';
		$content .= '<fieldset><legend><label><input type="checkbox" name="enable_dnsbl_powered_banning" value="1"'.$enable_dnsbl_powered_banning_checked.' /> '.$lang['DNSBLEnableOpenDNSBLBan'].'</label></legend>';
			$content .= '<h3>'.$lang['DNSBLServers'].'</h3><ul id="optionslist">';
			foreach ( $dnsbl_servers as $key => $val ) {
				
				$checked = ( $functions->get_config('enable_dnsbl_server_'.$key) ) ? ' checked="checked"' : '';
				$content .= '<li><label><input type="checkbox" name="enable_dnsbl_server_'.$key.'" value="1"'.$checked.' /> '.$val[0].'</label> <a href="'.$val[1].'">(?)</a></li>';
				
			}
			$content .= '</ul>';
			$content .= '<p><label>'.sprintf($lang['DNSBLMinPositiveHits'], '<input type="text" name="dnsbl_powered_banning_min_hits" size="2" maxlength="2" value="'.$dnsbl_powered_banning_min_hits.'" />').'</label></p>';
			$content .= '<p><label>'.sprintf($lang['DNSBLRecheckMinutes'], '<input type="text" name="dnsbl_powered_banning_recheck_minutes" size="2" maxlength="2" value="'.$dnsbl_powered_banning_recheck_minutes.'" />').'</label></p>';
			$content .= '<p><label><input type="checkbox" name="enable_dnsbl_powered_banning_wildcard" value="1"'.$enable_dnsbl_powered_banning_wildcard_checked.' /> '.sprintf($lang['DNSBLEnableOpenDNSBLBanWildcard'], '<code>1.2.3.*</code>').'</label></p>';
			$content .= '<h3>'.$lang['DNSBLWhitelist'].'</h3><p>'.$lang['DNSBLWhitelistInfo'].'</p>';
			$content .= '<div><textarea name="dnsbl_powered_banning_whitelist" rows="5" cols="50">'.$dnsbl_powered_banning_whitelist.'</textarea></div>';
		$content .= '</fieldset>';
		$content .= '<ul>';
			$content .= '<li>'.$lang['DNSBLUnwantedBansInfo'].'</li>';
			$content .= '<li>'.$lang['DNSBLSlownessInfo'].'</li>';
			$content .= '<li>'.$lang['DNSBLAggregatesInfo'].'</li>';
			$content .= '<li>'.$lang['DNSBLHighTrafficInfo'].'</li>';
		$content .= '</ul>';
		$content .= '<p class="submit"><input type="submit" value="'.$lang['Save'].'" /> <input type="reset" value="'.$lang['Reset'].'" /></p>';
		$content .= '</form>';
		
	}
	
}

$admin_functions->create_body('dnsbl', $content);

?>
