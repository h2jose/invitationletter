<?php

require '../vendor/autoload.php';

$data = App\Config::init($_POST);

$html = App\Template::render($data);

App\Pdf::render($data['filename'], $html);