<!doctype html>
<head>
</head>

<?php
  //Since this php file is just a script with no classes or functions
  //defined, by requiring it, it will simply execute and perform
  //the echo statements without any additional code beyond
  //`require(render_page_header.php)`
  $inlineStyle = "style="
    ."'width: 15%;"
    ."border: 1px #222 solid;"
    ."text-align: center;"
    ."margin: 0px 1px 0px 1px;"
    ."padding: 2px;' ";

  echo "<h1> My Contacts! </h1>";
  echo "<div style='width:100%;background-color: #999;padding: 5px;float:left;'>";
  echo "<span id='navButton'".$inlineStyle.">Fake Nav Button 1</span>";
  echo "<span id='navButton'".$inlineStyle.">Fake Nav Button 2</span>";
  echo "<span id='navButton'".$inlineStyle.">Fake Nav Button 3</span>";
  echo "</div>";
 ?>
