<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File tester.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">tester.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="container">
  <body>
  <form method="GET" action="tester.php">
    <br>
  <div class="form-group row">
    <label class="col-4">Pilih Hobi :</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_0" type="checkbox" class="custom-control-input" 
        value="renang"> 
        <label for="hobi[]_0" class="custom-control-label">Renang</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_1" type="checkbox" class="custom-control-input" 
        value="futsal"> 
        <label for="hobi[]_1" class="custom-control-label">Futsal</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi[]_2" type="checkbox" class="custom-control-input" 
        value="badminton"> 
        <label for="hobi[]_2" class="custom-control-label">Badminton</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    // menangkap nilai metode hobi dari checkbox
    $hobi = $_GET['hobi'];
    if (isset($_GET['hobi'])) {
    foreach ($hobi as $hobai) {
        switch ($hobai) {
            case 'renang':
                echo "Hobi saya renang.</br>";
                break;
            case 'futsal':
                echo "Hobi saya futsal.</br>";
                break;
            case 'badminton':
                echo "Hobi saya badminton.</br>";
                break;
            
           
        }
    }
}else{
    echo "Mohon Pilih Hobi Anda. ";
    
}

    // tampilkan semua data hobi dengan foreach
    // echo "Hobi : ";
    // foreach ($hobi as $hoby ) {
    //     echo $hoby . ", ";
    // }

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