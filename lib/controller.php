<?php
class controller {
    function getUrl ()
    {
        $url = !isset($_GET['url']) ? index : $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

    function getIndex()
    {
        echo 'мы в индексе кнтролера';
    }
}