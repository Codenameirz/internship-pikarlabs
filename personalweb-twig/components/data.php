<?php

  $index = [
    'previewVer' => [ 
                  [
                    'img' => './img/prev-v1.png',
                    'href' => './v1.php',
                    'h1' => 'Versi 1',
                    'caption' => 'Berisi profil, riwayat pendidikan, portfolio, dan form untuk mengirim email.'
                  ],
                  [
                    'img' => './img/prev-v2.png',
                    'href' => './v2.php',
                    'h1' => 'Versi 2',
                    'caption' => 'Isi sama seperti versi 1, tapi dengan tampilan yang berbeda.'
                  ]
                ]
          ];

  $menuNav = [
              'logo' => './img/hp-white-bg-transparent.png',
              'nav' => [
                        [
                          'navitem' => 'Profile',
                          'id' => 'profile',
                          'href' => '#profile'
                        ],
                        [
                          'navitem' => 'Portfolio',
                          'id' => 'portfolio',
                          'href' => '#portfolio'
                        ],
                        [
                          'navitem' => 'Contact me',
                          'id' => 'contact-me',
                          'href' => '#contact-me'
                        ]
                      ]
            ];

  $jumbotron = [
              'bgimg' => './img/pexels-elijah-o-donnell-3473569.jpg',
              'head' => [
                          ['text' => 'Personal Web PHP'],
                          ['text' => 'Haris purwanto']
                      ]
              ];

  $section = [
              ['title' => 'Profile'],
              ['title' => 'Portfolio'],
              ['title' => 'Contact me']
          ];

  $profile =  [
							'img' => './img/hp-white-bg-black.png',
							
							'name' => 'Haris purwanto',

              'desc' => 'Pelajar dari SMKN 2 Surabaya yang duduk di kelas 11 jurusan SIJA 
                        (Sistem Informatika Jaringan dan Aplikasi). Saat ini sedang prakerin (praktek kerja industri)/magang di Pikar Labs, 
                        dan sedang menjelajahi dunia pemrograman menggunakan bahasa PHP dan SQL sebagai database.',

              'menu' => [
                      ['title' => 'Keahlian'],
                      ['title' => 'Pendidikan']
                  ]
              ];

  $skill = [
            'v1' => [
                  [
                    'lan' => 'HTML',
                    'logo' => './img/html.png',
                    'skill' => 'Mengetahui beberapa fungsi tag html dan penggunaannya'
                  ],
                  [
                    'lan' => 'CSS',
                    'logo' => './img/css.png',
                    'skill' => 'Mengetahui beberapa style css'
                  ],
                  [
                    'lan' => 'PHP',
                    'logo' => './img/php.png',
                    'skill' => 'Mengetahui perulangan, conditional, dan GET dan POST'
                  ]
                ],
            'v2' => [
                  [
                    'lan' => 'HTML : ',
                    'bar' => '32%',
                    'color' => '#F16529'
                  ],
                  [
                    'lan' => 'CSS : ',
                    'bar' => '28%',
                    'color' => '#2965F1'
                  ],
                  [
                    'lan' => 'PHP : ',
                    'bar' => '12%',
                    'color' => '#787CB5'
                  ]
                ]
            ];

  $education = [
                [
                  'img' => '',
                  'year' => '2010 - 2016',
                  'school' => 'Bersekolah di SDN Banjar Sugihan 2 Surabaya'
                ],
                [
                  'img' => '',
                  'year' => '2016 - 2019',
                  'school' => 'Bersekolah di SMP Muhammadiyah 14 Surabaya'
                ],
                [
                  'img' => '',
                  'year' => '2019 - Sekarang',
                  'school' => 'Bersekolah di SMKN 2 Surabaya'
                ]
      ];

  
  $portfolio = [
                [
                  'id' => '1',
                  'name' => 'Landing page website',
                  'desc' => 'Website landing page yang saya buat menggunakan html, css, dan framework bootstrap.',
                  'year' => '2020',
                  'url' => 'https://codenameirz.github.io/Landing-page-website/',
                  'preview' => 'portfolio-1.png',
                  'descprev' => 'Tampilan awal landing page',
                  'img' => 'portfolio-1.2.png',
                  'descimg' => 'Tampilan menu features dan find me'
                ],
                [
                  'id' => '2',
                  'name' => 'Web Portfolio',
                  'desc' => 'Website yang saya buat menggunakan html, css, dan framework bootstrap untuk keperluan magang.',
                  'year' => '2020',
                  'url' => 'https://codenameirz.github.io/Portofolio/',
                  'preview' => 'portfolio-2.png',
                  'descprev' => 'Tampilan awal web portfolio',
                  'img' => 'portfolio-2.2.png',
                  'descimg' => 'Tampilan menu about dan find me'
                ]
          ];

  $modalEmail = [
            'notif' => 'Berhasil',
            'message' => 'Pesan telah berhasil terkirim'
        ];

  $footer = [
              'copyright' => '&copy; 2021 Haris purwanto',
              'by' => 'Website Design and Development by Haris purwanto'
          ];

?>