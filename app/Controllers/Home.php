<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login/login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function suratmasuk()
    {
        return view('suratmasuk');
    }
    public function suratkeluar()
    {
        return view('suratkeluar');
    }
    public function formatsuratmasuk()
    {
        return view('formatsuratmasuk');
    }
    public function profile()
    {
        return view('profile');
    }
}
