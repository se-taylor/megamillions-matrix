<?php
$pbm = ' : ';
$title_pbm = 'Friday + Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_wed">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The Friday page is showing a matrix of winning numbers and their averages restricted to Friday only.</div>

<?php require 'matrix/tbl_tf_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/megamillions_friday_clean.csv");
$array = file('csv/megamillions_friday_clean.csv');
?>

<?php
require 'matrix/tbl_tf_avg.php';
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>