<?php
    $tPnum = (float)$_GET['txtPnum'];
    $tSnum = (float)$_GET['txtSnum'];
  
    $total = fmod($tPnum , $tSnum);
    
    echo "o total é : " , + $total;
    
        
    
    
        

?>