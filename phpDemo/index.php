<!DOCTYPE html>
<html>
  <head>
    <title>PHP Demo!</title>
  </head>
  <body>
    <?php

      require('render_page_header.php');
      require('renderDataRowsToPage.php');
      require('mockDatabase.php');

      //The variable passed into this function is declared in
      //mockDatabase.php file. Since we `require`d it above,
      //it is available in the context of this page.
      renderContactsListToPage($mockDBQuery);

    ?>
  </body>
</html>
