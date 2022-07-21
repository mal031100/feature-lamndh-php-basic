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
     // echo "aaaa";
     // echo 'aaaa';
     // function rfile($file1, $file2){
     //      $fopen1 = fopen($file1, 'r');
     //      $fopen2 = fopen($file2, 'r');
     //      $fread1 = fread($fopen1, filesize($file1));
     //      $fread2 = fread($fopen2, filesize($file2));
     // }

     // function checkVaildString($fread1, $fread2){
     //      $S1 = substr_count($fread1, 'book');
     //      $r1 = substr_count($fread1, 'restaurant');
     //      $paragraph1 = substr_count($fread1, '.');
     //      if($S1 > 0 || $r1 <= 0){
     //           echo "<pre>Chuỗi hợp lệ. chuỗi bao gồm $paragraph1 câu<pre>";
     //      }
     //      echo "Chuỗi không hợp lệ";

     //      $S2 = substr_count($fread2, 'book');
     //      $r2 = substr_count($fread2, 'restaurant');
     //      $paragraph2 = substr_count($fread2, '.');
     //      if($S2 > 0 || $r2 <= 0){
     //           echo "Chuỗi hợp lệ. chuỗi bao gồm $paragraph2 câu";
     //      }
     //      echo "Chuỗi không hợp lệ";
     // }
     // checkVaildString($fread1, $fread2);
?>