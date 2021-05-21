<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>Đăng nhập</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keywords" content="Best online book store,Books at reasonable price,best books at best offer">
  <meta name="description" content="Online book store,books at affordable price">
  <!--font awesome kit code-->
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <!--external css-->
  <link rel="stylesheet" type="text/css" href="css/logiin.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- footer cdns-->

 <!--table css-->

 <style>

  

  table tr th{
    padding:10px;
    
  }

.frmmm{
  box-shadow: 2px 2px 4px 4px #00ff00;
}

  </style>

  <!--javascript validation of form signup-->
<script language="javascript">
  function check(){
    //for the name input validation
    if(document.form2.myname.value==""){
      alert("please eneter your name");
      document.form2.myname.focus();
      return false;
    }
    //for password validation
    if(document.form2.pwd.value==""){
      alert("please set a password");
      document.form2.pwd.focus();
      return false;
    }
    //for confirm password validation
    if(document.form2.cpwd.value==""){
      alert("please confirm your password");
      document.form2.cpwd.focus();
      return false;
    }
    //for if password and confirm password do not match
    if(document.form2.pwd.value!=document.form2.cpwd.value){
      alert("confirm password does not match");
      document.form2.cpwd.focus();
      return false;
    }
    //for phone no input validation
    if(document.form2.contactno.value==""){
      alert("please enter your phone no");
      document.form2.contactno.focus();
      return false;
    }
    //for DOB input validation
    if(document.form2.birthdate.value==""){
      alert("please select your birthdate");
      document.form2.birthdate.focus();
      return false;
    }
    //for address input validation
    if(document.form2.address.value==""){
      alert("please enter your address");
      document.form2.address.focus();
      return false;
    }
    //for pincode input validation
    if(document.form2.pincode.value==""){
      alert("please enter your area pincode");
      document.form2.pincode.focus();
      return false;
    }

    //for profile picture input validation
    if(document.form2.picture.value==""){
      alert("please upload your profile picture");
      document.form2.picture.focus();
      return false;
    }
    //for the email input validation
    if(document.form2.email.value==""){
      alert("please enter your email address");
      return false;
    }
    em=document.form2.email.value;
           f1=em.indexOf('@');
           f2=em.indexOf('@',f1+1);
           e1=em.indexOf('_');
           e2=em.indexOf('_',e1+1);
           n=em.length;
           if(!(f1>0 && f2==-1 && e1>0 &&e2==-1 && f1!=e1+1 && e1!=f1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1)){
            alert("please enter a valid email");
            document.form2.email.focus();
            return false;
           }
           return true;
  }
</script>
</head>

<body>
 
  <div class="container">
       <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="../index.php">
    <img class="profile" src="images/logopf.png" alt="logo" style="width:65px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">


  </ul>
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
   <li class="nav-item icn">
      <a class="nav-link" href="../missingcart.php"><i style="font-size:35px;margin-left:50px;"class="fas fa-cart-plus"></i></a>
   </li>
   
  </ul>
</nav>

<nav class="navbar navbar-expand-sm bg-light navbar-light">

 
  
  <!-- Links -->

 
  
