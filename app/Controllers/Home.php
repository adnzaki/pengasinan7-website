<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'schoolInfo'    => $this->schoolInfo()
        ];

        return view('layout/main', $data);
    }
}
