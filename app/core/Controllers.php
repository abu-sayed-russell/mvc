<?php
namespace app\core;


/**
 * Created by R S RUSSELL.
 * User: GetwebInc
 * Date: 2/10/2019
 * Time: 3:25 PM
 */

class Controllers
{
    protected $load = array();

    function __construct()
    {
        $this->load = new Load();;
    }
}