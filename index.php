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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><?php echo $film1->title; ?></h2>
                    <p><?php echo $film1->regista; ?></p>
                    <ul>
                        <li>
                            <?php
                                echo $film1->attori;
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <?php
                                echo $film1->valutazione->premio_oscar;
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $film1->valutazione->golden_globes;
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $film1->valutazione->bafta;
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $film1->valutazione->box_office;
                            ?>
                        </li>
                    </ul>
                </div>
                
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="card" style="width: 18rem;">
                    <img src="https://lumiere-a.akamaihd.net/v1/images/p_avengersendgame_19751_e14a0104.jpeg?region=0%2C0%2C540%2C810" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?php echo $film1->title; ?></h2>
                        <p> <h5>Regista</h5><?php echo $film1->regista; ?></p>
                        <div>
                            <h5>Attori</h5>
                                <?php
                                    echo $film1->attori;
                                ?>
                        </div>
                        <div>
                            <h5>Premi e Valutazioni</h5>
                            <?php
                                echo $film1->valutazione->premio_oscar;?>, <?php
                                echo $film1->valutazione->golden_globes;?>, <?php
                                echo $film1->valutazione->bafta;?>, <?php
                                echo $film1->valutazione->box_office;?>, <?php
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>