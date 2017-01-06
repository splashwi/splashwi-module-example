<?php
namespace Modules\HelloWorld\Models;

use Core\Model;
class HelloWorld extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function indexHWModelFunction($int) {
        return $int + 1;
    }
}