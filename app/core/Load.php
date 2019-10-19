<?php
/**
 * Created by R S RUSSELL.
 * User: GetwebInc
 * Date: 2/11/2019
 * Time: 12:36 PM
 */

namespace app\core;


class Load
{
    public function __construct()
    {

    }

    public function view($view,$data = false){
        if ($data == true) {
            extract($data);
        }
        include 'resources/views/layouts/backend/admin_header.php';
        include 'resources/views/'.$view.'.php';
        include 'resources/views/layouts/backend/admin_footer.php';
    }
    public function model($model){
        include 'app/models/'.$model.'.php';
        return new $model();
    }
}