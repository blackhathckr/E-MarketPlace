<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  } 
?>

<?php include_once "header.php"; ?>

<body>
  <h1 align="center" style="color:white;position:relative;margin-right:20px;">Echobuyer Messenger</h1>
  <br />
  <br />
  <br />
  <div class="wrapper">
  <h5 align="center" class="head">You can search another user based upon the username associated with the post</h5>
  <hr />
    <section class="users">
      
      <header>
        
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <!--<img src="php/images/<?php echo $row['img']; ?>" alt=""> -->
          <img src="php/images/pfp.jpg" alt="">
          <div class="details">
            <span><?php echo $row['username']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout" style="color:white;" >Home</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
       <div class="users-list"> 
       
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
