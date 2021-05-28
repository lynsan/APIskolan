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
      
      if(recipient.length === 0){
        recipient = "46766868334";
      }

      if(!isNaN(recipient)){
        if(recipient.charAt(0) === '0'){
            recipient = "46" + recipient.substring(1)
        }
        let recipients = document.getElementsByName("OutputRecipient");
        recipients.forEach(element => {
            element.innerText=recipient;
        });
      }
      
  }

  function updateSender(){
    let sender = document.getElementById("InputSender").value

    if(sender.length === 0){
      sender = "Tshirt";
    }

    let senders = document.getElementsByName("OutputSender");
    senders.forEach(element => {
      element.innerText=sender;
    });
}

function updateMessage(){
    let message = document.getElementById("InputMessage").value

    if(message.length === 0){
      message = "Jag testar APIskolan och skulle gärna vilja ha en kurvig T-shirt i storlek L, tack!";
    }

    let messages = document.getElementsByName("OutputMessage");
    messages.forEach(element => {
      element.innerText=message;
    });
}

function updateRecipientInput(ev){
    let recipient = ev.innerText

    if(!isNaN(recipient)){
        document.getElementById("InputRecipient").value = recipient
        let recipients = document.getElementsByName("OutputRecipient");
          recipients.forEach(element => {
            if(element !== ev){
    
                element.innerText=recipient;
            }  
          });
    }

}

function updateSenderInput(ev){
    let sender = ev.innerText

    if(!(sender.length <= 11)){
        sender = sender.slice(0, 11);
    }
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