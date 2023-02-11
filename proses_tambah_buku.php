<?php 
include 'koneksi.php';
$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['pengarang'];
$deskripsi = $_POST['deskripsi'];

$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['fotome, PATHINFO_EXTENSION);']['size'];
$ext = pathinfo($filename);


	if($ukuran < 1044070){		
		$foto =$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.''.$filename);
		mysqli_query($conn, "insert into buku VALUE (NULL,'$nama_buku','$pengarang','$deskripsi','$foto')");
		echo "<script>alert('Sukses menambahkan produk');location.href='buku.php';</script>";
	}else{
		echo "<script>alert('Gagal menambahkan produk');location.href='tambah_buku.php';</script>";
	}

?>