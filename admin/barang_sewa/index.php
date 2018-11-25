<?php require '../../config.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../../img/favicon.png" type="image/png">
  <title>Real State Multi</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../vendors/linericon/style.css">
  <link rel="stylesheet" href="../../css/font-awesome.min.css">
  <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../../vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="../../vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="../../vendors/animate-css/animate.css">
  <link rel="stylesheet" href="../../vendors/jquery-ui/jquery-ui.css">
  <!-- main css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/responsive.css">
  <link rel="stylesheet" href="../../css/custom.css">

</head>
<body>

  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="../../img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
             <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about-us.html">Paket</a></li>
              <li class="nav-item"><a class="nav-link" href="properties.html">Sewa Barang</a></li>
              <li class="nav-item"><a class="nav-link" href="agents.html">Jasa jahit</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
               <li class="nav-item "><a class="nav-link" href="admin/login.html">Login</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                </ul>
              </li> 
              <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Home Banner Area =================-->
  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-50px);"></div>
      <div class="container">
        <div class="banner_content">
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="contact.html">Agents</a>
          </div>
          <h2>Agents</h2>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!--================Welcome Area =================-->

  <!--================End Welcome Area =================-->

  <!--================Properties Area =================-->
  <section class="properties_area p_120">
    <div class="container">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6">
              <h2>Manage <b>Barang</b></h2>
            </div>
            <div class="col-sm-6">
              <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle"></i> <span>Add New Employee</span></a>
              <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i> <span>Delete</span></a>            
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>
                <span class="custom-checkbox">
                  <input type="checkbox" id="selectAll">
                  <label for="selectAll"></label>
                </span>
              </th>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(isset($_GET['limit'])){
                $limit = $_GET['limit'];
              }else{
                $limit = 5;
              }

              if(isset($_GET['page'])){
                $page = $_GET['page'];
              }else{
                $page = 0;
              }

              $sql = "SELECT * FROM barang_sewa LIMIT ". $limit. " OFFSET ". $page ."";
              // echo $sql;
              $result = $db->query($sql);
              $count = count($result);
              $count2 = ($db->query("SELECT count(*) as count FROM barang_sewa ")->fetch_assoc()['count']);
              $no = 0;
                      // output data of each row
              while($row = $result->fetch_assoc()) {
                $no+=1;
                ?>
                <tr>
                  <td>
                    <span class="custom-checkbox">
                      <input type="checkbox" id="checkbox1" name="options[]" value="1">
                      <label for="checkbox1"></label>
                    </span>
                  </td>
                  <td><?php echo $no; ?></td>
                  <td class="nama_barang"><?php echo $row['nama_barang']; ?></td>
                  <td class="harga_barang"><?php echo $row['harga_barang']; ?></td>
                  <td class="status"><?php echo $row['status']; ?></td>
                  <td>
                    <a href="#editEmployeeModal" onclick="setFormEdit(this)" class="edit" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>
                    <a href="#deleteEmployeeModal" onclick="setSingleDelete(this)" class="delete" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                  </td>
                </tr>

                
                <?php
              }
            ?>
            
          </tbody>
        </table>
        <div class="clearfix">
          <div class="hint-text">Showing <b><?php echo $count; ?></b> out of <b><?php echo $count2; ?></b> entries</div>
          <ul class="pagination">
            <!-- <li class="page-item disabled"><a href="#">Previous</a></li>
            <li class="page-item"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item active"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link">Next</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="create.php" method="POST">
            <div class="modal-header">            
              <h4 class="modal-title">Add Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required name="nama">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" required name="harga">
              </div>
              <div class="form-group">
                <label>Status</label>
                <div class="clearfix"></div>
                <select name="status" >
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
                <div class="clearfix"></div>
              </div>              
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="" method="POST" class="form-edit">
            <div class="modal-header">            
              <h4 class="modal-title">Edit Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required name="nama">
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" required name="harga">
              </div>
              <div class="form-group">
                <label>Status</label>
                <div class="clearfix"></div>
                <select name="status" >
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
                <div class="clearfix"></div>
              </div>              
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- <form> -->
            <div class="modal-header">            
              <h4 class="modal-title">Delete Employee</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">          
              <p>Are you sure you want to delete these Records?</p>
              <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <a href="javascript:void(0)" class="btn btn-danger delete-button" value="Delete" onclick="performDelete(this)">Delete</a>
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </section>
  <!--================End Properties Area =================-->

  <!--================End Clients Logo Area =================-->


  <!--================ start footer Area  =================-->  
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/stellar.js"></script>
    <script src="../../vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../../vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../../vendors/isotope/isotope-min.js"></script>
    <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../../vendors/jquery-ui/jquery-ui.js"></script>
    <script src="../../js/jquery.ajaxchimp.min.js"></script>
    <script src="../../js/mail-script.js"></script>
    <script src="../../js/theme.js"></script>
    <script src="../../js/pagination.js"></script>

    <script type="text/javascript">
     function setFormEdit(dom){
        console.log(dom)
        var id = $(dom).attr("data-id");
        var nama_barang = $(dom).parent().parent().children("td.nama_barang").html();
        var harga_barang = $(dom).parent().parent().children("td.harga_barang").html();
        var status_barang = $(dom).parent().parent().children("td.status").html();

        $(".form-edit").attr("action", "update.php?id="+ id);
        $(".form-edit input[name='nama']").val(nama_barang);
        $(".form-edit input[name='harga']").val(harga_barang);
        $(".form-edit select[name='status']").val(status_barang);
     }

     function setSingleDelete(dom){
        $(".delete-button").attr('data-id', $(dom).attr('data-id'));    
        $(".delete-button").attr('delete-type', 'single');        
     }

     function performDelete(dom){
      console.log(dom)
        if($(dom).attr('delete-type') == 'single'){
          document.location = 'delete.php?id='+$(dom).attr('data-id');
        }else{
            
        }
     }

$('.pagination').twbsPagination({
          totalPages: <?php echo (round($count2 / $limit) == 0 ? 1 : round($count2 / $limit)); ?>,
          // page: "1",
          // visiblePages: <?php echo $count2 / $limit ?>,
          onPageClick: function (event, page) {
            // document.location = 'index.php?page='+ page;            
            $("table tbody").load("index_ajax.php?page="+page)
          }
        });
      $(document).ready(function(){
        
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
          if(this.checked){
            checkbox.each(function(){
              this.checked = true;                        
            });
          } else{
            checkbox.each(function(){
              this.checked = false;                        
            });
          } 
        });
        checkbox.click(function(){
          if(!this.checked){
            $("#selectAll").prop("checked", false);
          }
        });
      });
  </script> 
</body>
</html>