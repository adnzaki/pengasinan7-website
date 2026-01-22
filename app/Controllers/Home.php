<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $schoolInfo = $this->schoolInfo();
        $heros = [
            [
                'title'         => 'Selamat datang di website resmi SDN Pengasinan VII',
                'subtitle'      => 'Membangun masa depan yang lebih cerah melalui pendidikan yang berkualitas <br/>alsndlkanfdk lnsdfjdsfjsbd fbsdjfbds',
                'image'         => 'sdn-hero-1',
            ],
            [
                'title'     => 'Berkomitmen dalam mewujudkan visi yang mulia',
                'subtitle'  => $schoolInfo['visi'],
                'image'     => 'sdn-hero-2',
            ],
            [
                'title'     => 'Mari bergabung bersama kami di SDN Pengasinan VII',
                'subtitle'  => 'Tempat terbaik untuk putra-putri anda tumbuh dan berkembang',
                'image'     => 'sdn-hero-3',
            ],
        ];

        $data = [
            'schoolInfo'    => $schoolInfo,
            'heros'         => $heros,
            'title'         => $schoolInfo['visi'],
        ];

        return view('layout/main', $data);
    }
}
