<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=foodwebsite", "root", "");
        $pdo->query("set names utf8");
    } catch (Exception $ex) {
        echo "Erorr connection" . $ex->getMessage();
        die();
    }
?>