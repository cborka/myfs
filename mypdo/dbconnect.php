<?php

function myConnect(){
    try {
        $dbh = new PDO('mysql:host=93.189.42.2;dbname=myfs', 'bor', '432');
        return $dbh;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

$pdo = myConnect();
