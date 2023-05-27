<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header('Location:index.php');
}
include_once "../conn.php";

$username = $_GET['username'];
$sql = "DELETE FROM users WHERE username='$username'";
$query=mysqli_query($conn,$sql);
if($query)
{
    ?>
<script>alert("User Banned");
window.location.href="usersinfo.php";
</script>
<?php
}
?>