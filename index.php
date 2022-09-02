<?php
    require __DIR__ . '/movie.php'; 

    $movies = [

    ];
    $movies[] = new Movie("Uomini e donne", "Snuff", "Italiano");
    $movies[] = new Movie("Virgola il gattino", "Horror", "Giapponese");
    $movies[] = new Movie("Alla fiera dell'est", "Dramma", "Inglese");
    $movies[] = new Movie("Bando sui booster", "Comico", "Francese");
    $movies[] = new Movie("Pomeriggio 5", "Irriverente", "Italiano");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Films:</h1>
    <ul>
        <?php foreach ($movies as $movie){?>
          <li>
            <?php echo $movie->getTitle() . ' - ' . $movie->getGenre() . ' - ' . $movie->getLanguage();?>
          </li>
        <?php } ?>
    </ul>
</body>
</html>