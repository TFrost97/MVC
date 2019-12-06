<?php
class Auta extends Model 
{
    public function __construct() {
        parent::__construct();
        // $this->bla = $this->select('Auta', '*');
        // var_dump($this->bla);
    }

    public function getAuta() {
        return $this->select('Auta', '*');
    }
}