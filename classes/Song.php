<?php
/**
 * Created by PhpStorm.
 * User: Yen Hoang
 * Date: 1/28/14
 * Time: 6:23 PM
 */

class Song {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

} 