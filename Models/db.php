<?php 

    // richiesta movies
    require_once './Models/Movie.php';

    $movieOne = new Movie('Forrest Gump', 1994, 'Robert Zemeckis', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/707d3da8c5a899ae82416fbec4a26bef3420d95b674bb2093745eecf615a3d47._RI_V_TTW_.jpg', '142 min', ["Commedia", "Drammatico"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');
    
    $movieTwo = new Movie('Ritorno al Futuro', 1985, 'Robert Zemeckis', 'https://3.bp.blogspot.com/-kYw0XHSrE6w/Vicd07AQIlI/AAAAAAABeV0/hZCUFIsmJOs/s1600/Ritorno-al-Futuro-parte-II-poster-recensione-0.jpg', '116 min', ["Commedia", "Fantascienza"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    $movieThree = new Movie('Inception', 2010, 'Christopher Nolan', 'https://mr.comingsoon.it/imgdb/locandine/big/47397.jpg', '148 min', ["Azione", "Fantascienza"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    $movieFour = new Movie('Grand Budapest Hotel', 2014, 'Wes Anderson', 'https://m.media-amazon.com/images/M/MV5BMzM5NjUxOTEyMl5BMl5BanBnXkFtZTgwNjEyMDM0MDE@._V1_FMjpg_UX1000_.jpg', '100 min', ["Avventura", "Commedia"], 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut, enim magni qui dolorum nisi omnis consequuntur deserunt quasi voluptate');

    
    // var_dump($movieOne);
    // var_dump($movieTwo);
    // var_dump($movieThree);
    // var_dump($movieFour);

    // array movies
    $movies = [$movieOne, $movieTwo, $movieThree, $movieFour];


    
?>