<?php
require_once '../Catatan.php';

$c = new Catatan();
$hasil = $c->setJudul("ke-3")
           ->setIsi("sapi")
           ->save();

echo $hasil ? "Berhasil disimpan" : "Gagal";