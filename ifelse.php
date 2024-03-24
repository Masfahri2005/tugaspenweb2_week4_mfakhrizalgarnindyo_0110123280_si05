<!-- panngil file atas atau header -->

<?php
include 'atas.php';
?>

<!-- ini isi konten -->
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ini File ifelse.php</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">If And Else.php</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">


    <!-- >=
    <=
    ==
    <
    >
    != -->

<?php
$teman = "jawir";
if ($teman == "jawir") {
    echo "dia adalah teman saya";
}else{
    echo "dia bukan teman saya";
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