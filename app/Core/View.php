<?php

class View 
{
    public function __construct() {
    }

    public function renderView($folder, $view, $data = '' ,$layout = TRUE) {
        
        // $content =  file_exists(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php') 
        // ? file_get_contents(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php') 
        // : file_get_contents(__DIR__ . '/../Views/Errors/404.php');



        // require_once __DIR__ . '/../Views/Structure/header.php';
        $this->getHeader($data);

        if($layout === TRUE) {
            require_once __DIR__ . '/../Views/app.php';
        }

        if (file_exists(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php')) {
            require_once __DIR__ . '/../Views/' . $folder . '/' . $view . '.php';
        } else {
            require_once __DIR__ . '/../Views/Errors/404.php';
        }

        $this->getFooter($data);

    }

    public function getHeader($data) {
        return require_once __DIR__ . '/../Views/Structure/header.php';
    }

    public function getFooter($data) {
        return require_once __DIR__ . '/../Views/Structure/header.php';
    }


}