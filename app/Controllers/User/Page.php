<?php

namespace App\Controllers\User;
use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
    public function login()
    {
        return view('user/login');
    }
    public function register()
    {
        return view('user/register');
    }
    public function home()
    {
        return view('user/home');
    }
}