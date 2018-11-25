<?php
	require '../../config.php';

	
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
  $status = $_POST['status'];
  

  $sql = "SELECT * FROM barang_sewa WHERE nama_barang = '$nama'";
  $result = mysqli_query($db,$sql);
  
  $count = mysqli_num_rows($result);
  if($count > 0){
    echo "<SCRIPT type='text/javascript'> 
              alert('Nama Barang Tidak Boleh sama.');
              window.location.replace(\"index.php\");
          </SCRIPT>";
  }else{
    
    $sql = "INSERT INTO `barang_sewa` (`nama_barang`, `harga_barang`, `status`) VALUES ('$nama', $harga, '$status')";

    if (mysqli_query($db, $sql)) {
      echo "<SCRIPT type='text/javascript'> 
                alert('Barang berhasil ditambahkan.');
                window.location.replace(\"index.php\");
            </SCRIPT>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }    
  }

?>