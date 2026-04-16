<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'id'; // Default Indonesia

$daftar_kata = [
    'id' => [
        'judul_1' => 'PEKAN PERKENALAN',
        'judul_2' => "KHUTBATU-L-'ARSY",
        'slogan' => '"Gontor Berkomitmen Menanamkan Nilai-Nilai Islam"',
        'narasi_pembuka' => "Melihat zaman yang semakin maju dan berkembang, Pondok Modern Darussalam Gontor kembali datang untuk mengikuti Kemajuan zaman. Dengan selalu berkomitmen tidak meniggalkan serta akan terus menanam nilai-nilai islam yang telah menjadi shibghah Gontor sedari dulu.Melalui Pekan Perkenalan Khutbatu-L-'Arsy ini Gontor dengan berbagai ragam kegiatannya bisa meningkatkan serta terus berkembang dalam ranah pendidikan juga pengajaran demi menyongsong seratus tahun Pondok Modern Darussalam Gontor.",
        'menu_rentetan' => 'Rentetan Kegiatan PKA',
        'menu_data' => 'Data',
        'menu_acara' => 'Acara',
        'menu_serba' => 'Serba-Serbi',
        'redaksi' => 'Tim Redaksi'
    ],
    'en' => [
        'judul_1' => 'ORIENTATION WEEK',
        'judul_2' => "KHUTBATU-L-'ARSY",
        'slogan' => '"Gontor Committed to Imbuing Islamic Values"',
        'narasi_pembuka' => 'Observing the increasingly advanced and developing era, Pondok Modern Darussalam Gontor returns to keep pace with the times...',
        'menu_rentetan' => 'Sequence of Events',
        'menu_data' => 'Data',
        'menu_acara' => 'Events',
        'menu_serba' => 'Miscellaneous',
        'redaksi' => 'Editorial Team'
    ]
];

$t = $daftar_kata[$lang];
?>