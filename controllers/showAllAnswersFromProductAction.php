<?php
include 'publishAnswerAction.php';
// include 'showProductContentAction.php';

$getAllAnswersOfProduct = $BDD->prepare("SELECT * FROM produits WHERE id = ?");
$getAllAnswersOfProduct->execute([$idOfProduct]);