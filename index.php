<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/Article" lang="en">
<head>

	<!-- ONLY DOUBLE CHECK CONTENTS WITH COMMENTS -->

	<title>HTDOCS</title><!-- TITLE -->
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Site description in few lines">
	<meta name="author" content="Jesan Azad">

	<meta http-equiv="cache-control" content="no-cache"/>

	<script type="text/javascript">
		function md(e) { 
		try { if (event.button==2||event.button==3) return false; }  
		catch (e) { if (e.which == 3) return false; } 
		}
		document.oncontextmenu = function() { return false; }
		document.ondragstart   = function() { return false; }
		document.onmousedown   = md;
	</script>

	<style>
		*, *:before, *:after {
			-webkit-box-sizing: border-box;
			-ms-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			box-sizing: border-box;

			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;

			margin: 0px auto;
			font-family: Arial;
			font-weight: unset;
		}

		.bodycontents::after {
			content: "";
		    clear: both;
		    display: table;
		}

		/*Animations*/
		.animatedown {position:relative;-webkit-animation:animatetop 0.4s;-ms-animation:animatetop 0.4s;-moz-animation:animatetop 0.4s;-o-animation:animatetop 0.4s;animation:animatetop 0.4s;}@keyframes animatetop{from{top:-300px;-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;} to{top:0;-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}}
		.animateright {position:relative;-webkit-animation:animateleft 0.4s;-ms-animation:animateleft 0.4s;-moz-animation:animateleft 0.4s;-o-animation:animateleft 0.4s;animation:animateleft 0.4s;}@keyframes animateleft{from{left:-300px;-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;} to{left:0;-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}}
		.animateleft {position:relative;-webkit-animation:animateright 0.4s;-ms-animation:animateright 0.4s;-moz-animation:animateright 0.4s;-o-animation:animateright 0.4s;animation:animateright 0.4s;}@keyframes animateright{from{right:-300px;-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;} to{right:0;-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}}
		.animateup {position:relative;-webkit-animation:animatebottom 0.4s;-moz-animation:animatebottom 0.4s;-ms-animation:animatebottom 0.4s;-o-animation:animatebottom 0.4s;animation:animatebottom 0.4s;}@keyframes animatebottom{from{bottom:-300px;-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;} to{bottom:0;-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}}
		.animatezoom {-webkit-animation:animatezoom 0.6s;-ms-animation:animatezoom 0.6s;-moz-animation:animatezoom 0.6s;-o-animation:animatezoom 0.6s;animation:animatezoom 0.6s;}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
		.animatekeepfading {-webkit-animation:fading 10s infinite;-ms-animation:fading 10s infinite;-moz-animation:fading 10s infinite;-o-animation:fading 10s infinite;animation:fading 10s infinite;}@keyframes fading{0%{-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;}50%{-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}100%{-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;}}
		.animatefade {-webkit-animation:opac 0.8s;-ms-animation:opac 0.8s;-moz-animation:opac 0.8s;-o-animation:opac 0.8s;animation:opac 0.8s;}@keyframes opac{from{-webkit-opacity:0;-ms-opacity:0;-moz-opacity:0;-o-opacity:0;opacity:0;} to{-webkit-opacity:1;-ms-opacity:1;-moz-opacity:1;-o-opacity:1;opacity:1;}}


		body {
			background-color: #333333;
		}
		.header, .footer {
			text-align: center;
			color: #FFFFFF;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		.header {
			font-size: 8vw;
			overflow: hidden;
		}
		.footer {
			font-size: 11px;
		}
		.bodycontents {
			margin: 10px;
			color: #333333;
			background-color: #FFFFFF;
		}
		.maincol .contents, .menucol .contents {
			padding: 20px;
		}
		h1 {
			font-size: 28px;
			padding:10px;
			margin-bottom: 10px;
			background-color: #333333;
			color: #FFFFFF;
		}
		h3 {
			font-size: 20px;
		}
		p, ul {
			font-size: 15px;
		}
		.menucol ul {
			padding: 0px;
		}
		a {
			text-decoration: none;
		}
		.menucol li {
			list-style-type: none;
			display: block;
			margin: 0px;
			padding: 10px;
			color: #333333;
		}
		.menucol li:hover {
			background-color: #333333;
			color: #FFFFFF;
		}
		/********************
		DO ADDITIONAL STYLES HERE
		********************/



		.maincol, .menucol {float: left;}
		.header {width: 100%;}
		.maincol {width: 66%;}/*computers*/
		.menucol {width: 34%;}
		.footer {width: 100%;}
		@media (max-width:800px) {/*tablets*/
		.header {width: 100%;}
		.maincol {width: 60%;}
		.menucol {width: 40%;}
		.footer {width: 100%;} }
		@media (max-width:500px) {/*cellphones*/
		.header {width: 100%;}
		.maincol {width: 100%;}
		.menucol {width: 100%;}
		.footer {width: 100%;}	}

		/* Hide or show during printing
		class="noprint" • class="noscreen" */
		@media screen
		{
			.noprint{}
			.noscreen{display:none;}
		}
		@media print
		{
			.noprint{display:none;}
			.noscreen{}
		}

		/*BLACK & WHITE THEME
			black (top/bottom bar strip) #333333
			light grey (body background) #F2F2F2
			dark grey (menu selections) #BBBBBB
			white (card/content) #FFFFFF
		*/
	</style>
</head>

<body oncontextmenu="return false">
	<noscript>Enable JavaScript of your internet browser, for best experience.</noscript>
	
	<div class="header">
		<div class="contents">
			GITHUB
		</div>
	</div>

	<div class="bodycontents">
		<div class="maincol animatefade">
			<div class="contents">
				<h1>Default Site</h1>
				<p>This is the home index for HTDOCS</p>
				<p>All new or other sites should be linked from this</p>
			</div>
			<div class="contents">
				<h1>Tasks</h1>
				<ul>
					<span style="text-decoration: line-through;">
						<li>Creat a site for <strong>Log In</strong><br>
							User must be able to
							<ul>
								<li>Create new user account</li>
								<li>Log in</li>
								<li>Log out</li>
								<li>Reset password</li>
							</ul>
						</li>
						<li>Create a site for <strong>Form</strong><br>
							User must be able to
							<ul>
								<li>Enter different types of input (text/ number/ link/ image/ etc)</li>
								<li>Submit form when done</li>
							</ul>
							I need to able to see form data in MySQL
						</li>
						<li>Program to <strong>Export Form</strong><br>
							User must be able to
							<ul>
								<li>Export form into PDF</li>
								<li>PDF in different styles/format (not just table)</li>
							</ul>
						</li>
					</span>
						<li>
							Log in - upload and view image files and description
							<ul>
								<li>
									Log out - only view image files and description
								</li>
							</ul>
						</li>
				</ul>
			</div>
		</div>

		<div class="menucol animateleft">
			<div class="contents">
				<h3>Links</h3>
				<ul>
					<?php include 'sitelinks.php'; ?>
				</ul>
			</div>
		</div>
	</div>
	

	<div class="footer">
		<div class="contents">
			Created by my default HTML set
		</div>
	</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	  $("a").on('click', function(event) {
	    if (this.hash !== "") {
	      event.preventDefault();
	      var hash = this.hash;
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	        window.location.hash = hash;
	      });
	    }
	  });
	});
	//////////
	document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</html>
