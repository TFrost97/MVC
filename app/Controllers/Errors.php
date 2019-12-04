<?php

class Errors extends Controller
{
    public function __construct($method = '', $params = '') {
        parent::__construct();
        // echo(get_called_class());

        $this->view->renderView(get_called_class(), '404', FALSE);
    }
}
