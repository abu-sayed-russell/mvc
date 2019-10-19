<?php

namespace app\Http\Controllers;

use app\core\Load;

class Controller{
    protected $load = array();
    function __construct()
    {
        $this->load = new Load();;
    }
// Base Url
  public function getBaseUrl() {
    $query = $_SERVER['REQUEST_URI'];

    return $query;
  }
}