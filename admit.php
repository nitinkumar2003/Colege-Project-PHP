 <?php
session_start();
include_once"seprate/conn.php";
?>

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
<style >
  .mainbody{
    background-color: 
      lightblue;
    height: 500px;

  }

	.profile{
   
   /*border:0px solid black;*/
      /*border-radius: 20px;*/
      /*box-shadow: -10px -10px 15px  red;*/
font-size: 50px;
letter-spacing: 10px;
text-align: center;
text-decoration: underline;
padding-top: 15px;
line-height: 1;
text-shadow: 2px 2px 5px red;
   }
   .name{
    border:1px solid black; 
    height: 50px;
   }
   .image{
    border:1px solid black;
    height: 300px;
   }




   .namen{
    border:1px solid black;
    height: 300px;
   }
</style>

    </head>

    
    <!-- header-start -->
   <?php
include_once "seprate/header.php";
   ?>
    <!-- header-end -->
   <body>
 <?php

  $sql="SELECT *FROM reg_form WHERE userid='$_SESSION[u_em]'";
  $x=mysqli_query($conn,$sql);
  if(mysqli_num_rows($x)>0)
    
    {
      while($row=mysqli_fetch_array($x))
      {
  
  ?>  
  
	<main id="main pt-5">
 <section id="Registration">
 <div class="container-fluid mainbody">
 <div class="profile">
 <h2> USER PROFILE</h2>
 </div>
 <br>
 <form>
   <div class="row">
   <div class="col-md-3"></div>
   <div class="col-md-4 ">
     <div class="row name">Roll NO.<?php echo $row['id'];?></div>
     <div class="row name"> Name:-<?php echo $row['name'];?></div>
     <div class="row name">Geder:-<?php echo $row['gender'];?></div>
     <div class="row name"> DOB:-<?php echo $row['dob'];?></div>
     <div class="row name">Email:-<?php echo $row['emal'];?></div>
     <div class="row name" >Mobile:-<?php echo $row['mobile'];?></div>
     </div>
<!-- <div class="col-md-1"></div> -->
      <div class="col-md-2 image"><img src="<?php  echo $row['image'];?>" style="height:220px; width:200px;"><input type="submit"></div>
   <div class="col-md-3"></div>
</div>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6 name">Address:-<?php echo $row['city'];?>  <?php echo $row['state'];?></div>
  <div class="col-md-3"></div>

</div>
</form>
 </section>
 </main> 




<?php
}
}
?>
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


