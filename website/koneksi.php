<?php
    $server = "localhost";
    $username = "id21550623_dbmonitor123";
    $password = "D!}u3a@{WFeE]Y)Q";
    $database = "id21550623_dbmonitor";

    $koneksi = mysqli_connect($server, $username, $password, $database);
    
    if(mysqli_connect_error()){
        echo "Database gagal terhubung...!";
    }
    

?>
