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