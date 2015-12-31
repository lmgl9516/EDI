<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style type="text/css">
		div#content-area{
		    position: relative;
		    width: 100%;
		    /*initial position for content*/
		    transform: translate3d(0,0,0); 
		    transition: transform 0.5s;
		}

		nav#left-offcanvas-menu{ /* Full screen nav menu */
		    width: 250px;
		    height: 100%;
		    top: 0;
		    left: 0;
		    z-index: 100;
		    /* for browsers that don't support CSS3 translate3d */
		    visibility: hidden; 

		    /* fixed menu position */
		    position: fixed; 

		    /* shift menu -width to hide it initially */
		    transform: translate3d(-250px,0,0); 

			/* include padding/ border as part of declared menu width */
		    box-sizing: border-box; 
		    background: #C3E8E8;
		    display: block;
		    text-align: center;
		    overflow: auto;

		    /* transition settings. */
		    transition: transform 0.5s, visibility 0s 0.5s; 
		}
		nav#right-offcanvas-menu{ /* Full screen nav menu */
		    width: 250px;
		    height: 100%;
		    top: 0;
		    right: 0;
		    z-index: 100;
		    /* for browsers that don't support CSS3 translate3d */
		    visibility: hidden; 

		    /* fixed menu position */
		    position: fixed; 

		    /* shift menu -width to hide it initially */
		    transform: translate3d(250px,0,0); 

			/* include padding/ border as part of declared menu width */
		    box-sizing: border-box; 
		    background: #C3E8E8;
		    display: block;
		    text-align: center;
		    overflow: auto;

		    /* transition settings. */
		    transition: transform 0.5s, visibility 0s 0.5s; 
		}

		input[type="checkbox"]#left-togglebox {
		    /* checkbox used to toggle menu state */
		    position: absolute;
		    left: 0;
		    top: 0;
		    /* hide checkbox, we use labels to toggle it */
		    visibility: hidden;
		}

		input[type="checkbox"]#right-togglebox {
		    /* checkbox used to toggle menu state */
		    position: absolute;
		    left: 0;
		    top: 0;
		    /* hide checkbox, we use labels to toggle it */
		    visibility: hidden;
		}

		label#left-hamburguer{ /* Main label icon to toggle menu state */
		    z-index: 9;
		    display: block;
		    position: relative;
		    font-size: 8px;
		    width: 4em;
		    height: 2.5em;
		    top: 15px;
		    left: 0;
		    text-indent: -1000px;
		    border: 0.6em solid black;

		    /* border color */
		    border-width: 0.6em 0;
		    cursor: pointer;
		}

		label#right-hamburguer{ /* Main label icon to toggle menu state */
		    z-index: 9;
		    display: block;
		    position: relative;
		    font-size: 8px;
		    width: 4em;
		    height: 2.5em;
		    top: 15px;
		    left: 0;
		    text-indent: -1000px;
		    border: 0.6em solid black;

		    /* border color */
		    border-width: 0.6em 0;
		    cursor: pointer;
		}
		 
		label#left-hamburguer::before{
		    /* inner strip inside label */
		    content: "";
		    display: block;
		    position: absolute;
		    width: 100%;
		    height: 0.6em;
		    top: 50%;
		    margin-top: -0.3em;
		    left: 0;
		    background: black; /* stripe background color. Change to match border color of parent label above */
		}
		 
		label#right-hamburguer::before{
		    /* inner strip inside label */
		    content: "";
		    display: block;
		    position: absolute;
		    width: 100%;
		    height: 0.6em;
		    top: 50%;
		    margin-top: -0.3em;
		    left: 0;
		    background: black; /* stripe background color. Change to match border color of parent label above */
		}

		input[type="checkbox"]#left-togglebox:checked ~ div#content-area{
		    transform: translate3d(250px,0,0); /* shift content area 250px to the right */
		}
		 
		input[type="checkbox"]#left-togglebox:checked ~ nav#left-offcanvas-menu{ /* nav state when corresponding checkbox is checked */
		    transform: translate3d(0,0,0); /* shift content-area 250px to the right */
		    visibility: visible; /* this is for browsers that don't support CSS3 translate3d in showing the menu */
		    transition-delay: 0s; /* No delay for applying "visibility:visible" property when menu is going from "closed" to "open" */
		}

		input[type="checkbox"]#right-togglebox:checked ~ div#content-area{
		    transform: translate3d(-250px,0,0); /* shift content-area 250px to the right */
		}
		 
		input[type="checkbox"]#right-togglebox:checked ~ nav#right-offcanvas-menu{ /* nav state when corresponding checkbox is checked */
		    transform: translate3d(0,0,0); /* shift content-area 250px to the right */
		    visibility: visible; /* this is for browsers that don't support CSS3 translate3d in showing the menu */
		    transition-delay: 0s; /* No delay for applying "visibility:visible" property when menu is going from "closed" to "open" */
		}
    </style>

    <style>
		nav#left-offcanvas-menu label#left-close-x{ /* Large x close button inside nav */
		    width: 40px;
		    height: 40px;
		    margin: 10px;
		    overflow: hidden;
		    display: block;
		    position: absolute;
		    cursor: pointer;
		    text-indent: -1000px;
		    z-index: 10;
		    top: 0;
		    left: 0;
		}
		nav#right-offcanvas-menu label#right-close-x{ /* Large x close button inside nav */
		    width: 40px;
		    height: 40px;
		    margin: 10px;
		    overflow: hidden;
		    display: block;
		    position: absolute;
		    cursor: pointer;
		    text-indent: -1000px;
		    z-index: 10;
		    top: 0;
		    right: 0;
		}
		 
		nav#left-offcanvas-menu label#left-close-x::before, nav label#left-close-x::after{ /* render large cross inside close button */
		    content: "";
		    display: block;
		    position: absolute;
		    width: 100%;
		    height: 6px;
		    background: white;
		    top: 50%;
		    margin-top: -3px;
		    transform: rotate(-45deg);
		}
		nav#right-offcanvas-menu label#right-close-x::before, nav label#right-close-x::after{ /* render large cross inside close button */
		    content: "";
		    display: block;
		    position: absolute;
		    width: 100%;
		    height: 6px;
		    background: white;
		    top: 50%;
		    margin-top: -3px;
		    transform: rotate(-45deg);
		}
		 
		nav#left-offcanvas-menu label#left-close-x::after{ /* render large cross inside close button */
		    transform: rotate(-135deg);
		}
		nav#right-offcanvas-menu label#right-close-x::after{ /* render large cross inside close button */
		    transform: rotate(-135deg);
		}
		 
		nav#left-offcanvas-menu a{
		    text-decoration: none;
		    color: black;
		    text-transform: uppercase;
		}
		nav#right-offcanvas-menu a{
		    text-decoration: none;
		    color: black;
		    text-transform: uppercase;
		}
		 
		nav#left-offcanvas-menu ul{
		    list-style: none;
		    margin-top: 200px;
		    opacity: 0;
		    padding: 0;
		    position: relative;
		    font: bold 1.5em 'Bitter', sans-serif; /* use google font inside nav UL */
		    transition: margin-top 0.2s 0.3s, opacity 0.5s 0.3s;
		}
		nav#right-offcanvas-menu ul{
		    list-style: none;
		    margin-top: 200px;
		    opacity: 0;
		    padding: 0;
		    position: relative;
		    font: bold 1.5em 'Bitter', sans-serif; /* use google font inside nav UL */
		    transition: margin-top 0.2s 0.3s, opacity 0.5s 0.3s;
		}
		 
		nav#left-offcanvas-menu ul li{
		    margin-bottom: 35px;
		}
		nav#right-offcanvas-menu ul li{
		    margin-bottom: 35px;
		}
		 
		nav#left-offcanvas-menu ul li a{
		    padding: 10px;
		    border-radius: 20px;
		}
		nav#right-offcanvas-menu ul li a{
		    padding: 10px;
		    border-radius: 20px;
		}
		 
		nav#left-offcanvas-menu ul li a:hover{
		    background: lightblue;
		}
		nav#right-offcanvas-menu ul li a:hover{
		    background: lightblue;
		}
		 
		input[type="checkbox"]#left-togglebox:checked ~ nav#left-offcanvas-menu ul{ /* nav state when corresponding checkbox is checked */
		    margin-top: 50px;
		    opacity: 1;
		}
		input[type="checkbox"]#right-togglebox:checked ~ nav#right-offcanvas-menu ul{ /* nav state when corresponding checkbox is checked */
		    margin-top: 100px;
		    opacity: 1;
		}
    </style>

	<style>
		div.left-overlay {
		    /* overlay that covers entire page when menu is open */
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    left: 0;
		    top: 0;
		    opacity: 0;
		    background: black;
		    z-index: 99;
		    visibility: hidden;
		    transition: opacity 0.5s; /* transition settings */
		}
		div.right-overlay {
		    /* overlay that covers entire page when menu is open */
		    position: fixed;
		    width: 100%;
		    height: 100%;
		    left: 0;
		    top: 0;
		    opacity: 0;
		    background: black;
		    z-index: 99;
		    visibility: hidden;
		    transition: opacity 0.5s; /* transition settings */
		}
		 
		div.left-overlay label {
		    /* label of overlay that closes menu when clicked on */
		    width: 100%;
		    height: 100%;
		    position: absolute;
		}
		div.right-overlay label {
		    /* label of overlay that closes menu when clicked on */
		    width: 100%;
		    height: 100%;
		    position: absolute;
		}
		 
		input[type="checkbox"]#left-togglebox:checked ~ div.left-overlay{ /* overlay state when corresponding checkbox is checked */
		    opacity: 0.4;
		    visibility: visible;
		}
		input[type="checkbox"]#right-togglebox:checked ~ div.right-overlay{ /* overlay state when corresponding checkbox is checked */
		    opacity: 0.4;
		    visibility: visible;
		}
	</style>

	<style>
		.navbar-col
		{
			height: 52px;
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<!-- hidden checkbox controls -->
	<input type="checkbox" id="left-togglebox">
	<input type="checkbox" id="right-togglebox">

	<!-- left and right black overlays -->
    <div class="left-overlay"><label for="left-togglebox"></label></div>
    <div class="right-overlay"><label for="right-togglebox"></label></div>

	<!-- left navbar -->
	<nav id="left-offcanvas-menu">
		<!-- left X icon -->
		<label for="left-togglebox" id="left-close-x">Close</label>
		<!-- left menu items -->
	    <ul>
		    <li>
		    	<div id="nav-img" style="padding: 10px 50px;">
		    	<img src="https://pbs.twimg.com/profile_images/3777388091/b52a9e0da2486de95accae18dd0fa328_400x400.jpeg" class="img-circle img-responsive">
		    	</div>
		    	<p>Emma Stone</p>
		    	<p>Sexy Babe</p>
		    </li>
		    <br>
		    <li><a href="http://www.javascriptkit.com">Home</a></li>
		    <li><a href="http://www.javascriptkit.com/cutpastejava.shtml">JavaScripts</a></li>
		    <li><a href="http://www.javascriptkit.com/javatutors">JS Tutorials</a></li>
		    <li><a href="http://www.dynamicdrive.com/style/">CSS Library</a></li>
		    <li><a href="http://www.dynamicdrive.com/forums/">Forums</a></li>
	    </ul>
	</nav>

	<!-- right navbar -->
	<nav id="right-offcanvas-menu">
		<!-- right X icon -->
		<label for="right-togglebox" id="right-close-x">Close</label>
		<!-- right menu items -->
	    <ul>
		    <li><a href="http://www.javascriptkit.com">Home</a></li>
		    <li><a href="http://www.javascriptkit.com/cutpastejava.shtml">JavaScripts</a></li>
		    <li><a href="http://www.javascriptkit.com/javatutors">JS Tutorials</a></li>
		    <li><a href="http://www.dynamicdrive.com/style/">CSS Library</a></li>
		    <li><a href="http://www.dynamicdrive.com/forums/">Forums</a></li>
		    <li><a href="http://www.cssdrive.com">CSS Gallery</a></li>
	    </ul>
	</nav>

	<!-- 3d-translated html -->
	<div id="content-area">
		<!-- left hamburguer -->
		<div class="col-md-6 col-sm-6 col-xs-6 navbar-col">
			<label for="left-togglebox" id="left-hamburguer"></label>
		</div>
		<!-- right hamburguer -->
		<div class="col-md-6 col-sm-6 col-xs-6 navbar-col">
    		<label for="right-togglebox" id="right-hamburguer"></label>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>