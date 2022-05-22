<?php

namespace app\controllers;

use myshop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('brand', 'LIMIT 5');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 4");
        $canonical = PATH;
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits'));
    }
}