<?php

class PublicController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->title = '慢递鱼--你的心意，我们慢递';
    }

    public function chargesAction()
    {

        $this->view->kefuEmail = 'customer@manfish.com';
        $this->view->yijianEmail = 'advice@manfish.com';
        $this->view->gongzhonghao = '扫描二维码，关注慢递鱼公众号';

    }

    public function publetterAction()
    {

    }

    public function shaidanAction()
    {

    }
}

