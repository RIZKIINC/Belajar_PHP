<?php
require 'Pegawai.PHP';

$manager = new pegawai('01111', 'Luffy', 'Manager', 'Islam', 'Menikah');
$asisten = new pegawai('01112', 'Zoro', 'Asisten Manager', 'Islam', 'Belum Menikah');
$keBag = new pegawai('01113', 'Sanji', 'Kepala Bagian', 'Kong Hu Chu', 'Menikah');
$staff = new pegawai('01114', 'Nami', 'Staff', 'Islam', 'Menikah');
$staff2 = new pegawai('01115', 'Usoop', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$manager, $asisten, $keBag, $staff, $staff2];

foreach ($ar_pegawai as $pegawai){
    $pegawai-> cetak();
}


?>