<?php
//Setup File

# Database connection here
$dbc = mysqli_connect('localhost','dev','!79eRV2VJcEGgdH','atomcms') or die('Could not connect because: '.mysqli_connect_error());

#Constants:
DEFINE('D_TEMPLATE','template'); // name of folder directory , to change the view of page, add new folder with style and change 'tepmlate' directory name.

#Functions:
include('functions/data.php');
include('functions/template.php');




#Site Setup:
$debug = data_settings_value($dbc,'debug-status');


$site_title =  'AtomCMS 2.0';

if(isset($_GET['page'])){
    $pageid = $_GET['page']; // Set $pageid to equal the value  given in the URL
}else {
    $pageid = 1; // Set     $pageid equal to 1 or the Home Page
}

#Page Setup:
$page = data_page($dbc, $pageid);



?>