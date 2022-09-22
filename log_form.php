<?php
include_once"seprate/conn.php";
session_start();
if(isset($_POST['log']))
{
    $email=$_POST['user'];
    $pass=$_POST['pass'];

    $sql_r="SELECT * FROM reg_form WHERE userid='$email'";
    $result=mysqli_query($conn,$sql_r);
    if(mysqli_num_rows($result)>0)
    {
    $row=mysqli_fetch_assoc($result);
        if($row['password']==$pass)
    {
       $_SESSION['u_em']=$email;
        header("Location:student/userprofile.php");
    }else
    {
       
        header("Location:Login.php?password not match");
    }
}else
{
    
    header("Location:Login.php?userin not match");
}
}
?>