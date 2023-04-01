<?php
    $conn = mysqli_connect("db","root","admin","appsend");

    if ($conn){
        echo ("banco conectado");
    }else{
        die(mysqli_error());
    }
    $conn->close();
?>