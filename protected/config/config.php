<?php
require '../protected/rb/rb-mysql.php';

// $node_path = 'C:\Program Files\nodejs\node.exe';
$node_path = 'node';
// $script_path = 'C:\OpenServer\domains\prud.local\api\download-pdf-assets\generate-pdf.js';
$script_path = '/var/www/html/calc/api/download-pdf-assets/generate-pdf.js';
$debug_mode_on = false;

R::setup( 'mysql:host=localhost;dbname=prud', 'root', 'root' );



if ( !R::testConnection() ) {
  exit("Can't establish database connection.");
}

?>
