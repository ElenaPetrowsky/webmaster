<?php
$DB_DSN = "mysql:host=localhost;dbname=alibaba";
$DB_USER = "root";
$DB_PASS = "";
$options =
	[
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	];

try {
    if(session_id() == '') {
        session_start();
    }
	$BDD = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);
} catch (PDOException $pe) {
	echo "Erreur : " . $pe->getMessage();
}
