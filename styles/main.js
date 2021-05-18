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

window.onresize = function(){
    let menu = document.querySelector('.menu-container');
    if(window.innerWidth >= 1200){
        menu.style.width = '20vw';
    }
    else{
        menu.style.width = '0';
    }
}



function checkAnswer(ev){
    let ans = ev;
    let correctAnswer = ans.closest('.question-box').querySelector('.correct');

    if(ans.classList.contains('correct')){
        ans.style.background = "#99FF8A";
        document.querySelector('.quiz').style.border = "#99FF8A 3px solid";

        ans.querySelector('.check').style.color = "#05463A";
        ans.querySelector('.check').style.visibility = "visible";
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

    activeQuestion.querySelector('.check').style.visibility = "hidden";
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

window.onload=function(){
    let defaultOpen = document.querySelector('.defaultOpen');
    if(defaultOpen != null){
        defaultOpen.click();
    }
};

function openCodeExample(evt, programmingLanguage) {
    var i, tabcontent, tablinks;
  
    // Gets all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Gets all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Shows the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(programmingLanguage).style.display = "block";
    evt.currentTarget.className += " active";
  }


  function updateRecipient(){
      let recipient = document.getElementById("InputRecipient").value

      let recipients = document.getElementsByName("OutputRecipient");
      recipients.forEach(element => {
          element.innerText=recipient;
      });
  }

  function updateSender(){
    let sender = document.getElementById("InputSender").value

    let senders = document.getElementsByName("OutputSender");
    senders.forEach(element => {
      element.innerText=sender;
    });
}

function updateMessage(){
    let message = document.getElementById("InputMessage").value

    let messages = document.getElementsByName("OutputMessage");
    messages.forEach(element => {
      element.innerText=message;
    });
}

function updateRecipientInput(ev){
    let recipient = ev.innerText
    document.getElementById("InputRecipient").value = recipient
    let recipients = document.getElementsByName("OutputRecipient");
      recipients.forEach(element => {
        if(element !== ev){

            element.innerText=recipient;
        }  
      });
}

function updateSenderInput(ev){
    let sender = ev.innerText
    document.getElementById("InputSender").value = sender
    let senders = document.getElementsByName("OutputSender");
      senders.forEach(element => {
        if(element !== ev){

            element.innerText=sender;
        }  
      });
}

function updateMessageInput(ev){
    let message = ev.innerText
    document.getElementById("InputMessage").value = message
    let messages = document.getElementsByName("OutputMessage");
      messages.forEach(element => {
        if(element !== ev){

            element.innerText=message;
        }  
      });
}
 