<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('view_dashboard');
    }

    public function users()
    {
        return view('Users');
    }

    public function getUsers()
    {
        $Users = 75;
        $array = [
            'Users Registration' => $Users,
        ];
        return $this->response->setJSON($array);
    }
}
