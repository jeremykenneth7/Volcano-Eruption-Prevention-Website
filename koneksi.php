<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "gunung";

    $konek = mysqli_connect($hostname, $username, $password, $database);
    if(!$konek){
        echo "connection failed";
    }
