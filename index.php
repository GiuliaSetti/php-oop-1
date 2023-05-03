<?php 
    require_once './Models/Movie.php';

    $movieOne = new Movie('Forrest Gump', 1994, 'Robert Zemeckis', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/707d3da8c5a899ae82416fbec4a26bef3420d95b674bb2093745eecf615a3d47._RI_V_TTW_.jpg', '142 min' );
    $movieTwo = new Movie('Ritorno al Futuro', 1985, 'Robert Zemeckis', 'https://m.media-amazon.com/images/I/81nL1XKwW5L.jpg', '116 min' );

    
    var_dump($movieOne);
    var_dump($movieTwo);


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>


    
</body>
</html>