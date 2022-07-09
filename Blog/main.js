for(let x = 0; x < document.querySelectorAll("a").length; x++){
    document.querySelectorAll("a")[x].addEventListener("click", function(){
        var linkId = this.innerHTML;
        document.querySelector(linkId).style.backgroundColor = blue;
    })
}
