<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs
//exit(print_r($_POST));

//exit(print_r($_POST)); //display $_POST array values from form

// or, for nicer display in browser...
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit(); //stop processing, otherwise, errors below
//After testing, comment out above lines.
               
//code to process inserts goes here

//include('index.php'); //forwarding is faster, one trip to server
header('Location: index.php'); //sometimes, redirecting is needed (two trips to server)
?>
