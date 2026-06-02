<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Home extends BaseController
{
    use PostTrait;

    protected StaticSiteModel $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function index(): string
    {
        $schoolInfo = $this->schoolInfo();

        $recentPosts = wp()->setSinglePostUrl($this->singlePostUrl)
            ->setPerPage(3)
            ->getPosts(1, ['media', 'category']);

        $heros = [
            [
                'title'     => 'Menghadirkan Masa Depan Yang Berkualitas',
                'subtitle'  => 'SDN Pengasinan VII hadir dengan pembelajaran aktif, guru berdedikasi, dan lingkungan yang mendukung tumbuh kembang anak secara holistik.',
                'strike'    => 'Berkualitas',
                'image'     => 'sdn-hero-1',
            ],
            [
                'title'     => 'Tempat Terbaik Untuk Tumbuh dan Belajar',
                'subtitle'  => 'Di sini, setiap anak diberi ruang untuk berkembang, mengeksplorasi bakat, dan meraih cita-cita dengan percaya diri. Memastikan pengalaman belajar yang menyenangkan.',
                'strike'    => 'Bermimpi',
                'image'     => 'sdn-hero-2',
            ],
            [
                'title'     => 'Membangun Karakter Unggul Sejak Dini',
                'subtitle'  => 'Pendidikan dasar yang kuat adalah kunci masa depan. Kami berkomitmen untuk membentuk karakter unggul melalui pembelajaran yang menyenangkan dan mendidik.',
                'strike'    => 'Cemerlang',
                'image'     => 'sdn-hero-3',
            ],
        ];

        $features = [
            [
                'icon'          => 'fa-regular fa-school',
                'title'         => 'Pendidikan Dasar',
                'description'   => 'Belajar membaca, menulis, berhitung, serta penanaman nilai-nilai karakter yang menyenangkan dan mendidik.',
                'link'          => base_url('profil/tentang-sekolah'),
            ],
            [
                'icon'          => 'fa-solid fa-shield',
                'title'         => 'Lingkungan Belajar',
                'description'   => 'Belajar sambil bereksplorasi di lingkungan yang aman dan ramah anak.',
                'link'          => base_url('profil/prasarana'),
            ],
            [
                'icon'          => 'fa-regular fa-clipboard-check',
                'title'         => 'Guru berpengalaman',
                'description'   => 'Guru yang berdedikasi dan berpengalaman membimbing siswa dalam proses belajar mengajar.',
                'link'          => base_url('profil/pendidik'),
            ],
        ];

        $data = [
            'schoolInfo'    => $schoolInfo,
            'heros'         => $heros,
            'title'         => $schoolInfo['visi'],
            'features'      => $features,
            'ekskuls'       => array_slice($this->staticSiteModel->ekskul(), 0, 3),
            'testimonials'  => $this->staticSiteModel->testimonials(),
            'recentStatus'  => $recentPosts['status'],
            'recentPosts'   => $recentPosts['data'],
            'og_meta'       => [
                'title' => 'SDN Pengasinan VII - ' . $schoolInfo['visi'],
                'image' => 'sdn-hero-1.webp'
            ]
        ];

        $views = [
            view('home/hero-slider', $data),
            view('home/feature', $data),
            view('home/about', $data),
            view('home/ekskul', $data),
            view('home/testimonial', $data),
            // view('home/partner', $data),
            view('home/news', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    
}
