<html>
  <?php
   $method = $_SERVER['REQUEST_METHOD']; 
   if ($method === 'GET' ||
       $method === 'POST' ||
       $method === 'HEAD' ||
       $method === 'PUT' ||
       $method === 'CONNECT' ||
       $method === 'TRACE') {
       header('Method Not Allowed', true, 405);
       exit;
   }
   ?>
  <head>
    <title>Challenge 3</title>
    <meta charset="UTF-8">
  </head>
  <body>
    html{If_the_door_is_closed_use_another_one!}
  </body>
</html>
