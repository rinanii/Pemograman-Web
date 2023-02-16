<?php
   $nilai=45;
   $nilai=75;
   $nilai=85;
   $nilai=60;
   $nilai=70;
   $rata_rata=($nilai+$nilai+$nilai+$nilai+$nilai)/5;

   echo "Rata rata = $rata_rata <br/>";
   if($rata_rata>75){
    echo "Anda naik kelas";
   }
   else if($rata_rata<75){
    echo "Maaf anda tidak naik kelas";
   }
?>