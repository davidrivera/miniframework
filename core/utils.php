<?php

/***********************
 * Utility Functions
 */

function product_name() {
	return "GameRanker";
}

/***********************
 * Query helper functions
 */

function fetch_all($sql) {
	$results = array();
	$query = mysql_query($sql) or die('aaagh '.mysql_error());
	while($row = mysql_fetch_object($query)) $results[] = $row;
	return $results;
}

function fetch_one($sql) {
	return mysql_fetch_object(mysql_query($sql) or die('aaagh '.mysql_error()));
}

function fetch($table, $id) {
	return fetch_one("SELECT * FROM ".addslashes($table)." WHERE _id = ".addslashes($id)." LIMIT 1");
}

/*******************
 * Queries
 */

/* example:
 *
 * // return an array of data objects
 * function get_smart_users() {
 *   return fetch_all("SELECT * FROM users WHERE smart > 0");
 * }
 *
 * // return a single data object by query
 * function get_smartest_user() {
 *   return fetch_one("SELECT * FROM users ORDER BY smart DESC LIMIT 1");
 * }
 *
 * // return a single data object by id and tablename
 * function get_user($id) {
 *   fetch('users', $id);
 * } 
 */



?>
