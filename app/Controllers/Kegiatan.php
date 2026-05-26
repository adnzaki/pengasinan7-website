<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Kegiatan extends BaseController
{
    protected StaticSiteModel $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function extracurriculars()
    {
        $schoolInfo = $this->schoolInfo();
        $extracurriculars = $this->staticSiteModel->ekskul();

        $data = [
            'title'             => 'Ekstrakurikuler',
            'titleImage'        => 'ekskul.webp',
            'schoolInfo'        => $schoolInfo,
            'ekskul'            => $extracurriculars,
        ];

        $views = [
            view('profile/title', $data),
            view('activity/ekskul', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function competitions()
    {
        $schoolInfo = $this->schoolInfo();
        $competitions = $this->staticSiteModel->competitions();

        $data = [
            'title'             => 'Perlombaan',
            'titleImage'        => 'lomba.webp',
            'schoolInfo'        => $schoolInfo,
            'competitions'      => $competitions,
        ];

        $views = [
            view('profile/title', $data),
            view('activity/competitions', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}