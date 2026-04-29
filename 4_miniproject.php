<?php
class Kendaraan{
    public function hitungBiayaSewa($lamaHari){
        return 100000* $lamaHari;
    }
}

class MobilSports extends Kendaraan{
    public function hitungBiayaSewa($lamaHari){
        $biayaAsuransi = 200000;
        return (500000 * $lamaHari) + $biayaAsuransi;
    }
}

class Truck extends Kendaraan{
    public function hitungBiayaSewa($lamaHari){
        $biayaRetribusi = 150000;
        return (300000* $lamaHari) + $biayaRetribusi;
    }
}

$lamaHari = 3;
$kendaraan = new Kendaraan();
echo"Biaya Sewa Kendaraan (3 Hari) : Rp " . number_format($kendaraan->hitungBiayaSewa($lamaHari)) . "<br>";
$mobilSports = new MobilSports();
echo "Biaya sewa Mobil Sport (3 hari): Rp " . number_format($mobilSports->hitungBiayaSewa($lamaHari)) . "<br>";

$truk = new Truck();
echo "Biaya sewa Truk (3 hari): Rp " . number_format($truk->hitungBiayaSewa($lamaHari)) . "<br>";
?>