<?php 
session_start();
?>

<?php include_once "header.php"; ?>
<body>
 
  <div class="wrapper">

    <section class="form login">
      <header class="head" align="center" style="font-weight:bold;">Echobuyer Messenger </header>
      <h3 class="card-title" align="center" id="ec">Login to Authenticate your credentials </h3>
            
            <h5 class="card-title" align="center" id="ec">['Two Factor Verification']</h5>
            <hr />
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Username</label>
          <input type="text" name="username" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button" id="but">
          <input type="submit" name="submit" value="Continue to Chat" id="l">
        </div>
      </form>
      <div class="link">Return back to  <a href="../user.php">Home</a></div>
    </section>
    <hr />
    <h4 class="foot" align="center">Login to access the Echobuyer Messenger feature.<br /> You can search another user based upon the username associated with the post</h4>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
