<?php
use Core\Router;

Router::any('helloworld', 'Modules\HelloWorld\Controllers\HelloWorld@indexHW');