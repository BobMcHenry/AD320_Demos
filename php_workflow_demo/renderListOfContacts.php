<?php
    require 'renderContactToDiv.php'; 

    function renderContactsListToPage($queryArray){
      echo "<span id='contactList'>";
      foreach ($queryArray as $dataRow) {
        echo renderContactDiv($dataRow);
      }
    }
?>
