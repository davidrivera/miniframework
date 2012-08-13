<?php
// checks if the given username exists in the table.
function email_exists($email){
	$email = mysql_real_escape_string($email);
	$temp = mysql_num_rows(mysql_query("SELECT * FROM users WHERE email = '".$email."'")) ;
	if($temp){
			return true;
	}else{
		return false;
	}
}

function username_exists($username){
    $username = mysql_real_escape_string($username);
    $m = mysql_query("SELECT * FROM users WHERE username = '".$username."'");
#echo $m;
$q = mysql_num_rows($m);
#echo $q;
    #$temp = mysql_num_rows(mysql_query("SELECT * FORM users WHERE username = '".$username."'")) ;
    if($q){
        return true;
    }else{
        return false;
    }
}

// checks if the given username and password combination is valid.
function valid_credentials($email, $pass){
	$email = mysql_real_escape_string($email);
	$pass = sha1($pass);
	$temp = mysql_num_rows(mysql_query("SELECT * FROM users WHERE email = '".$email."' AND user_password = '".$pass."'"));
	if($temp){
			return true;
	}
	else
		return false;
}

// add a user to the database
function add_user($pass, $username, $email){
	// sxx attacks
	$email = mysql_real_escape_string(htmlentities($email));
	$pass = sha1($pass);
	
	mysql_query("INSERT INTO users(email, password, username, signup_date) VALUES('".$email."','".$pass."','".$username."',NOW())") or die(mysql_error());
	
}

function check_email_address($email) {
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
         if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
            return false;
        }
    }    
    if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
                return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
                return false;
            }
        }
    }
    return true;
}
?>
