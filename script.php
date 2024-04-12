<?php

$paragraph = $_GET["paragraph"];
$bad_word = $_GET["ban"];
$censure = "***";

$censured_paragraph = str_replace($bad_word, $censure, $paragraph);
$p_length = strlen($censured_paragraph);

// var_dump($_GET);

echo $censured_paragraph;
echo " The text lenght is $p_length words.";
// echo $bad_word;

?>
