<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once "header.php";?>

<body class="">
  <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          ONLINE BOOK STORE
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user">
              <i class="material-icons">person</i>
              <p>Order Status</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="billinginfo">
              <i class="material-icons">content_paste</i>
              <p>Billing Details</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="tables">
              <i class="material-icons">content_paste</i>
              <p>Product List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="loginusers">
              <i class="material-icons">content_paste</i>
              <p>User List</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="notifications">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Product list</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" name="search_text" id="search_text" placeholder="Product Name" class="form-control" />
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#"><?php echo $_SESSION["adminname"]; ?></a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../../application/view/adminlogout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
     <div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title ">Product List</h4>
                  <p class="card-category">ADD/REMOVE PRODUCTS</p>
                  <div class="adddata">
                  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Add Products</a>
                </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive" id="result">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<form class="form-horizontal" action="../admin-function/addaction" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input  name="name" type="text" placeholder="Eg : Beloved." class="form-control input-md" required="">
          <label data-error="wrong" data-success="right" for="newname">Book Name</label>
        </div>

        <div class="md-form mb-5">
          <input  name="code" type="alphanumeric" placeholder="Eg: 452***" class="form-control input-md" required="">
          <label data-error="wrong" data-success="right" for="newcode">Book Code</label>
        </div>

        <div class="md-form mb-5">
          <input type="file" name="image" class="input-file" >
          <label data-error="wrong" data-success="right" for="newimage">Image</label>
        </div>

        <div class="md-form">
          <input  name="price" type="number" placeholder="Eg: 100" class="form-control input-md" required="">
          <label data-error="wrong" data-success="right" for="newprice">Price</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique" name="submit" type="submit">Submit<i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
<?php require_once "footer.php";?>
<script>
$(document).ready(function(){
    load_data();
    function load_data(query)
    {
        $.ajax({
            url:"https://myprojectspi.ga/application/controller/admin-function/fetch",
            method:"post",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
        });
    }
    
    $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();            
        }
    });
});
</script>
</body>
</html>