<?php
class bootstrap {
    /**
     *
     */
    function  __construct() {
        $controller=new controller();
        ;

        $url=$controller->getUrl();
        switch ($url[0]) {
            case 'index';
                $controller->getIndex();
                break;

        }
        print_r($url);
    }
}