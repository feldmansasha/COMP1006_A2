<?php
$username=$_POST['username'];
$password=hash('sha512', $_POST['password']);
require 'database.php';
$sql="SELECT user_id FROM caradmins WHERE username='$username' AND password='$password'";
$result=$conn->query($sql);
$count=$result->rowCount();
if($count==1){
    echo '<p>Found your account!</p>';
    foreach($result as $row){
        session_start();
        $_SESSION['user_id']=$row['user_id'];
        Header('Location: ../showmembers.php');
    }
}
else{
    echo '<p>Did not find your account or you have not signed up!</p>';
}
$conn=null;
?>
