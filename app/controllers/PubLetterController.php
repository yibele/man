<?php

class PubLetterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->title = '公开信';
    }

    public function showAction($id) {
        $this->view->id = $id;

    }

}

