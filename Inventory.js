function validateForm()
{
  var x = document.myForm.a_uname.value;
  var y = document.myForm.a_pwd.value;
  var p = document.myForm.s_uname.value;
  var q = document.myForm.s_pwd.value;

  if(x=="")
  {
    alert("Username must be filled out");
    return false;
  }
  if(y=="")
  {
    alert("Password must be filled out");
    return false;
  }
  if(p=="")
  {
    alert("Username must be filled out");
    return false;
  }
  if(q=="")
  {
    alert("Password must be filled out");
    return false;
  }
  alert("Login Successful");
  return true;
}

function commentValidate()
{
  var name = document.myForm.c_name.value;
  var subject = document.myForm.c_subject.value;
  var phone = document.myForm.c_phone.value;
  var email = document.myForm.c_email.value;
  var message = document.myForm.c_message.value;

  if(name=="")
  {
    alert("Please Enter a valid Name");
    return false;
  }
  if(subject=="")
  {
    alert("Please Enter the Correct Subject");
    return false;
  }
  if(phone=="")
  {
    alert("Please Enter the valid Phone Number");
    return false;
  }
  if(email.indexOf("@") == -1 || email=="")
  {
    alert("Please Enter the valid Email");
    return false;
  }
  if(message.length<=140)
  {
    alert("Please enter More Than 140 Characters");
    return false;
  }
  alert("Form Submitted Successfully!");
    
  return true;

}