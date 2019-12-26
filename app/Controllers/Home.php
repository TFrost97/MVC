<?php

require_once  __DIR__ . '/../Models/Auta.php';


class Home extends Controller
{
    public function __construct($method, $params) {
        parent::__construct();
        // new Router();
        $auta = new Auta();
        $bebok = $auta->getAuta();
        // echo(get_called_class());
        $this->view->renderView(get_called_class(), 'home', $bebok);
    }
}
