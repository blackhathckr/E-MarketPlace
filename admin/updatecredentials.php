<?php
session_start();
include_once "../conn.php";
if(!isset($_SESSION['admin_log']))
{
    header("Location:index.php");
}
?>
<?php
if(isset($_POST['update']))
{
   $opwd = $_POST['oldpwd'];
   $oldpwd = md5($opwd);
   $npwd = $_POST['newpwd'];
   $newpwd=md5($npwd);

   $sql = "SELECT * FROM admin";
   $query=mysqli_query($conn,$sql);
   $res=mysqli_fetch_array($query);

   if($oldpwd == $res['password'])
   {
    $sql2="UPDATE admin SET password='$newpwd' WHERE id=1";
    $query2 = mysqli_query($conn,$sql2);
   }
if($query2)
{
?>
<script>alert("Password Updated Successfully");
window.location.href="admin.php";
</script>
<?php
}
else{
    ?>
    <script>alert("Invalid Credential");
    window.location.href="admin.php";
    </script>
    <?php
}
}
?>
<html>
<head><title>Update Credentials</title>
   
    
        
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
   <link href=https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js rel="stylesheet">
   <link href=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js rel="stylesheet">
   <style>
       body {
           background-color: #f9f9fa;
           margin-left: 450px;
       }


       .flex {
           -webkit-box-flex: 1;
           -ms-flex: 1 1 auto;
           flex: 1 1 auto
       }

       @media (max-width:991.98px) {
           .padding {
               padding: 1.5rem
           }
       }

       @media (max-width:767.98px) {
           .padding {
               padding: 1rem
           }
       }

       .padding {
           padding: 5rem
       }


       .card {
           background: #fff;
           border-width: 0;
           border-radius: .25rem;
           box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
           margin-bottom: 1.5rem
       }


       .card-header {
           background-color: transparent;
           border-color: rgba(160, 175, 185, .15);
           background-clip: padding-box
       }

       .card-body p:last-child {
           margin-bottom: 0
       }

       .card-hide-body .card-body {
           display: none
       }

       .form-check-input.is-invalid~.form-check-label,
       .was-validated .form-check-input:invalid~.form-check-label {
           color: #f54394
       }
       #label
       {
           font-weight: bold;
       }
   </style>
</head>

<body>
<div >
   <div id="content" class="flex">
     

           <div class="page-content page-container" id="page-content">
               <div class="padding">
                   <div class="row">
                       <div class="col-md-6">
                           <h1 align="center">Echobuyer</h1>
                           <div class="card">
                               <div class="card-header" id="label"><strong style="font-size: 20px;">Update Credentials</strong></div>
                               <div class="card-body">
                                   <form method="POST" action="updatecredentials.php" enctype="multipart/form-data">

                                       <div class="form-group"><label id="label" class="text-muted" for="exampleInputEmail1">Old Password</label><input name="oldpwd" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required> </div>
                                       <div class="form-group"><label id="label" class="text-muted" for="exampleInputEmail1">New Password</label><input name="newpwd" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required> </div>
                                      
                                       
                                      
                                       <button type="submit" name="update" class="btn btn-primary">Update</button>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    </body>
</html>
