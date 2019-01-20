<?php

  require "mockDatabase.php";
  require "renderListOfContacts.php";
  require "renderPageHeader.php";

  renderContactsListToPage($mockDBQuery);

?>