</nav>
<section class="row">

    <article class="col-md-12">
      <p style="margin-left:450px">

     <input type="button" class="btn" id="sh" value="Đăng nhập" style=" background: linear-gradient(to bottom left, #00ffff 3%, #ff0066 100%);width:15%;">

     <input type="button" class="btn" id="th" value="Đăng ký" style=" background: linear-gradient(to bottom right, #66ff66 3%, #0099ff 100%);width:15%">
     </p>
    </article>
    <article class="col-md-12">
    
   <form class="dx" id="xx" name="form2" action="loginfetch.php" method="post">
   <img src="images/logopf.png" class="fc" alt="kitaab.com logo" width="70px" height="70px">
      <p class="ui xc">Nhà sách online</p>
      <p class="ux xc">Đăng nhập</p>

      <p class="xc">Nhập email của bạn:</p>
      <p class="xc"><input type="text" name="uid" autocomplete="off" autofocus="on" placeholder="Email ... " required></p>
      <p class="xc">Nhập mật khẩu của bạn:</p>
      <p class="xc"><input type="password" name="pwd" autocomplete="off" placeholder="Mật khẩu ... " required></p>
      <p class="xc"><input type="submit" name="login" value="Đăng nhập" class="btn btn-success"></p>

      <p class="xc">Bạn chưa có tài khoản ?<br> hãy nhấn đăng ký để tạo tài khoản nhé</p>
   </form>
    
      



    <!--signup form-->
     
       <!--form fields-->
       <div class="frmmm" id="xxx" >
         <form class="rt" action="signupfetch.php" method="post" class="po" enctype='multipart/form-data' name="form2">
         
        <p style="float:left;"><img class="fl" src="images/girl.jpg" width=360px; height="577px"></p>
        <h2 style="font-family: kalam;font-weight: bold;">Đăng ký ở đây!</h2>
        <table>
          
          <tr>
            <th> Tên:<span style="color:red";>*</span><input class="form-control"  type="text" name="myname" id="myname" placeholder="Nhập đầy đủ họ tên bạn">
            </th>

            <th>
              Email:<span style="color:red";>*</span><input class="form-control" type="email" name="email" id="email" placeholder="Nhập email của bạn">
            </th>
          </tr>

          <tr>
            <th>
              Đặt mật khẩu:<span style="color:red";>*</span><input  class="form-control" type="password" id="pwd" name="pwd" placeholder="Đặt mật khẩu ở đây">
          </th>
           <th>
              Nhập lại mật khẩu:<span style="color:red";>*</span><input  class="form-control" type="password" id="cpwd"  name="cpwd" placeholder="Nhập lại mật khẩu ở đây">
          </th>
          
          
          </tr>

          <tr>
            <th>
            Số điện thoại:<span style="color:red";>*</span><input class="form-control" type="tel" name="contactno" id="contactno" placeholder="Nhập số điện thoại của bạn" required="">
          </th>
            <th>
              Ngày sinh:<span style="color:red";>*</span><input class="form-control" type="date" name="birthdate" id="birthdate"  required="">
          </th>
         
          </tr>

           <tr>

             <th>
            GIới tính:<input type="radio" name="gender" value="Nam">Nam<input type="radio" name="gender" value="Nữ">Nữ</p><input type="radio" name="gender" value="Khác">Khác
          </th>
          
          
           <th>
             Địa chỉ:<span style="color:red";>*</span>
    <textarea name="address" id="address" class="form-control" style="width:200px; height:60px;" placeholder="Nhập địa chỉ ở đây" required></textarea>
          </th>
          <tr>
            <th>
            Pin code:<span style="color:red";>*</span><input class="form-control" type="tel" name="pincode" id="pincode" placeholder="Nhập pin code ở đây" required>
          </th>
            <th>Tải ảnh lên:<input class="form-control"  type="file" name="picture" id="picture"></th>
          </tr>

          <tr>
            <th>
              <input type="submit" class="btn btn" name="signup" value="Đăng ký" style="background: linear-gradient(to bottom, #ff3399 0%, #66ffff 100%);">
           
              <input type="reset" class="btn btn" value="Xóa" style="background: linear-gradient(to bottom, #ffff66 0%, #ff0066 100%);"></th>
          </tr>
          
        </table>
          
            <p style="text-align:center;">Đã là thành viên hay chưa? <br>nhấp vào nút "đăng nhập" ở trên để đăng nhập vào tài khoản của bạn </p>
          
       
      </form>
      </div>
  </article>
  </article>

  
</section>
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

   


    <script src="js/loginsignup.js"></script>
    <script>
      function check(){
        alert("your account has been successfully created");
      }
    </script>
</body>
</html>