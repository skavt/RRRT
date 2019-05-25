<?php

use src\H3\Template;

//include_once 'src/H3/Template.php';

class Controller
{
    private $temp;

    public function __Construct()
    {
        $this->temp = new Template();
    }
    public function main(){

        $this->temp->set('username', 'skavt');

        $this->temp->set('header', $this->temp->getFile('view/header.php'));

        $this->temp->render('view/main.php');

    }
}
