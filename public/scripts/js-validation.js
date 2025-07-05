function validateRegisterForm() {
  let isValid=true;
  document.querySelectorAll('.error').forEach(el=>el.innerText='');
  const name=document.getElementById("name").value.trim();
  const email=document.getElementById("email").value.trim();
  const password=document.getElementById("password").value;

  if(name.length<3){
    document.getElementById("nameError").innerText="Name must be at least 3 characters.";
    isValid=false;
  }

  const emailRegex=/^[\w\-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
  if(!emailRegex.test(email)){
    document.getElementById("emailError").innerText="Enter a valid email.";
    isValid = false;
  }

  if(password.length<6){
    document.getElementById("passwordError").innerText="Password must be at least 6 characters.";
    isValid = false;
  }
  return isValid;
}