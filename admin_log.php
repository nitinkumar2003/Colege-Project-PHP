<?php
$conn=mysqli_connect("localhost","root","","miniproject");
if(isset($_POST['adminlog']))
{
    $adminid=$_POST['adminid'];
    $pass=$_POST['adminpass'];

    $sql_r="SELECT * FROM adminlogin WHERE userid='$adminid'";
    $result=mysqli_query($conn,$sql_r);
    if(mysqli_num_rows($result)>0)
    {
    $row=mysqli_fetch_assoc($result);
        if($row['password']==$pass)
    {
        header("Location:admin/userregistration.php");
    }else
    {
        header("Location:Adminlogin.php?email not match");
    }
}else
{
    header("Location:Adminlogin.php?password not match");
}
}

?>