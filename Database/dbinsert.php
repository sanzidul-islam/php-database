<?php

require "dbconnect.php";

   function add($fname,$lname,$gender,$bdate,$reg,$p,$pp,$m,$userName,$Password){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO user (fname,lname,gender,bdate,reg,p,pp,m,userName,Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?)');
    $sql->bind_param('sssssssssss',$fname,$lname,$gender,$bdate,$reg,$p,$pp,$m,$userName,$Password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

?>