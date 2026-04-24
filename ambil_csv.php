<?php
$jenis = $_GET['jenis'] ?? 'guru';
$namaFile = "";

// Sesuaikan nama file CSV kamu di sini
if ($jenis == 'guru') {
    $namaFile = "assets/csv/sektor.csv"; 
} elseif ($jenis == 'kelas') {
    $namaFile = "assets/csv/CLASS.csv";
} elseif ($jenis == 'konsulat') {
    $namaFile = "assets/csv/KONSULAT.csv";
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