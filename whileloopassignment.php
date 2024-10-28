<?php
// Multiplication table using while loops
$i = 1;
while($i < 10) {
    echo "<p>";
    $j = 1;
    while($j < 10) {
        echo $i * $j . " ";
        $j++;
    }
    echo "</p>";
    $i++;
}
?>
