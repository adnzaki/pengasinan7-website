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
            'ekskuls'       => array_slice($this->ekskul(), 0, 3),
        ];

        $views = [
            view('home/hero-slider', $data),
            view('home/feature', $data),
            view('home/about', $data),
            view('home/ekskul', $data),
            view('home/testimonial', $data),
            view('home/partner', $data),
            view('home/sections', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function ekskul()
    {
        return [
            [
                'name'          => 'Pramuka',
                'description'   => 'Mengajarkan keterampilan bertahan hidup, kepemimpinan, dan kerja sama tim melalui berbagai aktivitas di alam terbuka.',
                'category'      => 'keterampilan',
                'image'         => 'default.jpg',
                'teacher'       => 2,
                'students'      => 470,
            ],
            // [
            //     'name'          => 'Seni Tari',
            //     'description'   => 'Mengajarkan keterampilan tari tradisional dan kreatif melalui berbagai bentuk ekspresi seni.',
            //     'category'      => 'keterampilan',
            //     'image'         => 'seni-tari.webp',
            //     'teacher'       => 1,
            //     'students'      => 15,
            // ],
            [
                'name'          => 'Rebana',
                'description'   => 'Mengajarkan seni musik Islami dan meningkatkan rasa kebersamaan melalui permainan rebana.',
                'category'      => 'keagamaan',
                'image'         => 'rebana.webp',
                'teacher'       => 1,
                'students'      => 9,
            ],
            [
                'name'          => 'Voli',
                'description'   => 'Mengembangkan keterampilan fisik, kerja sama tim, dan sportivitas melalui olahraga voli secara terarah dan berkelanjutan.',
                'category'      => 'olahraga',
                'image'         => 'voli.webp',
                'teacher'       => 1,
                'students'      => 9,
            ],
            [
                'name'          => 'Tenis Meja',
                'description'   => 'Melatih ketangkasan, konsentrasi, dan refleks melalui permainan tenis meja yang seru dan menantang.',
                'category'      => 'olahraga',
                'image'         => 'tenis-meja.webp',
                'teacher'       => 1,
                'students'      => 30,
            ],
            [
                'name'          => 'Musabah Tilawatil Qur\'an (MTQ)',
                'description'   => 'Melatih kemampuan membaca, memahami, dan menghafal Al-Qur\'an serta meningkatkan kecintaan terhadap kitab suci.',
                'category'      => 'keagamaan',
                'image'         => 'mtq.webp',
                'teacher'       => 1,
                'students'      => 20,
            ],
            [
                'name'          => 'Adzan',
                'description'   => 'Melatih keterampilan adzan dan pemahaman tentang pentingnya panggilan sholat dalam kehidupan sehari-hari.',
                'category'      => 'keagamaan',
                'image'         => 'adzan.webp',
                'teacher'       => 1,
                'students'      => 4,
            ]
        ];
    }
}
