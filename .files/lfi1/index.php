<html>
  <head>
    <title>Challenge 4</title>
    <meta charset="UTF-8">
  </head>
  <body>
    Welcome! Where would you like to go?
    <a href="?page=page1.html">page1</a>
    <a href="?page=page2.html">page2</a>
    <p>
      <?php
       $page = $_GET['page'];
       if (isset($page)) {
           if (strpos($page, "..") === false) {
               include($page);
           } else {
               echo "Illegal characters detected!";
           }
       } else {
           echo "Please select a page";
       }
       ?>
    </p>
  </body>
</html>
