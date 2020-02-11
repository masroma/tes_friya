<h4>Looping result text </h4>

<?php
error_reporting(0);
    $kalimat = "Saya Suka Makan Nasi Padang";
    $array_kalimat = explode(" ",$kalimat);
    $arrlength = count($array_kalimat);
   
    for($i=0; $i<=$arrlength; $i++){  
        for($j=0; $j<=$i; $j++){  
            echo $array_kalimat[$j]." ";  
        }  
        echo "<br>";  
        }  

        echo "================================================= <br/>";

        for($i=$arrlength; $i>=0; $i--){  
            for($j=$i; $j>=0; $j--){  
                echo $array_kalimat[$j]." ";  
            }  
            echo "<br>";  
            }  
     
    

?>