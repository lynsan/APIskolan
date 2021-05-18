function toggleSubmenu(ev){
    let submenu = ev.lastElementChild;
    //byt håll på pilen här
    toggleDisplayNone(submenu);
}

function toggleDisplayNone(element){
    if(element.classList.contains('d-none')) {
        element.classList.remove('d-none');
    }
    else{
        element.classList.add('d-none');
    }
}

function toggleMenu(){
    let medium = window.matchMedia("(min-width: 768px)");
    
    if(medium.matches){
        changeMenuWidth("40vw");
    }
    else{
        changeMenuWidth("75vw");
    }
}

function changeMenuWidth(newWidth){
    let menu = document.querySelector('.menu-container');
    if(menu.style.width == newWidth)
        {
            menu.style.width = "0";
            menu.style.border = "none";
            document.querySelector(".close-icon").style.visibility = "hidden";
        }
        else{
            menu.style.width = newWidth;
            menu.style.borderRight = "7px solid #BC5757";
            document.querySelector(".close-icon").style.visibility = "visible";
        }
}

function hideMenu(){
    let large = window.matchMedia("(min-width: 1200px)");
    let menu = document.querySelector('.menu-container');
    if(!large.matches){

        menu.style.width = "0";
        menu.style.border = "none";
        document.querySelector(".close-icon").style.visibility = "hidden";
    }
}


window.onresize = function(){
    let menu = document.querySelector('.menu-container');
    if(window.innerWidth >= 1200){
        menu.style.width = '20vw';
        menu.style.borderRight = "7px solid #BC5757";
        document.querySelector(".close-icon").style.visibility = "hidden";
    }
    else{
        menu.style.width = '0';
        menu.style.border = "none";
        document.querySelector(".close-icon").style.visibility = "hidden";
    }
}

 