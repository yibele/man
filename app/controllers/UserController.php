<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function myletterAction () {
        $this->view->title = '我的信件';
    }
}

