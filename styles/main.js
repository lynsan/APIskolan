function toggleMenu(){
    let nav = document.querySelector('.navlist');
    console.log(nav);
    if(nav.classList.contains('d-none')) {
        nav.classList.remove('d-none');
    }
    else{
        nav.classList.add('d-none');
    }
}