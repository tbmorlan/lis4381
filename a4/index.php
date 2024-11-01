<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Your Name Here!">
	<link rel="icon" href="favicon.ico">

	<title>CRSXXXX - Assignment4</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>

					<h2>Pet Stores</h2>

						<form id="defaultForm" method="post" class="form-horizontal" action="#">
								<div class="form-group">
										<label class="col-sm-4 control-label">Name:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" name="name" />
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label">Email:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" name="email" />
										</div>
								</div>

								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-3">
									<button type="submit" class="btn btn-primary" name="add" value="Add">Add</button>
										</div>
								</div>
						</form>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>

<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {

	$('#defaultForm').formValidation({
			message: 'This value is not valid',
			icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
			},
			fields: {
					name: {
							validators: {
									notEmpty: {
									 message: 'Name required'
									},
									stringLength: {
											min: 1,
											max: 30,
									 message: 'Name no more than 30 characters'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[\w\-\s]+$/,
										message: 'Name can only contain letters, numbers, hyphens, and underscore'
									},									
							},
					},

					street: {
							validators: {
									notEmpty: {
											message: 'Street required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Street no more than 30 characters'
									},
									regexp: {
										//street: only letters, numbers, commas, hyphens, space character, and periods
										regexp: /^[a-zA-Z0-9,\-\s\.]+$/,		
									message: 'Street can only contain letters, numbers, commas, hyphens, or periods'
									},									
							},
					},
					
			}
	});
});
</script>

</body>
</html>
