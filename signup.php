<?php require 'header.php'; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
           
            <div class="container">
        <div class="advanced_search" style="max-width: 100%;margin-top: 10px">
          <h3>SIGN UP</h3>
          <div class="search_select">
            
           <form action="aksi_signup.php" method="POST" enctype="multipar/ form-data">
                                    <div class="mt-10">
                                        <input name="username" placeholder="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'username'" required="" class="single-input" type="text">
                                    </div>
                                   
                                    <div class="mt-10">
                                        <input name="password" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" required="" class="single-input" type="password">
                                    </div>

                                    <div class="mt-10">
                                        <input name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" required="" class="single-input" type="email">
                                    </div>
                                    
                                    <div class="mt-10">
                                        <input name="no_hp" placeholder="no_hp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'no_hpp'" required="" class="single-input" type="text" pattern="[0-9]*">
                                    </div>
                                    
                                    
                                    <div class="mt-10">
                                        <textarea name="alamat"  class="single-textarea" placeholder="alamat" onfocus="this.placeholder = 'alamat'" onblur="this.placeholder = 'alamat'" required=""></textarea>
                                    </div>
                                   
            <a href="LOGIN.php" class="genric-btn success circle">LOGIN</a>
            <button class="genric-btn success circle" value="SIGN UP" name="submit" type="submit"> SIGN UP </button>
            <button class="genric-btn success circle" value="RESET" name="submit" type="RESET"> RESET </button>
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