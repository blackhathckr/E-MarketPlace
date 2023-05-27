<?php
session_start();
include_once "conn.php";
$pid=$_GET['postid'];
$username=$_SESSION['log'];
$sql="UPDATE posts SET current_like=current_like+1 WHERE post_id=$pid";
$query=mysqli_query($conn,$sql);
if($query)
{
?>
<script>alert("You Liked this Post");
window.location.href="user.php";
</script>
<?php
}
?>