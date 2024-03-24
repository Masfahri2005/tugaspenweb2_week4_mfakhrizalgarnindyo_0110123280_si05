<!-- panggil file atas atau header -->

<?php
include 'atas.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File Array_Multidimensi.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Array_Multidimensi.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
<!-- ini isi konten -->

<?php
$nama ="Anies" ;
$prodi = "Sistem Informasi";
$semester = "2";

$nama ="Prabowo" ;
$prodi = "Sistem Informasi";
$semester = "2";

$nama ="Ganjar" ;
$prodi = "Sistem Informasi";
$semester = "2";

$mahasiswa = 
[["Anies","SI","8"],
["Prabowo","SI","8"],
["Ganjar","SI","8"]];

foreach($mahasiswa as $mahasiswa){
    echo "nama : " ,$mahasiswa[0] ,"<br>";
    echo "prodi : " ,$mahasiswa[1] ,"<br>";
    echo "semester : " ,$mahasiswa[2] ,"<br>";
    echo "<br>";
}
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