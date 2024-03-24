<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File class_nilai.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">class_nilai.php</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="container">
        <h2 style="text-align: center;">Form Nilai Siswa</h2>
        <hr/>
        <form method="POST" action="class_nilai.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukkan nim anda" type="text" class="form-control" spellcheck="false" data-ms-editor="true">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="DDP">Dasar-Dasar Pemrograman</option>
                        <option value="WEB">Pemrograman web</option>
                        <option value="BASDAT">Basis Data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                    <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                    <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai Praktikum</label> 
                <div class="col-8">
                    <input id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <?php
        
        if($_POST){
            $ns = new Nilai($_POST['nim'], $_POST['matkul'], $_POST['uts'], $_POST['uas'], $_POST['praktikum']);
            echo 'NIM : '.$ns->nim;
            echo '<br/>Mata Kuliah : '.$ns->matkul;
            echo '<br/>Nilai uts : '.$ns->uts;
            echo '<br/>Nilai uas : '.$ns->uas;
            echo '<br/>Nilai praktikum : '.$ns->praktikum;
            echo '<br/>Rata-Rata : '.$ns->Hitung(); // Panggil method Hitung() dengan benar
        }
        ?>

<?php
// class nilai
class Nilai{
    public $nim, $matkul, $uts, $uas, $praktikum;

    // method
    public function __construct($nim, $matkul, $uts, $uas, $praktikum) {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->praktikum = $praktikum;
    }
// hitung rata rata, grade dan predikat
    public function Hitung(){
        $rata_rata = ($this->uts + $this->uas + $this->praktikum) / 3;
        $grade = $this->determineGrade($rata_rata);
        $predikat = $this->determinePredikat($grade);
        return "Rata-Rata: $rata_rata, Grade: $grade, Predikat: $predikat";
    }
// hitung grade nilai
    private function determineGrade($rata_rata){
        if ($rata_rata < 0 || $rata_rata > 100) {
            return 'I'; // Tidak Ada Grade
        } elseif ($rata_rata >= 85) {
            return 'A';
        } elseif ($rata_rata >= 70) {
            return 'B';
        } elseif ($rata_rata >= 56) {
            return 'C';
        } elseif ($rata_rata >= 36) {
            return 'D';
        } else {
            return 'E';
        }
    }

// hitung grade dari predikat diatas
    private function determinePredikat($grade){
        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';
                break;
            case 'B':
                return 'Memuaskan';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'E':
                return 'Sangat Kurang';
                break;
            default:
                return 'Tidak Ada';
                break;
        }
    }
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