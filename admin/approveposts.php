<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header('Location:index.php');
}
include_once "../conn.php";
$sql="SELECT * FROM posts WHERE approve_id=0";
$query=mysqli_query($conn,$sql);

?>

<html>

<head>
    <title>Approve Posts</title>
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
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;<span class="pending">Pending Posts</span></div>

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
                                                        <h6><?php echo $res['post_id']; echo ".";?>&nbsp;</h6>
                                                        <!--<input class="custom-control-input" id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>-->
                                                    </div>
                                                </div>
                                                &nbsp;
                                                <div class="widget-content-left">
                                                    <div class="widget-heading" style="font-size:20px;color:black;font-weight:bold;"><?php echo $res['title'];?><div class="badge badge-danger ml-2">Pending</div>
                                                    </div>
                                                    <div id="i" class="widget-subheading" style="font-size:13px;"><i ><span >Owner : <?php echo $res['username'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Date : <?php echo $res['post_date'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Area : <?php echo $res['area'];?> &nbsp;&nbsp;&nbsp;&nbsp;
                                                     Country: <?php echo $res['country'];?> &nbsp;&nbsp;&nbsp;&nbsp;
                                                     Count : <?php echo $res['client_count'];?>  &nbsp;&nbsp;&nbsp;&nbsp;
                                                     Search-Range: <?php echo $res['search_range'];?> &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Price : <?php echo $res['price'];?> &nbsp;&nbsp;&nbsp;&nbsp;
                                                    Discount : <?php echo $res['discount'];?> </span> </i></div>
                                              
                                                </div>
                                                <div class="widget-content-right">
                                                <a href="approve.php?postid=<?php echo $res['post_id']; ?>"><button class="border-0 btn-transition btn btn-outline-success">
                                                     <i class="fa fa-check">&nbsp;Approve</i></button></a>
                                                     <a href="reject.php?postid=<?php echo $res['post_id']; ?>">  <button class="border-0 btn-transition btn btn-outline-danger">
                                                        <i class="fa fa-trash">&nbsp;Reject</i>

                                                    </button></a>
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