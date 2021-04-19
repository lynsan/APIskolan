function toggleMenu(){
    let menu = document.querySelector('.navlist');
    toggleDisplayNone(menu);
}

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
