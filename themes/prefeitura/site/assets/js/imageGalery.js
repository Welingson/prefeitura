let modal = document.getElementById('myModal')
let img = document.getElementById('modal-image');


function gallery(src) {
    img.src = src;
    modal.style.display = "block";
   
}

function closeModal(){
    modal.style.display = "none";
}

