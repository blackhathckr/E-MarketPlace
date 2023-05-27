<?php 
session_start();
$pid=$_GET['postid'];
include "conn.php";
$sql="DELETE FROM posts WHERE post_id=$pid";
$query=mysqli_query($conn,$sql);
if($query==true)
{
    ?>
    <script>
alert("Post Deleted");
window.location.href="user.php";
</script>
<?php 
}
else 
{
    ?>
    <script>
        alert("Something went Wrong");
        window.location.href="user.php";
        </script>
        <?php
}
?>