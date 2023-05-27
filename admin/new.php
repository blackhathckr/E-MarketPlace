<?php
include_once "../conn.php";
if(isset($_POST['submit']))
{
    $pwd=$_POST['pwd'];
    $hpwd = md5($pwd);
    $sql="UPDATE admin SET password='$hpwd' WHERE id=1";
    $query=mysqli_query($conn,$sql);
    if($query)
    {
        ?>
        <script>alert("Password Updated")
        window.location.href="admin.php";
        </script>
        <?php
    }
}
?>
<html>
    <head>
        <title>Update Password</title>
    </head>
    <body>
        <form action="new.php" method="POST">
            <input type="text" name="pwd">
            <input type="submit" name="submit">
        </form>
    </body>
</html>