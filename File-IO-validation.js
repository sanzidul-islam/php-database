function isValid(){
    var FirstName = document.forms['ReForm']['fname'].value;
    var LastName = document.forms['ReForm']['lname'].value;
    var gender = document.forms['ReForm']['gender'].value;
    var Dob = document.forms['ReForm']['dbate'].value;
    var Religion = document.forms['ReForm']['reg'].value;
    var username = document.forms['ReForm']['userName'].value;
    var password = document.forms['ReForm']['Password'].value;
    if(FirstName === ""){
    document.getElementById('Ferror').innerHTML = "FirstName empty";
    
    }
    
    if(LastName === ""){
        document.getElementById('Lerror').innerHTML = "LastName empty";
        
        }
    if(gender === ""){
         document.getElementById('Gerror').innerHTML = "gender empty";
            
        }
    if(Dob === ""){
    document.getElementById('Doberror').innerHTML = "Dob empty";
    
    }
    if(Religion === ""){
    document.getElementById('Rerror').innerHTML = "Religion empty";
    
    }
    if(username === ""){
    document.getElementById('Uerror').innerHTML = "username empty";
    
    }
    if(password === ""){
    document.getElementById('Perror').innerHTML = "password empty";
    return false;
    }
    else{
        return true;
    }
    
    }