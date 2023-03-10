<?php
class routes
{

    public function __construct($path)
    {
        require_once('templates.php');
        switch ($path) {
            case 'value':
                # code...
                break;
            default:
                $template = new Template("./view/pages/examples/login-v2.html");
                echo $template;
                break;
        }
    }
}
