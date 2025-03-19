<?php
try {
    $dbh =  new PDO("mysql:host=localhost;dbname=jianga42_db", "jianga42_local", "UhdCru");
} catch (Exception $e) {
    die("It's so over. {$e->getMessage()}");
}
