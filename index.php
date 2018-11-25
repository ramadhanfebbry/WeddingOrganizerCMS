<?php require 'header.php' ?>
        <!--================Header Menu Area =================-->
        
    
            
               
        <!--================Properties Area =================-->
        <section class="properties_area">
          <div class="container" style="padding-top: 20px">
            <div class="main_title">
              <h2>Hot Packages</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
            </div>
            <div class="row properties_inner">
              <?php
              require 'config.php';

              $sql = "SELECT * FROM barang_sewa LIMIT 3";
              // echo $sql;
              $result = $db->query($sql);
              
                                    // output data of each row
              while($row = $result->fetch_assoc()) {
                $no+=1;
                ?>
               <div class="col-lg-4">
                <div class="properties_item">
                  <div class="pp_img">
                    <img class="img-fluid" src="img/properties/pp-3.jpg" alt="">
                  </div>
                  <div class="pp_content">
                    <a href="#"><h4>PAET C</h4></a>
                    <div class="tags">
                      <tr>
                        <td>
                          gedung
                        </td>

                      </tr>

                    </div>
                    <div class="pp_footer">
                      <h5>Total: 30 JT</h5>
                      <a class="main_btn" href="#">For Sale</a>
                    </div>
                  </div>
                </div>
              </div>
                
                <?php
              }
            ?>
              
            </div>
          </div>
        </section>
        <!--================End Properties Area =================-->
        
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Demandable Cities</h2>
              <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to day,</p>
            </div>
            <div class="row cities_inner">
              <div class="col-lg-3 col-md-6">
                <div class="cities_item">
                  <img class="img-fluid" src="img/cities/cities-1.jpg" alt="">
                  <a class="main_btn2" href="#">Book Now</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="cities_item">
                  <img class="img-fluid" src="img/cities/cities-2.jpg" alt="">
                  <a class="main_btn2" href="#">Book Now</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="cities_item">
                  <img class="img-fluid" src="img/cities/cities-3.jpg" alt="">
                  <a class="main_btn2" href="#">Book Now</a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="cities_item">
                  <img class="img-fluid" src="img/cities/cities-4.jpg" alt="">
                  <a class="main_btn2" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Feature Area =================-->
        
        
        
        
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