<?php
   /*
   
   cetak gol
   total cetak gol >= 10 'medali emas'
   total cetak gol >=  8 'medali perak'
   total cetak gol >=  4 'medali perunggu'
   total cetak gol <   4 'medali emas ngambang'
   */ 

   $gol = 3;
   if ($gol >= 10) {
       echo "Medali emas, mencetak gol = " .$gol. " ";
    switch ($gol) {
        case 20:
            echo "dan Mendapatkan bonus 100jt";
            break;
        
        default:
            
            break;
    }
   } 


  else if ($gol >= 7) {
        echo "Medali perak, mencetak gol = " .$gol. " ";
    switch ($gol) {
     case 9:
         echo "dan Mendapatkan bonus 80jt";
         break;
     
     default:
         
         break;
 }
}

else if ($gol >= 4) {
    echo "Medali perunggu, mencetak gol = " .$gol. " ";
switch ($gol) {
 case 5:
     echo "dan Mendapatkan bonus 50jt";
     break;
 
 default:
     
     break;
}
}

else{
    echo "Medali emas ngambang" . " ";
switch ($gol) {
 case 3:
     echo " dan tidak Mendapatkan bonus";
     break;
 
 default:
     
     break;
}
}
?>