let forms = document.getElementsByClassName("has-verification");
let verificationElements = Array.from(forms[0].childNodes);//this will not work in IE 8 any ways people should be punished for using IE.

verificationElements.filter(e => e.tagName === "DIV").forEach(e => console.log());


function addError(formElement){
}

function addSuccess(formElement){
    formElement.className += " has-success has-feedback"
    let span = document.createElement("span").className += "glyphicon glyphicon-ok form-control-feedback"

    formElement.appendChild(span)
}






