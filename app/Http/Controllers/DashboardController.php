<?php

use app\Http\Controllers\Controller;

class DashboardController extends Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = array();
    $model = $this->load->model('category');
    $data['cat'] = $model->getcat();
    $this->load->view('admin/dashboard', $data);
  }
  public function home()
  {
   echo 'home';
  }


}
