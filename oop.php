<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File oop.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">oop.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <?php
// buat class rumah
class Rumah {
    // Properti
    public $nama_pemilik = "kosong";
    public $warna_rumah = "kosong";
    public $merk_tv = "kosong";
    
    // Metode
    public function getRumah($nama_pemilik, $warna_rumah, $merk_tv) {
        echo "Rumah Ini Milik: " . $nama_pemilik;
        echo "<br>"; 
        echo "Warna Rumah Ini Adalah: " . $warna_rumah;
        echo "<br>"; 
        echo "Merk TV Nya: " . $merk_tv;
    }

    // Method untuk mendapatkan detail rumah
    public function getDetail() {
        echo "Rumah Ini Milik: " . $this->nama_pemilik;
        echo "<br>"; 
        echo "Warna Rumah Ini Adalah: " . $this->warna_rumah;
        echo "<br>"; 
        echo "Merk TV Nya: " . $this->merk_tv;
    }
}

// Objek rumah
// Ini rumah 1
$rumah1 = new Rumah();
$rumah1->nama_pemilik = "Bu Aul";
$rumah1->warna_rumah = "Pink";
$rumah1->merk_tv = "Toshiba";
var_dump($rumah1);

echo "<br>";
echo "<br>";
echo "<hr>";

// Ini rumah 2
$rumah2 = new Rumah();
$rumah2->nama_pemilik = "Om Jawir";
$rumah2->warna_rumah = "Putih";
$rumah2->merk_tv = "Samsung";
$rumah2->getDetail(); // Memanggil method getDetail() untuk mencetak detail rumah
echo "<br>";
echo "<br>";
var_dump($rumah2);
?>

  </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->

<?php
include 'bawah.php';
?>