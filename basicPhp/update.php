<?php
//file json yang akan dibaca
$file = "anggota.json";

//Mendapatkan file json
$anggota = file_get_contents($file);

//mengencode anggota json
$data = json_decode($anggota, true);

//membaca data array menggunakan foreach
foreach ($data as $key => $d){
    //perbarui data kedua
    if ($d['no'] === 1){
        $data[$key]['alamat'] = 'jakarta';
    }
}

//mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);