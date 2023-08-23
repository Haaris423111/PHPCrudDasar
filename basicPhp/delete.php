<?php
//file json yang akan dibaca
$file = "anggota.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mengencode anggota.json
$data = json_decode($anggota, true);

//membaca data array menggunakan foreach
foreach($data as $key => $d){
    //hapus data kedua
    if($d['no'] === 3) {
        //menghapus data array sesuai dengan index
        //menggantinya dengan elemen baru
        array_splice($data, $key, 2);
    }
}

//mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);