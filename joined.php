<?php
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
$sql2 = "SELECT * FROM post_join WHERE username='$username' AND postid='$postid' AND user_id='$userid' AND post='$postname'";
$query2 = mysqli_query($conn, $sql2); 
    if (mysqli_num_rows($query2)!=0)
    {
        ?>
        <script>
            alert("You have already Joined this Post");
            window.location.href = "user.php";
        </script>
    <?php
    }
else {
    $sql4="UPDATE posts SET count_join=count_join+1 WHERE post_id=$postid";
   $query5= mysqli_query($conn,$sql4);
        $sql3 = "INSERT INTO post_join(postid,post_owner_id,post,user_id,username) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql3);
        $stmt->bind_param("iisis",$postid,$postownerid,$postname,$userid,$username);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        ?>
    <script>
        alert("Post Joined Successfully");
        window.location.href = "user.php";
    </script>
<?php
}
?>