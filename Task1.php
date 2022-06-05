
<?php 

#function to check if number is multiplier of 4 or 6 or both 
function checkIfNumberMultiplier($numbers){
    $j =0;
    for($i =0;$i<count($numbers);$i ++){

        // using modulo to make sure remainder is zero when number divided by four or six
        if ($numbers[$i]%4==0 || $numbers[$i] % 6 ==0 ){
            //array to collect numbers which are Multipliers 
            $multiplierNumbers [$j]= $numbers[$i];
            $j++;

        }
    }
    return $multiplierNumbers ;
}

//---array to test Multiplier function 
$test=array(1,2,0);

$array = checkIfNumberMultiplier($test);
for($x=0;$x<count($array);$x++){
    echo ("numbers which is multiplier of four or six are "  .$array[$x] ."<br>");
}

?>