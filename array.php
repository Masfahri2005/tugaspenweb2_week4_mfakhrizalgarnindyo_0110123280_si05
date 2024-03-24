<?php
include 'atas.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File Array.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Array.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

                            <?php

$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng","i"=>"ikan"];
echo "ini hewan : " ,$animals["b"];
echo "<br>";
echo "ini hewan : " ,$animals["i"];
echo "<br>";

foreach ($animals as $animals) {
    echo "<li>", $animals, "</li>";
}
?>
  </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>

<?php
include 'bawah.php';
?>