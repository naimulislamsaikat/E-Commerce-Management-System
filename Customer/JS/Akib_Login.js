
function Loginvalidation(){
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var valid = true;
    
    if(email === ""){
        document.getElementById("mailError").innerHTML = "Please enter your email";
        valid = false;
    }else{
        document.getElementById("mailError").innerHTML = "";
        valid = true;
    }

    if(password === ""){
        document.getElementById("passError").innerHTML = "Please enter your password";
        valid = false;
    }else{
        document.getElementById("passError").innerHTML = "";
        valid = true;
    }
    
    return valid;

}