<?php

class publetterController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->title = '公开信';
    }

    public function showAction($id) {
        $this->view->id = $id;

    }
}

