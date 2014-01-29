<?php
/**
 * Created by PhpStorm.
 * User: Yen Hoang
 * Date: 1/28/14
 * Time: 6:23 PM
 */



class Song {
    protected $title;
    protected $artistId;
    protected $genreId;
    protected $price;
    protected $sql;
    protected $songs;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setArtistId($artistId) {
        $this->artistId = $artistId;
    }

    public function setGenreId($genreId) {
        $this->genreId = $genreId;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getId() {
        return $this->pdo->lastInsertId();
    }

    public function save() {
        $this->sql = "INSERT INTO songs(title,artist_id,genre_id,price,play_count) VALUES ('$this->title',$this->artistId,$this->genreId,$this->price,0)";
        $statement = $this->pdo->prepare($this->sql);
        return $statement->execute();
    }

} 