let menu = document.getElementsByClassName('menu');
let screen = window.matchMedia('(min-width: 992px) and (max-width: 1195px)');

screen.matches ? menu[0].classList.remove("navbar-expand-lg"): ""; 


function popUpFacebook(){

    let url = "https://www.facebook.com/sharer/sharer.php?u=https://www.wetechnologia.com.br/brazopolis/investimento-em-tecnologia.html&amp;src=sdkpreparse";

    window.open(url, "", "popup");

}


function popUpTwitter() {

    let url = "https://twitter.com/intent/tweet?text=Prefeitura&url=https://wetechnologia.com.br/brazopolis/investimento-em-tecnologia.html";

    window.open(url, "", "popup");

}

function popUpLinkedin() {
    let url = "https://www.linkedin.com/sharing/share-offsite/?url=https://wetechnologia.com.br/brazopolis/investimento-em-tecnologia.html";
    window.open(url, "", "popup");

}

function popUpWhatsApp(){
    let url = "https://api.whatsapp.com/send?text=https://wetechnologia.com.br/brazopolis/investimento-em-tecnologia.html";
    window.open(url, "", "popup");
}




