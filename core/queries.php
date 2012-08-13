<?php

/*******************
 * Queries
 */

// examples

// return an array of data objects
function get_smart_users() {
  return fetch_all("
	SELECT * 
	FROM users 
	WHERE smart > 0
  ");
}


// return a single data object by query
function get_smartest_user() {
  return fetch_one("
	SELECT * 
	FROM users 
	ORDER BY smart 
	DESC LIMIT 1
  ");
}


// return a single data object by id and tablename
function get_user($id) {
  return fetch('users', $id);
} 




?>
