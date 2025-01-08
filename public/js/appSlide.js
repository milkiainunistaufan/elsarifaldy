simplyCountdown('.simply-countdown', {
    year: 2025, // Target year (required)
    month: 4, // Target month [1-12] (required)
    day: 10, // Target day [1-31] (required)
    hours: 8, // Target hour [0-23], default: 0
    
    words: { // Custom labels, with lambda for plurals
        days: { root: 'hari', lambda: (root, n) => n > 1 ? root + '' : root },
        hours: { root: 'Jam', lambda: (root, n) => n > 1 ? root + '' : root },
        minutes: { root: 'menit', lambda: (root, n) => n > 1 ? root + '' : root },
        seconds: { root: 'Detik', lambda: (root, n) => n > 1 ? root + '' : root }
    },
    
});

var nextBtn = document.querySelector('.next'),
    prevBtn = document.querySelector('.prev'),
    carousel = document.querySelector('.carousel'),
    list = document.querySelector('.list'),
    item = document.querySelectorAll('.item'),
    runningTime = document.querySelector('.timeRunning');

let timeRunning = 3000;
let timeAutoNext = 7000;

nextBtn.onclick = function() {
    showSlider('next')
}
prevBtn.onclick = function() {
    showSlider('prev')
}

let runTimeOut

let runNextAuto = setTimeout(() => {
    nextBtn.click()
}, timeAutoNext)

function resetTimeAnimation(){
    runningTime.style.animation = 'none'
    runningTime.offsetHeight
    runningTime.style.animation = 'runningTime 7s linear 1 forwards'
}

function showSlider(type) {
    let sliderItemDom = list.querySelectorAll('.carousel .list .item')
    if (type === 'next'){
        list.appendChild(sliderItemDom[0])
        carousel.classList.add('next')
    } else {
        list.prepend(sliderItemDom[sliderItemDom.length - 1])
        carousel.classList.add('prev')
    }

    clearTimeout(runTimeOut)

    runTimeOut = setTimeout(() => {
        carousel.classList.remove('next')
        carousel.classList.remove('prev')
    }, timeRunning)

    clearTimeout(runNextAuto)

    runNextAuto = setTimeout(() => {
        nextBtn.click()
    }, timeAutoNext)

    resetTimeAnimation()
}

resetTimeAnimation()