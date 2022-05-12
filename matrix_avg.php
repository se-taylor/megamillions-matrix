<?php
$pbm = ' : ';
$title_pbm = 'The Matrix Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_avg">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The Averages page is showing a matrix of the winning numbers averages. <i>Only results since October 31, 2017 are included.</i></div>

<?php require 'matrix/tbl_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/megamillions_clean.csv");
$array = file('csv/megamillions_clean.csv');
?>

<?php
require 'matrix/tbl_avg.php';
require 'matrix/tbl_ftr.php';
include 'matrix/heatmap_avg.php';
include 'footer.php';
?>