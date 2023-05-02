(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }

    var colors = ['#ff6666', '#ffb266', '#ffff66', '#b2ff66', '#66ffb2', '#66b2ff', '#b266ff', '#ff66b2'];
    var colorIndex = 0;
    setInterval(function() {
        header.style.backgroundColor = colors[colorIndex];
        colorIndex++;
        if (colorIndex == colors.length) {
            colorIndex = 0;
        }
        header.classList.toggle('menu-opened');
    }, 5000);

}());
