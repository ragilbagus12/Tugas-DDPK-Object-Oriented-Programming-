<?php
interface MetodePembayaran {
    public function prosesPembayaran($jumlah);
}

class EWallet implements MetodePembayaran {
    public function prosesPembayaran($jumlah) {
        return "Memproses saldo E-Wallet sebesar Rp {$jumlah}. Otentikasi OTP sukses.";
    }
}
class TransferBank implements MetodePembayaran {
    public function prosesPembayaran($jumlah) {
        return "Mengecek mutasi Transfer Bank sebesar Rp {$jumlah}. Transaksi valid.";
    }
}

class KasirCheckout {
        public function bayarPesanan(MetodePembayaran $tipePembayaran, $totalTagihan) {
        echo "<b>Status Transaksi:</b><br>";
        echo $tipePembayaran->prosesPembayaran($totalTagihan) . "<br><hr>";
    }
}

echo "<h3>Hasil Sesi 3: Subtyping Polymorphism (Interface)</h3>";

$transaksi1 = new KasirCheckout();

$transaksi1->bayarPesanan(new EWallet(), 150000);
$transaksi1->bayarPesanan(new TransferBank(), 350000);
?>
