<?php
    
    // Variabili che indicano il paragrafo e la parola censurata
    $paragraph = $_POST['paragraph'];
    $badwords = $_POST['badwords'];

    // Lunghezza del paragrafo
    $paragraph_lenght = strlen($paragraph);
    // echo $paragraph_lenght;

    // modificare il paragrafo con parola censurata
    $paragraph_badwords = str_replace($badwords, '***', $paragraph);
    $paragraph_badwords_lenght = strlen($paragraph_badwords);
    // echo $paragraph_badwords;
    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORDS</title>
</head>
<body>
    
    <h1>Paragrafo con parola non censurata</h1>
    <h2>La lunghezza del paragrafo è di <?php echo $paragraph_lenght ?></h2>
    <p><?php echo $paragraph ?></p>

    <h1>Paragrafo con parola censurata</h1>
    <h2>La lunghezza del paragrafo è di <?php echo $paragraph_badwords_lenght ?></h2>
    <p><?php echo $paragraph_badwords ?></p>
</body>
</html>