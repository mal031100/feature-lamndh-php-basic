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
          echo "<pre>file 1<pre>";
          $file1 = "1.txt";
          $file = fopen($file1,"r");
          $rfile = fread($file, filesize($file1));
          // printf($rfile);
          $S = substr_count($rfile, "book");
          $paragraph = substr_count($rfile, ".");
          if($S > 0){
               echo "<pre>Chuỗi hợp lệ. chuỗi bao gồm $paragraph câu<pre>";
          }else{
               echo "Chuỗi không hợp lệ";
          }

          echo "<pre>file 2<pre>";
          $file2 = "2.txt";
          $file1 = fopen($file2,"r");
          $rfile1 = fread($file1, filesize($file2));
          // echo $rfile1;
          $S = substr_count($rfile1, "book");
          $paragraph1 = substr_count($rfile1, ".");
          if($S > 0){
               echo "<pre>Chuỗi hợp lệ. chuỗi bao gồm $paragraph1 câu<pre>";
          }else{
               echo "Chuỗi không hợp lệ";
          }

     ?>
</body>
</html>