<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>
  <style type="text/css" media="screen">   
#editor {
    position: absolute;
    top:  0px;
    left: 80px;
    bottom: 0px;
    right: 0px;
}
  </style>


</head>
<body>

	<div id="editor">function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
}</div>

<script src="./src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

<script src="./src-min-noconflict/mode-javascript.js" type="text/javascript" charset="utf-8"></script>

<script src="./src-min-noconflict/mode-java.js" type="text/javascript" charset="utf-8"></script>


<script src="./src-min-noconflict/theme-eclipse.js" type="text/javascript" charset="utf-8"></script>

<script>
    var editor = ace.edit("editor");
    //editor.setTheme("ace/theme/eclipse");
    editor.getSession().setMode("ace/mode/java");
</script>



<script>

    var editor = ace.edit("editor");
    //alert(editor);
    editor.setTheme("ace/theme/twilight");
    var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
    editor.session.setMode(new JavaScriptMode());


function btn1Fuc(){
	alert(editor.getValue());
}

</script>

<button id="btn1" onclick="btn1Fuc()">btn1</button>

</body>
</html>
