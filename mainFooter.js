function mailToClipBoard(){
    var email = "jiri.syrovatko3@gmail.com";
    navigator.clipboard.writeText(email);
    alert("Mail copy to clipboard!");
};

let mailLink = document.querySelector(".mail");
mailLink.addEventListener("click", () => {
    mailToClipBoard();
});