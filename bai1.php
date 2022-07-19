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
          
          // $explode = explode(' ', $S);
          function checkValidString(){
               $S = "Math book";
               $S = substr_count($S,"book");
               if ($S > 0) {
                    // echo true;
                    echo "True";
               } else {
                    // echo false;
                    echo "False";
               }
          }
          checkValidString();
     ?>
</body>

</html>