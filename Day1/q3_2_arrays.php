<?php 
$a1 = Array('0' => Array('0' => 5,'1' => 6),'1' => Array('0' => 7,'1' => 8));

echo "<pre/>";print_r($a1);
$a2 = Array('0' => Array('0' => 6,'1' => 7),'1' => Array('0' => 8,'1' => 9));

echo "<pre/>";print_r($a2);
$sumArray = array();

$result = array();
for($i=0; $i<=1; $i++) {
    for($j=0; $j<=1; $j++) {
        $result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
    }
}
echo "Answer is<br/>";print_r($result);
?>