<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $schoolInfo = $this->schoolInfo();
        $heros = [
            [
                'title'     => 'Menghadirkan Masa Depan Yang Berkualitas',
                'subtitle'  => 'SDN Pengasinan VII hadir dengan pembelajaran aktif, guru berdedikasi, dan lingkungan yang mendukung tumbuh kembang anak secara holistik.',
                'strike'    => 'Berkualitas',
                'image'     => 'sdn-hero-1',
            ],
            [
                'title'     => 'Tempat Terbaik Untuk Tumbuh dan Belajar',
                'subtitle'  => 'Di sini, setiap anak diberi ruang untuk berkembang, mengeksplorasi bakat, dan meraih cita-cita dengan percaya diri.',
                'strike'    => 'Bermimpi',
                'image'     => 'sdn-hero-2',
            ],
            [
                'title'     => 'Membangun Pondasi Generasi Cemerlang',
                'subtitle'  => 'Pendidikan dasar yang kuat adalah kunci masa depan. Kami berkomitmen memberikan pengalaman belajar yang menyenangkan dan bermakna.',
                'strike'    => 'Cemerlang',
                'image'     => 'sdn-hero-3',
            ],
        ];

        $features = [
            [
                'icon'          => 'fa-regular fa-school',
                'title'         => 'Pendidikan Dasar',
                'description'   => 'Belajar membaca, menulis, berhitung, serta penanaman nilai-nilai karakter yang menyenangkan dan mendidik.',
                'link'          => '#',
            ],
            [
                'icon'          => 'fa-solid fa-shield',
                'title'         => 'Lingkungan Belajar',
                'description'   => 'Belajar sambil bereksplorasi di lingkungan yang aman dan ramah anak.',
                'link'          => '#',
            ],
            [
                'icon'          => 'fa-regular fa-clipboard-check',
                'title'         => 'Guru berpengalaman',
                'description'   => 'Guru yang berdedikasi dan berpengalaman membimbing siswa dalam proses belajar mengajar.',
                'link'          => '#',
            ],
        ];

        $data = [
            'schoolInfo'    => $schoolInfo,
            'heros'         => $heros,
            'title'         => $schoolInfo['visi'],
            'features'      => $features,
        ];

        $views = [
            view('home/hero-slider', $data),
            view('home/feature', $data),
            view('home/about', $data),
            view('home/sections', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}
