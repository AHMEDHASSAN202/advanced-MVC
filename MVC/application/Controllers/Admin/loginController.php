<?php
/**
 * Created by PhpStorm.
 * User: AHMED
 */

namespace Application\Controllers\Admin;
use System\Controller;


class loginController extends Controller
{

    public function index()
    {
        $data['title'] = 'ADCMS';
        $data['subtitle'] = 'Powerful Admin Panel';
        return $this->view->render('Admin/login/login', $data);
    }

    public function login() {
        echo 'login';
    }
}