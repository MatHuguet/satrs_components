<?php
require './scripts/dbinit.php';
$rate = 1;
?>
<link rel="stylesheet" href="styles/stars.css">
<div class="stars-ratio-container">
    <div class="progress" id="progress">

    </div>
    <img class="stars-img" src="src/images/stars.png" alt="stars ratio"/>

</div>
<p class="rate"><?= $rate ?></p>
<script src="./js/stars-progress.js"></script>
