
<?php

// Interface Notifikasi
interface Notifikasi {
    public function kirim(string $pesan): void;
}

// Class Notifikasi Email
class Email implements Notifikasi {
    public function kirim(string $pesan): void {
        echo "Mengirim Email: $pesan<br>";
    }
}

// Class Notifikasi WhatsApp
class WhatsApp implements Notifikasi {
    public function kirim(string $pesan): void {
        echo "Mengirim WhatsApp: $pesan<br>";
    }
}

// Class Notifikasi SMS
class SMS implements Notifikasi {
    public function kirim(string $pesan): void {
        echo "Mengirim SMS: $pesan<br>";
    }
}

// Program utama
$email = new Email();
$whatsapp = new WhatsApp();
$sms = new SMS();

echo "<h2>Aplikasi Notifikasi</h2>";

$email->kirim("Pesan melalui Email");
$whatsapp->kirim("Pesan melalui WhatsApp");
$sms->kirim("Pesan melalui SMS");

?>
