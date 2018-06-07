<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

namespace Application\Controllers\Frontend\Home;
use System\Controller;
use System\Pagination;

class homeController extends Controller
{
    public function index()
    {
        $data['units'] = $this->app->db->select('*')->from('units')->fetchAll();
        return $this->app->view->render('Frontend/home', $data)
                               ->css([
//                                   setLink('admin/css/main'),
//                                   setLink('admin/css/header')
                               ])
                               ->js([
//                                   setLink('admin/js/main'),
//                                   setLink('admin/js/sidebar')
                               ]); 
    }
    public function submit()
    {

    }
    public function about() {
        echo 'about';
    }
    public function posts() {
        echo 'posts';
    }

}