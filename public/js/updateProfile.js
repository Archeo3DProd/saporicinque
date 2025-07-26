
function handleChange(btn) {
    switch(btn.name) {
        case "name":
            toggleButton("name");
        case "email":
            toggleButton("email");
        case "password":
            toggleButton("password");
    }
}

function toggleButton(btnName) {
    let sendButton = document.getElementById(btnName + "-button");
    let input = document.getElementById(btnName + "-input");
    
    if(input.value.length !== 0) {
        sendButton.disabled = false;
    }
    if(input.value.length === 0) {
        sendButton.disabled = true;
    }
}