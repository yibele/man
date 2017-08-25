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
        $this->view->letter_colors = $this->getFontColors();
        /**
        [
            '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d', '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d', '#000000','#978787','#eda58d','#e5e5e5','#f6b37f','#fff78f','#e56540','#eda58d','#e5e5e5',
            '#f6b37f','#fff78f','#eda58d','#978787','#eda58d'
        ];
        */

        $this->view->fonts = $this->getFonts();
    }

    public function getFonts () {
        $newFonts = array();
        $fonts = new Fonts();
        $fonts = $fonts->find()->toArray();
        for($i=0 ; $i< ceil(count($fonts)/12);$i++) {
            for($j= $i*12;$j < ($i+1)*12 && $j<count($fonts);$j++) {
                $newFonts[$i][] = $fonts[$j];
            }
        }
        return $newFonts;
    }

    private function getFontColors() {
        $colors = new Colors();
        return $colors->find()->toArray();
    }
}

