function validate(){
    let name = document.myform.name.value;
    let mono = document.myform.mono.value;
    let email = document.myform.email.value;
    let uname = document.myform.uname.value;
    let pass = document.myform.pass.value;
    let cpass = document.myform.cpass.value;
    if(name == ""){
        alert("Name must be required!");
        return false;
    }
    else if(mono == ""){
        alert("Mobile No. must be required!");
        return false;
    }
    else if(email == ""){
        alert("E-mail must be required!");
        return false;
    }
    else if(uname == ""){
        alert("Username must be required!");
        return false;
    }
    else if(pass.length < 8){
        alert("Password must be Atleast 8 characters long!");
        return false;
    }
    else if(pass != cpass){
        alert("Password did not match!");
        return false;
    }
}