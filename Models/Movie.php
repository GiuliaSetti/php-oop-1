<?php 
// create un file index.php in cui:
// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// classe: Movie
// => all'interno della classe sono dichiarate delle variabili d'istanza
    class Movie {
        public $title;
        public $releaseYear;
        public $director;
        public $cover;
        public $duration;
        public $genre = [];

        
// construct
//   => all'interno della classe è definito un costruttore

        function __construct (string $title, int $releaseYear, string $director, string $cover, string $duration, array $genre){
        
            $this->title = $title;
            $this->releaseYear = $releaseYear;
            $this->director = $director;
            $this->cover = $cover;
            $this->duration = $duration;
            $this->genre = $genre;
        }


    }


  















?>