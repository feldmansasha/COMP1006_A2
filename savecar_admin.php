<?php
    require './inc/database.php';
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $flag=true;
    require './inc/header.php';
    if(empty($first_name)){
        echo '<p>Enter you name</p>';
        $flag=false;
    }
    if(empty($last_name)){
        echo '<p>Enter you surname</p>';
        $flag=false;
    }
    if(empty($username)){
        echo '<p>Enter username</p>';
        $flag=false;
    }
    if(empty($password)){
        echo '<p>Enter password</p>';
        $flag=false;
    }
    if($flag){
        $password=hash('sha512', $password);
        $sql="INSERT INTO caradmins (first_name, last_name, username, password) VALUES
        ('$first_name', '$last_name', '$username', '$password')";
        $conn->exec($sql);
        echo '<h2>Your info is saved!</h2>';
        $conn=null;
    }
    ?>
<section>
    <div>
        <!-- success message after creating account -->
        <p>Account created, press on the button to gain access to the database!</p>
        <a href="signin.php" class="btn btn-primary">Sign In</a>
    </div>
</section>
