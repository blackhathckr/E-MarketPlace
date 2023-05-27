<?php
$count=0;
include_once "../conn.php";
$log = $_POST["log"];
$pwd = $_POST["pwd"];
$hpwd=md5($pwd);
$sql ="SELECT * FROM admin where id=1";
$query = mysqli_query($conn,$sql);
if($res=mysqli_fetch_array($query)){
if ($log == "Admin" && $hpwd == $res['password']) {
     session_start();
     $_SESSION['admin_log']=$log;
 header("Location:../admin/admin.php");
} else {
     $count = 1;
}


if ($count == 1) {
?>
     <script>
          alert("Invalid Credentials");
          window.location.href = "index.php";
     </script>
<?php
}
}
?>
