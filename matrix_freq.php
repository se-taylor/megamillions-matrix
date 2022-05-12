<?php
$pbm = ' : ';
$title_pbm = 'Number Frequency';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information"><i>Only results since October 31, 2017 are included</i>, which is the date that Mega Millions changed their game matrix to 70 main balls and 25 Mega Balls.</div>

<table id="myTable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="float:left;width:50%;">
<thead>
<tr>
    <th class="mdl-data-table__cell--non-numeric">Main Ball Numbers</th>
    <th>Drawn</th>
</tr>
</thead>
<tbody>
<?php
$qwe2 = file_get_contents("csv/megamillions-adj-main.csv");
foreach(range(1, 70) as $key => $number) {
$number = sprintf('%02d', $number);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
if( is_numeric($key) ) {
    echo "<td class='main_nums'>".$number."</td>";
    echo "<td class='rowone'>".substr_count($qwe2,$number)."</td>";
    }

echo "</tr>";
}
?>
</tbody>
</table>

<table id="myTable" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="float:left;width:50%;">
<thead>
<tr>
    <th class="mdl-data-table__cell--non-numeric">Mega Ball Numbers</th>
    <th>Drawn</th>
</tr>
</thead>
<tbody>
<?php
$qwe2 = file_get_contents("csv/megamillions-adj-mega.csv");
foreach(range(1, 25) as $key => $number) {
$number = sprintf('%02d', $number);

echo "<tr class='mdl-data-table__cell--non-numeric''>";
if( is_numeric($key) ) {
    echo "<td class='mega_ball'>".$number."</td>";
    echo "<td class='rowone'>".substr_count($qwe2,$number)."</td>";
    }

echo "</tr>";
}
?>
</tbody>
</table>

</div>
</section>
</div>


<?php
require 'footer.php';
?>