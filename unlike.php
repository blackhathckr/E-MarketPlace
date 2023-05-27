<?php
ob_start();
use GuzzleHttp\Psr7\Header;
session_start();
include_once "conn.php";
$pid=$_GET['postid'];
$username=$_SESSION['log'];
$sql1="SELECT * FROM posts WHERE post_id='$pid'";
$query1=mysqli_query($conn,$sql1);
$result1=mysqli_fetch_array($query1);
/*if($pid == $result1['postid'] && $username==$result1['username'])
{
    
    ?>
    <script>alert("You have already Liked this Post");</script>
    
<?php
header("location:user.php");

?>
<?php
}
else{ */
$sql="UPDATE posts SET current_unlike=current_unlike+1 WHERE post_id=$pid";
$stmt=$conn->prepare($sql);
//$stmt->bind_param("is",$pid,$username);
$stmt->execute();
$stmt->close();
$conn->close();
//}
if($sql==true)
{
    ?>
    <script>alert("You UnLiked this Post");
    window.location.href="user.php";
    </script>
    <?php
}
ob_flush();
?>