<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple wysiwig</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/wysiwyg.js"></script>
</head>
<body onLoad="iFrameOn();">
    <div>
        <form class="" action="post.php" method="post" name="myForm" id="myForm">
            <div id="wysiwyg_cp" style="padding:8px;">
                <button type="button" onClick="iBold()"><i class="fa fa-bold"></i></button>
                <button type="button" onClick="iUnderline()"><i class="fa fa-underline"></i></button>
                <button type="button" onClick="iItalic()"><i class="fa fa-italic"></i></button>
                <input type="button" onClick="iHorizontalRule()" value="HR">

                <button type="button" onClick="iUnorderedList()"><i class="fa fa-list-ul"></i></button>
                <button type="button" onClick="iOrderedList()"><i class="fa fa-list-ol"></i></button>

                <button type="button" onClick="iJustifyLeft()"><i class="fa fa-align-left"></i></button>
                <button type="button" onClick="iJustifyCenter()"><i class="fa fa-align-center"></i></button>
                <button type="button" onClick="iJustifyRight()"><i class="fa fa-align-right"></i></button>

                <button type="button" onClick="iHeading1()"><i class="fa fa-header"></i>1</button>
                <button type="button" onClick="iHeading2()"><i class="fa fa-header"></i>2</button>
                <button type="button" onClick="iHeading3()"><i class="fa fa-header"></i>3</button>
                <button type="button" onClick="iNormalText()"><i class="fa fa-text-width"> Normal Text</i></button>
            </div>
            <textarea style="display: none;" name="mytextarea" id="mytextarea" rows="8" cols="80"></textarea>
            <iframe name="richTextField" id="richTextField" style="border: #000 1px solid; " src="" width="100%" height="auto"></iframe>
            <br>
            <input type="button" name="myBtn" value="Submit" onClick="javascript:submit_form();">
        </form>
    </div>
</body>
</html>
