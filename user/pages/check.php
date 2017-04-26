<?php
// Check, if user is already login, then jump to secured page
if (!isset($_SESSION['username'])) {
            header('Location: /esca/error.php');
            exit();
        }
else {
switch ($_SESSION['level']) {
        case 3:
           
          header('Location: /esca/mrd'); // admin Level;
          exit();
          break;

          case 2:
           
          header('Location: /esca/contr'); // admin Level;
          exit();
          break;

          case 1:
           
          header('Location: /esca/'); // admin Level;
          exit();
          break;
        
        
        
         
      }
}


?> 