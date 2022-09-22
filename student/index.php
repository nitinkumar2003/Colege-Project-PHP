<?php
include_once"conn.php";
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
    <meta name="viewport" content="width=device-width" />	<!------>


    <!-- Bootstrap core CSS     -->
    <?php
    include_once"include/css.php";
    ?>
</head>
<body>

<div class="wrapper">
    

<?php
    include_once"include/sidebar.php";
    ?>
    <div class="main-panel">
        
    <?php
    include_once"include/navbar.php";
    ?>
   <div class="container">
  <table class="table">

  <thead>
  <tr class="table-secondary">.
        <th><h6>Id:-</h6></th>
        <th><h6>Name:-</h6></th>
        <th><h6>Email:-</h6></th>
        <th><h6>Mobile:-</h6></th>
        <th><h6>Date</h4></th>
        <th><h6>Doctor</h6></th>
        <th><h6>Department</h6></th>
        <th><h6>Approver/Delete</h6></th>

      </tr>
    </thead>
 
   <tbody>

<?php
	$sql="SELECT *FROM userlogin";
	$x=mysqli_query($conn,$sql);
	if(mysqli_num_rows($x)>0)
		
		{
			while($row=mysqli_fetch_array($x))
			{
	

        ?>

<tr class="table-secondary">
        

 <td class="table-primary"><?php echo $row['Id'];?></td>
  <td class="table-secondary"><?php echo $row['Name'];?></td>
  <td class="table-success"><?php echo $row['Email'];?></td>
  <td class="table-danger"><?php echo $row['Mobile'];?></td>
  <td class="table-warning"><?php echo $row['Date'];?></td>
  <td class="table-info"><?php echo $row['Doctor'];?></td>
  <td class="table-dark"><?php echo $row['Department'];?></td>
 <td>
        <a href="Approve.php?apemail=<?php echo $row['Email'];?>"class="bg-primary" style="border:none;color:green;border-radius:360px;">
        Approve</a><br>
        <a href="Approve.php?dlemail=<?php echo $row['Email'];?>"class="bg-primary" style="border:none;color:red;border-radius:360px;">
       Decline</a>
 </tr>     
      
   

<?php 

    }
			}
			?>

</tbody>
  </table>
</div>


       <?php
include_once"include/footer.php";
?>
<?php
include_once"include/js.php";
?>
</body>
</html>
