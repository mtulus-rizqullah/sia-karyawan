<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SIA Karyawan - Absensi</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles1.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SIA Karyawan</a>
            <!-- Navbar Content-->
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="navbar-nav mr-auto">
            <a class="nav-item active">
                <a class="nav-link" href="absen.php">Absensi <span class="sr-only"></span></a>
                <a class="nav-link" href="presensi.php">Presensi <span class="sr-only"></span></a>
            </li>
                    <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-9 me-lg-14">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    include 'koneksi.php';
                    $sql = mysqli_query($conn, "select * from user");
                    while($data = mysqli_fetch_array($sql)){
                    ?> 
                 <?php echo $data['level'];} ?>  <i class="fas fa-sign-out-alt"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Helpesk</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                        <h4> - J&T Express Kepri - </h4>
                        <form method="post" action="tambah_proses.php">
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Data Karyawan
                                <a href="tambah.php"><i class="fas fa-user-plus"></i>
                                Tambah data</a>
                            </div> 
                            <form action="" method="post" name="">
                            <div class="card-body">
                            <table id="datatablesSimple">
                            
                            <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NIK</th>
                                            <th>NAMA</th>
                                            <th>DIVISI</th>
                                            <th>AKSI</th>
                                        </tr>
                            </thead>
                            <tbody>
                            <?php
                                   include "config.php";
                                   //database/connect_karyawan.php
                                   $sql = mysqli_query($koneksi, "SELECT * FROM tb_karyawan ORDER BY NIK DESC") or die(mysqli_error($koneksi));
				//jika query diatas menghaslkan nilai > 0 maka menjalankan script di bawah if...
				                    if(mysqli_num_rows($sql) > 0){
                                    // $sql = $conn->query("SELECT * FROM tb_karyawan");
                                    // if(mysqli_num_rows($sql) > 0){
                                        //membuat variabel $no untuk menyimpan nomor urut
                                        $no = 1;
                                    }
                                        while($data = mysqli_fetch_assoc($sql)){
                                            
                                        echo "<tr>";
                                        echo "<td>".$no."</td>";
                                        echo "<td>".$data['NIK']."</td>";
                                        echo "<td>".$data['NAMA']."</td>";
                                        echo "<td>".$data['DIVISI']."</td>";
                                        echo '<td>';
                                        echo '
                                        <a class="edit" href="update_data.php?id='.$data['NIK'].'">Edit</a>
                                        <a class="hapus" href="hapus.php?id='.$data['NIK'].'">Hapus</a>
                                        ';
                                        echo '</td>';
                                        echo '</tr>';
                                        $no++;
                                        }
                                      ?>
                            <tbody>
                                </table>
               
                    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
