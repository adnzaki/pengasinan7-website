<?php namespace App\Models;

class StaticSiteModel
{
    public function ekskul()
    {
        return [
            [
                'name'          => 'Pramuka',
                'description'   => 'Mengajarkan keterampilan bertahan hidup, kepemimpinan, dan kerja sama tim melalui berbagai aktivitas di alam terbuka.',
                'category'      => 'keterampilan',
                'image'         => 'pramuka.webp',
                'teacher'       => 2,
                'students'      => 468,
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
    
    public function learningTools()
    {
        return [
            [
                'title'         => 'Buku Teks Pelajaran',
                'description'   => 'Sumber utama belajar di sekolah yang mengikuti kurikulum dan membantu siswa memahami materi.',
                'image'         => 'textbook.webp',
            ],
            [
                'title'         => 'Chromebook',
                'description'   => 'Laptop berbasis Chrome OS untuk pembelajaran digital, memudahkan akses ke aplikasi dan sumber belajar online',
                'image'         => 'chromebook.webp',
            ],
            [
                'title'         => 'Layar Interaktif',
                'description'   => 'Layar interaktif untuk pembelajaran digital, memudahkan akses ke aplikasi dan sumber belajar online',
                'image'         => 'tka.webp',
            ],
        ];
    }

    public function facilitiesStats()
    {
        return [
            [
                'title' => 'Luas Lahan',
                'value' => '1850 m2',
                'icon'  => 'fa-light fa-school'
            ],
            [
                'title' => 'Ruang Kelas',
                'icon'  => 'fa-light fa-building',
                'value' => 13
            ],
            [
                'title' => 'Ruang Perpustakaan',
                'icon'  => 'fa-light fa-books',
                'value' => 1
            ],
            [
                'title' => 'Tempat Cuci Tangan',
                'icon'  => 'fa-light fa-hand-holding-droplet',
                'value' => 8
            ],
        ];
    }

    public function facilitiesHighlight()
    {
        return [
            [
                'name'          => 'Ruang Kelas',
                'icon'          => 'building',
                'description'   => 'Ruang kelas nyaman dengan pencahayaan baik dan tata letak rapi, mendukung konsentrasi siswa serta suasana belajar yang kondusif.',  
            ],
            [
                'name'          => 'Perpustakaan',
                'icon'          => 'books',
                'description'   => 'Ruang perpustakaan yang dilengkapi perangkat multimedia menyediakan koleksi buku dan fasilitas digital sebagai pusat literasi dan pengetahuan.',
            ],
            [
                'name'          => 'Lapangan Olahraga',
                'icon'          => 'person-running',
                'description'   => 'Lapangan olahraga menjadi sarana pengembangan jasmani sekaligus karakter, menumbuhkan semangat sportivitas dan kerja sama.',
            ],
        ];
    }
    
    public function facilities()
    {
        return [
            [
                'id'    => 1,
                'name'  => 'Ruang Perpustakaan / Multimedia',
                'image' => 'room-1.webp',
            ],
            [
                'id'    => 2,
                'name'  => 'Lapangan Olahraga',
                'image' => 'lapangan.webp',
            ],
            [
                'id'    => 3,
                'name'  => 'Ruang Kelas 1 B / 2 B',
                'image' => 'room-3.webp',
            ],
            [
                'id'    => 4,
                'name'  => 'Ruang Kelas 6 A',
                'image' => 'room-4.webp',
            ],
            [
                'id'    => 5,
                'name'  => 'Ruang Perpustakaan / Multimedia',
                'image' => 'perpus-2.webp',
            ],
            [
                'id'    => 6,
                'name'  => 'Halaman Parkir Sepeda',
                'image' => 'parkir.webp',
            ],
            [
                'id'    => 7,
                'name'  => 'Musholla',
                'image' => 'musholla.webp',
            ],
            [
                'id'    => 8,
                'name'  => 'Tempat Cuci Tangan',
                'image' => 'wastafel.webp',
            ],
        ];
    }

    public function testimonials()
    {
        return [
            [
                'id'            => 1,
                'name'          => 'Ismail Kenzo Sabilanov Putra Paris',
                'image'         => 'ismail-kenzo.webp',
                'currentSchool' => 'SMPN 50 Kota Bekasi - Angkatan 2023',
                'description'   => 'Kesan saya selama bersekolah di SDN Pengasinan VII sangat menyenangkan serta penuh dengan pengalaman berharga. Di sekolah ini saya tidak hanya mempelajari materi pelajaran di kelas, tetapi juga belajar mengenai kedisiplinan, tanggung jawab, dan cara bekerja sama dengan teman-teman.<br>
Guru-guru di SDN Pengasinan VII sangat baik, sabar, dan selalu membimbing kami dengan penuh perhatian. Mereka membantu kami memahami pelajaran dengan cara yang mudah dimengerti sehingga membuat saya semakin bersemangat untuk belajar.<br>
Selain itu, saya juga mendapatkan banyak teman dan pengalaman yang tidak akan pernah saya lupakan. Kegiatan belajar, bermain, serta berbagai aktivitas sekolah menjadikan masa sekolah saya lebih berwarna.<br>
Saya merasa bangga pernah menjadi bagian dari SDN Pengasinan VII dan sangat berterima kasih kepada semua guru yang telah mendidik serta membimbing saya dengan penuh kesabaran.',
            ],
            [
                'id'            => 2,
                'name'          => 'Latifah Kirana Azmi',
                'image'         => 'latifa.webp',
                'currentSchool' => 'SMP Bani Taqwa - Angkatan 2024',
                'description'   => 'Assalamualaikum Wr. Wb.<br>
Saya alumni SDN Pengasinan VII angkatan 2023/2024. Saya memiliki banyak kenangan indah di SDN Pengasinan VII karena lingkungan yang mendukung, guru-guru yang profesional, serta teman-teman yang baik. Sekolah ini telah membentuk saya menjadi pribadi yang lebih baik. Di sekolah ini saya dapat mengeksplorasi potensi diri dan memperoleh banyak pengalaman seru.<br>
Terima kasih kepada seluruh guru, staf, dan teman-teman yang telah memberikan ilmu serta kenangan positif. Saya bangga pernah menjadi bagian dari SDN Pengasinan VII.<br>
"Jika diberi kesempatan, saya akan tetap memilih SDN Pengasinan VII sebagai sekolah saya di kehidupan selanjutnya."',
            ],
            [
                'id'            => 3,
                'name'          => 'Bakhira Majida Alinafia',
                'image'         => 'bakhira.webp',
                'currentSchool' => 'SMPN 33 Kota Bekasi - Angkatan 2023',
                'description'   => 'Halo sobat ceria, perkenalkan saya Bakhira Majida Alinafia, alumni SDN Pengasinan VII. Banyak kesan, pesan, serta cerita yang saya dapatkan selama bersekolah di SDN Pengasinan VII. Bersekolah di sini merupakan pengalaman yang sangat berkesan sekaligus membanggakan bagi saya. Saya merasa SDN Pengasinan VII tidak hanya berfokus pada prestasi akademik, tetapi juga sangat memperhatikan pembentukan karakter.<br>

Saya sangat tertarik dengan cara sekolah ini membentuk karakter siswa. Ketika kami mengalami kesulitan dalam memahami pelajaran, para guru selalu siap membimbing dengan penuh kesabaran dan profesionalisme, didukung oleh fasilitas sekolah yang cukup lengkap.<br>

Selain itu, banyak sekali kegiatan positif yang diadakan di SDN Pengasinan VII, seperti lomba, senam pagi, pentas seni, literasi, dan lain sebagainya. Melalui kegiatan tersebut, saya merasa diri saya berkembang dalam wadah yang membentuk kepercayaan diri, kepemimpinan, keberanian, serta keterampilan yang mulai terasah sejak sekolah dasar.<br>

Saya masih teringat ketika duduk di kelas 6, dipercaya menjadi perwakilan kelas untuk membawakan literasi di depan lapangan. Saat itu saya belajar menjadi pribadi yang percaya diri. Saya juga pernah dipercaya menjadi penyanyi solo dalam acara pelepasan siswa kelas 6. Banyak sekali pengalaman berharga yang saya dapatkan di sekolah ini, yang tidak mungkin saya ceritakan satu per satu. Bukti nyata pembentukan karakter di SDN Pengasinan VII adalah saya kini dipercaya menjadi Ketua OSIS di SMP.<br>

Saya bangga dan sangat bersyukur menjadi salah satu alumni SDN Pengasinan VII. Terima kasih yang sebesar-besarnya kepada para guru dan staf yang telah memberikan yang terbaik bagi kami. Semoga SDN Pengasinan VII terus mencetak pemimpin masa depan yang disiplin dan berjiwa sosial tinggi.',
            ],
            [
                'id'            => 4,
                'name'          => 'Arya Putra Suhada',
                'image'         => 'arya.webp',
                'currentSchool' => 'SMP Widya Nusantara - Angkatan 2023',
                'description'   => 'Selama sekolah di SDN Pengasinan VII, saya merasa sangat senang karena fasilitasnya lengkap dan modern, memudahkan kegiatan belajar sehari-hari. Guru-guru di sini sangat seru dan bersahabat, membuat saya tidak sungkan bertanya meskipun di luar jam pelajaran, dan di sini saya memiliki teman-teman nya sangat seru dan asik',
            ],
            [
                'id'            => 5,
                'name'          => 'Zafa Deva Reevenza',
                'image'         => 'zafa.webp',
                'currentSchool' => 'SMAN 13 Kota Bekasi - Angkatan 2021',
                'description'   => 'Selama saya bersekolah di SDN Pengasinan VII, saya merasakan banyak pengalaman yang sangat berkesan. Di sekolah ini saya belajar banyak hal, bukan hanya tentang pelajaran di kelas, tetapi juga tentang kebersamaan, persahabatan, dan bagaimana menghargai orang lain. Guru-gurunya juga sabar dalam mengajar dan selalu berusaha membimbing kami agar menjadi lebih baik. Suasana sekolahnya terasa nyaman sehingga membuat saya senang datang ke sekolah setiap hari.',
            ],
            [
                'id'            => 6,
                'name'          => 'Kayla Salsabila',
                'image'         => 'kayla.webp',
                'currentSchool' => 'SMP Bani Taqwa - Angkatan 2025',
                'description'   => 'Kesan saya selama bersekolah di SDN Pengasinan VII, saya merasa sangat senang dan nyaman. Guru-gurunya sabar dan mendukung saya untuk belajar dan berkembang setiap hari. Saya juga mendapatkan banyak pengalaman berharga dan tidak terlupakan, terutama saat aktif ekstrakulikuler dan mewakili sekolah dalam berbagai perlombaan. Pengalaman tersebut tidak hanya melatih kemampuan saya, tetapi juga membangun rasa percaya diri, tanggung jawab,dan kerjasama.

Pesan saya, Semoga SDN Pengasinan VII terus menjadi sekolah yang memberikan lingkungan belajar yang nyaman, aman dan menyenangkan untuk seluruh siswa. Saya juga berharap sekolah ini terus mendukung minat dan bakat siswa, baik di bidang akademik maupun non-akademik, agar semakin banyak siswa yang berprestasi dan percaya diri. SDN Pengasinan VII bukan hanya tempat belajar tetapi juga tempat tumbuh dan menemukan banyak hal baru. Semua kenangan, teman, dan pengalaman yang saya dapatkan akan selalu saya ingat.',
            ],

        ];
    }
}