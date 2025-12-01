<?php

use App\adms\Controllers\Services\PageController;

// Carregar o composer
require './vendor/autoload.php';
/** instanciar a classe PageController, responsável em tratar a URL */
$url = new PageController();