 
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
 <h2 class="rg">UPDATE </h2>
 <br>
</div>
 </div>
<br>
 <form  method="post" enctype="multipart/form-data">

    <div class="form-row"> 
<!--  -->
<?php
$conn=mysqli_connect("localhost","root","","miniproject");

$id=$_GET['id'];
$selectquery="SELECT *FROM reg_form WHERE id=$id";
$query=mysqli_query($conn,$selectquery);

$result=mysqli_fetch_assoc($query);

if(isset($_POST['sign'])){
 
  $imgname=$_FILES['img']['name'];
  $tmpname=$_FILES['img']['tmp_name'];
  $path="image/".$imgname;
  move_uploaded_file($tmpname,$path);

   // $sql="INSERT INTO reg_form(name,emal,fname,mname,dob,image,mobile,gender,country,state,city,pincode,userid,password)VALUES('$_POST[name]','$_POST[email]','$_POST[fname]',
    
   //  '$_POST[mname]','$_POST[dob]','$path','$_POST[mobi]','$_POST[gender]','$_POST[country]',
   //  '$_POST[state]','$_POST[city]','$_POST[pincode]','$_POST[userid]','$_POST[password]')";
  $id=$_GET['id'];

   $updatesql="UPDATE  reg_form SET id=$id,name='$_POST[name]',emal='$_POST[email]',fname='$_POST[fname]', mname='$_POST[mname]',dob='$_POST[dob]',image='$path',mobile='$_POST[mobi]',gender='$_POST[gender]',country='$_POST[country]',state='$_POST[state]',city='$_POST[city]',pincode='$_POST[pincode]',userid='$_POST[userid]',password='$_POST[password]'WHERE id=$id";
   $x=mysqli_query($conn,$updatesql);
   if($x==true)
   {
      ?>
      <script>
        alert('update successful');
      </script>
      <?php
     
   }else{
    ?>
    <script>
        alert('update successful');
      </script>
      <?php
   }
 }
?>
<!--  -->


 <div class="col-md-6 form-group">
 <input type="text" name="name" class="form-control text" 
id="name" placeholder="Name"  value="<?php echo $result['name'];?>">
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="email" class="form-control text" name="email"
id="email" placeholder="Email" value="<?php echo $result['emal'];?>" >
 <div class="validate"></div>
 </div>
 </div>



<div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" name="fname" class="form-control text" 
id="name" placeholder="Father Name" value="<?php echo $result['fname'];?>">
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="mname"
id="email" placeholder="Mother Name" value="<?php echo $result['mname'];?>">
 <div class="validate"></div>
 </div>

 </div>
<!--  -->
<div class="form-row">
 <div class="col-md-6 form-group">
 <input type="date" name="dob" class="form-control text" 
placeholder="DATE OF BIRTH" value="<?php echo $result['dob'];?>">
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="file" class="form-control text" name="img"
id="image" placeholder="IMAGE" value="<?php echo $result['image'];?>">
 <div class="validate"></div>
 </div>

 </div>


 <div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" name="mobi" class="form-control text" 
id="name" placeholder="Mobile" value="<?php echo $result['mobile'];?>">
 <div class="validate"></div>
 </div>


 <div class="col-md-6 form-group">
 <select name="gender" id="gender" class="form-control text" value="<?php echo $result['gender'];?>">
 <option value="">Select Gender</option>
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 </select>
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
 <div class="col-md-6 form-group">
 <select name="country" id="country" class="form-control text" value="<?php echo $result['country'];?>">
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
placeholder="Your state"  value="<?php echo $result['state'];?>">
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
 <div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="city"
id="city" placeholder="Your City" value="<?php echo $result['city'];?>">
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="number" class="form-control text" name="pincode"
id="Pincode" placeholder="Your PIncode" value="<?php echo $result['pincode'];?>">
 <div class="validate"></div>
 </div>
 </div>


 <div class="form-row">
<div class="col-md-6 form-group">
 <input type="text" class="form-control text" name="userid"
placeholder="User Id" value="<?php echo $result['userid'];?>">
 <div class="validate"></div>
 </div>

 <div class="col-md-6 form-group">
 <input type="Password" class="form-control text" name="password"
placeholder="Your Password" value="<?php echo $result['password'];?>">
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
type="submit" name="sign">update</button></div>
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