    let btnUpdate = document.querySelectorAll(".updateBtn");
    let form = document.querySelectorAll(".updateForm");

    for(let i=0; i < btnUpdate.length; i++){
        btnUpdate[i].onclick = function(){
            form[i].style.display = "block";
        }
    }
