<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Web
{

    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home()
    {
        echo $this->view->render("home",[]);
    }

    public function register()
    {
        $user = new User("Fernando","fernando@gmail.com","987654");
        var_dump($user);
        //$user->insert();
        //$users = $user->selectAll();
        //var_dump($users);

        echo $this->view->render("register",[
            "users" => $user->selectAll()
        ]);
    }

    public function about()
    {
        echo $this->view->render("about",[]);
    }

    public function location()
    {
        $name = "Fábio Santos";
        echo $this->view->render("location",[
            "name" => "Fábio",
            "email" => "fabiosantos@ifsul.edu.br"
        ]);
    }

    public function blog ()
    {
        echo "esse é o meu blog bonitinho...";
    }

    public function faq ()
    {
        echo "Perguntas Mais Frequentes!";
    }

    public function chart ()
    {
        echo "Carrinho de compras";
    }

    public function error (array $data) : void
    {
        var_dump($data);
    }

}