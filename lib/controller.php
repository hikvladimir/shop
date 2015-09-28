<?php
class controller {

    function render_template($template_file)
    {
        if (file_exists($template_file)) {
            ob_start();
            include($template_file);
            return ob_get_clean();
        } else {
            echo("Template: {$template_file} could not be found!");
        }
    }

    function getUrl ()
    {
        $url = !isset($_GET['url']) ? 'index' : $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

    function getIndex()
    {
        echo $this->render_template(__DIR__ . '/../view/index.php');
    }
}