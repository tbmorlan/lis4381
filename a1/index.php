<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Tanner Morlan">
    <link rel="icon" href="../favicon.ico">

		<title>LIS4381 - Assignment 1</title>		
		<?php include_once("../css/include_css.php"); ?>		
		
		<style type="text/css">
			h2
			{
				color: #666;
				padding: 0px;
				font-size: 32px;
				font-family: "trebuchet ms", sans-serif;    
	
			}
			h3
			{
				color: #666;
				padding: 0px;
				font-family: "trebuchet ms", sans-serif;
			}
			p
			{
				color: #666;
				padding: 0px;
				font-family: "trebuchet ms", sans-serif;
			}
		</style>
  </head>

  <body>

		<?php include_once("../global/nav.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<h1>Assignment 1</h1>
					<h3> Set up development environment</h3>
				</div>
				<p class="text-justify">
					<strong>Description:</strong> Set up development environment through the installation of AMPPS, JDK, Android Studio, and the creation of a Bitbucket repository. Additionally, provide descriptions of commonly used git commands.
					<br />
					<strong><a href="https://bitbucket.org/tannerworkspace/lis4381/src/dffe1b51859de13ce72893d5ec783f212ffc4dda/a1/README.md" style="color: #0000EE" target="_blank">Bitbucket Repository - A1</a></strong>
				</p><br />

				<h4>Java Installation</h4>
				<img src="img/java_hello.png" class="img-responsive center-block" alt="JDK Installation"> <br />

				<h4>Android Studio Installation</h4>
				<img src="img/android_studio_my_first_app.png" class="img-responsive center-block" alt="Android Studio Installation"> <br />

				<h4>AMPPS Installation</h4>
				<img src="img/my_php_installation.png" class="img-responsive center-block" alt="AMPPS Installation">
				
				<?php include_once "../global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
