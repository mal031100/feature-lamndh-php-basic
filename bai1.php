
     <?php
          // 
          // $explode = explode(' ', $S);
          function checkValidString(){
               $S = "Math book";
               $S = substr_count($S,"book");
               if ($S > 0) {
                    // echo true;
                    return true;
               } else {
                    // echo false;
                    return false;
               }
          }
          checkValidString();
     ?>