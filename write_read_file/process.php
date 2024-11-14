<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

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
                    <p class="text-justify">
                        <?php
                        $myfile = fopen("file.txt", "w+") or exit("Unable to open file!");
                        $txt = $_POST['comment'];
                        fwrite($myfile, $txt);
                        fclose($myfile);

                        $myfile = fopen("file.txt", "r+") or exit("Unable to open file!");
                        while(!feof($myfile)) {
                            echo fgets($myfile) . "<br />";
                        }
                        fclose($myfile);
                        ?>
                    </p>

			<?php include_once "../global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

 <?php include_once("../js/include_js.php"); ?>

 <script type="text/javascript">
	 $(document).ready(function(){
		 $('#myTable').DataTable({
			responsive: true			 
		 });
    });
	</script>

</body>
</html>
