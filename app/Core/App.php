<?php 

class App 
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
            $this->assignUrl();
            // $this->eho();
            $this->getController();

    }

    public function assignUrl() {
        $url = explode( '/' , rtrim($_GET['url'], '/') );

        $this->controller =  ucfirst($url[0] !== 'index.php' ? $url[0] : $this->controller);
        $this->method =  isset($url[1]) ? $url[1] : $this->method;
        foreach ($url as $key => $value) {
            if($key > 1) {
               array_push($this->params, $value) ;
           }
       }
    }

    public function getController() {
        if(file_exists(__DIR__ . '/../Controllers/' . $this->controller . '.php')){
            require_once __DIR__ . '/../Controllers/' . $this->controller . '.php';
            new $this->controller($this->method, $this->params);
        } else {
            $this->controller = 'Errors';
            require_once __DIR__ . '/../Controllers/' . $this->controller . '.php';
            new $this->controller();


        }

    }

    // public function eho() {
    //     echo($this->controller);
    //     echo($this->method);
    //     var_dump($this->params);
    // }
}
// parametrs we will get with $_GET and then it gives us parametr like ?page=3&users=tomek

//1.  (Wszystko w construct na początek)
//2. Pobiera parametry z url
//3. Przypisuje 1 parametr jako wywolany controller oraz kolejne jako parametry tego kontrollera
//4. zmiana nazwy z capital letter
//5. Rządanie i wywołanie odpowiedniego kontrolera
