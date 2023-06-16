<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function toefl_prediction_test()
    {
        return view('admin/toefl_prediction_test');
    }
    public function toelf_preperetion_class()
    {
        return view('admin/toelf_preperetion_class');
    }
    public function master_class()
    {
        return view('admin/master_class');
    }
    public function login()
    {
        return view('admin/login');
    }

    public function product()
    {
        return view('admin/product');
    }

    public function otp()
    {
        return view('admin/otp');
    }
}