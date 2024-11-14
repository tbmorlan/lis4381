<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Tanner Morlan">
	<link rel="icon" href="../favicon.ico">

	<title>LIS4381 - Write/Read File</title>
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
						<h1>Write/Read File</h1>
						<h3>Program Writes to and Reads from Same File</h3>
					</div>

					<h2>File Data</h2>

					<form class="form-horizontal" role="from" method="post" action="process.php">
						<div class="form-group">
							<label class="control-label col-sm-2" for="comment">Comment:</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Please enter text here..."></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>

			<?php include_once "../global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->


</body>
</html>
