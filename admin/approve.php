<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header('Location:index.php');
}
include_once "../conn.php";

$pid = $_GET['postid'];
$sql = "UPDATE posts SET approve_id=1 WHERE post_id='$pid'";
$query=mysqli_query($conn,$sql);

if($query)
{
 

/* $sql2="CREATE TABLE  IF NOT EXISTS `$pid`(id int(11)  NOT NULL PRIMARY KEY AUTO_INCREMENT, postid int(100), user_id int(200), message varchar(200) , created_at timestamp)";
$query3=mysqli_query($conn,$sql2); */



    ?>
<script>alert("Post Approved");
window.location.href="approveposts.php";
</script>
<?php
}

?>