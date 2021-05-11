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
        }
        else{
            menu.style.width = newWidth;
            menu.style.borderRight = "7px solid #BC5757";
        }
}

function hide_menu(){
    let large = window.matchMedia("(min-width: 1200px)");
    let menu = document.querySelector('.menu-container');
    if(!large.matches){

        menu.style.width = "0";
        menu.style.border = none;
    }
}

window.onresize = function(){
    let menu = document.querySelector('.menu-container');
    if(window.innerWidth >= 1200){
        menu.style.width = '20vw';
        menu.style.borderRight = "7px solid #BC5757";
    }
    else{
        menu.style.width = '0';
        menu.style.border = "none";
    }
}



function checkAnswer(ev){
    let ans = ev;
    let correctAnswer = ans.closest('.question-box').querySelector('.correct');

    if(ans.classList.contains('correct')){
        ans.style.background = "#99FF8A";
        ans.querySelector('.check').style.visibility = "visible";
        document.querySelector('.quiz').style.border = "#99FF8A 3px solid";
    }
    else{
        correctAnswer.querySelector('.check').style.color = "#99FF8A";
        correctAnswer.querySelector('.check').style.visibility = "visible";

        document.querySelector('.quiz').style.border = "#FF5E5D 3px solid";

        ans.style.background = "#FF5E5D";

        ans.classList.add('darken');

        ans.querySelector('.cross').style.color = "white";
        ans.querySelector('.cross').style.visibility = "visible";
    }
    correctAnswer.classList.add('darken');
    disableQuizAlternatives();
}

function disableQuizAlternatives(){
    let activeQuestion = document.querySelector('.active-question');
    let alternatives = activeQuestion.querySelectorAll('.alternative');
    for (i = 0; i < alternatives.length; i++) {
        alternatives[i].disabled = true;
        alternatives[i].classList.remove('hover');
      }
}
function enableQuizAlternatives(){
    let activeQuestion = document.querySelector('.active-question');
    let alternatives = activeQuestion.querySelectorAll('.alternative');
    for (i = 0; i < alternatives.length; i++) {
        alternatives[i].disabled = false;
        alternatives[i].classList.add('hover');
      }
}

function nextQuestion(){
    let activeQuestion = document.querySelector('.active-question');
    let newQuestion = activeQuestion.nextElementSibling;

    document.querySelector('.quiz').style.border = "#05463A 3px solid";
    newQuestion.classList.add('active-question');
    activeQuestion.classList.remove('active-question');
}

function resetQuiz(){
    document.querySelector('.active-question').classList.remove('active-question');
    document.querySelector('.question-box').classList.add('active-question');
    document.querySelector('.quiz').style.border = "#05463A 3px solid";
    enableQuizAlternatives();
    resetQuizColors();
    hideCheckmarks();
}

function resetQuizColors(){
    let alternatives = document.querySelectorAll('.alternative');
    for (i = 0; i < alternatives.length; i++) {
        alternatives[i].disabled = false;
        alternatives[i].classList.add('hover');
        alternatives[i].style.background = "white";

        if(alternatives[i].classList.contains("darken")){
            alternatives[i].classList.remove("darken");
        }
      }
}

function hideCheckmarks(){
    let checksAndCrosses = document.querySelectorAll('.icon');
    for (let i = 0; i < checksAndCrosses.length; i++) {
        checksAndCrosses[i].style.visibility = "hidden";
    }
}