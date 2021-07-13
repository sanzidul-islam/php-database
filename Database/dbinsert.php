<?php

require "dbconnect.php";

   function add($fname, $lname, $gender, $bdate, $reg, $p, $pp, $c, $m, $userName, $Password){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO users (fname,lname,gender,bdate,reg,p,pp,c,m,userName,Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $sql->bind_param('sssss',$fname, $lname, $gender, $bdate, $reg, $p, $pp, $c, $m, $userName, $Password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

?>