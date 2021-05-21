<?php
 
 session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>kitab.com/home-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/productview.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>

<body>
  <div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="./index.php">
    <img class="profile" src="logo/logopf.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" style="width: 300px;height:42px;" placeholder="Tìm kiếm theo tiêu đề..." name="var" aria-label="Search" aria-describedby="basic-addon2" value="<?php if(isset($_GET['var'])) {echo $_GET['var'];} ?>">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
  </ul>
  <ul class="navbar-nav">
   <li class="nav-item" style="margin-left: 20px;">
      <p class="nav-link"style="margin-top:8px;">Xem tài khoản:</p>
   </li>
   <li class="nav-item" style="margin-left:10px;font-weight: bold">
   <form action="../profile.php" method="post">
   <input  name="userid" value="<?php echo "".$_SESSION['userid'];?>" class="btn btn-success"style="display:none;">
   <input type="submit" name="username" value="<?php echo "".$_SESSION['username']; ?>" class="btn btn-success"style="margin-top:8px; background-color: #28a745;">
   </form>
   	
   </li>
   <li class="nav-item icn">
      <a class="nav-link" href="cart.php"><i style="font-size:35px;margin-left:20px;"class="fas fa-cart-plus"></i></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="logoutfetch.php"><button type="button" class="btn btn-danger bt" style="width:100px;margin-left: 10px;">Đăng xuất</button></a>
   </li>
  </ul>
</nav>
<section class="row">
  <article class="col-md-12">

	      <nav class="navbar navbar-expand-sm bg-light navbar-light">

 
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#fantasy">Tưởng tượng</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#horror">Kinh dị</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#comic">Truyện tranh</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#education">Giáo dục</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#kids">Trẻ em</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Literature">Sách văn học</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Belongings">Đồ dùng </a>
    </li>
  </ul>
 
  
</nav>
</article>
<section class="row" style="margin-top:25px;margin-left:15px;" >

  <!--php connection stat-->
<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];
$sel="SELECT * FROM addproducts WHERE id='$id'";
$sl=$con->query($sel);
while($row=$sl->fetch_assoc()){

?>
<!--product details-->

 <aside class="3">
    <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>

    <img src="../admin/pimages/<?php  echo $row['image'];?>" alt="Courts fool book cover page" style="width:300px;box-shadow:2px 2px 4px 4px #ff0066">
  </aside>
<aside class="6" style="margin-left: 50px;">
    <h2><span class="prdhd" style="font-size: 23px;"><?php echo $row['title'];?></span></h2>
    <p>Tác giả: <span style="color:#33ccff;font-size:20px;font-family:Simplified Chinese"><?php echo $row['author']; ?></span></p>
    <hr>

    

    <p style="border:1px solid black;display:inline-block;padding:2px;margin-left:3px;box-shadow: 1px 1px 2px 2px #505e62">Giá Bán<br><?php echo $row['sprice']; ?> VN Đồng</p><br>

    

    <p><img class="logo" src="logo/replacement.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff"> <img class="logo"  src="logo/nocontact.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff">  <img class="logo"  src="logo/delivered.png" alt="no contact delivery logo" style="width:60px; height:60px;border:2px solid #ffccff;border-radius:50%;box-shadow:1px 1px 2px 2px #ccccff"></p>

    <p><a href="#"  class="log"  style="font-size:12px;">Được đổi trả trong 3 ngày</a><a href="#"  class="log" style="font-size:12px;">Giáo đến tận cửa nhà bạn</a><a href="#"  class="log" style="font-size:12px;mả">Giao hàng siêu tốc</a></p>
    <button id="sh">Đọc thêm miêu tả sản phẩm</button>
    <div id="pp"><?php echo $row['description'];?></div>  
    <hr>



  </aside>
  <aside class="2" style="margin-left:10px;border:1px solid black;box-shadow:1px 1px 2px 2px  #adad85;padding:10px;">

    <form action="viewadcrtfetch.php" method="post" enctype="multipart/form-data">
       <p><input type="hidden" name="ids" value="<?php echo $row['id']?>"></p>
       <p><input type="hidden" value="../admin/pimages/<?php  echo $row['image'];?>" name="img" ></p>
       <p><input type="hidden" name="titl" value="<?php echo $row['title']?>"></p>
       <p><input type="hidden" name="price" value="<?php echo $row['sprice']?>"></p>
    <p style="margin-left:20px;">Giá bán <?php echo $row['sprice']; ?> VN đồng<br>
    
    Giảm gốc: <del> <?php echo $row['prices']; ?> VN đồng</del><br>
    Giám giá: <?php echo $row['dprice']; ?> VN đồng<br>
    
    <label for="quantity">Số lượng:</label>
    <input type="number"  name="number" value="1" style="width:20%" min="1" max="99">
  <hr>
  <center>Bao gồm tất cả các loại thuế</center>
    <br>
  </p>
  <p> <span style="color:green;font-weight:bold;font-size:20px;margin-left:20px;">Trong kho</span><br>
    <span style="margin-left:20px;">Được bán bởi <a href="#">Nhà sách online</a></span>
  </p>

  <p><input type="submit" name="ad" class="form-control" style="text-align:center;background-color:rgba(255, 204, 0)" value="Thêm vào giỏ hàng"><br>
    <button class="form-control" style="text-align:center;background-color:rgba(255, 102, 0,0.8)">Mua ngay</button></p>
  
</form>
  </aside>

<!--next section-->
<section class="row">
  <article class="col-md-6" style="margin-left:320px;">

 
    
    
  </article>

  <?php } ?>
  
</section>


</section>

<!---start of a footer-->
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 bg-dark navbar-dark" style="width:100%;margin-top:50px;">

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
<!-- Footer -->


    </div>
    <script>
      $(function(){
$("#pp").hide();

$("#sh").click(function(){
$("#pp").toggle();
});
});
    </script>
</body>
</html>