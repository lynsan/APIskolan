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






function toggleStep3url(check){
    let pClass = ".step3url-p"
    let imgClass = ".step3url-img"
    toggleStep(check, pClass, imgClass)
}

function toggleStep1api(check){
    let pClass = ".step1api-p"
    let imgClass = ".step1api-img"
    toggleNextImg(check);
    toggleStep(check, pClass, imgClass)
    toggleUrl(check, ".step1api-url")
}

function toggleStep3api(check){
    let pClass = ".step3api-p"
    let imgClass = ".step3api-img"
    toggleStep(check, pClass, imgClass)
}

function toggleStep4api(check){
    toggleNextImg(check);
    let pClass = ".step4api-p"
    let imgClass = ".step4api-img"
    toggleStep(check, pClass, imgClass)
}

function toggleStep6api(check){
    let pClass = ".step6api-p"
    let imgClass = ".step6api-img"
    toggleStep(check, pClass, imgClass)
    toggleUrl(check, ".step6api-url")
}

function toggleStep2sms(check){
    toggleUrl(check, ".step2sms-url")
}

function toggleStep4sms(check){
    let pClass = ".step4sms-p"
    let imgClass = ".step4sms-img"
    toggleStep(check, pClass, imgClass)
}


function toggleNextImg(check){
    let img = check.parentElement.nextElementSibling
    if(img.style.opacity === "0.5"){
        img.style.opacity = "1"
    }
    else{
        img.style.opacity = "0.5"
    }
}

function toggleUrl(check, urlClass){
    let urls = document.querySelectorAll(urlClass)
    urls.forEach(url => {
        if(check.checked){
            url.style.color = "#a0a0a0"
        }
        else{
            url.style.color = "black"
        }
    });
}

function toggleStep(check, pClass, imgClass){
    let ps = document.querySelectorAll(pClass)
    let images = document.querySelectorAll(imgClass)
    if(check.checked){
        ps.forEach(p => {
            p.style.textDecoration = "line-through"
            p.style.color = "#a0a0a0"
        });
        images.forEach(img => {
            img.style.opacity = "0.5"
        });
    }
    else{
        ps.forEach(p => {
            p.style.textDecoration = "none"
            p.style.color = "black"
        });
        images.forEach(img => {
            img.style.opacity = "1"
        });
    }
}