<?php
/**
 * Created by R S RUSSELL.
 * User: GetwebInc
 * Date: 2/11/2019
 * Time: 2:29 PM
 */

namespace app\core;;


class Redirect
{
    function __construct()
    {

    }

    public static function To($page)
    {
        header('Location:/'.$page);
    }
}