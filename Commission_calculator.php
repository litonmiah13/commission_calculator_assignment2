<?php
//Given problem
/*HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.
*/
$tuitionFee = readline('Enter the value '); /* We want to take the input from keyboard/user to check the following programme for different values*/
$commission1 = $tuitionFee*.25; //Commission is 25% when it's above $20000
$commission2 = $tuitionFee*.20; //Commission is 20% when it's above $10000 but less than $20000
$commission3 = $tuitionFee*.15; //Commission is 15% when it's above $7000 but less than $10000
$a=15;

$commission = $tuitionFee >= 20000 ? "Commission is {$commission1}" : ($tuitionFee>=10000 && $tuitionFee<20000 ? "Commission is {$commission2}" : ($tuitionFee >= 7000 && $tuitionFee < 10000? "Commission is {$commission3}" : "Invalid"));


echo $commission;

?>
