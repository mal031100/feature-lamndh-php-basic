<?php
     abstract class Country{
          protected $slogan;
          abstract function sayHello();
     }

     interface Boss{
          function checkValidSlogan();
     }

     class EnglandCountry extends Country{
          public function sayHello()
          {
               
          }
     }

     class VietnamCountry extends Country{
          public function sayHello()
          {
               
          }
     }

     // class EnglandCountry implements Boss{
     //      public function checkValidSlogan()
     //      {
               
     //      }
     // }

     // class VietnamCountry implements Boss{
     //      public function checkValidSlogan()
     //      {
               
     //      }
     // }

     $englandCountry = new EnglandCountry();
     $vietnamCountry = new VietnamCountry();

     
     // $englandCountry->setSlogan('England is a country that is part of the United Kingdom. 
     // It shares land borders with Wales to the west and Scotland to the north.
     //  The Irish Sea lies west of England and the Celtic Sea to the southwest.');

     // $vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. 
     // With an estimated 94.6 million inhabitants as of 2016, 
     // it is the 15th most populous country in the world.');

     // $englandCountry->sayHello(); // Hello
     // echo "<br>";
     // $vietnamCountry->sayHello(); // Xin chao

     // echo "<br>";

     // var_dump($englandCountry->checkValidSlogan()); // true
     // echo "<br>";
     // var_dump($vietnamCountry->checkValidSlogan()); // false


     // trait Active{
     //      public function class1(){
     //           echo 'I am ' . $englandCountry->defindYourSelf(); 
     //           echo "<br>";
     //           echo 'I am ' . $vietnamCountry->defindYourSelf(); 
     //           echo 'I am ';
     //      }
     // }
     // class Active1 {
     //      use Active;
     // }

     // $Active1 = new Active1();
     // echo "I am ", get_class($Active1), "";
?>