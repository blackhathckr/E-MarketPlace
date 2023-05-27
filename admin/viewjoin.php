<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header('Location:index.php');
}
include_once "../conn.php";
$sql="SELECT * FROM post_join order by postid ASC";
$query=mysqli_query($conn,$sql);

?>

<html>

<head>
    <title>View Join</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" crossorigin="anonymous">



</head>

<h1 align="center" id="H">Echobuyer Admin</h1>
<section id="section">
    <div class="row d-flex justify-content-center container">
        <div class="col-md-8">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;<span class="pending">posts Joined</span></div>

                </div>
                <div class="scroll-area-sm">
                    <perfect-scrollbar class="ps-show-limits">
                        <div style="position: static;" class="ps ps--active-y">
                            <div class="ps-content">
                                <ul class=" list-group list-group-flush">
                                    <?php while($res=mysqli_fetch_array($query))
                                    {
                                        ?>
                                        
                                    <li class="list-group-item">
                                        <div class="todo-indicator bg-warning"></div>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-2">
                                                    <div class="custom-checkbox custom-control">
                                                        <h6><?php echo $res['postid']; echo ".";?>&nbsp;</h6>
                                                        <!--<input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>-->
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="widget-content-left">
                                                    <div class="widget-heading" style="font-size:20px;color:black;font-weight:bold;"><?php echo $res['post'];?>
                                                    </div>
                                                    <div id="i" class="widget-subheading" style="font-size:13px;"><i ><span >Username : <?php echo $res['username'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                    User ID : <?php echo $res['user_id'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                Post ID : <?php echo $res['postid'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                   

                                              
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <?php
                                    }
                                    ?>
                               
                                </ul>
                            </div>

                        </div>
                    </perfect-scrollbar>
                </div>
                <div class="d-block text-right card-footer"><button class="mr-2 btn btn-link btn-sm"></button><a href="admin.php"class="btn btn-primary">Home</a></div>
            </div>
        </div>
    </div>
</section>
</body>

</html>