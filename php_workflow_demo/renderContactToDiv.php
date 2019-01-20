<?php
  // Pull name and phone from mock data record and
  // render to an html element.
  /*
    - parse the array and puyll the appropriate data
    - assemble the string of html markup <div <attributes> > DATA </DIV>
    - write it to the page
  */

  //array("pk"=>0, "name"=> "Bob", "phone"=>"111-111-1111")
  function renderContactDiv($dataArray) {
    if (
        !(empty($dataArray["name"]) ) &&
        (
          !(empty($dataArray["phone"]))
          )
    ) {
      $output_string = "";
      $div_start = "<div "; //to be continued.
      $inline_css = "class='contactRow' " .
        "style='border: 1px solid black; ".
        "padding-left: 10px; margin: 5px;" .
        "width: 30%;float: left;' ".
        ">";
      $nameVal ="Test: " . $dataArray["name"] . "<br>";
      $phoneVal = "P#: " . $dataArray["phone"];

      $div_end = "</div>";

      return $div_start . $inline_css . $nameVal . $phoneVal . $div_end;

    }
  }
    //renderContactDiv(array("name"=>"TEST", "phone"=>"111-111-1111"));




?>
