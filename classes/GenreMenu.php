<?php
/**
 * Created by PhpStorm.
 * User: Yen Hoang
 * Date: 1/28/14
 * Time: 6:23 PM
 */

class GenreMenu {
    protected $name;
    protected $genres;

    public function __construct($name, $genres) {
        $this->name = $name;
        $this->genres = $genres;
    }

    public function __toString(){
        $tostring = "<select name='$this->name'>";
        foreach ($this->genres as $genre) :
            $tostring = $tostring . "<option value='$genre->id'>$genre->genre</option>";
        endforeach;
        $tostring = $tostring . "</select>";

        return $tostring;
    }

} 