function iFrameOn(){
    richTextField.document.designMode = 'On'
}

function iBold(){
    richTextField.document.execCommand('bold', false, null);
}

function iUnderline(){
    richTextField.document.execCommand('underline', false, null);
}

function iitalic(){
    richTextField.document.execCommand('italic', false, null);
}

function iHorizontalRule(){
    richTextField.document.execCommand('inserthorizontalrule', false, null);
}

function iUnorderedList(){
    richTextField.document.execCommand('InsertUnorderedList', false, "newUL");
}

function iOrderedList(){
    richTextField.document.execCommand('InsertOrderedList', false, "newOL");
}

function iJustifyLeft(){
    richTextField.document.execCommand('justifyleft', false, null);
}

function iJustifyCenter(){
    richTextField.document.execCommand('justifycenter', false, null);
}

function iJustifyRight(){
    richTextField.document.execCommand('justifyright', false, null);
}

function iHeading1(){
    richTextField.document.execCommand('fontsize', false, 6);
}

function iHeading2(){
    richTextField.document.execCommand('fontsize', false, 5);
}

function iHeading3(){
    richTextField.document.execCommand('fontsize', false, 4);
}

function iNormalText(){
    richTextField.document.execCommand('fontsize', false, 3);
}

function submit_form(){
    var theForm = document.getElementById('myForm');
    theForm.elements['mytextarea'].value = window.frames['richTextField'].document.body.innerHTML;
    theForm.submit();
}
