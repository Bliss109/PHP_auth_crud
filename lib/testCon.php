<?php
require_once '../lib/database.php';

$db= new Database();

echo $db->dbConnect();

?>