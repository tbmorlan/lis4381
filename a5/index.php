<?php
//https://datatables.net/examples/basic_init/table_sorting.html
//database connection code goes here...
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Mark K. Jowett, Ph.D.">
	<link rel="icon" href="favicon.ico">

		<title>CRSXXXX - AssignmentX</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>
	
	<div class="container-fluid">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

						<h2>Pet Stores</h2>

<a href="add_petstore.php">Add Pet Store</a>
<br />

 <div class="table-responsive">
	 <table id="myTable" class="table table-striped table-condensed" >

		 <!-- Code displaying PetStore data with Edit/Delete buttons goes here // -->

	 </table>
 </div> <!-- end table-responsive -->
 	
				<?php include_once "global/footer.php"; ?>	

			</div> <!-- end starter-template -->
  </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
				<?php include_once("../js/include_js.php"); ?>

		<script type="text/javascript">
	 $(document).ready(function(){
		 $('#myTable').DataTable({
				 responsive: true,				 
				 //https://datatables.net/reference/option/lengthMenu
				 //1st inner array: number of actual records displayed
				 //2nd inner array: number listed in the drop-down menu
				 //Note: -1 is used to disable pagination (i.e., display all rows), use with "All"
				 //Note: pageLength property automatically set to first value given in array: here, 10
				 "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	 //permit sorting (i.e., no sorting on last two columns: delete and edit)
    "columns":
		[
      null,
      null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
     { "orderable": false },
     { "orderable": false }			
    ]
		 });
});
	</script>

</body>
</html>
