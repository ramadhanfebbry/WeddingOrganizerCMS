<?php 
include '../../config.php';

$id = $_GET['id'];
$sql = "DELETE FROM barang_sewa WHERE id='$id'";

if (mysqli_query($db, $sql)) {
   echo "<SCRIPT type='text/javascript'> 
       			alert('Barang Sewa berhasil dihapus');
       			window.location.replace(\"index.php\");
   			</SCRIPT>";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
 ?>