var darkm = document.getElementById("darkm");
darkm.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        darkm.src = "main_style/images/sun.png";
    }else{
        darkm.src = "main_style/images/moon.png";
    }
}