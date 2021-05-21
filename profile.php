<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Trang cá nhân</title>

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <!---link to external css-->
   <link rel="stylesheet" href="../css/profile.css">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

 

<div class="container">
  <!--start of the navbar-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="user/index.php">
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

 <!--fetch data from the database-->
  <article class="col-md-12">

  <!--start of the section-->
<section class="row">
  <article class="col-md-12"style="margin-top:20px;">
  <h3 style="font-family:kalam;">Trang cá nhân của bạn:</h3>
</article>
</section>
 <?php

  $con=mysqli_connect("localhost","root","","kitaab");
  $e=$_POST['userid'];
  $sel="SELECT * FROM signup where id='$e'";
  $rm=$con->query($sel);
  while($row=$rm->fetch_assoc()){
  ?>
<section class="row" style="box-shadow:2px 2px 4px 4px #66ff33;margin-bottom: 30px;">

<figure class="col-md-3">
<img src="admin/userimages/<?php echo $row['profile'];?>" style="width:200px;height:200px;border:2px solid black;border-radius:50%;float:left;box-shadow: 2px 2px 4px 4px #00ffff;margin-top:25px;"><br>
</figure>
<!--name input-->
<article class="col-md-3">
  <p style="margin-top: 30px;font-family:Comic Sans Ms;font-size:35px;">Tên:&nbsp<?php echo $row['name'] ?></p>
<!--phone no input-->
  <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;"><i class='fas fa-phone-square-alt' style='font-size:24px;box-shadow: 2px 2px 4px 4px #ff0066;'></i>&nbsp<?php echo $row['contact'] ?></p>
<!--email input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;"><i class='fas fa-envelope-square' style='font-size:24px; box-shadow: 2px 2px 4px 4px #ffff00;'></i>&nbsp<?php echo $row['email'] ?></p>
 <!--birthdate input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Ngày sinh:&nbsp<?php echo $row['dob'] ?></p>
 <!--gender input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Giới tính:&nbsp<?php echo $row['gender'] ?></p>
 <!--Address input-->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Địa chỉ:&nbsp<?php echo $row['address'] ?></p>
 <!--pincode input--->
 <p style="margin-top: 5px;font-family:Comic Sans Ms;font-size:20px;">Pincode:&nbsp<?php echo $row['pincode'] ?></p>
</article>
</section>
  <?php
}
?><!--end of php fetch assoc -->
<!--start of the footer-->
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
</div>
</body>
</html>