<?php
    class Movie {
        public $title;
        public $year;
        public $duration;
        public $genre;

        public function __construct($title, $year, $duration, $genre)
        {
            $this->title = $title;
            $this->year = $year;
            $this->duration = $duration;
            $this->genre = $genre;
        }

        public function getMovieTitle() {
            echo $this->title;
        }

        public function getMovieGenre() {
            echo $this->genre;
        }

        public function getMovieDuration() {
            echo $this->duration;
        }

        public function getMovieYear() {
            echo $this->year;
        }
    }
?>