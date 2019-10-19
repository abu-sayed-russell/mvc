<?php

use app\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function home(){
        $this->load->view('admin/dashboard');
    }

    public function russell($param){
        echo "Load From method $param";
    }

}
