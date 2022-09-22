<?php
include_once"conn.php";
if(isset($_GET['apemail']))
{
    $em=$_GET['apemail'];
    $apsql="UPDATE users SET Message='Request Accepted Successfully!!'WHERE Email='$em'";
$x=mysqli_query($conn,$apsql);
if($x==true)
{
    $delsql="DELETE FROM userlogin WHERE Email='$em'";
    $y=mysqli_query($conn,$delsql);
    header("Location:index.php");

}
}
?>

<?php 

     if(isset($_GET['dlemail']))
     {

        $em=$_GET['dlemail'];

        $apsql="UPDATE users SET Message='Your Request Have Been Rejected!!' WHERE Email='$em'";
        $x=mysqli_query($conn,$apsql);
        if($x==true)
        {
            $delsql="DELETE FROM userlogin WHERE Email='$em'";
            $y=mysqli_query($conn,$delsql);
            header("location:index.php");
        }
    }
?>