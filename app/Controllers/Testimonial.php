<?php

namespace App\Controllers;

use App\Models\StaticSiteModel;

class Testimonial extends BaseController
{
    use PostTrait;
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
            'testimonials1' => array_slice($testimonials, 0, 3),
            'testimonials2' => array_slice($testimonials, 3, 3),
            'og_meta'       => [
                'title' => 'Testimonial - SDN Pengasinan VII',
                'image' => base_url('assets/img/slider/sdn-hero-1.webp')
            ]
        ];

        $views = [
            view('testimonial/index', $data),
            view('testimonial/content', $data),
            view('testimonial/register', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }
}