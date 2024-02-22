<?php 
  require './db/dbconfig.php';
  $sql = "SELECT * FROM Category";
  $result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/store.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-0 m-0 container-fluid bd-example ">
   <!-- nav bar  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                 <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Catagory
                </button>
                <ul class="dropdown-menu">
                <?php 
                  if ($result->num_rows >0 ){
                    while($row=$result->fetch_assoc()){
                      ?>
                        <li><a class="dropdown-item" href="#"><?php echo $row["name"];?></a></li>
                      <?php
                    }
                  }
                ?>
                </ul>
              </div>
            </li>
          </ul>
          <div class="d-flex gap-1">
            <form action="#" method="get">
              <input type="text" class="form-control" placeholder="search here">
            </form>
            <a href="#" class="btn btn-danger">Sign In</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- header -->
      <div id="carouselExample" class="carousel slide col-md-12">
          <div class="carousel-inner">
          <?php
          $sql='SELECT * FROM Product LIMIT 4';
          $result= $conn->query($sql);
          if($result->num_rows > 0){
            $firstRender=true;
            while($row=$result->fetch_assoc()){
              ?>
              <div class="carousel-item <?php echo $firstRender ? 'active' : ''; ?> slide">
              
            </div>    
              <?php
              $firstRender=false;
            }
          }
          ?>  
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </body>
    </html>