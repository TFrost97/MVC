<?php

class View 
{
    public function __construct() {
    }

    public function renderView($folder, $view, $data = '') {

        // require_once __DIR__ . '/../Views/Structure/header.php';
        $this->getHeader($data);

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