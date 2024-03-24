<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File registasi.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">registrasi.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="container">
    

<!-- panggil file bawah atau footer -->
<br>
    <h4 style="text-align : center">Form Registrasi Asdos</h4>
    <br>
    <div class="container">
    <form method="POST" action="registrasi.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukkan NIM anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Prodi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JAVASCRIPT</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="skill[]_3" class="custom-control-label">RWD</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_5" class="custom-control-label">JAVA</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="phyton"> 
        <label for="skill[]_6" class="custom-control-label">PHYTON</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="bima">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>

</body>
</html>
<style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h4 {
            text-align: center;
            color: #333;
        }
</style>

<?php
// Menangkap value form berdasarkan unique name & simpan ke dalam variable
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
        case 'java':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 50;
            break;
        default:
            break;
    }
}

// Tampilan value kedalam web browser
echo "<h4>Informasi Yang Dikirim</h4>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>" . implode(", ", $skill) . "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Nilai skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterangan</td><td>";
if ($nilai == 0) {
    echo "Tidak memadai";
} elseif ($nilai <= 40) {
    echo "Kurang";
} elseif ($nilai <= 60) {
    echo "Cukup";
} elseif ($nilai <= 100) {
    echo "Baik";
} elseif ($nilai <= 150) {
    echo "Sangat baik";
}
echo "</td></tr>";
echo "</table>";
?>

<?php
include 'bawah.php';
?>