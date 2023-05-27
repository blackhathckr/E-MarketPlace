<?php 
session_start();
if(!isset($_SESSION['log']))
{
    header("Location:user.php");
}
include "conn.php";
$un = $_GET['username'];
$sql1="SELECT * FROM users WHERE username='$un'";
$query1=mysqli_query($conn,$sql1);
$result1=mysqli_fetch_array($query1);
$uid=$result1['user_id'];
$pid=$_GET['postid'];
$comment=$_POST['cmt'];
$sql="INSERT INTO post_comment(user_id,username,post_id,comment) VALUES ('$uid','$un','$pid','$comment')";
$query=mysqli_query($conn,$sql);
if($query)
{
    ?>
    <script>
        alert("Your Comment was Posted Successfully");
        window.location.href="post_details.php?postid=<?php echo $pid; ?>";
        </script>
        <?php 
}
?>