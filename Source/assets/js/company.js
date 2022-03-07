const date = new Date();

const yrear = document.getElementById("year");

yrear.innerHTML = date.getFullYear();

const menu = document.querySelector(".menu_toggle");
const nav  = document.querySelector("nav");

menu.addEventListener("click", function(){
    nav.classList.toggle("active");
});


window.onscroll = () =>{
    nav.classList.remove("active");
};
