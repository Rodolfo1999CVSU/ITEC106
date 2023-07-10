<?php

namespace App\Controllers;

class Layout extends BaseController
{
    public function index()
    {
        $data = [ 
            'page_title' => 'Welcome to my Blog| Codeigniter 4',
            'page_heading' => 'My Blog | Codeigniter Training',
        ];

        return view ('homeview', $data);

    }

    public function based()
    {
        return view('layouts/based');
    }


}
