<?php
$jenis = $_GET['jenis'] ?? 'guru';
$namaFile = "";

// Sesuaikan nama file CSV kamu di sini
if ($jenis == 'guru') {
    $namaFile = "assets/csv/sektor.csv"; 
} elseif ($jenis == 'kelas') {
    $namaFile = "assets/csv/CLASS.csv";
} elseif ($jenis == 'ngabdi') {
    $namaFile = "assets/csv/pengabdian.csv";
} elseif ($jenis == 'konsulat') {
    $namaFile = "assets/csv/konsulat.csv";
} elseif ($jenis == 'panitiaenam') {
    $namaFile = "assets/csv/panitia6.csv";
} elseif ($jenis == 'jumlahpeserta') {
    $namaFile = "assets/csv/jumlahpeserta.csv";
} elseif ($jenis == 'panitiaguru') {
    $namaFile = "assets/csv/panitiaguru.csv";
} elseif ($jenis == 'walikelas') {
    $namaFile = "assets/csv/walikelas.csv";
}
$dataOutput = [];

if (file_exists($namaFile)) {
    if (($handle = fopen($namaFile, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            $dataOutput[] = $data;
        }
        fclose($handle);
    }
}

header('Content-Type: application/json');
echo json_encode($dataOutput);