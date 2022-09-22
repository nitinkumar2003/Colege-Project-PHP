<?php
session_start();
include_once"conn.php";
if(!isset($_SESSION['u_em'])){
   header("Location:../login.php");

  }
   
  
?>



<!doctype html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!------->
<link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Light Bootstrap Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" /> <!------>


    <!-- Bootstrap core CSS     -->
    <?php
    include_once"include/css.php";
    ?>
    <style >
      
  .mainbody{
    background-color: 
      lightblue;
    height: 535px;
    border:1px solid black;


  }

  .profile{
   font-family: Tahoma, Verdana, sans-serif;
   height: 100px;
   /*border:0px solid black;*/
      /*border-radius: 20px;*/
      /*box-shadow: -10px -10px 15px  red;*/
font-size:10vw;
letter-spacing: 10px;
text-align: center;
text-decoration: underline;
padding-top: 15px;
line-height: 2;
text-shadow: 2px 2px 5px red;
   }

    .namea{
    /*border:1px ridge black;*/
     border-style: inset; 
    height: 35px;
    color: #000000;
    text-align: justify;
    font-weight: bold;
    background-color: white;
   }

   .name{
    border-style: inset;
    /*border:1px groove black; */
    height: 35px;
    color: #2F4F4F;
    font-weight: normal;
    background-color: white;
  }
   .image{
    background-color: white;
    border-style: inset;
    height: 280px;
   }
  .bt {
  border-right: 1px solid #dde0d7;
    border-bottom:1px solid #dde0d7;
    box-shadow: 5px 5px 5px #888888;
    border-radius: 40px;
    width: 89px;
   }
</style>

</head>
<body>

    

<?php
    include_once"include/sidebar.php";
    ?>
    <div class="main-panel">
        
    <?php
    include_once"include/navbar.php";
    ?>

<!--  -->
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
 <form class="form">

  <div class="row">
    <div class="col-md-2" style="height: 45px;border-style: inset; background-color:white;color: #000000; font-weight: bold;">Roll.No:-</div>
    <div class="col-md-10"  style="height: 45px;border-style: inset;background-color:white;  color: #2F4F4F; font-weight: normal"><?php echo $row['id'];?> </div>
    

  </div>
  <div class="row" style="border:1px solid black;">

    <div class="col-md-2">
      <div class="row namea" style=" color: #000000S;"> Name:-</div>
       <div class="row namea">Mother Name:-</div>
        <div class="row namea">Father Name:-</div>
         <div class="row namea">Gender:-</div>
          <div class="row namea"> Date Of Birth</div>
          <div class="row namea">Email:-</div>
          <div class="row namea">Mobile:-</div>
          <div class="row namea">Address:-</div>
    </div>
    <div class="col-md-8">
      <div class="row name" style="color: #2F4F4F"><?php echo $row['name'];?>  </div>
       <div class="row name"><?php echo $row['mname'];?> </div>
        <div class="row name"><?php echo $row['fname'];?> </div>
         <div class="row name"><?php echo $row['gender'];?> </div>
          <div class="row name"><?php echo $row['dob'];?> </div>
          <div class="row name"><?php echo $row['emal'];?> </div>
          <div class="row name"><?php echo $row['mobile'];?> </div>
          <div class="row name"><?php echo $row['city'];?>  <!--   -->  <?php echo $row['state'];?> </div>
    </div>
    <div class="col-md-2 image">
      <img src="<?php  echo $row['image'];?>" style="height:220px; width:150px;">
    </div>
  </div>


<br>
<div class="row rowbt"><button class="bt"><a href="../update.php?id=<?php echo $row['id'];?>">Edit</a></button></div>

</form>
</div>
 </div>
 </section>
 </main> 

<?php
}
}
?>

    <!--  -->
   



   
<?php
include_once"include/js.php";
?>
</body>
</html>
