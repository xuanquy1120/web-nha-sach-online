<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Giỏ hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/missingcartt.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img class="profile" src="images/logopf.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">

  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" style="width: 500px;height:42px;" placeholder="Tìm kiếm theo tiêu đề..." name="var" aria-label="Search" aria-describedby="basic-addon2" value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
  </ul>
 
  
   
  
</nav>
<section class="row">
      <article class="col-md-11 outborder">
        <section class="row">
          <article class="col-md-5">
            <img class="pic" src="images/cart-empty.png" alt="book tree">
          </article>
          <article class="col-md-7">
             <img class="photo" src="images/cart-empty0.png" alt="empty cart theme" style="margin-left:2px;width:450px;margin-top: 100px;">
          <p class="tag">Thiếu các mặt hàng trong giỏ hàng?</p>
          <p class="scndtag">Đăng nhập để mua hoặc thêm các mặt hàng vào giỏ hàng của bạn</p>
          <p><a href="user/login.php"><button type="button" class="btn btn-danger bt">Đăng nhập</button></a></p>
          </article>
        </section>

      </article>

</section>
<section>
  <article class="col-md-12">
          
           
  </article>
        </section>

        <!--start of footer-->
        <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="margin-top:30px;margin-bottom: 0;">

  <!-- Footer Links -->
  <footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="width:100%">

<!-- Footer Links -->
<div class="container text-center text-md-left bg-dark navbar-dark" style="color:white;">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Nhà sách online</h6>
      <p>Đây là  là một nhà sách online, nơi mọi người có thể mua nhiều loại sách khác nhau, từ Học thuật đến sách giả tưởng. Hiệu sách cũng có một loạt các bộ sưu tập truyện tranh.</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="font-size: 20px;font-family: Sitka;color:white;">
      <h6 class="text-uppercase mb-4 font-weight-bold" ></h6>
      <p>
        <a href="#">lên đầu trang</a>
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">



    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" style="color:white;">
      <h6 class="text-uppercase mb-4 font-weight-bold">Liên hệ</h6>
      <p>
        <i class="fas fa-home mr-3"></i>Hà nội, Việt nam</p>
      <p>
        <i class="fas fa-envelope mr-3"></i>xuanquy1120@gmail.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +84349593356</p>
      
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left" style="color:white;">© 2021 Copyright:
        <a >
          <strong>Xuanquy</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right mx-auto">
        <ul class="list-unstyled list-inline">

          <li class="list-inline-item" >
            <a type="button" class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/hoa.than.5832/">
              <i class="fab fa-facebook-f" style="font-size:30px;box-shadow: 2px 2px 4px 4px #00ffff;"></i>
            </a>
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
  <!-- Footer Links -->

</footer>
    </div>
</body>
</html>