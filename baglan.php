<?php
try {
     $db = new PDO("mysql:host=localhost;dbname=ipmanagement", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}

?>