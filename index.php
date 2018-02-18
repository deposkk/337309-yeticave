<?php
require_once 'functions.php';
$path = 'templates/index.php';
$data = [
         'adverts' => $adverts,
         ];
$index = renderTemplate('templates/index.php', $data); 

$layoutData = [ 
'index' => $index 
] ;
$layout = renderTemplate('templates/layout.php', $layoutData); 
print($layout); 

?>