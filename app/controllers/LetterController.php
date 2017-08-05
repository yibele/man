<?php

class LetterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->title = '编写信件 -- 慢递鱼，你的心意，我们慢递';
        $this->view->xinzhis = 
        [
            '/img/xinzhi/xinzhi_1.jpg',
            '/img/xinzhi/xinzhi_2.jpg',
            '/img/xinzhi/xinzhi_3.jpg',
            '/img/xinzhi/xinzhi_4.jpg',
            '/img/xinzhi/xinzhi_5.jpg',
            '/img/xinzhi/xinzhi_6.jpg',
            '/img/xinzhi/xinzhi_7.jpg',
            '/img/xinzhi/xinzhi_8.jpg',
            '/img/xinzhi/xinzhi_9.jpg',
            '/img/xinzhi/xinzhi_10.jpg',
            '/img/xinzhi/xinzhi_11.jpg',
            '/img/xinzhi/xinzhi_12.jpg',
            '/img/xinzhi/xinzhi_13.jpg',
            '/img/xinzhi/xinzhi_14.jpg',
            '/img/xinzhi/xinzhi_15.jpg',
            '/img/xinzhi/xinzhi_16.jpg',
        ];
    }
}

