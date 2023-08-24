const userRate = document.querySelectorAll('.rate');

const progressBar = document.querySelectorAll('.progress');

    for (i = 0; i < progressBar.length; i++) {
        console.log(userRate[i].innerHTML);
        progressBar[i].style.left = (userRate[i].innerHTML * 20) + '%';
    }
