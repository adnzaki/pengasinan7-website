<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Ekstrakurikuler extends BaseController
{
    protected StaticSiteModel $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function index()
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
            view('ekskul/content', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}