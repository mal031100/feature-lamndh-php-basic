<?php
     class ExerciseString{
          public $check1;
          public $check2;
          

          function readFile(){
               
          }
          
          function checkVaildString(){

          }

          function writeFile(){

          }
     }

     $object1 = new ExerciseString;

     function checkVaildString(){
          echo "<pre>file 1<pre>";
          $file1 = "1.txt";
          $file = fopen($file1,"r");
          $rfile = fread($file, filesize($file1));
          $S = substr_count($rfile, "book");
          $paragraph = substr_count($rfile, ".");
          if($S > 0){
               file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi hop le<pre>");;
          }else{
               file_put_contents("resultfile.txt", "<pre>Chuoi 1 la chuoi khong hop le. chuoi bao gom $paragraph<pre>");
               // echo "Chuỗi không hợp lệ. Chuỗi bao gồm $paragraph câu";
          }
     }
     // checkVaildString();
     // var_dump($check1);
     function checkVaildString1(){
          echo "<pre>file 2<pre>";
          $file2 = "2.txt";
          $file1 = fopen($file2,"r");
          $rfile1 = fread($file1, filesize($file2));
          $S = substr_count($rfile1, "book");
          $paragraph1 = substr_count($rfile1, ".");
          if($S > 0){
               file_put_contents("resultfile.txt", "Chuoi 2 la chuoi hop le", FILE_APPEND);
          }else{
               file_put_contents("resultfile.txt", "Chuoi 2 la chuoi khong hop le. chuoi bao gom $paragraph1 cau", FILE_APPEND);
               // echo "<pre>Chuỗi không hợp lệ. Chuỗi bao gồm $paragraph1 câu<pre>";
          }
     }
     // checkVaildString1();

     $File = "resultfile.txt";
     $openFile = fopen($File,"r");
     $fread = fread($openFile, filesize($File));
     echo $fread;
     // fclose($openFile1);
?>