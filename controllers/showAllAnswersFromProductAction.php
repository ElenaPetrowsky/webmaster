<?php
require 'publishAnswerAction.php';
// require 'showProductContentAction.php';

$getAllAnswersOfProduct = $BDD->prepare("SELECT * FROM produits WHERE id = ?");
$getAllAnswersOfProduct->execute([$idOfProduct]);