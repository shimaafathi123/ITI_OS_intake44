<?php
require './connect_pdo.php';
require './utils.php';

$rows = get_all_data();
display_data($rows); 
?>