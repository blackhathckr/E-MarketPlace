<?php
require 'function.php';


$_SESSION['post_id']=$_GET['postid'];


if(isset($_GET['register'])){
  $data=registerUser($_POST);
  echo json_encode($data);  
}

if(isset($_GET['login'])){
    $data=userLogin($_POST);
    echo json_encode($data);  
  }

  if(isset($_GET['getmessages'])){
    $data=getMessages();
    
   if($data)
    {
    foreach($data as $message){
      ?>

      <style> 
#M
{
  background-color:#37517e;
  border-radius: 15px;
}
#m
{
  color:white;
}

#um
{
  color:white;
  border-radius: 5px;
}
#dt
{
  color:white;
}

</style>
<div class="card m-2 <?=$message['user_id']==$_SESSION['userdata']['user_id']?'float-end bg-info  ':''?>" style="width: 18rem;">
<div class="card-body" id="M">
<?=$message['user_id']!=$_SESSION['userdata']['user_id']?'<h5 class="card-title" id="um">'.$message['username'].'</h5>':''?>
<h6 class="card-subtitle mb-2 " id="dt"><?=date('d M Y, h:i A',strtotime($message['date_message']))?></h6>
<p class="card-text" id="m"><?=$message['message']?></p>
</div>
</div>
      <?php
    }
    
  }  
 }
  

  if(isset($_GET['sendmessage']) && isset($_SESSION['user']) && $_SESSION['user']==true){

    $data['user_id']=$_SESSION['userdata']['user_id'];
$data['message']=$_POST['message'];
if(!sendMessage($data)){
echo "<script>alert('enter something first');</script>";
}

  }


  if(isset($_GET['typing']) && isset($_SESSION['user']) && $_SESSION['user']==true){
$data['user_id']=$_SESSION['userdata']['user_id'];
$data['status']=$_POST['typing'];
updateTypingStatus($data);
  }

  if(isset($_GET['typingstatus']) && isset($_SESSION['user']) && $_SESSION['user']==true){
    $d['user_id']=$_SESSION['userdata']['user_id'];
    $data = getTypingStatus($d);
    foreach($data as $user){
     
      echo $user['full_name'];
      echo count($data)>1?',':'';
    }
if(count($data)>0){
  echo " is typing...";

}
    
    
    
      }