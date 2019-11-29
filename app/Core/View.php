<?php

class View 
{
    public function __construct() {

    }

    public function render() {
        require_once __DIR__ . '/../Views/Header/header.php';
    }
}