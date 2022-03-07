const userForm = document.querySelector("form.user");
const companyForm = document.querySelector("form.company");
const userBtn = document.querySelector("label.user");
const companyBtn = document.querySelector("label.company");

companyBtn.onclick = (() =>{
    userForm.style.marginRight = "-50%";
});

userBtn.onclick = (() =>{
    userForm.style.marginRight = "0%";
});