function namecheck_registration()
{
    var name = document.getElementById("name").value;

    if(!name)
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "Enter your firstname";
        return false;
    }
    else if(!isNaN(name))
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "Name can't be a number";
        return false;
    }
    else if(name.length < 3)
    {
        document.getElementById("nameerr").style.color = "red";
        document.getElementById("nameerr").innerHTML = "Name must be atleast less than 3";
        return false;
    }
    else
    {
        document.getElementById("nameerr").style.color = "green";
        document.getElementById("nameerr").innerHTML = "Name format ok";
        return true;
    }
}


function addresscheck_registration()
{
    var address = document.getElementById("address").value;

    if(!address)
    {
        document.getElementById("addresserr").style.color = "red";
        document.getElementById("addresserr").innerHTML = "Enter your Address";
        return false;
    }
    
    else if(address.length < 3)
    {
        document.getElementById("addresserr").style.color = "red";
        document.getElementById("addresserr").innerHTML = "Address must be atleast less than 3";
        return false;
    }
    else
    {
        document.getElementById("addresserr").style.color = "green";
        document.getElementById("addresserr").innerHTML = "Address format ok";
        return true;
    }
}





function email_registration()
{
    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email = document.getElementById("email").value;

    if(!email)
    {
        document.getElementById("emailerr").style.color = "red";
        document.getElementById("emailerr").innerHTML = "Enter your email";
        return false;
    }
    else if(email.match(emailpattern))
    {
        document.getElementById("emailerr").style.color = "green";
        document.getElementById("emailerr").innerHTML = "Email Pattern Valid";
        return true;
    }
    else
    {
        document.getElementById("emailerr").style.color = "red";
        document.getElementById("emailerr").innerHTML = "Email Pattern invalid";
        return false;
    }
}

function nid_registration()
{
    var nid = document.getElementById("nid").value;

    if(!nid)
    {
        document.getElementById("niderr").style.color = "red";
        document.getElementById("niderr").innerHTML = "Enter your nid";
        return false;
    }
    else if(nid.length == 8 && !isNaN(nid))
    {
        document.getElementById("niderr").style.color = "green";
        document.getElementById("niderr").innerHTML = "NID formet is valid";
        return true;
    }
    else
    {
        document.getElementById("niderr").style.color = "red";
        document.getElementById("niderr").innerHTML = "NID must contain 8 numaric value";
        return false;
    }
}

function phone_registration()
{
    var phonepatter = /^\+?(88)?0?1[3456789][0-9]{8}\b/;
    var phone = document.getElementById("phone").value;

    if(!phone)
    {
        document.getElementById("phoneerr").style.color = "red";
        document.getElementById("phoneerr").innerHTML = "Enter your phone number";
        return false;
    }
    else if(phone.length != 14)
    {
        document.getElementById("phoneerr").style.color = "red";
        document.getElementById("phoneerr").innerHTML = "Phone invalid";
        return false;
    }
    else if(isNaN(phone))
    {
        document.getElementById("phoneerr").style.color = "red";
        document.getElementById("phoneerr").innerHTML = "Invalid";
        return false;
    }
    else if(phone.match(phonepatter))
    {
        document.getElementById("phoneerr").style.color = "green";
        document.getElementById("phoneerr").innerHTML = "Valid OK";
        return true;
    }
}

function password_registration()
{
    var pass = document.getElementById("password").value;

    if(!pass )
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password required";
        return false;
    }
    else if(pass.length <= 6)
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password must be greater than 6";
        return false;
    }
    else if(pass.search(/[A-Z]/) < 0)
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password must contain atleast one uppercase letter";
        return false;
    }
    else if(pass.search(/[a-z]/) < 0)
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password must contain atleast one lowercase letter";
        return false;
    }
    else if(pass.search(/[^\W]@/) < 0)
    {
        document.getElementById("passerr").style.color = "red";
        document.getElementById("passerr").innerHTML = "password must contain atleast one special character";
        return false;
    }
    else
    {
        document.getElementById("passerr").style.color = "green";
        document.getElementById("passerr").innerHTML = "password formet ok";
        return true;
    }
}

function confirm_password_registration()
{
    var pass = document.getElementById("password").value;
    var cpass = document.getElementById("cpassword").value;

    if(!cpass )
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = "password required";
        return false;
    }
    else if(cpass.length <= 6)
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = 
        "password must be greater than 6";
        return false;
    }
    else if(cpass.search(/[A-Z]/) < 0)
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = 
        "password must contain atleast one uppercase letter";
        return false;
    }
    else if(cpass.search(/[a-z]/) < 0)
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = 
        "password must contain atleast one lowercase letter";
        return false;
    }
    else if(cpass.search(/[^\W]@/) < 0)
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = 
        "password must contain atleast one special character";
        return false;
    }
    else if(pass === cpass)
    {
        document.getElementById("cpasserr").style.color = "green";
        document.getElementById("cpasserr").innerHTML = "password and confirm password is matched";
        return true;
    }
    else if(pass != cpass)
    {
        document.getElementById("cpasserr").style.color = "red";
        document.getElementById("cpasserr").innerHTML = "password and confirm password not matched";
        return false;
    }
    else
    {
        document.getElementById("cpasserr").style.color = "green";
        document.getElementById("cpasserr").innerHTML = 
        "password format ok";
        return true;
    }
}


function form_check_registration()
{
    if(namecheck_registration() == true  &&  email_registration() == true && nid_registration()  == true && phone_registration()  == true &password_registration () == true && confirm_password_registration() == true )
    {
        return true;
    }
    else
    {
        return false;
    }
}

