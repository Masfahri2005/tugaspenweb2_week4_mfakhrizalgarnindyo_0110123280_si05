<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File form_belanja.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">form_belanja.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <style>
        .container {
            margin-top: 30px;
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); ff
        }

        h5 {
            color: blue;
            
        }

        form {
            margin-bottom: 20px;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        form {
            margin-bottom: 20px;
            animation: fadeInUp 1s ease; 
        }
</style>
<body>
<div class="container">
<form method="POST" action="form_belanja.php">
            <br>
            <h5>Form Belanja Online</h5>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="coustumer" name="costumer" placeholder="Masukan Nama Pemesan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Produk Pilihan</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="TV" id="name_0" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="4.200.000">
                        <label for="name_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="name" id="name_1" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="3.100.000">
                        <label for="name_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="name" id="name_2" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="3.800.000">
                        <label for="name_2" class="custom-control-label">Mesin Suci</label>
                    </div>
                    <span id="nameHelpBlock" class="form-text text-muted">Pilih Produk Sesuai Kebutuhan Anda</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-4 col-form-label">Jumlah Beli</label>
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah Produk" type="text" class="form-control">
                </div>  
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" value="Data Berhasil Di Simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html  >
<hr>
<div class="container">
<?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai beanja dari form pemesanan
            $customer = $_POST["costumer"];
            $product = isset($_POST["TV"]) ? "TV" : (isset($_POST["name"]) ? "Kulkas" : (isset($_POST["name"]) ? "Mesin Cuci" : ""));
            $quantity = $_POST["jumlah"];

            // Menghitung total belanja produk

            switch ($product) {
                case "TV":
                    $price = 4200000;
                    break;
                case "Kulkas":
                    $price = 3100000;
                    break;
                case "Mesin Cuci":
                    $price = 3800000;
                    break;
                default:
                    $price = 0;
            }

            $total = $price * $quantity;

            echo "<h5>Hasil Belanja</h5>";
            echo "<p>Nama Customer: $customer</p>";
            echo "<p>Produk Pilihan: $product</p>";
            echo "<p>Jumlah Beli: $quantity</p>";
            echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . "</p>";
        }
        ?>
</div>       
<br>
<hr>

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