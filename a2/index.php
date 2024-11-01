<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
		<meta name="author" content="Tanner Morlan">
    <link rel="icon" href="../favicon.ico">

		<title>LIS4381 - Assignment 2</title>		
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
                    <h1>Assignment 2</h1>
					<h3>Create first mobile app</h3>
				</div>
				<p class="text-justify">
					<strong>Description:</strong> Create first app showcasing "Healthy Recipes" that displays an initial landing page with an image of bruscetta, and a button leading to another page with the recipe itself.
                    <br />
					<strong><a href="https://bitbucket.org/tannerworkspace/lis4381/src/dffe1b51859de13ce72893d5ec783f212ffc4dda/a2/README.md" style="color: #0000EE" target="_blank">Bitbucket Repository - A2</a></strong>
				</p> <br />

				<h4>Working App - First Interface</h4>
				<img src="img/application_running_first_interface.png" class="img-responsive center-block" alt="Working App - First Interface"> <br />

				<h4>Working App - Second Interface</h4>
				<img src="img/application_running_second_interface.png" class="img-responsive center-block" alt="Working App - Second Interface"> <br />

				<h4>Completion of Skill Sets</h4>

                <h4>Skill Set 1</h4>
				<img src="img/ss1_even_or_odd.png" class="img-responsive center-block" alt="Skill Set 1"> <br />

                <h4>Skill Set 2</h4>
                <img src="img/ss2_largest_number.png" class="img-responsive center-block" alt="Skill Set 2"> <br />

                <h4>Skill Set 3</h4>
                <img src="img/ss3_arrays_and_loops.png" class="img-responsive center-block" alt="Skill Set 3"> <br />
				
				<?php include_once "../global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
