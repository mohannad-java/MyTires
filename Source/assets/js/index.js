const date = new Date();

const yrear = document.getElementById("year");

yrear.innerHTML = date.getFullYear();

const menu = document.querySelector(".menu_toggle");
const nav  = document.querySelector("nav");

const search = document.querySelector(".search");

// برمجة القائمة المنسدلة

//1
const selected = document.querySelector(".selected");

const optionsContainer = document.querySelector(".options_container");

const optionList = document.querySelectorAll(".option");

selected.addEventListener("click", () =>{
    optionsContainer.classList.toggle("active");
});

optionList.forEach(o => {
    o.addEventListener("click", () =>{
        selected.innerHTML = o.querySelector("label").innerHTML;
        optionsContainer.classList.remove("active");
        
    });
});

//2
const selected_2 = document.querySelector(".selected_2");

const optionsContainer_2 = document.querySelector(".options_container_2");

const optionList_2 = document.querySelectorAll(".option_2");

selected_2.addEventListener("click", () =>{
    optionsContainer_2.classList.toggle("active");
});

optionList_2.forEach(o => {
    o.addEventListener("click", () =>{
        selected_2.innerHTML = o.querySelector("label").innerHTML;
        optionsContainer_2.classList.remove("active");
    });
});

// 3
const selected_3 = document.querySelector(".selected_3");

const optionsContainer_3 = document.querySelector(".options_container_3");

const optionList_3 = document.querySelectorAll(".option_3");

selected_3.addEventListener("click", () =>{
    optionsContainer_3.classList.toggle("active");
});

optionList_3.forEach(o => {
    o.addEventListener("click", () =>{
        selected_3.innerHTML = o.querySelector("label").innerHTML;
        optionsContainer_3.classList.remove("active");
    });
});

const filtr = document.querySelector(".filtr");
const selectBox = document.querySelector(".select_box");
const selectBox2 = document.querySelector(".select_box2");
const selectBox3 = document.querySelector(".select_box3");

filtr.addEventListener("click", () =>{
    selectBox.classList.toggle("active");
    selectBox2.classList.toggle("active");
    selectBox3.classList.toggle("active");
    selectBox.style.display = "flex";
    selectBox2.style.display = "flex";
    selectBox3.style.display = "flex";
    search.classList.toggle("active");
    nav.classList.remove("active");

});

// إذا تحرك أخف لي القائمة المنسدلة
window.onscroll = () =>{
    selectBox.classList.remove('active');
    selectBox2.classList.remove("active");
    selectBox3.classList.remove("active");
    nav.classList.remove("active");
    search.classList.remove("active");
};

menu.addEventListener("click", function(){
    nav.classList.toggle("active");
    selectBox.style.display = "none";
    selectBox2.style.display = "none";
    selectBox3.style.display = "none";
    selectBox.classList.remove("active");
    selectBox2.classList.remove("active");
    selectBox3.classList.remove("active");
    search.classList.remove("active");
});