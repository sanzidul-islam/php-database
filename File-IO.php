<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-io</title>
</head>
<body>
    <?php
     include "Database/dbinsert.php";
    $fname= $lname= $gender= $bdate= $reg= $p= $pp=$m=$userName=$Password="";
    $lnameEr= $fnameEr= $genderEr= $bdateEr= $regEr=$pEr=$ppEr=$mEr=$userNameEr=$PasswordEr="";
    $flag=false;
    $successfulMessage="";
    $errorMessage="";


    if($_SERVER['REQUEST_METHOD']==="POST"){
       
       

        if(empty( $_POST['fname'])) {
            $fnameEr = "First name can not be empty!";
            $flag=true;
            }
       if(empty($_POST['lname'])) {
            $lnameEr = "Last name can not be empty!";
            $flag=true;
            }

        if(empty($_POST['gender'])) {
            $genderEr = "gender  can not be empty!";
                $flag=true;
                }

        if(empty($_POST['bdate'])) {
          $bdateEr = "birth date  can not be empty!";
             $flag=true;
             }

        if(empty($_POST['reg'])) {
          $regEr = "religion  can not be empty!";
          $flag=true;
          } 
         
        if(empty( $_POST['p'])) {
            $pEr = "present address  can not be empty!";
               $flag=true;
               }

        if(empty($_POST['pp'])) {
          $ppEr = "permanent address can not be empty!";
          $flag=true;
             }

        if(empty($_POST['m'])) {
            $mEr = "mail can not be empty!";
            $flag=true;
        }
        if(empty($_POST['userName'])) {
            $userNameEr = "user name can not be empty!";
            $flag=true;
        }
        if(empty( $_POST['Password'])) {
            $PasswordEr = " can not be empty!";
            $flag=true;
            }
        if(!$flag){
              
              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              $gender= $_POST['gender'];
      
      
              $bdate= $_POST['bdate'];
              $reg = $_POST['reg'];
              $p= $_POST['p'];
              $pp= $_POST['pp'];
              $m= $_POST['m'];
              $userName= $_POST['userName'];
              $Password= $_POST['Password'];
              $result=add($fname, $lname, $gender, $bdate, $reg, $p, $pp, $m, $userName, $Password); 
                if($result){
                    $successfulMessage="successfully saved";
                }
                else{
                    $errorMessage="Error to save";
                }
                
            }
    }

    function input($data){
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"> 
    <fieldset>
        <legend>Basic information</legend>
        <br>
        <label for="fname">Enter your First-tname</label>
        <input type="text" id="fname" name="fname"> 
        <span style=color:red><?php echo $fnameEr;?></span>

        <label for="lname">Enter your Last-tname</label>
        <input type="text" id="lname" name="lname">
        <span style=color:red><?php echo $lnameEr;?></span>
        <br>
        <h4>Gender</h4>
        
        <input type="radio" value="male" name="gender">
        <label for="male">male</label>

        
        <input type="radio" value="female" name="gender">
        <label for="female">female</label>
        <span style=color:red><?php echo $genderEr;?></span>
        <br>
        <br>

        <label for="bdate">Enter your BOD</label>
        <input type="text" id="bdate" name="bdate">
        <span style=color:red><?php echo $bdateEr;?></span>
        <br>
        <br>
        <input type="checkbox" id="islam" name="reg">
        <label for="islam">Islam</label>
        
        <input type="checkbox" id="hinduism" name="reg">
        <label for="hinduism">Hinduism</label>

        <input type="checkbox" id="christianity" name="reg">
        <label for="christianity">Christianity</label>
        <span style=color:red><?php echo $regEr;?></span>
        <br>
        <br>
        </fieldset>
        <fieldset>
        <legend>Contact Information</legend>
        <br>
        <label for="p">Enter your address</label>
        <input type="text" id="p" name="p" >
        <span style=color:red><?php echo $pEr;?></span>
        
        <br>
        <br>

        <label for="pp">Enter your permanent address</label>
        <input type="text" id="pp" name="pp" >
        <span style=color:red><?php echo $ppEr;?></span>
        <br><br>

        
        <label for="m">Mail</label>
        <input type="text" id="m" name="m">
        <span style=color:red><?php echo $mEr;?></span>
        <br><br>
        <a class="link-button" target="_blank" href="www.facebook.com">facebook</a>
        <br>
        <br>
        </fieldset>
        <fieldset>
        <legend>Account information</legend> 
        <label for="userName">User Name :</label>
        <input type="text" id="userName" name="userName">
        <span style="color: red;"><?php echo $userNameEr;  ?></span>
        <br>
        <label for="Password">Password :</label>
        <input type="password" id="Password" name="Password">
        <span style="color: red;"><?php echo $PasswordEr;  ?></span>
        <br>
        </fieldset>
        <button id="sb">Submit</button> 
        <br><br>

        
      
    
</body>
</html>