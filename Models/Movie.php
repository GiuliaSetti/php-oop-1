<?php 
// create un file index.php in cui:
// - è definita una classe ‘Movie’
//   => all'interno della classe sono dichiarate delle variabili d'istanza
//   => all'interno della classe è definito un costruttore
//   => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

// class: Movie
// => all'interno della classe sono dichiarate delle variabili d'istanza
    class Movie {
        public $title;
        public $releaseYear;
        public $director;
        public $cover;
        public $duration;
        public $genre = [];
        public $description;

        
// construct
//   => all'interno della classe è definito un costruttore

        function __construct (string $title, int $releaseYear, string $director, string $cover, string $duration, array $genre, string $description){
        
            $this->title = $title;
            $this->releaseYear = $releaseYear;
            $this->director = $director;
            $this->cover = $cover;
            $this->duration = $duration;
            $this->genre = $genre;
            $this->description = $description;
        }

// method
//   => all'interno della classe è definito almeno un metodo
        public function getGenre($genre){
            
            return implode(", ", $genre);
           
        }

    }


  















?>