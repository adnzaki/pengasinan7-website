<?php

namespace App\Controllers;
class Error extends BaseController
{
    public function index()
    {
        $data = [
            'schoolInfo'    => $this->schoolInfo(),
            'title'         => 'Halaman Tidak Ditemukan',
            'og_meta'       => [
                'title' => 'Halaman Tidak Ditemukan - SDN Pengasinan VII',
                'image' => 'assets/img/contact/error.png'
            ]
        ];

        $views = [
            view('error-page'),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}