<?php
require './const/const.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES utf8");

    //Create database if not exist :
    $dbinitReq = $pdo->exec("CREATE DATABASE if not exists garage_parrot_db");
} catch (PDOException $exception) {
    echo 'Erreur :' . $exception->getMessage();
}

//Connect with a new PDO to the database created above of not exists :

    try {
        $dbco = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbco->exec("CREATE TABLE if not exists user_reviews(
                            reviewId INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
                            userName VARCHAR(60) NOT NULL,
                            userFirstName VARCHAR(60) NOT NULL,
                            userEmail VARCHAR(60) NOT NULL,
                            reviewNote SMALLINT(1) NOT NULL,
                            reviewDate VARCHAR(10) NOT NULL,
                            userVisitDate VARCHAR(10) NOT NULL,
                            reviewText TEXT(500) NOT NULL,
                            reviewIsValid BOOLEAN NOT NULL,
                            reviewIsRead BOOLEAN NOT NULL 
                             )");
        echo '<pre>';
        echo 'Connexion réussie';
        echo '</pre>';

    } catch (PDOException $exception) {
        echo 'Erreur :' . $exception->getMessage();
    }

/*
    $globalRate = 0;
    $stmt = $pdo->query("SELECT SUM(reviewNote) FROM user_reviews");
    $rateFetch = $stmt->fetch(PDO::FETCH_NUM);
    $rateSum = $rateFetch[0];
    //
    $rateQ = $pdo->query("SELECT review_rate FROM review")->fetchAll();
    $rateCount = count($rateQ);
    //Putting rate value in $globalRte variable :
    $globalRate = $rateSum / $rateCount;

    echo 'global rate :' . $globalRate;
*/


