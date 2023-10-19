<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()//: string
    {
        echo view('header');
        echo view('content');
        echo view('footer');
    }
}
