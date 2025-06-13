const mobileMenuBtn=document.getElementById("mobile-menu-btn");
const loginBtn=document.getElementById("login-btn");

mobileMenuBtn.addEventListener('click',()=>{
  document.getElementById('mobile-menu-options').classList.toggle("hidden");
});
