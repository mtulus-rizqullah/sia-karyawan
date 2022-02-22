<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("localhost","root","","db_sia");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
if(isset($_POST['submit'])){
        $NIK      =   $_POST['NIK'];
        $NAMA     =   $_POST['NAMA'];
        $DIVISI   =   $_POST['DIVISI'];

        $sql = "UPDATE 'tb_karyawan' SET 'NIK' = '$NIK','NAMA' = '$NAMA','DIVISI' = '$DIVISI' WHERE 'tb_karyawan'.'NIK' = '$NIK'";

        $result = $conn->query($sql) or die("Cannot write");
    
}
if($result){
    echo '<script language="javascript">alert("Update berhasil dilakukan.");
    document.location="edit_data.php";</script>';
    }else {
    echo '<script language="javascript">alert("Update gagal dilakukan.");
    </script>';
    }
    
?>