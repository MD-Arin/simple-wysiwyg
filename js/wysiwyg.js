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

function iFontSize(){
    // TODO get selected text and change size.
    
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

function submit_form(){

}
