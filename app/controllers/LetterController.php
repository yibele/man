<?php

class LetterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->title = '编写信件 -- 慢递鱼，你的心意，我们慢递';
        $this->view->xinzhis = $this->getXinzhis();
        $this->view->letter_colors = $this->getFontColors();
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

    public function getXinzhis () {
        $xinzhis = new Xinzhis();
        $newXinzhis = array();
        $xinzhis = $xinzhis->find()->toArray();
        for($i=0;$i<ceil(count($xinzhis)/7);$i++) {
            for($j= $i*7;$j<($i+1)*7 && $j<count($xinzhis);$j++) {
                $newXinzhis[$i][] = $xinzhis[$j];
            }
        }
        return $newXinzhis;
    }
}

