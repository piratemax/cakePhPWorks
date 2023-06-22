<?php

namespace App\Controller;

class HomeController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->setLayout("myLayout");
        $test = "jolie";
        $this->set(compact("test"));
    }
}

?>