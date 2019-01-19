<?php
//stores the URL the request is sent to
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//GET request processing
if ($_SERVER['REQUEST_METHOD'] === "GET") {
  echo( "<p>GET REQUEST SENT</p>");
  $get_array =  $_GET;

  foreach($get_array as $key=>$val){
    echo $key . ': ' . $val . '<br>';
  }

  echo "<br>Note the URL includes the data that was filled in from the form.<br>";
  echo $actual_link;


} //POST Request Processing
elseif ($_SERVER['REQUEST_METHOD'] === "POST") {

  echo "<p>POST REQUEST SENT</p>";
  $post_array =  $_POST;

  foreach($post_array as $key=>$val){
    echo $key . ': ' . $val . '<br>';
  }

  echo "<br>Where's the form data? It's in the body of the http request!<br>";
  echo $actual_link;

}
?>
