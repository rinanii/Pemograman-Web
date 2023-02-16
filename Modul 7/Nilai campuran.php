<?php
   $nilai=77;

   echo "nilai = $nilai <br/>";
   if($nilai>=85 & $nilai <=100){
    echo "Nilai sangat baik";
   }
   else if($nilai>=75 & $nilai <=84){
    echo "Nilai baik";
   }
   else if($nilai>=60 & $nilai <=74){
    echo "Nilai cukup";
   }
   else if($nilai>=0 & $nilai <=59){
    echo "Nilai kurang";
   }
   else{
    echo "Nilai tidak dalam kriteria";
   }
?>