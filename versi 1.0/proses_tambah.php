<?php
//koneksi ke database mysql,
$koneksi = mysqli_connect("localhost","root","","db_sia");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
		<?php
		if(isset($_POST['submit'])){
			$NIK				= $_POST['NIK'];
			$NAMA    			= $_POST['NAMA'];
			$DIVISI     		= $_POST['DIVISI'];

			$cek = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE NIK='$NIK'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tb_karyawan(NIK, NAMA,  DIVISI) VALUES('$NIK', '$NAMA', '$DIVISI')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="edit.php";</script>';
				}else{
					echo '<script>alert("Gagal menambahkan data."); document.location="edit.php";</script>';;
				}
			}else{
				echo '<script>alert("NIK Sudah terdaftar."); document.location="edit.php";</script>';;
			}
		}
		?>