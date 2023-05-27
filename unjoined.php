<?php
ob_start();
session_start();
include_once "conn.php";
$username = $_SESSION['log'];
$postid = $_GET['postid'];
$postname = $_GET['postname'];
$sql1 = "SELECT * FROM users WHERE username='$username'";
$query1 = mysqli_query($conn, $sql1);
$res1 = mysqli_fetch_array($query1);
$userid = $res1['user_id'];
$sql0 = "SELECT * FROM posts WHERE post_id='$postid'";
$query0 = mysqli_query($conn, $sql0);
$res0 = mysqli_fetch_array($query0);
$postownerid = $res0['user_id'];
$sql4="UPDATE posts SET count_join=count_join-1 WHERE post_id=$postid";
   $query5= mysqli_query($conn,$sql4);
$sql2 = "DELETE FROM post_join WHERE username='$username' AND postid='$postid' AND user_id='$userid' AND post='$postname'";
$query2 = mysqli_query($conn, $sql2); 
if($query2)
{
    ?>
    <script>
        alert("You Unjoined this Post");
        window.location.href="user.php";
        </script>
<?php
}
else
{
    ?>
<script>
alert("You havent Joined this Post yet");
window.location.href="user.php";
</script>
<?php
}
ob_flush();
?>