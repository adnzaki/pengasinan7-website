<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Profile extends BaseController
{
    protected $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function history()
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

        $data = [
            'schoolInfo'    => $schoolInfo,
            'title'         => 'Sejarah Sekolah',
            'titleImage'    => 'gedung-sekolah.webp',
            'headmasters'   => $headmasters,
        ];

            $views = [
                view('profile/title', $data),
                view('profile/history/content', $data),
            ];

            $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function rooms()
    {
        $schoolInfo = $this->schoolInfo();
        $classRooms = $this->staticSiteModel->classRooms();

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