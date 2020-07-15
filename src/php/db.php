<?php
    $connection = mysqli_connect('localhost', 'root', '', 'consulting');
    $sql = "INSERT INTO users(id,firstname,lastname,phonenumber,descriptions)";
    $sql .= "VALUES('$id','$firstname','$lastname','$phonenumber','$description')";
    $result = mysqli_query($connection,$sql);