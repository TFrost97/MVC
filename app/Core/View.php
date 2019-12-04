<?php

class View 
{
    public function __construct() {
        require_once __DIR__ . '/../Views/Header/header.php';

    }

    public function renderView($folder, $view, $data = '' ,$layout = TRUE) {

        // $content = file_get_contents(__DIR__ . '/../Views/Errors/404.php');
        $content2 =  file_get_contents(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php');
        if($layout === TRUE) {
            require_once __DIR__ . '/../Views/app.php';
        }

        if (file_exists(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php')) {
            require_once __DIR__ . '/../Views/' . $folder . '/' . $view . '.php';
        } else {
            require_once __DIR__ . '/../Views/Errors/404.php';
        }
    }
}