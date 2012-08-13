<?php

function start_page($page_name) {
print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>". product_name() ."</title>
<link rel='shortcut icon' href='images/favicon.ico' /> "
. include_stylesheets()
. include_javascripts() . "
	</head>
	<body class='$page_name'>
		<div class='container'>" .
			navbar();
}

function end_page() {
print "" .
			footer() ."
		</div>
	</body>
</html>";
outnit();
}

?>

