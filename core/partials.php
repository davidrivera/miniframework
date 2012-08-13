<?php
foreach (glob($ROOT . "/partials/*.php") as $file) { 
	include($file);
}
?>
