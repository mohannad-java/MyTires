function alertSweet()
{
swal({
    title: "تم إتمام الطلب",
    text: "أرسلنا طلبك للشركة",
    icon: "success",
    button: "تمام",
  });

}

var selectField = document.getElementById("selectField");
var selectText  = document.getElementById("selectText");
var options     = document.getElementsByClassName("options");
var list        = document.getElementById("list");
var arrowIcon   = document.getElementById("arrowIcon");
var tm          = document.getElementById("tm");

selectField.onclick = function()
{
  list.classList.toggle("hide");
  arrowIcon.classList.toggle("rotate");
  tm.classList.toggle("active");
}

for(option of options)
{
  option.onclick = function()
  {
    selectText.innerHTML = this.textContent;
    
  }

}

// إذا تحرك أخف لي القائمة المنسدلة
window.onscroll = () =>{
  list.classList.remove("hide");
  arrowIcon.classList.remove("rotate");
  tm.classList.remove("active");
};