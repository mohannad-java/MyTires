
const formImg = document.querySelector(".formImg");
const fileInput = formImg.querySelector(".file_input");

let file;

formImg.addEventListener("click", () =>{
    fileInput.click();
});

fileInput.addEventListener("change", function(){
    file = this.files[0];

    showFile();
});

formImg.addEventListener("dragover", (event) =>{
    event.preventDefault();
});

// If user drop File on form
formImg.addEventListener("drop", (event) =>{
    event.preventDefault();

    file = event.dataTransfer.files[0];
    showFile();
});

function showFile()
{
    let fileType = file.type;

    let validExtenstions = ["image/jpeg", "image/jpg", "image/png"];

    if(validExtenstions.includes(fileType))
    {
        let fileReader = new FileReader();
        fileReader.onload = () =>{
            let fileURL = fileReader.result;

            let imgTag = `<img src="${fileURL}" alt="" />`;
            formImg.innerHTML = imgTag;
        }

        // fileReader.readAsDataURL(file);
    }
    else
    {
        swal({
            title: "ممنوع",
            text: "هذه الصيغ المسموح أستخدامها png - jpg - jpeg",
            icon: "error",
            button: "تمام",
          });
    }
}