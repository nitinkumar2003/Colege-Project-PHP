 
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
	.divup{
      border:1px solid white;
      border-radius: 20px;
      box-shadow: -10px -10px 15px  white;
   }

   .divdown{
   	border-top: 1px solid white;
   	border-radius: 20px;
   	background-color: #dde0d7;
   	box-shadow: 5px 9px 15px #888888;
   	margin-right: -18px;
   	margin-left: -17px;

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

<body>
    
    <!-- header-start -->
   <?php
include_once "seprate/header.php";
   ?>
    <!-- header-end -->
   <body style="background-color: #dde0d7;">
	<br><br><br>
  <form action="log_form.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 offset-4 divup">
				<div height=40px width="100px" class="divdown"></div>
				<br>
				<h2 class="text-center text-dark font-weight-bold">Welcome</h2>
				<br><br
				<div class="container text-center">
					<input type="text" class="form-control text" name="user" placeholder="Userid">
					<br><br>
					<input type="text" class="form-control text" name="pass" placeholder="Password">
					<br><br><br>
					<button class="btn btn-success bt-lg forbutton" name="log">Login</button>
					<br><br><br>
					<p> Don't have an Account? &nbsp;<a href="registration.php" class="text-dark font-weight-bold">Sign Up</a></p>
						<br><br><br>
				</div>
			</div>
		</div>
	</div>

</form>
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


