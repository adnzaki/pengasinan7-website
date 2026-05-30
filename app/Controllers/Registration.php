<?php

namespace App\Controllers;

class Registration extends BaseController
{
    public function index()
    {
        $schoolInfo = $this->schoolInfo();

        $data = [
            'title'         => 'Pendaftaran',
            'schoolInfo'    => $schoolInfo,
            'titleImage'    => base_url('assets/img/spmb/header.webp'),
            'terms'         => $this->terms(),
            'timeline'      => $this->timeline(),
            'og_meta'       => [
                'title' => 'Pendaftaran - SDN Pengasinan VII',
                'image' => base_url('assets/img/spmb/header.webp')
            ]
        ];

        $views = [
            view('spmb/index', $data),
            view('spmb/content', $data),
        ];

        $data['contents'] = implode('', $views);

        return view('layout/main', $data);
    }

    public function timeline()
    {
        return [
            [
                'title' => 'Pra-Pendaftaran',
                'date'  => '18 Mei sd. 19 Juni 2026'
            ],
            [
                'title' => 'Pendaftaran Jalur Khusus',
                'date'  => '29 Juni sd. 1 Juli 2026'
            ],
            [
                'title' => 'Daftar Ulang Jalur Khusus',
                'date'  => '2 sd. 4 Juli 2026'
            ],
            [
                'title' => 'Pendaftaran Jalur Umum',
                'date'  => '6 sd. 8 Juli 2026'
            ],
            [
                'title' => 'Daftar Ulang Jalur Umum',
                'date'  => '9 sd. 11 Juli 2026'
            ],
        ];
    }

    public function terms()
    {
        return [
            'umum' => [
                'Akta Lahir / Surat Tanda Kenal Lahir',
                'Kartu Keluarga (KK)',
                'Kartu Identitas Anak (KIA)',
                'Surat Keterangan Kelulusan / Ijazah TK',
                'Surat Pernyataan Tanggung Jawab Mutlak Orang Tua / Wali (SPTJM)',
            ],
            'khusus' => [
                'Surat Keterangan Terdata DTSEN Desil 1 sampai 5',
                'Surat Keterangan Disabilitas atau inklusi dari Dokter Spesialis, Psikolog dan atau dari Kepala Sekolah',
                'Surat Perpindahan Tugas Orang Tua bagi Jalur Mutasi Maksimal 1 Tahun'
            ]
        ];
    }
}