function checkName( ){
  var name = document.getElementById("name").value;
  if(name!=="" && name!=null){
    document.getElementById("spanname").innerHTML='<i class="fa fa-check" aria-hidden="true"></i>';
  }
  else{
    document.getElementById("spanname").innerHTML ='<i class="fa fa-times" aria-hidden="true"></i>Please Enter your Name';
    return true;
  }
}

/*function checkNum(){
    var phone = document.getElementById("phonenum").value;
  if(isNaN(phone) || (phone.length > 10 || phone.length<10)){
    document.getElementById("name").innerHTML = '<i class="fa fa-times" aria-hidden="true"></i> Please Enter a valid Number';
    return false;
  }
  else{
    document.getElementById("spanphonenum").innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
    return true;
    }
}

function checkAdd(){
    var add = document.getElementById("address").value;
    if(add===" " || add===null){
        document.getElementById("spanadd").innerHTML = '<i class="fa fa-chtimeseck" aria-hidden="true"></i>Please Fill the Address';
        return false;
    }
    else{
        document.getElementById("spanphonenum").innerHTML = '<i class="fa fa-check" aria-hidden="true"></i>';
        return true;
    }
}
*/
function checkEmail(){
  var email = document.getElementById("email").value;
  var atposition=email.indexOf("@");  
  var dotposition=email.lastIndexOf(".");  
  if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length ){ 
    document.getElementById("spanemail").innerHTML='<i class="fa fa-times" aria-hidden="true"></i> Please Enter a valid Email ID';
    return false;
  }
  else{
    document.getElementById("spanemail").innerHTML='<i class="fa fa-check" aria-    hidden="true"></i>';
    return true;
  }
}

function checkPass(){
  var regex = (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
  var pwd = document.getElementById("password1").value;
  if(regex.test(pwd)){
    document.getElementById("spanpassword1").innerHTML = '<i class="fa fa-check" aria-    hidden="true"></i>';
    return true;
  }
  else{
    document.getElementById("spanpassword1").innerHTML = '<i class="fa fa-times" aria-    hidden="true"></i>Password Must Contain Atleast 8 character, one Number ,one UpperCase ,one LowerCase';
    return false;
  }
}

function matchPass(){
    var pwd1 = document.getElementById("password1").value;
    var pwd2 = document.getElementById("password2").value;
    if(pwd1==null || pwd1==""){
      document.getElementById("spanpassword2").innerHTML='<i class="fa fa-times" aria-    hidden="true">Please first fill out Password field';
      return false;
    }
  if(pwd1===pwd2){
    document.getElementById("spanpassword2").innerHTML='<i class="fa fa-check" aria-    hidden="true">';
    return true;
  }
  else{
    document.getElementById("spanpassword2").innerHTML='<i class="fa fa-times" aria-    hidden="true">Passwords do not Match';
    return false;
  }
}

function validateForm(){
    var istrue = false;
    isture = checkName();
   // isture = checkNum();
    isture = checkEmail();
    isture = checkPass();
    isture = matchPass();
    //isture = checkAdd();
    if(!isture){
        alert("Please fill correct information");
    }
	return istrue;
}