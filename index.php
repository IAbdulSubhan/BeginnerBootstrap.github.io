<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">  <title>Abdul Website</title>
</head>
  <body>

  <?php include 'navbar.php'; ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">MIAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav> -->
    <!-- ====================== -->
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/post-1.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/post-1.jpg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/post-1.jpg" alt="New York" width="1100" height="500">
      </div>
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
  <div>
  <h2 class="text-center">About Us</h2>
  </div>
  </section>
  <!-- Grid system view -->

    <!-- <div class="container">
      <div class="row">
        <div class="col-sm-6">
        
        </div>

      <div class="row">
        <div class="col-sm-6">
          <h3>Column 3</h3>        
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="container">
    <div class="row">
      <div class="col">
        First in DOM, no order applied
      </div>
      <div class="col order-12">
        Second in DOM, with a larger order
      </div>
      <div class="col order-1">
        
        ris...</p>
        ris...</p>
        ris...</p>
      </div>
    </div>
  </div> -->

  <!-- <div class="container">
    <div class="row">
      <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4">.col-6 .col-sm-4</div> -->

      <!-- Force next columns to break to new line at md breakpoint and up -->
      <!-- <div class="w-100 d-none d-md-block"></div>

      <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
      <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
    </div>
  </div> -->


 <!-- about -->

 <?php include 'about.php';?>
  <!-- form -->

  <section class="my-5">
  <div class="py-3">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action= "userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Phone No</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>Comments Here</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <button type="submit" class="btn btn-success mb-2">Submit</button>
    </form>
  </div>
  <footer>
    <h4 class="p-3 bg-dark text-white text-center">@MIAN Production</h4 >
  </footer>
  </body>
</html>