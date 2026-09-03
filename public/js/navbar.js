window.addEventListener("scroll", function(){

    const navbar = document.querySelector(".brin-navbar");

    if(window.scrollY > 80){
        navbar.classList.add("scrolled");
    }else{
        navbar.classList.remove("scrolled");
    }

});
