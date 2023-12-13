<?php
$arr1 = [];
$arr2 = [];
$MergeArray = [];
echo "<pre>";
while (count($arr1) < 5) {
    $randNumb = rand(1,20);
    if (!in_array($randNumb, $arr1)) array_push($arr1, $randNumb);
}

while (count($arr2) < 5) {
    $randNumb = rand(1,20);
    if (!in_array($randNumb, $arr2) && !in_array($randNumb, $arr1)) array_push($arr2, $randNumb);
}

while (count($MergeArray) < 10) {
    $randKey = rand(0,4);
    $randKey2 = rand(0,4);
    if (!in_array($arr1[$randKey], $MergeArray)) array_push($MergeArray, $arr1[$randKey]);
    if (!in_array($arr2[$randKey2], $MergeArray)) array_push($MergeArray, $arr2[$randKey2]);
}

print_r($arr1);
print_r($arr2);
print_r($MergeArray);

for ($i=0; $i < count($MergeArray); $i++) { 
    for ($j=$i+1; $j < count($MergeArray); $j++) { 
        if ($MergeArray[$i] > $MergeArray[$j]) {
            $temp = $MergeArray[$i];
            $MergeArray[$i] = $MergeArray[$j];
            $MergeArray[$j] = $temp;
        }
    }
}

print_r($MergeArray);
?>