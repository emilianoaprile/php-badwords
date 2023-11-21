<?php

$text = $_POST['user_text'];
var_dump($text);

// var dump testo
var_dump($text);

// var dump lunghezza del testo originale
var_dump(strlen($text));

// prendo input dal form 
$bad_word = $_POST['bad_word'];
var_dump($bad_word);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored text</title>
</head>

<body>

    <!-- stampo il testo -->
    <p><strong>Testo:</strong>
        <?php echo $text; ?>
    </p>
    <!-- stampo la lunghezza -->
    <p><strong>Il testo è lungo:</strong>
        <?php echo strlen($text); ?>
    </p>
    <!-- testo con parola censurata -->
    <p><strong>Testo censurato:</strong>
        <?php echo str_replace($bad_word, '***', $text); ?>
    </p>
    <!-- lunghezza del testo censurato -->
    <p><strong>Testo censurato:</strong>
        <?php echo strlen(str_replace($bad_word, '***', $text)); ?>
    </p>

</body>

</html>