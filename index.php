<?php

$rate = 1;
?>
<link rel="stylesheet" href="./styles/stars.css">

    <?php
    require './scripts/dbinit.php';

    foreach ($userReviews as $review) {
        echo "<div class='review-container'>
           <div class='review-infos-container'
            <div class='review-user-name'>
                <p class='review-name'>" . ucfirst($review['userFirstName']) . "</p>
                <p class='review-name'>" . ucfirst(substr($review['userName'], 0, 1)) . ". </p>
            </div>

    <div class='review-date'>
            <p>le " . $review['reviewDate'] . "</p>
          </div>
    <div class='review-note'>
            <p class='rate' id='rate'>" . $review['reviewNote'] . "</p>
            <p>/5</p>
        </div>
        <div class='stars-ratio-container'>
            <div class='progress' id='progress'></div>
            <img class='stars-img' src='src/images/stars.png' alt='stars ratio'/>
        </div>
    </div>
    <div class='review-text'>" . $review['reviewText'] . "</div>
    </div>";
    }

    ?>


<script src="./js/stars-progress.js"></script>


