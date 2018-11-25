<?php

if(isset($_POST['submit'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 $conn = mysqli_connect('localhost', 'root', '','weding');
  if(mysqli_connect_errno()){
   echo "Koneksi Ke Server Gagal";
   exit();
  }

 $sql="SELECT * FROM user WHERE username='".$user."'AND password='".$pass."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        session_start();
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
        #echo "<script>alert('succes !!!');</script>";
        echo "<script>location='index.php';</script>";

    } else {
      echo "('Username atau Password Admin tidak benar !!!')";
        // echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='login.php?error=true';</script>";
    }
}
?>

<?php require 'header.php'; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           
            <div class="container">
        <div class="advanced_search" style="max-width: 60%;margin-top: 10px;margin-right:20%">
          <h3>LOGIN</h3>
          <div class="search_select">
            <div class="container">
              
               <?php 
                if (isset($_GET["error"])){
                  echo " <p > cek kembali email & password yang di masukan salah </p>";
                }
                ?>
                
              
            </div>

           <form action="login.php" method="post">
                  <div class="mt-10">
                    <input name="username" placeholder="user name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'user name'" required="" class="single-input" type="text">
                  </div>
                  <div class="mt-10">
                    <input name="password" placeholder="PASSWORD" onfocus="this.placeholder = ''" onblur="this.placeholder = 'PASSWORD'" required="" class="single-input" type="PASSWORD">
                  </div>
                  <div class="mt-10">
                    <div class="button-group-area mt-40">
            <button class="genric-btn success circle" value="login" name="submit" type="submit"> login </button>
            
            <a href="signup.php" class="genric-btn success circle">SIGN UP</a>
            
           
          </div> </div>
                 
                </form>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
  
        <!--================ start footer Area  =================-->  
        <footer class="footer-area p_120">
            <div class="container">
                            
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </footer>
    <!--================ End footer Area  =================-->
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      

        
    </body>
</html>