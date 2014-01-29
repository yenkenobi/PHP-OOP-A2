<?php
/**
 * Created by PhpStorm.
 * User: Yen Hoang
 * Date: 1/28/14
 * Time: 6:23 PM
 */

class ArtistMenu {
    protected $name;
    protected $artists;

    public function __construct($name, $artists) {
        $this->name = $name;
        $this->artists = $artists;
    }

    public function __toString(){
        $tostring = "<select name='$this->name'>";
        foreach ($this->artists as $artist) :
            $tostring = $tostring . "<option value='$artist->id'>$artist->artist_name</option>";
        endforeach;
        $tostring = $tostring . "</select>";

        return $tostring;
    }

} 