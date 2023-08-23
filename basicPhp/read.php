<?php
//file json yang akan dibaca (full fath file)
$file = "anggota.json";

//mendapatkan file json
$anggota = file_get_contents($file);

//mengencode anggota.json
$data = json_decode($anggota, true);

//membaca data array menggunakan foreach
foreach ($data as $d){
    echo "No: " . $d['no'] . "<br>";
    echo "Nama: " . $d['nama'] . "<br>";
    echo "Alamat: " . $d['alamat'] . "<br>";
}