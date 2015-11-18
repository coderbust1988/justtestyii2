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
    left: 180px;
    bottom: 0px;
    right: 0px;
}
</style>
</head>
<body>
	<div id="editor">

    </div>
<script src="jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/theme-eclipse.js" type="text/javascript" charset="utf-8"></script>

<script src="./src-min-noconflict/mode-html.js" type="text/javascript" charset="utf-8"></script>

<!-- <script src="./src-min-noconflict/mode-javascript.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-java.js" type="text/javascript" charset="utf-8"></script>
<script src="./src-min-noconflict/mode-php.js" type="text/javascript" charset="utf-8"></script> -->

<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/eclipse");
    editor.getSession().setMode("ace/mode/html");
    editor.getSession().setTabSize(4);
    

    //document.getElementById('editor').style.fontSize='20px';

  // editor.commands.addCommand({
  //   name: 'myCommand',
  //   bindKey: {win: 'Ctrl-S',  mac: 'Command-W'},
  //   exec: function(editor) {
  //       alert("第 "+ (editor.getSelection().getCursor().row+1) +"行，第"+(editor.getSelection().getCursor().column+1)+"列");
  //   },
  //   readOnly: true
  // });


function preview(){
    $.ajax({
      method: "POST",
      url: "preview.php",
      data: { content: editor.getValue()}
    })
      .done(function( msg ) {
        if(msg != -1){
            window.location.href = msg;
        }
      });
}

function fillContent(id){

 //   alert(id);
//    editor.setValue(id);

    
    $.ajax({
      method: "POST",
      url: "getcontentById.php",
      data: { id: id}
    })
      .done(function( msg ) {
        if(msg != -1){
            //alert(msg);
            editor.gotoLine(1);
            editor.setValue(msg,1);


                //editor.moveCursorToPosition("{pos.row=1,pos.column=1}");
        }
      });
}

function moveto(row){
    
    //editor.setValue("<html><body>12<br>3<br>3<br>3<br>3<br>4</body></html>");

    editor.gotoLine(1);
}

</script>


<?php




$config = require "config.php";
require "pdo.php";
$mypdo = new MyPdo($config);

$sql = "SELECT id,content FROM content";
$ret = $mypdo->findSQL($sql);

?>


<br><br><br><br>

<!--  <button id="btn3" onclick="moveto(3)">移动光标到某一行</button>
 <br> -->
  <button id="btn1" onclick="preview()">预览并保存</button>

<br><br><br><br>

<table>
    <th>课程详情id</th>
<?php
session_start(); 
 
 if(isset($_SESSION["id"])){
    session_unset();
session_destroy();
$_SESSION["id"] = -1;
 }


 if(!empty($ret) && $ret!=-1 && sizeof($ret>0)){
     foreach ($ret as $retTmp) {  ?>
   <tr>
    <td>
        <?php $tmpStr = $retTmp['content'];?>
        <button id="btn<?php echo $retTmp['id']?>" onclick="fillContent(<?php echo $retTmp['id']?>)">
            填充文本：<?php echo $retTmp["id"]?>
        </button>
    </td>
    </tr>
<?php } }else{

  if(isset($_SESSION["id"])){
    session_unset();
session_destroy();
$_SESSION["id"] = -1;
 }

}?>
</table>


</body>
</html>