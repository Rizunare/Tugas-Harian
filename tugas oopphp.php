<?php

class Smartphone {
    public $merk = "merk";
    public $chipset = "chipset";
    public $ram = "ram"; 

    public function tampilSmartphone() {
        return "$this->merk, $this->chipset, $this->ram";
    }
}

$asus = new Smartphone ();
$asus->merk = "Zenfore 9";
$asus->chipset = "Snapdragon Gen 1";
$asus->ram = "8 GB";

$xiomi = new Smartphone ();
$xiomi->merk = "Xiomi 11T";
$xiomi->chipset = "Mediatek";
$xiomi->ram = "8 GB";

$samsung = new Smartphone ();
$samsung->merk = "Samsung Galaxy A23";
$samsung->chipset = "Snapdragon 680";
$samsung->ram = "8 GB";

echo $asus->tampilSmartphone();
echo "<br>";
echo $xiomi->tampilSmartphone();
echo "<br>";
echo $samsung->tampilSmartphone();
echo "<br>";