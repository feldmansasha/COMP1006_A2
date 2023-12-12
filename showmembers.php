<?php
    require './inc/header.php';
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location:signin.php');
        exit();
    }
    else{
        require './inc/database.php';
        $sql="SELECT * FROM clubmembers";
        $result=$conn->query($sql);
        echo '<section class="person-row">';
        echo '<table class="table">
                <tr>
                <th scope="col">Full name</th>
                <th scope="col">Make</th>
                <th scope="col">Model</th>
                <th scope="col">Phone</th>
                <th scope="col">Plate</th>
                </tr>';
        foreach ($result as $row){
            echo '<tr>
                    <td>' . $row['fullname'] . '</td>
                    <td>' . $row['make'] . '</td>
                    <td>' . $row['model'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>' . $row['plate'] . '</td>
            </tr>';
        }
        echo '</table>';
        echo '<a class="btn btn-warning" href="./logout.php">Logout</a>';
        echo '</section>';
        $conn=null;
    }
    ?>