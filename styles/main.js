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

function checkAnswer(ev){
    let ans = ev;
    if(ans.classList.contains('correct')){
        ans.style.background = "green";
    }
    else{
        ans.style.background = "red";
        let correctAnswer = document.querySelector('.correct');
        console.log(correctAnswer);
        correctAnswer.style.background = "green";
    }
}

function nextQuestion(){
    let activeQuestion = document.querySelector('.active-question');
    let newQuestion = activeQuestion.nextElementSibling;

    newQuestion.classList.add('active-question');
    activeQuestion.classList.remove('active-question');
}


window.onresize = function(){
    let menu = document.querySelector('.menu-container');
    if(window.innerWidth >= 1200){
        menu.style.width = '20vw';
    }
    else{
        menu.style.width = '0';
    }
}