<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Tanner Morlan">
    <link rel="icon" href="../favicon.ico">

		<title>LIS4381 - Assignment 3</title>		
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
                    <h1>Assignment 3</h1>
					<h3>Work with Databases and SQL</h3>
				</div>
				<p class="text-justify">
					<strong>Description:</strong> Create ERD based on business requirements. Populate tables with data and forward engineer to SQL file. Create an app that calculates the total cost of concert tickets.
                    <br />
					<strong><a href="https://bitbucket.org/tannerworkspace/lis4381/src/dffe1b51859de13ce72893d5ec783f212ffc4dda/a3/README.md" style="color: #0000EE" target="_blank">Bitbucket Repository - A3</a></strong>
				</p> <br />

				<h4>Screenshot of ERD</h4>
				<img src="img/erd.png" class="img-responsive center-block" alt="Screenshot of ERD"> <br />

				<h4>Screenshot of Tables</h4>
				<img src="img/tables.png" class="img-responsive center-block" alt="Screenshot of Tables"> <br />

                <h4>Screenshot of Running Application's Opening User Interface</h4>
				<img src="img/opening_user_interface.png" class="img-responsive center-block" alt="Screenshot of Running Application's Opening User Interface"> <br />

                <h4>Screenshot of Running Application's Processing User Input</h4>
				<img src="img/processing_user_interface.png" class="img-responsive center-block" alt="Screenshot of Running Application's Processing User Input"> <br />

				<h4>Completion of Skill Sets</h4>

                <h4>Skill Set 4</h4>
				<img src="img/skill_set_4.png" class="img-responsive center-block" alt="Skill Set 4"> <br />

                <h4>Skill Set 5</h4>
                <img src="img/skill_set_5.png" class="img-responsive center-block" alt="Skill Set 5"> <br />

                <h4>Skill Set 6</h4>
                <img src="img/skill_set_6.png" class="img-responsive center-block" alt="Skill Set 6"> <br />
				
				<?php include_once "../global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
