<?php

function navbar() {
echo '
<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="landingpage.php">' . product_name() . '</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="main.php">Home</a></li>
            <li><a href="userprofile.php">View Profile</a></li>
            <li><a href="#">My Lists</a></li>
<!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
-->
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
<!--         <li><a>:)</a></li>                                     -->
<!--         <li><a href="userprofile.php">Edit Account</a></li>    -->
            <li>' . (isset($_SESSION['username']) ? '<a href="logout.php">Logout</a>' : login_form() ).'</li>
<!--
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
-->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
';
}

?>
