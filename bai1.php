<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <?php
          $S = "Math book";
          $explode = explode(' ', $S);
          $S = $explode[1];
          if ($S == "book") {
               // echo true;
               echo "True";
          } else {
               // echo false;
               echo "False";
          }
     ?>
</body>

</html>