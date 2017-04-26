<?php
if (!isset($_SESSION['username'])) {
       header('Location:  /esca/error.php');
      exit();
      }
else{
switch ($_SESSION['level']) {
        case 4:
           
          header('Location: /esca/user'); // admin Level;
          exit();
          break;

          case 3:
           
          header('Location: /esca/mrd'); // admin Level;
          exit();
          break;

          
        
        
        
         
      }
}


?> 