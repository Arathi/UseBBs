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

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Create the MySQL handlers
//
class db {
	
	//
	// Variables in this class
	//
	var $connection;
	var $queries;
	
	//
	// Make a connection to the MySQL server
	//
	function connect($config) {
		
		//
		// Connect to server
		//
		if ( !($this->connection = @mysql_connect($config['server'], $config['username'], $config['passwd'])) )
			usebb_die('SQL', 'Unable to connect to the database server!', __FILE__, __LINE__);
		//
		// Select database
		//
		if ( !(@mysql_select_db($config['dbname'], $this->connection)) )
			usebb_die('SQL', 'Unable to connect to the database!', __FILE__, __LINE__);
		
	}
	
	//
	// Execute database queries
	//
	function query($query) {
		
		$result = @mysql_query($query, $this->connection);
		$query = ereg_replace("[ \t\r\n]+", ' ', $query);
		$this->queries[] = $query;
		return $result;
		
	}
	
	//
	// Fetch query results
	//
	function fetch_result($result) {
		
		$out = mysql_fetch_array($result, MYSQL_ASSOC);
		return $out;
		
	}
	
	
	//
	// Count row number
	//
	function num_rows($result) {
		
		$out = mysql_num_rows($result);
		return $out;
		
	}
	
	//
	// Last ID
	//
	function last_id() {
		
		$id = mysql_insert_id($this->connection);
		return $id;
		
	}
	
	//
	// Disconnect the database connection
	//
	function disconnect() {
		
		mysql_close($this->connection);
		
	}
	
}

?>