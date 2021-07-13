<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
 include "DB/dbread.php";
 $userName = $Password = "";
 $userNameEr = $PasswordEr = "";
 $Form_name = "";
 $From_pass ="";?>

    <h1>Login Form</h1>
   <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
   <label for="userName">User Name :</label>
        <input type="text" id="userName" name="userName">         <span style="color: red;"> * <?php echo $userNameEr;  ?></span> <br> <br>

        <a href=""></a>
        <label for="Password">Password :</label>
        <input type="Password" id="Password" name="Password">        <span style="color: red;"> * <?php echo $PasswordEr;  ?></span> <br> <br>

        <input type="submit" name="submit" value="Login"> <br> <br>
   </form>
        <a href="registration-form.php">Click to register</a> 

        <?php
       
        $flag= false;
        if($_SERVER["REQUEST_METHOD"] == "POST"){
         
          
          if (empty($_POST["userName"])) {
            $userNameEr = "User Name is required";
            $flag = true;
          }
      
          if (empty($_POST["Password"])) {
            $PasswordEr = "Password is required";
            $flag = true;
          }

          if(!$flag){
            $userName =  input($_POST["userName"]);
            $Password = input($_POST["Password"]);
            $result =login($userName,$Password );
            if($result){
              header("Location: welcome.php");
            
                
              
            }
            echo "<br>";
            echo "Invalid Password ";
          }
       

        
      }
        
      function input($data){
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        
     
        ?>  

</body>
</html>