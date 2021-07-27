function isValid(){
    var UserName = document.forms['LForm']['userName'].value;
    var Password = document.forms['LForm']['Password'].value;
    if(UserName === ""){
    document.getElementById('Uerror').innerHTML = "UserName empty";
    
    }
    
    if(Password === ""){
    document.getElementById('Perror').innerHTML = "Password empty";
    return false;
    }
    else{
        return true;
    }
    
    }