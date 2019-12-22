<?php

class View 
{
    public function __construct() {
    }

    public function renderView($folder, $view, $data = '' ,$layout = TRUE) {
        
        // $content =  file_exists(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php') 
        // ? file_get_contents(__DIR__ . '/../Views/' . $folder . '/' . $view . '.php') 
        // : file_get_contents(__DIR__ . '/../Views/Errors/404.php');

        // var_dump(__DIR__ . '/../../');

        // require_once __DIR__ . '/../Views/Structure/header.php';
        $this->getHeader($data);

        // if($layout === TRUE) {
        //     require_once __DIR__ . '/../../resources/views/app.php';
        // }

        if (file_exists(__DIR__ . '/../../resources/views/' . $folder . '/' . $view . '.php')) {
            require_once __DIR__ . '/../../resources/views/' . $folder . '/' . $view . '.php';
        } else {
            require_once __DIR__ . '/../../resources/views/Errors/404.php';
        }

        $this->getFooter($data);

    }

    public function getHeader($data) {
        return require_once __DIR__ . '/../../resources/views/Structure/header.php';
    }

    public function getFooter($data) {
        return require_once __DIR__ . '/../../resources/views/Structure/footer.php';
    }


}