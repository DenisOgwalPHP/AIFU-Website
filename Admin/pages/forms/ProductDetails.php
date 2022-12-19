<?php session_start();

if(isset($_SESSION['aifuadminuser'])){
	}
	else{
		
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AIFU | Product Registration </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/CropProtectionLogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-info navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../Dashboard.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          <!--<span class="badge badge-danger navbar-badge">3</span>-->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/profile placeholder.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
               
                <?php
				 //echo'<h3 class="dropdown-item-title">';
				  echo'<p class="text-sm text-muted">';
				echo $_SESSION['aifuadminuser'];
                echo'</p>';
                echo'<p class="text-sm text-muted">';
				echo $_SESSION['aifuadminemail'];
				echo'</p>';

				?>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
         <!--add message here-->
          <div class="dropdown-divider"></div>
          
          <div class="dropdown-divider"></div>
          <a href="../../logout.php" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../Dashboard.php" class="brand-link">
      <img src="../../images/CropProtectionLogo.png" alt=" Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AIFU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/profile placeholder.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $_SESSION['aifuadminuser'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../../Dashboard.php" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
            </li>
		 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/ProductDetails.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Product Registration</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="../forms/blog.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blog Post</p>
                </a>
              </li
			   <li class="nav-item">
                <a href="../forms/Sermon.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sermons</p>
                </a>
              </li>
         
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Records
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<li class="nav-item">
                <a href="../tables/ProductsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="../tables/Bookings.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Bookings</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/DeliveryInformation.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Delivery Information</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="../tables/OrdersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Order Details</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/Subscriptions.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Subscriptions</p>
                </a>
              </li>
			    <li class="nav-item">
                <a href="../tables/Donations.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Donations</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/Volunteers.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Volunteers</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/SermonsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sermons</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/Testimonies.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Testimonies</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../tables/BlogTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blogs</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/BlogCommentsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blog Comments</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="../tables/CommentReplies.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Comment Replies</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="../tables/ClientsTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Client Login Accounts</p>
                </a>
              </li>
			  
              <li class="nav-item">
                <a href="../tables/MembersTable.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Reports
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/ProductReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/OrdersReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/MemberReport.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Members</p>
                </a>
              </li>
			  
            </ul>
          </li>
          <li class="nav-item">
            <a href="../examples/profile.php" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Profile
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../Dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Product Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            
            <!-- /.card -->

            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Details</h3>
              </div>
             
			    <form action="insertproduct.php" method="post" enctype="multipart/form-data">
				 <div class="card-body">
			   <div class="form-group">
                    <label for="exampleInputEmail1">Book Name</label>
					<input class="form-control" type="text" name= "productname" placeholder="Enter Product name">
               </div>
			   <div class="form-group">
                    <label for="exampleInputEmail1">Author</label>
					<input class="form-control" type="text" name= "authors" placeholder="Enter Author names">
               </div>
			    <div class="form-group">
                    <label for="exampleInputEmail1">Publication Date</label>
					<input class="form-control" type="text" name= "publicationdate" placeholder="dd/mmm/yyyy">
               </div>
			    <div class="form-group">
                    <label for="exampleInputEmail1">Short Description</label>
					<input class="form-control" type="text" name= "shortdescription" placeholder="Enter Description between 50-100 words">
               </div>
			 <div class="form-group">
                    <label for="exampleInputEmail1">Supplier</label>
					<input class="form-control" type="text" name= "supplier" placeholder="Enter supplier names">
               </div>
			   <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="categories" >
					 <option Value="Magazines">Magazines</option>
                      <option Value="Small Books">Small Books</option>
                      <option Value="Big Books">Big Books</option>
					   <option Value="Cartoon Books">Cartoon Books</option>
					    <option Value="Music">Music</option>
						 <option Value="Videos">Videos</option>
						  <option Value="Films">Films</option>
						   <option Value="Animations">Animations</option>
							 <option Value="Services">Services</option>
                    </select>
                 </div>
			   <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" rows="3"  name="description" placeholder="Enter product description..."></textarea>
               </div>
			   <div class="form-group">
                    <label for="exampleInputEmail1">Cost</label>
					<input class="form-control" type="number" name="cost" placeholder="Enter cost of product">
               </div>
			   
                
					<div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename" name="Filename">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 1(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename1" name="Filename1">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 2(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename2" name="Filename2">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 3(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				  <div class="input-group">
					<div class="custom-file">
					 <input type="file" class="custom-file-input" id="Filename3" name="Filename3">
                      <label class="custom-file-label" for="exampleInputFile">Product Image 4(Dimensions should be 850x850 pixels)</label>
					</div>
                  </div>
				   </div>
				 <div class="card-footer">
                  <button type="submit" name="productupload" class="btn btn-primary">Submit</button>
				</div> 
				  </form>
				
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Recent Records</h3>
              </div>
             <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product Names</th>
                  <th>Supplier</th>
                  <th>Category</th>
                  
                </tr>
                </thead>
                <tbody>
				<?php
				require_once('../../Connection/connect.php');
				$sales6 ="SELECT ProductName,Supplier,Category FROM `productdetails` order by IDDesc Desc LIMIT 10";
				$result5=mysqli_query($link,$sales6);
				$counter1=1;
				while($row5=mysqli_fetch_assoc($result5)){


                 echo"<tr>";
				 echo "<td>".$row5['ProductName']."</td>";
				 echo "<td>".$row5['Supplier']."</td>";
                 echo "<td>".$row5['Category']."</td>";
                echo"</tr>";
				}
				?>
                
                </tbody>
                <tfoot>
               <!-- <tr>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                  <th>X</th>
                </tr>-->
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.card -->
           
		   
             
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://cropprotection.com">AIFU</a>.</strong> All rights
    reserved.
 </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>