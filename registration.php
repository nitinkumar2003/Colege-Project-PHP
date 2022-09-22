 
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
include_once "seprate/css.php";
?>
<style>
    .body{
        background-color: orange;
    }
    .rg{
        color: red;
        font-size: 45px;
        text-align: center;
        margin-top: 10px;
        background-color: ;
        /*text-align: justify;*/
         /*vertical-align: top;*/
         text-decoration: underline;
         /*text-indent: 50px;*/
 l/*ine-height: 0.8;
 text-shadow: 2px 2px 5px red;
   font-family: "Times New Roman", Times, serif;
     font-style: italic;
       font-weight: bold;
        font-variant: small-caps;
*/
    }
.divup{
      border:1px solid white;
      border-radius: 20px;
      box-shadow: -10px -10px 15px  white;
   }    
.text{
    border-color: transparent;
    border-bottom: 1px solid black;
    background-color: #dde0d7;
      }
.forbutton{
    border-right: 1px solid #dde0d7;
    border-bottom:1px solid #dde0d7;
    box-shadow: 5px 5px 5px #888888;
    border-radius: 40px;
    width: 89px;
   }
</style>
    </head>

<body class="body">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
   <?php
include_once "seprate/header.php";
   ?>
    <!-- header-end -->

    <!-- slider_area_start -->
  <!--  <?php
// include_once "seprate/slide.php";


   ?> -->
 <main id="main pt-5">
 <section id="Registration" class="Registration section-bg mt-5">
 <div class="container" data-aos="fade-up">
 <div class="section-title mt-5">
    <div class="col-sm-4 offset-4 divup">
 <h2 class="rg">Registration </h2>
 <br>
</div>
 </div>
<br>
 <form action="reg_form.php" method="post" enctype="multipart/form-data">

    <div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" name="name" class="form-control text" 
id="name" placeholder="Name" required>
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="email" class="form-control text" name="email"
id="email" placeholder="Email" required>
 <div class="validate"></div>
 </div>
 </div>



<div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" name="fname" class="form-control text" 
id="name" placeholder="Father Name" >
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="mname"
id="email" placeholder="Mother Name">
 <div class="validate"></div>
 </div>

 </div>
<!--  -->
<div class="form-row">
 <div class="col-md-6 form-group">
 <input type="date" name="dob" class="form-control text" 
placeholder="DATE OF BIRTH" required>
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="file" class="form-control text" name="img"
id="image" placeholder="IMAGE" required>
 <div class="validate"></div>
 </div>

 </div>


 <div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" name="mobi" class="form-control text" 
id="name" placeholder="Mobile" required>
 <div class="validate"></div>
 </div>


 <div class="col-md-6 form-group">
 <select name="gender" id="gender" class="form-control text"required>
 <option value="">Select Gender</option>
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 </select>
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
 <div class="col-md-6 form-group"required>
 <select name="country" id="country" class="form-control text">
 <option value="">Select Country</option>
 <option value="India">India</option>
 <option value="Nepal">Nepal</option>
 <option value="US">US</option>
 <option value="UK">UK</option>
 <option value="Shri Lanka">Shri Lanka</option>
 </select>
 <div class="validate"></div>
 </div>
 <div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="state"
placeholder="Your state" >
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="city"required
id="city" placeholder="Your City" >
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="number" class="form-control text" name="pincode"
id="Pincode" placeholder="Your PIncode" >
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
<div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="userid"
placeholder="User Id "required>
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="Password" class="form-control text" name="password"
placeholder="Your Password"required >
 <div class="validate"></div>
 </div>
 </div>
  <div class="validate">
</div>
 </div>
 </div>
 <div class="mb-3">
 <div class="error-message"></div>

 </div>
 <div class="text-center"><button  class="btn btn-success bt-lg forbutton"
type="submit" name="sign">Signup</button><p> <br>Have an Account? &nbsp;<a href="login.php" class="text-dark font-weight-bold">Login</a></p></div>
<br>
 </form>
 </div>
 </section>
 </main>

        <!-- footer start -->
   <?php
include_once "seprate/footer.php";
?>
    <!-- footer end  -->
<?php
include_once "seprate/js.php";
?>

    <!-- JS here -->
    
</body>

</html>