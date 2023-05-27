<?php
session_start();

require 'database.php';


function userLogin($userdata){
    $con = $GLOBALS['db']; // you can access global variables using global array
    $data=array();
    $error=0;
    if($userdata['password']==''){
        $error++;
        $data['status']=false;
        $data['message']='Enter Your Password !';
    }
    if($userdata['username']==''){
        $error++;
        $data['status']=false;
        $data['message']='Enter Your Email Id !';
    }
    if($error>0){
        return $data;
    }
    $username=mysqli_real_escape_string($con,$userdata['username']);
    $password=mysqli_real_escape_string($con,$userdata['password']);
    $pass = md5($password);

    $query="SELECT * FROM users WHERE username='$username' && pass1='$pass'";
    $run = mysqli_query($con,$query);
    $user = mysqli_fetch_assoc($run) ?? array();
    if(count($user)>0){
        $_SESSION['user']=true;
        $_SESSION['userdata']=$user;

        $data['status']=true;
        $data['message']='User is logged in';
    }else{
        $data['status']=false;
        $data['message']='Incorrect Email Id / Password';
    }
    
    return $data;
}

function registerUser($userdata)
{
    $con = $GLOBALS['db']; // you can access global variables using global array
    $data=array();
    $error=0;
    


if($userdata['password']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Password !';
}
if($userdata['email_id']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Email Id !';
}
if($userdata['full_name']==''){
    $error++;
    $data['status']=false;
    $data['message']='Enter Your Full Name !';
}



$full_name=mysqli_real_escape_string($con,$userdata['full_name']);
$email_id=mysqli_real_escape_string($con,$userdata['email_id']);
$password=mysqli_real_escape_string($con,$userdata['password']);


// checking if email already registered
$q="SELECT * FROM users WHERE email_id='$email_id'";
$r = mysqli_query($con,$q);
$d = mysqli_fetch_all($r);
if(count($d)>0){
    $error++;
    $data['status']=false;
    $data['message']='Email Id Already Registered !';
}
if($error>0){
    return $data;
}

//ends 


    $query="INSERT INTO users(full_name,email_id,password) ";
    $query.="VALUES ('$full_name','$email_id','$password')";

    // return $query;

if(mysqli_query($con,$query)){
    $data['status']=true;
    $data['message']='Account Created !';
}else{
    $data['status']=false;
    $data['message']='Something Is Wrong !'; 
}
    return $data;
}


function getMessages(){
    $con = $GLOBALS['db'];
    $pid = $_SESSION['post_id'];
    $pd = $_GET['postid'];

    //$query = "SELECT grpmessages.message,grpmessages.created_at,users.username,users.user_id FROM grpmessages JOIN users ON grpmessages.user_id=users.user_id ORDER BY grpmessages.id ASC";
    //$query = "SELECT `$pid`.message, `$pid`.created_at , users.username,users.user_id FROM `$pid` JOIN users ON `$pid`.user_id=users.user_id ORDER BY `$pid`.id ASC ";
    $query = "SELECT post_message.message, post_message.date_message , users.username,users.user_id FROM post_message JOIN users ON post_message.user_id=users.user_id WHERE postid=$pd ORDER BY post_message.id ASC ";
    $run = mysqli_query($con,$query);
    if($run)
    {
    $data=mysqli_fetch_all($run,MYSQLI_ASSOC) ?? array();
    return $data;
    }
}

function sendMessage($data){
    $con = $GLOBALS['db'];
    $pid = $_SESSION['postid'];
    $pd = $_GET['postid'];
    $data['message']=mysqli_real_escape_string($con,$data['message']);
$query = "INSERT INTO post_message (user_id,postid,message) VALUES(".$data['user_id'].",'$pd','".$data['message']."')";
$run = mysqli_query($con,$query);
if($run){
    return true;
}else{
    return false;
}
}

//typingstatus
function getTypingStatus($data){
    $con = $GLOBALS['db'];
$query = "SELECT users.username FROM users JOIN typing_status ON users.user_id=typing_status.user_id WHERE typing_status.status=1 AND typing_status.user_id!=".$data['user_id'];
$run=mysqli_query($con,$query);
return mysqli_fetch_all($run,MYSQLI_ASSOC);
}

function updateTypingStatus($data){
    $con = $GLOBALS['db'];
    $status = $data['status'];
    $query="SELECT * FROM typing_status WHERE user_id=".$data['user_id'];
    $run=mysqli_query($con,$query);
    if(mysqli_num_rows($run)>0){
$query="UPDATE typing_status SET status=$status WHERE user_id=".$data['user_id'];
mysqli_query($con,$query);
    }else{
        $query = "INSERT INTO typing_status(user_id,status) VALUES(".$data['user_id'].",1)";
mysqli_query($con,$query);


    }



}