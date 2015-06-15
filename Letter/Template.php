<?php namespace App;

class Template {

    public static function render(array $data = array())
    {
        ob_start();
        extract($data);
        include '../templates/pdf/letter.php';

        return ob_get_clean();
    }

}