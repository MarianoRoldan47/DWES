<?php
 $a= rand(1,100);
 $b= rand(1,100);
 $c= rand(1,100);
 
 echo 'A: '.$a."<br> B: ".$b."<br> C: ".$c."<br>";
 
 if($a>$b) {
     if ($a>$c) {
         echo 'El mayor es A: '.$a;
     }
     else{
         echo 'El mayor es C: '.$c;
     }
         
 }
 else{
     if($b>$c){
         echo 'El mayor es B: '.$b;
     }
     else{
         echo 'El mayor es C: '.$c;
     }
 }
 
?>