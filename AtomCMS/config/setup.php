<?php
//Setup File

# Database connection here
$dbc = mysqli_connect('localhost','dev','!79eRV2VJcEGgdH','atomcms') or die('Could not connect because: '.mysqli_connect_error());

#Functions:
include('functions/data.php');




$site_title =  'AtomCMS 2.0';

if(isset($_GET['page'])){
    $pageid = $_GET['page']; // Set $pageid to equal the value  given in the URL
}else {
    $pageid = 1; // Set     $pageid equal to 1 or the Home Page
}

#Page Setup
$page = data_page($dbc, $pageid);


?>