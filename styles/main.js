function toggleSubmenu(ev){
    let submenu = ev.lastElementChild;
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
        changeMenuWidth("40vw")
    }
    else{
        changeMenuWidth("75vw")
    }
}

function changeMenuWidth(newWidth){
    let menu = document.querySelector('.menu-container');
    if(menu.style.width == newWidth)
        {
            menu.style.width = "0";
        }
        else{
            menu.style.width = newWidth;
        }
}


function hide_menu(){
    let large = window.matchMedia("(min-width: 1200px)");
    let menu = document.querySelector('.menu-container');
    if(!large.matches){

        menu.style.width = "0";
    }
}