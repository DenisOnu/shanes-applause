<?php
    include('../config.php');
    include('server.php');

    //ensure only logged in users can access the page
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicons -->
    <link href="../img/jd.png" rel="icon">
    <link href="../img/jd.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- ajax files -->
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="adbody">
     <!--==========================
    Header
    ============================-->
    <header id="header" class="headeradmin">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="#" class="scrollto">SA Admin Panel</a></h1>
                <!-- Uncomment below if you prefer to use an image logo but a little size styling will be required -->
                <!-- <a href="#intro"><img src="img/jd.png" alt="" title=""></a> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                <li class="menu-active"><a href="#"><strong>Hello <?php echo $_SESSION['username']; ?></strong></a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Register New Admin</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <li><a href="../index.php" target="_blank" rel="noopener noreferrer">Main Site</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div> 
    </header><!-- #header -->

    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register New Admin</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form action="index.php" method="post">
          <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Please enter username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email address" required>
            </div>
            <div class="mb-3">
                <label for="password_1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password_1" name="password_1"  placeholder="Enter Password" required>
            </div>
            <div class="mb-3">
                <label for="password_2" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Repeat Password" required>
            </div>
            <input type="submit" class="btn btn-admin btn-lg" name="reg_user" value="Register">

          </form>
        </div>

      </div>
    </div>
  </div>
  

    <div class="container adbox">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="success" >
            <p style="color: rgb(13, 163, 13);">
            <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
            ?>
            </p>
        </div>
        <?php endif ?>
        <p>
  	        <?php include('errors.php'); ?>

        </p>



        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form">
                <h5><strong>Website Configs</strong></h5>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Business Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $namev ?>" placeholder="Business Name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Business Description</label>
                <textarea class="form-control" id="description" name="description" rows="2"><?php echo $descriptionv ?></textarea>
            </div>
            <h5>Pricing</h5>
            <div class="row">
                <div class="mb-3 col-md-4">
                    <label for="home" class="form-label">Home Cleaning</label>
                    <input type="number" class="form-control" id="home" name="home" value="<?php echo $homev ?>" placeholder="Home Cleaning">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="car" class="form-label">Car Wash</label>
                    <input type="number" class="form-control" id="car" name="car" value="<?php echo $carv ?>" placeholder="Car wash">
                </div>
                <div class="mb-3 col-md-4">
                    <label for="dry" class="form-label">Dry Cleaning</label>
                    <input type="number" class="form-control" id="dry" name="dry" value="<?php echo $dryv ?>" placeholder="Dry Cleaning">
                </div>
            </div>
            <h5>Project Pictures</h5>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image1" class="form-label">Image 1</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image1" id="image1" onchange="readURL(this, '#img1');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image1v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img1">
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image2" class="form-label">Image 2</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image2" id="image2" onchange="readURL(this, '#img2');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image2v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img2">
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image3" class="form-label">Image 3</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image3" id="image3" onchange="readURL(this, '#img3');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image3v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img3">
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image4" class="form-label">Image 4</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image4" id="image4" onchange="readURL(this, '#img4');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image4v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img4">
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image5" class="form-label">Image 5</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image5" id="image5" onchange="readURL(this, '#img5');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image5v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img5">
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="image6" class="form-label">Image 6</label>
                        <input type="file" accept="image/png, image/jpg, image/gif, image/jpeg" name="image6" id="image6" onchange="readURL(this, '#img6');">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./image/<?php echo $image6v; ?>" alt="" class="img-fluid rounded-circle adminpic" id="img6">
                </div>
            </div>
            <p id="red">Please ensure all images are formatted to dimensions of about 2804&times;2002</p>
            <input type="submit" class="btn btn-admin btn-lg" name="submit" value="Update">
        </form>
        
    </div>
    <div id="footer" class="p-3 mb-2 text-white">
        <p class="text-center">Copyright &copy; - JD Laundry Services</p>
    </div>


     <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
  <script src="ajax.js"></script>

</body>
</html>