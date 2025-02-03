function validation(){

    var phone=document.getElementById('phone').value;
    var higherdegree=document.getElementById('higherdegree').value;
    var password=document.getElementById('password').value;

    var phonePattern=/^0[0-9]{10}$/;
    if(phone=="" || !phonePattern.test(phone))
    {
        document.getElementById("phoneerror").innerHTML ="Please enter a valid phone number";
        return false;
    }

    if(higherdegree=='Select Degree')
    {
        document.getElementById('higherdegreeerror').innerHTML ="Please select your higher degree";
        return false;
    }

    var passpattern=/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$&]).{8,}$/;
    if(password==""||!passpattern.test(password))
    {
        document.getElementById("passworderror").innerHTML ="Enter valid Password";
        return false;
    }

}
