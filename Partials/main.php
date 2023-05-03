<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 class="text-center my-2">MOVIES</h1>

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
    
</body>
</html>