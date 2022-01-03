<?php

    $conn=mysqli_connect('localhost','root','','licpage');

    if(!$conn)
    {
        die(' Please Check Your Connection'.mysqli_error($conn));
    }
?>