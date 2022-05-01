<?php
$pbm = ' : ';
$title_pbm = 'The Matrix';
require 'head.php';
?>

<div class="mdl-layout__tab-panel is-active" id="matrix">
          <section class="section mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
            <h4><?php echo $title_pbm; ?></h4>
            <div class="mdl-components__information">The Mega Millions Matrix page is showing the numbers 1 - 70 in the black column, and to the left of this, it shows how many times that number was drawn overall. To the right of this column, is the in-order drawn matrix to show how many times each number was drawn in that exact order. Colored cells help create a heatmap effect based on the number contained in that cell, using Red, Yellow &amp; Green.</div>

<?php require 'matrix/tbl_hdr.php'; ?>

<?php
$qwe = file_get_contents("csv/megamillions_clean.csv");
$array = file('csv/megamillions_clean.csv');
?>

<?php
require 'matrix/tbl_reg.php';
require 'matrix/tbl_ftr.php';
require 'matrix/heatmap.php';
require 'footer.php';
?>