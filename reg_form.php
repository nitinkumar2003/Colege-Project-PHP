<?php
$conn=mysqli_connect("localhost","root","","miniproject");
if(isset($_POST['sign'])){

	// $name=$_POST['name'];
	// // echo"$name";
	// $u_email=$_POST['email'];
	// // echo"";
	// $f_name=$_POST['fname'];
	// // echo"$u_email";
	// $m_name=$_POST['mname'];
	// // echo"$m_name";
	// $mobile=$_POST['mobi'];
	// // echo"$mobile";
	// $gender=$_POST['gender'];
	// // echo"$gender";
	// $country=$_POST['country'];
	// // echo"$country";
	// $state=$_POST['state'];
	// // echo"$state";
	// $city=$_POST['city'];
	// // echo"$city";
	// $pincode=$_POST['pincode'];
	// // echo"$pincode";
	// $u_id=$_POST['userid'];
	// // echo"$u_id";
	// $password=$_POST['password'];
// echo"$password";	
	// $date=$_POST['date'];
 // $filename = $_FILES["img"]["name"];
 //    $tempname = $_FILES["img"]["tmp_name"];    
 //        $folder = "image/".$filename;
 // move_uploaded_file($tempname, $folder
	$imgname=$_FILES['img']['name'];
	$tmpname=$_FILES['img']['tmp_name'];
	$path="image/".$imgname;
	move_uploaded_file($tmpname,$path);

	 $sql="INSERT INTO reg_form(name,emal,fname,mname,dob,image,mobile,gender,country,state,city,pincode,userid,password)VALUES('$_POST[name]','$_POST[email]','$_POST[fname]',
		
		'$_POST[mname]','$_POST[dob]','$path','$_POST[mobi]','$_POST[gender]','$_POST[country]',
		'$_POST[state]','$_POST[city]','$_POST[pincode]','$_POST[userid]','$_POST[password]')";
	 $x=mysqli_query($conn,$sql);
	 if($x==true)
	 {
	 		header("Location:Login.php") ;
	 		echo '<script>alert("Data Insert Successful")</script>';
	 }else
	 {
		echo"Data Not Insert";
	 }
 }
?>