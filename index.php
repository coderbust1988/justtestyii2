<!DOCTYPE html>
<html lang="en">
<head>

<script src="./src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-javascript" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/theme-twilight.js" type="text/javascript" charset="utf-8"></script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>
  <style type="text/css" media="screen">
    body {
        overflow: hidden;
    }

    #editor {
        margin: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
  </style>
</head>
<body>

<div id="editor">function foo(items) {
    var i;
    for (i = 0; i &lt; items.length; i++) {
        alert("Ace Rocks " + items[i]);
    }
}</div>



<script>

    var editor = ace.edit("editor");
    alert(editor);
    editor.setTheme("ace/theme/twilight");
    var JavaScriptMode = ace.require("ace/mode/javascript").Mode;
    editor.session.setMode(new JavaScriptMode());


</script>

</body>
</html>
