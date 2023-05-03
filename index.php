<?php 
    require_once './Models/Movie.php';

    $movieOne = new Movie('Forrest Gump', 1994, 'Robert Zemeckis', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/707d3da8c5a899ae82416fbec4a26bef3420d95b674bb2093745eecf615a3d47._RI_V_TTW_.jpg', '142 min', ["Commedia", "Drammatico"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');
    $movieTwo = new Movie('Ritorno al Futuro', 1985, 'Robert Zemeckis', 'https://3.bp.blogspot.com/-kYw0XHSrE6w/Vicd07AQIlI/AAAAAAABeV0/hZCUFIsmJOs/s1600/Ritorno-al-Futuro-parte-II-poster-recensione-0.jpg', '116 min', ["Commedia", "Fantascienza"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    $movieThree = new Movie('Inception', 2010, 'Christopher Nolan', 'https://mr.comingsoon.it/imgdb/locandine/big/47397.jpg', '148 min', ["Azione", "Fantascienza"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    $movieFour = new Movie('Grand Budapest Hotel', 2014, 'Wes Anderson', 'https://m.media-amazon.com/images/M/MV5BMzM5NjUxOTEyMl5BMl5BanBnXkFtZTgwNjEyMDM0MDE@._V1_FMjpg_UX1000_.jpg', '100 min', ["Avventura", "Commedia"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    
    // var_dump($movieOne);
    // var_dump($movieTwo);

    // array movies
    $movies = [$movieOne, $movieTwo, $movieThree, $movieFour];


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Movies</title>
</head>
<body>

    <div class="container d-flex justify-content-center my-3">
        <?php 

                foreach($movies as $movie){
        ?>
                 
               
        <div class="d-flex flex-column mx-2 justify-content-between gap-3">
            <div class="info my-2">
                <div class="title">
                <h2><?= $movie->title ?></h2>
                </div>
                <div class="year">
                    Anno di uscita:
                    <?= $movie->releaseYear ?>
                </div>

                <div>
                    Genere:
                    <?= $movie->getGenre($movie->genre)
                    ?>
                </div>
                <div class="director">
                    Regista:
                    <?= $movie->director ?>
                </div>
                <div class="duration">
                    Durata:
                    <?= $movie->duration ?>
                </div>
            </div>
            

            <div class="card" style="width: 18rem;">
                <img src="<?= $movie->cover ?>" class="card-img-top" alt="movie_cover">
                <div class="card-body">
                    <p class="card-text"><?= $movie->description ?></p>
                </div>
            </div>
        
          
        </div>

        <?php } ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    
</body>
</html>