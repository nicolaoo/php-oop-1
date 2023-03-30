<?php

include_once __DIR__. '.\models\movies.php';
include_once __DIR__. '.\models\valutazione.php';


// $film1 = new Movies ();
// $film2 = new Movies ();

// //titolo film
// $film1->title = "Avengers"; 
// $film2->title = "Batman Begins";

// //regista dei film
// $film1->regista = "Anthony Russo";
// $film2->regista = "Christopher Nolan";

// //attori del film
// $film1->attori = "Robert Downey Jr., Scarlett Johansson, Chris Evans, Mark Ruffalo, Chris Hemsworth, Jeremy Renner ";
// $film2->attori = "Christian Bale, Cillian Murphy, Katie Holmes, Michael Caine";

// //attori del film
// $film1->valutazione = 4.5;
// $film2->valutazione = 4.8;

//nuvo film con il costruttore
$film3 = new Movies("Everything Everywhere All at Once",
 " Daniel Kwan, Daniel Scheinert", 
 "Michelle Yeoh, Ke Huy Quan, Stephanie Hsu, James Hong", 
 new Valutazione("vinto 7 premi oscar", 
 "6 candidature e vinto 2 Golden Globes", 
 "10 candidature e vinto un premio ai BAFTA", 
 "4° in classifica"));
// var_dump($film1);
// var_dump($film2);


$film2 = new Movies("Batman Begins",
 "Christopher Nolan", 
 "Christian Bale, Cillian Murphy, Katie Holmes, Michael Caine", 
 new Valutazione("vinto 7 premi oscar", 
 "6 candidature e vinto 2 Golden Globes", 
 "10 candidature e vinto un premio ai BAFTA", 
 "4° in classifica"));

$film1 = new Movies("Avengers",
 "  Joe Russo, Joss Whedon, Anthony Russo", 
 "Robert Downey Jr., Scarlett Johansson, Chris Evans, Mark Ruffalo, Chris Hemsworth, Jeremy Renner ", 
 new Valutazione("vinto 7 premi oscar", 
 "6 candidature e vinto 2 Golden Globes", 
 "10 candidature e vinto un premio ai BAFTA", 
 "4° in classifica"));

 var_dump($film1);
 var_dump($film2);
 var_dump($film3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><?php echo $film3->title ?></h2>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</body>
</html>