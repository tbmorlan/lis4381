<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Tanner Morlan">
	<link rel="icon" href="favicon.ico">

		<title>LIS4381</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>
	<?php include_once("../global/nav.php"); ?>
	
	<div class="container-fluid">
		<div class="starter-template">
					<div class="page-header">
						<h1>Assignment 5</h1>
						<h3>Basic server-side validation</h3>
						<h3>Server-side validation, and prepared statements (helps prevent SQL injection).</h3>
						<h3>Displays user-entered data, and permits users to add data.</h3>
						<h3>(See P2 to update and delete pet store data)</h3>
						<p>(Table: petstore)</p>
					</div>

				<h2 class="top">Error!</h2>

<?php echo $error; ?>
<br /><br />

<?php
require_once "../global/footer.php";
?>

					</div><!-- end grids -->
			</div><!-- end row -->
			</div><!-- end starter-template -->        
	</div><!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
	<?php include_once("../js/include_js.php"); ?>

</body>
</html>
