<?php

$new_array = array();
foreach ($array as $line) {
    $line_array = explode(" ", $line);
    $wp1[] = $line_array[0];
    $wp2[] = $line_array[1];
    $wp3[] = $line_array[2];
    $wp4[] = $line_array[3];
    $wp5[] = $line_array[4];
    $pball[] = $line_array[5];
}

foreach(range(1, 70) as $key => $number) {
$number = sprintf('%02d', $number);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
if( is_numeric($key) ) {
    echo "<td class='rowone'>".substr_count($qwe,$number)."</td>";
    echo "<td class='matrix'>".$number."</td>";
    }

echo "<td>";

$pbp = implode(',', $wp1);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';


echo "</td><td>";

$pbp = implode(',', $wp2);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp3);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp4);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $wp5);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td><td>";

$pbp = implode(',', $pball);
$average = (substr_count($pbp,$number) / substr_count($qwe,$number))*100;
echo number_format($average, 2).'%';

echo "</td></tr>";
}
?>