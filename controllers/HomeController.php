<?php

class HomeController
{
    public function index()
    {
        require "views/default/home.php";
    }

    public function sobre()
    {
        require "views/default/sobre.php";
    }

    public function contato()
    {
        require "views/default/contato.php";
    }
}
?>