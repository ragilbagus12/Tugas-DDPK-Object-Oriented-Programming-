<?php
class Ekspedisi {
        public function __call($namaMethod, $argumen) {
        
        if ($namaMethod == 'hitungOngkir') {
            $jumlahArgumen = count($argumen);
            $tarifPerKm = 2000;
            
            if ($jumlahArgumen == 1) {
                $jarak = $argumen[0];
                return $jarak * $tarifPerKm;
            } 
            else if ($jumlahArgumen == 2) {
                $jarak = $argumen[0];
                $berat = $argumen[1];
                return ($jarak * $tarifPerKm) + ($berat * 5000);
            } 
            else if ($jumlahArgumen == 3) {
                $jarak = $argumen[0];
                $berat = $argumen[1];
                $biayaKilat = $argumen[2]; 
                return ($jarak * $tarifPerKm) + ($berat * 5000) + $biayaKilat;
            } else {
                return "Jumlah parameter tidak dikenali.";
            }
        }
    }
}

echo "<h3>Hasil Sesi 2: Simulasi Method Overloading</h3>";
$kurir = new Ekspedisi();

echo "Kirim paket kecil 10 KM: Rp " . $kurir->hitungOngkir(10) . "<br>";
echo "Kirim paket berat (10 KM, 5 KG): Rp " . $kurir->hitungOngkir(10, 5) . "<br>";
echo "Kirim paket kilat (10 KM, 5 KG, Asuransi 20rb): Rp " . $kurir->hitungOngkir(10, 5, 20000) . "<br>";
?>
