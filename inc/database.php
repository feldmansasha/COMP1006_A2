<?php
try {
    $conn=new PDO('mysql:host=172.31.22.43;dbname=Aleksandr200544581', 'Aleksandr200544581', 'PKpf0BU5Lv');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "<p>Connection Failed: </p>" . $e->getMessage();
}
?>