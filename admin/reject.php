<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header('Location:index.php');
}
include_once "../conn.php";

$pid = $_GET['postid'];
$sql = "DELETE FROM posts WHERE postid=$pid";
$query=mysqli_query($conn,$sql);
if($query)
{
    ?>
<script>alert("Post Rejected");
window.location.href="approveposts.php";
</script>
<?php
}
?>