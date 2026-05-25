<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Testimonial extends BaseController
{
    protected StaticSiteModel $staticSiteModel;

    public function __construct()
    {
        $this->staticSiteModel = new StaticSiteModel();
    }

    public function index()
    {
        $schoolInfo = $this->schoolInfo();
        $testimonials = $this->staticSiteModel->testimonials();

        $data = [
            'title'         => 'Testimonial',
            'schoolInfo'    => $schoolInfo,
            'testimonials'  => $testimonials
        ];

        $views = [
            view('testimonial/index', $data),
            view('testimonial/content', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}