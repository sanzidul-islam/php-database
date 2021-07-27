<?php 

include "dbconnect.php";

function login($userName, $Password){
    $conn=connect();
    $sql =$conn->prepare("SELECT * FROM users WHERE userName=? and Password=?");
    $sql->bind_param("ss",$userName, $Password);
    $sql->execute();
    $result=$sql->get_result();
    return $result->num_rows === 1 ;
}

?>