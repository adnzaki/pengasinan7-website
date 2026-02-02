<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $schoolInfo = $this->schoolInfo();
        $heros = [
            [
                'title'     => 'Menyalakan Masa Depan Lewat Pendidikan Berkualitas',
                'subtitle'  => 'Sekolah kami hadir dengan pembelajaran aktif, guru berdedikasi, dan lingkungan yang mendukung tumbuh kembang anak secara holistik.',
                'strike'    => 'Berkualitas',
                'image'     => 'sdn-hero-1',
            ],
            [
                'title'     => 'Tempat Terbaik Untuk Anak Tumbuh, Belajar, dan Bermimpi',
                'subtitle'  => 'Di sekolah kami, setiap anak diberi ruang untuk berkembang, mengeksplorasi bakat, dan meraih cita-cita dengan percaya diri.',
                'strike'    => 'Bermimpi',
                'image'     => 'sdn-hero-2',
            ],
            [
                'title'     => 'Membangun Pondasi Hebat untuk Generasi Cemerlang',
                'subtitle'  => 'Pendidikan dasar yang kuat adalah kunci masa depan. Kami berkomitmen memberikan pengalaman belajar yang menyenangkan dan bermakna.',
                'strike'    => 'Cemerlang',
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
