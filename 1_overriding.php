<?php
class Pegawai{
    protected $nama;
    protected $gajiPokok;
    public function __construct($nama,$gajiPokok){
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }
    public function hitungPendapatan(){
        return $this->gajiPokok;
    }
    public function getProfil(){
        return "Nama:{$this->nama} | Total Pendapatan:Rp".
        number_format($this->hitungPendapatan(),0,',','.');
         }
    }
    class Manager extends Pegawai{
        private $tunjanganJabatan = 5000000;
        public function hitungPendapatan(){
            return $this->gajiPokok + $this->tunjanganJabatan;
        }
    }
    class Program extends Pegawai{
        private $uangLembur = 2000000;
        public function hitungPendapatan(){
            return $this->gajiPokok + $this->uangLembur;
        }
    }
    echo "<h3>Hasil Sesi 1:Method Overridng</h3>";
    $pegawaiBiasa = new Pegawai("Budi(Staff)",4000000);
    $manajer = new Manager("Andi(Manager)",60000000);
    $programmer = new Program("Siti(Programmer)",50000000);

    echo $pegawaiBiasa->getProfil()."<br>";
    echo $manajer->getProfil()."<br>";
    echo $programmer->getProfil()."<br>";
?>