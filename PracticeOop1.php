<?php
     class ExerciseString{
          public $check1;
          public $check2;
          

          function readFile($rfile){
               $file1 = "1.txt";
               $file = fopen($file1,"r");
               $rfile = fread($file, filesize($file1));

               return $rfile;
          }
          
          function checkVaildString($S, $r, $paragraph, $rfile){
               $S = substr_count($rfile, "book");
               $r = substr_count($rfile, 'restaurant');
               $paragraph = substr_count($rfile, ".");

               return $S; $r; $paragraph;
          }

          function writeFile($S, $r, $paragraph){
               if($S > 0 || $r <= 0){
                    return file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi hop le<pre>");
               }else{
                    return file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi khong hop le. chuoi bao gom $paragraph<pre>");
                    // echo "Chuỗi không hợp lệ. Chuỗi bao gồm $paragraph câu";
               }
          }
     }

     $object1 = new ExerciseString;

     function checkVaildString(){
          $file1 = "1.txt";
          $file = fopen($file1,"r");
          $rfile = fread($file, filesize($file1));
          $S = substr_count($rfile, "book");
          $r = substr_count($rfile, 'restaurant');
          $paragraph = substr_count($rfile, ".");
          if($S > 0 && $r <= 0){
                file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi hop le<pre>");
          }else{
                file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi khong hop le. chuoi bao gom $paragraph<pre>");
               // echo "Chuỗi không hợp lệ. Chuỗi bao gồm $paragraph câu";
          }  
     }
     checkVaildString();
     // var_dump($check1);
     function checkVaildString1(){
          // echo "<pre>file 2<pre>";
          $file2 = "2.txt";
          $ofile2 = fopen($file2,"r");
          $rfile2 = fread($ofile2, filesize($file2));
          $S = substr_count($rfile2, "book");
          $r = substr_count($rfile2, 'restaurant');
          $paragraph2 = substr_count($rfile2, ".");
          if($S > 0 && $r <= 0){
               file_put_contents("resultfile.txt", "Chuoi 2 la chuoi hop le", FILE_APPEND);
          }else{
               file_put_contents("resultfile.txt", "Chuoi 2 la chuoi khong hop le. chuoi bao gom $paragraph2 cau", FILE_APPEND);
               // echo "<pre>Chuỗi không hợp lệ. Chuỗi bao gồm $paragraph1 câu<pre>";
          }
     }
     checkVaildString1();

     $File = "resultfile.txt";
     $openFile = fopen($File,"r");
     $fread = fread($openFile, filesize($File));
     echo $fread;
     // fclose($openFile1);
?>