<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aeva Network Status</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/panel.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
	</head>
	<body>
    <ul class="side-nav" id="side-nav">
      <li id="exit">
        <a class="link"><i class="material-icons right">clear</i></a>
      </li>
      <li>
        <a class="subheader">Navigation and Utilities</a>
      </li>
      <li>
        <a class="link" data-navigate="home"><i class="material-icons">home</i>Home</a>
      </li>
      <li>
        <a class="link" data-navigate="groups"><i class="material-icons">search</i>Find Groups</a>
      </li>
      <li>
        <a class="link" data-navigate="status"><i class="material-icons">check_circle</i>Status</a>
      </li>
      <li>
        <a class="link" data-navigate="chat"><i class="material-icons">comment</i>Chat</a>
      </li>
      <li>
        <div class="divider"></div>
      </li>
      <li>
        <a class="subheader">Account</a>
      </li>
      <li>
        <a class="link" data-navigate="profile"><i class="material-icons">adb</i>Profile</a>
      </li>
      <li>
        <a class="link" data-navigate="404"><i class="material-icons">videogame_asset</i>Settings</a>
      </li>
      <li>
        <a class="link" data-action="logout"><i class="material-icons">directions_run</i>Logout</a>
      </li>
    </ul>

    <div id="load" style="visibility: hidden;"></div>

  	<div id="wrapper" style="visibility: hidden;">
      <header>
  		  <nav id="navigation" class="grey lighten-5">
          <ul class="left">
            <li id="hamburger" class="link hide-on-med-and-down" data-activates="side-nav">
              <a><i class="material-icons">menu</i></a>
            </li>
          </ul>
          <img id="aeva-small" class="brand-logo center" src="/images/pepperonisandwich.jpg">

          <?php /*

          <img id="aeva-large" class="left hidden" src="/images/aevawhite.png">
          <ul class="hidden">
      		  <li>
      			  <a data-navigate="home">Home</a>
      	    </li>
        	  <li>
        		  <a data-navigate="userlookup">User Lookup</a>
      		  </li>
        		<li>
          	  <a data-navigate="punisher">Punisher</a>
      		  </li>
        		<li>
        		  <a data-navigate="status">Status</a>
            </li>
      		  <li>
              <a data-navigate="chat">Chat</a>
    		    </li>
      			<li class="right">
      			  <a data-action="logout">Logout</a>
            </li>
            <li class="right">
              <a data-navigate="profile">Profile</a>
            </li>
          </ul>

          */ ?>
    		</nav>

        <div id="statistics" class="info aeva hide-on-med-and-down">
    			<ul>
      		  <li class="white counter">
      			  <a class="purple-text">Welcome back, Bob!</a>
      		  </li>
        		<li class="white right counter">
        			<a id="counter-pe" class="purple-text">0<i class="material-icons">people</i></a>
      		  </li>
        		<li class="white right counter">
        			<a id="counter-total" class="purple-text">11<i class="material-icons">person</i></a>
      		  </li>
    			</ul>
    		</div>
      </header>
      <main>
      </main>
    </div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="js/transport.js?<?php echo time(); ?>"></script>
    <script src="js/panel.js?<?php echo time(); ?>"></script>
  </body>
</html>
