<?php
$conn=mysqli_connect("localhost","root","","miniproject");
if(isset($_POST['apply'])){
	$sql="INSERT INTO admission	(fname,lname,mobile,email,application)VALUES('$_POST[fn]','$_POST[ln]','$_POST[mob]',
		
		'$_POST[em]','$_POST[app]')";
	 $x=mysqli_query($conn,$sql);
	 if($x==true)
	 {
	 		echo '<script>alert("Data Insert Successful")</script>';
	 }else
	 {
		header("Location:Admission.php?Data Not Insert");
		 }
 }
?>