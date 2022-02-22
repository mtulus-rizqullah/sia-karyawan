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
                        <hr>
                        <h4> - J&T Express Kepri - </h4>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tambah Data Karyawan
                            </div> 
                            <div class="container">
                            <h1>Input Data Karyawan</h1>
                            <p>Isi Form dibawah ini untuk menginput data karyawan</p>

                            <form action="proses_tambah.php" method="post">
                            <div class="item form-group">
                            
                            <label for="NIK">NIK :</label>
                                <input type="text" class="form-control" id="NIK" name="NIK" >
                            </div>

                            <div class="item form-group">
                            <label for="NAMA">NAMA :</label>
                                    <input type="text" class="form-control" id="NAMA" name="NAMA" >
                            </div>

                            <div class="item form-group">
                            <label for="DIVISI">DIVISI:</label>
                                    <select name="DIVISI" class="form-control" required>
                                        <option value="">DIVISI</option>
                                        <option value="Spinter">Spinter</option>
                                        <option value="Proccesing">Proccesing</option>
                                        <option value="Koordinator">Koordinator</option>
                                        <option value="Admin">Admin</option>
                                	</select>
                            </div>
                        </div>
                        <hr>
                        <div class="item form-group">
                                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                        </div>
                                <p>
                    </form>            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts1.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="assets/demo/chart-area-demo.js"></script>
            <script src="assets/demo/chart-bar-demo.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
