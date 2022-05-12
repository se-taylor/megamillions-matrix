<?php
$pbm = ' : ';
$title_pbm = 'Days + Averages';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix_wed">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">This page is showing a matrix of winning numbers and their averages on Tuesday &amp; Friday. <i>Only results since October 31, 2017 are included.</i></div>

<?php require 'matrix/tbl_tf_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/megamillions_days_clean.csv");
$array = file('csv/megamillions_days_clean.csv');
?>

<?php
require 'matrix/tbl_tf_avg.php';
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>