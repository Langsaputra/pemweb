<?php

class Binatang {
    public $nama;
    public $jenis;

    public function setNama ($name) {
        $this->nama = $name;
    }

    public function setJenis ($jenis) {
        $this->jenis = $jenis;
    }

    public function getinfo () {
        return "Nama :" . $this->nama . ", Jenis :" . $this->jenis;
    }
}

// Membuat objek 

$macan = new Binatang();
$macan->setNama("Harimau");
$macan->setJenis("Sumatra");

echo $macan->getinfo();

echo "<br>";

$hiu = new Binatang();
$hiu->setNama("Hiu");
$hiu->setJenis("Air asin");

echo $hiu->getinfo();