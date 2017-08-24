<?php

class LetterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->title = '编写信件 -- 慢递鱼，你的心意，我们慢递';
        $this->view->xinzhis = 
        [
            '/img/xinzhi/xinzhi_1_tum.jpg',
            '/img/xinzhi/xinzhi_2_tum.jpg',
            '/img/xinzhi/xinzhi_3_tum.jpg',
            '/img/xinzhi/xinzhi_4_tum.jpg',
            '/img/xinzhi/xinzhi_5_tum.jpg',
            '/img/xinzhi/xinzhi_6_tum.jpg',
            '/img/xinzhi/xinzhi_7_tum.jpg',
            '/img/xinzhi/xinzhi_8_tum.jpg',
            '/img/xinzhi/xinzhi_9_tum.jpg',
            '/img/xinzhi/xinzhi_10_tum.jpg',
            '/img/xinzhi/xinzhi_11_tum.jpg',
            '/img/xinzhi/xinzhi_12_tum.jpg',
            '/img/xinzhi/xinzhi_13_tum.jpg',
            '/img/xinzhi/xinzhi_14_tum.jpg',
            '/img/xinzhi/xinzhi_15_tum.jpg',
            '/img/xinzhi/xinzhi_16_tum.jpg',
        ];
        $this->view->letter_colors = 
        [
            '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d', '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d', '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d','#978787','#eda58d'
        ];

        $this->view->fonts = $this->getFonts();
    }

    public function getFonts () {
        $fonts = new Fonts();
        return $fonts->find()->toArray();
        //return $fonts->find();
    }
}

