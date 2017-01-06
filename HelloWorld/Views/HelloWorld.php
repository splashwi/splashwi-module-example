<?php
namespace Modules\HelloWorld\Views;

use Core\View;
class HelloWorld extends View {
    public function indexHW($hw) {
        echo 'Hello World!<br>';
        echo '12 + 1 = '.$hw;
    }
}