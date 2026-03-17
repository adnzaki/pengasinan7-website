<?php

namespace App\Controllers;
class Error extends BaseController
{
    public function index()
    {
        $data = [
            'schoolInfo'    => $this->schoolInfo(),
            'title'         => 'Halaman Tidak Ditemukan',
        ];

        $views = [
            view('error-page'),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}