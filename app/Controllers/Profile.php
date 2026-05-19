<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Profile extends BaseController
{
    protected StaticSiteModel $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function aboutSchool()
    {
        $schoolInfo = $this->schoolInfo();
        $headmasters = [
            [
                'name' => 'Slamet, S.Pd.',
                'period' => '1991–1998'
            ],
            [
                'name' => 'Mujiman, S.Pd.',
                'period' => '1998–2006'
            ],
            [
                'name' => 'Suparno, S.Pd.',
                'period' => '2006–2011'
            ],
            [
                'name' => 'Hj. Sri Sutrismi, S.Pd.',
                'period' => '2011–2014'
            ],
            [
                'name' => 'Dey Rohiman, S.Pd., M.M.',
                'period' => '2014–2015 (Plt)'
            ],
            [
                'name' => 'Nurhasan Effendi, M.Pd.',
                'period' => '2015–2023'
            ],
            [
                'name' => 'Hj. Nanik Herlinawati, M.Pd.',
                'period' => '2023–sekarang'
            ]
        ];

        $summary = [
            [
                'title' => 'Tahun Berdiri',
                'value' => '1991'
            ],
            [
                'title' => 'Luas Tanah',
                'value' => '1850 m2'
            ],
            [
                'title' => 'Peserta Didik',
                'value' => '468'
            ],
            [
                'title' => 'Pegawai',
                'value' => '20'
            ],
        ];

        $missions = [
            "Meningkatkan kecerdasan, keimanan, dan ketaqwaan yang bernuansa Insan.",
            "Meningkatkan kualitas pembelajaran secara profesional, unggul dan tangguh.",
            "Meningkatkan prestasi akademik dan berkompetisi dalam mutu lulusan.",
            "Melaksanakan pembiasaan Beragama, berbangsa dan Bernegara dalam menumbuhkan Insan yang berkarakter.",
            "Meningkatkan Prestasi Non Akademik melalui kegiatan ekstrakurikuler.",
            "Meningkatkan disiplin bagi masyarakat sekolah sebagai bekal dalam kehidupan bermasyarakat."
        ];

        $schoolNames = [
            'SDN Bumi Bekasi Baru I',
            'SDN Pengasinan VII (nama yang digunakan hingga sekarang)',
        ];

        $data = [
            'schoolInfo'    => $schoolInfo,
            'title'         => 'Profil Sekolah',
            'titleImage'    => 'gedung-sekolah.webp',
            'headmasters'   => $headmasters,
            'summary'       => $summary,
            'missions'      => $missions,
            'schoolNames'   => $schoolNames,
        ];

        $views = [
            view('profile/title', $data),
            view('profile/about/history', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function facilities()
    {
        $schoolInfo = $this->schoolInfo();
        $classRooms = $this->staticSiteModel->facilities();
        $highlights = $this->staticSiteModel->facilitiesHighlight();
        $stats = $this->staticSiteModel->facilitiesStats();

        $data = [
            'schoolInfo'    => $schoolInfo,
            'title'         => 'Prasarana',
            'titleImage'    => 'facilities/gedung.webp',
            'classRooms'    => $classRooms,
            'highlights'    => $highlights,
            'stats'         => $stats,
        ];

        $views = [
            view('profile/title', $data),
            // view('profile/facilities/stats', $data),
            view('profile/facilities/description', $data),
            view('profile/facilities/highlights', $data),
            view('profile/facilities/gallery', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function rooms()
    {
        $schoolInfo = $this->schoolInfo();
        $classRooms = $this->staticSiteModel->facilities();

        $data = [
            'schoolInfo'    => $schoolInfo,
            'title'         => 'Ruang Kelas',
            'titleImage'    => 'ruang-perpus.webp',
            'classRooms'    => $classRooms,
        ];

        $views = [
            view('profile/title', $data),
            view('profile/rooms/content', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}