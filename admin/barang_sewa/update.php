<?php
	require '../../config.php';

	$id = $_GET['id'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $status = $_POST['status'];

  $sql = "UPDATE `barang_sewa` SET `nama_barang` = '$nama',`harga_barang` = '$harga', `status` = '$status'  WHERE `barang_sewa`.`id` = '$id';";

  if (mysqli_query($db, $sql)) {
    echo "<SCRIPT type='text/javascript'> 
              alert('Barang Sewa berhasil diperbaharui.');
              window.location.replace(\"index.php\");
          </SCRIPT>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }    


?>