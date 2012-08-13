<?php

function login_form(){
$html = '';

if (isset($errors) && !empty($errors)) {
	$html .= '<ul>';
	foreach($errors as $error) { $html .= "<li>$error</li>"; }
	$html .= '</ul>';
}

$html.='
<form action="" method="post">
	<label for ="username">Username:</label> <input type="text" name="email" id="email" value = "';
if(isset($_POST['email'])) $html .= $_POST['email'];
$html .= '">
	<label for ="password">Password:</label> <input type="password" name="password" id="password"/>
	<input type="submit" name="Submit" value="Login" /></p>
</form>';

return $html;
}	

?>
