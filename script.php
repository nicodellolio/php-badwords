<?php

$paragraph = $_GET['paragraph'];
$bad_word = $_GET['ban'];
$censure = '***';

$censured_paragraph = str_replace($bad_word, $censure, $paragraph);
$p_length = strlen($censured_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen results</title>
</head>
<body>
    
    <div class="php_results">
        <p>
            <?= $censured_paragraph; ?>
        </p>
        <h3>
            <?= "The text lenght is $p_length words long." ?>
        </h3>
    </div>

</body>
</html>