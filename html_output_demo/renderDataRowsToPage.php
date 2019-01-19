<?php

  //This function loops through our mock database array and
  //wraps some of the values in a div element with some inline
  // styling applied
  //Note: The in-line styling is not a best practice, but shown
  //for the purpose of demonstration.
  function renderContactsListToPage($queryArray){
    echo "<span id='contactList'>";
    // In each iteration of this loop, $dataRow is the array
    // containing the key=>value pairs rom our fake DB query
    foreach ($queryArray as $dataRow) {
      $name = $dataRow['name'];
      $phoneNumber = $dataRow['phone'];
      echo "<div class='contactRow' " .     //Notice this is one long string.
        "style='border: 1px solid black; ". //String concatenation ignores whitespace
        "padding-left: 10px; margin: 5px;" .
        "width: 30%;float: left;' ".
        ">";
      echo "<h3>Name: $name</h3>"; //Since we are outputting to the browser,
      echo "<p>Phone Number: $phoneNumber</p>"; //when we echo valid HTML tags,
      echo "</div>"; //they render on the page.
    }
    echo "</span>";
  }

 ?>
