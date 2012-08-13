<?php

function include_stylesheets(){
return '
<script type="text/javascript">
	less = { env: "development" }; </script>
<link rel="stylesheet/less" type="text/css" href="css/style.less">
<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.0/less-1.3.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
';
}

?>
