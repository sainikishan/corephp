<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$cars = array("Volvo", "BMW", "Toyota");

$ages = array("40", "30", "25");
var_dump($cars[2]);
var_dump($ages[2]);
// count car
$cars = array("a", "b", "c", "d", "g", "k");
echo count($cars);
// Change the value of the any array item
$cars = array("kishan", "vaibhav", "zafar", "satyam");
$cars[2] = "saini";
var_dump($cars);
foreach ($cars as $car)
    echo "$car </br>";
// without using array push function push the array
$cars = array("kishan", "vaibhav", "zafar");
$new = "satyam";
$cars[count($cars)] = $new;
print_r($cars);
// array merge
$array1 = ["A", "b", "c", "d", "e", "f", "g"];
$array3
    = ["h", "i", "j", "k", "l", "m", "n"];
$array2 = ["g", "h", "i"];
function customarraymerge($arr1, $arr2)
{
    foreach ($arr2 as $value) {
        $arr1[] = $value;
    }
    return $arr1;
}
$mergearray = customarraymerge($array1, $array3, $array2);
print_r($mergearray);
?>

</pre>
</body>

</html>