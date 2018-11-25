
<?php
	

	define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'wedding');
   date_default_timezone_set('UTC');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



	
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];

	
	

  $sql = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($db,$sql);
  
  $count = mysqli_num_rows($result);
  
    if($count > 0){
    echo "<SCRIPT type='text/javascript'> 
              alert('Nama Barang Tidak Boleh sama.');
              window.location.replace(\"index.php\");
          </SCRIPT>";
  }else{
    $sql = "INSERT INTO `user` (username, password,email,no_hp,alamat) VALUES ('$username','$password','$email','$no_hp','$alamat')";


    if (mysqli_query($db, $sql)) {
      echo "<SCRIPT type='text/javascript'> 
                alert('sign up berhasil.');
                window.location.replace(\"index.php\");
            </SCRIPT>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }    
  }

?>