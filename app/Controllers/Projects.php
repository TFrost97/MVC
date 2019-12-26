<?php

class Projects extends Controller
{

    public function __construct($method, $params) {
        parent::__construct();
        // new Router();
        $this->view->renderView(get_called_class(), 'projects');

    }

}
