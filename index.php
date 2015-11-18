<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Editor</title>
<style type="text/css" media="screen">   
#editor {
    position: absolute;
    top:  100px;
    left: 500px;
    bottom: 0px;
    right: 500px;
}

#btn1 {
    position: absolute;
    top:  0px;
    left: 50px;
    bottom: 50px;
    right: 50px;
}
</style>
</head>
<body>
    <button id="btn1" onclick="btn1Fuc()">预览</button>

	<div id="editor">
    <?php echo ( !isset($content) || empty($content) ) ? "no content":htmlentities("{$content}") ?>
</div>
<script src="jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/theme-eclipse.js" type="text/javascript" charset="utf-8"></script>

<script src="./src-min-noconflict/mode-javascript.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-java.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-html.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-php.js" type="text/javascript" charset="utf-8"></script>

<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/twilight");
    editor.getSession().setMode("ace/mode/html");
    editor.getSession().setTabSize(4);
    document.getElementById('editor').style.fontSize='20px';

  // editor.commands.addCommand({
  //   name: 'myCommand',
  //   bindKey: {win: 'Ctrl-S',  mac: 'Command-W'},
  //   exec: function(editor) {
  //       alert("第 "+ (editor.getSelection().getCursor().row+1) +"行，第"+(editor.getSelection().getCursor().column+1)+"列");
  //   },
  //   readOnly: true
  // });


function btn1Fuc(){
    $.ajax({
      method: "POST",
      url: "preview.php",
      data: { content: editor.getValue(), id: 1 }
    })
      .done(function( msg ) {
        if(msg != -1){
            //alert(msg);
            window.location.href = msg;
        }
      });
}
</script>


<?php
// $config = require "config.php";
// require "pdo.php";
// $mypdo = new MyPdo($config);

// $sql = "SELECT * FROM accounting";
// var_export($mypdo->findSQL($sql));












?>
</body>
</html>