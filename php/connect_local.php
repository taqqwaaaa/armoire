<?php
try {
    $dbh =  new PDO("mysql:host=localhost;dbname=jianga42_db", "root", "");
} catch (Exception $e) {
    die("It's so over. {$e->getMessage()}");
}
