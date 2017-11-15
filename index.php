<?php 


$counter = 1;

while($counter < 10) {
    echo 'abc ';
    $counter++;
}


for($i = 0; $i < 9; $i++) {
    echo $i + 1 . " ";
}


$items = ["A", "B", "C", "D", "E", "F"];

for($i = 0; $i < count($items); $i++) {
    echo $i + 1 .". item " . $items[$i];
}

echo "<br><br><br>";

$zivotinje = ["krava", "ovca", "patka", "guska", "curka"];

for($i = 0; $i < count($zivotinje); $i++) {
    echo $i + 1 . ". ". $zivotinje[$i];
 ?>