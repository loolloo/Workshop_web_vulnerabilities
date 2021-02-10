<html>
  <head>
    <title>Challenge 4</title>
    <meta charset="UTF-8">
  </head>
  <body>
    Welcome! Where would you like to go?
    <a href="?page=about.txt">about</a>
    <a href="?page=values.txt">values</a>
    <a href="?page=hacker.php">me_when_im_programming</a>
    <a href="?page=flag.txt">flag</a>
    <p>
      <?php
       $page = $_GET['page'];
       if (isset($page)) {
           if ($page === "flag.txt") {
               header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
           }
           if (strpos($page, "..") === false && $page[0] !== '/') {
               include($page);
           } else {
               echo "Illegal characters detected!";
           }
       } else {
           echo "Please select a destination";
       }
       ?>
    </p>
  </body>
</html>
