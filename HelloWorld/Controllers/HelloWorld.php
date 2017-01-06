<?php
namespace Modules\HelloWorld\Controllers;

use Core\Controller;
class HelloWorld extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function indexHW() {
        $modules = new \Modules\HelloWorld\Models\HelloWorld();
        $r = $modules->indexHWModelFunction(12);

        $views = new \Modules\HelloWorld\Views\HelloWorld();
        $views->indexHW($r);
    }
}