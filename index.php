<?php

$text = 'In una landa desolata, il fragore dei cannoni squarcia il silenzio, mentre il fumo avvolge il campo di battaglia. 
Soldati avanzano con passo deciso, il terreno imprigionato dal peso delle loro speranze e paure. 
I volti segnati dalla durezza della guerra raccontano storie di sacrifici e perdite. 
Il cielo, una tavolozza grigia di disperazione, testimonia il conflitto impietoso. 
Le urla si mescolano con il clangore delle armi, creando una sinfonia di sofferenza.';

// var dump testo
var_dump($text);

// var dump lunghezza del testo originale
var_dump(strlen($text));

// prendo input dal form 
$censored_word = $_GET['bad_word'];

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


</body>

</html>