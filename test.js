var swiper = new Swiper('.swiper-container-comments', {
    cssMode: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination'
    },
    mousewheel: true,
    keyboard: true,
});


let ratingValue = document.querySelectorAll('.rating__value');
let ratingResult = document.querySelectorAll('.rating-result');
let ratingStar = document.querySelectorAll('.rating-star');

ratingResult.forEach((e => {
    // if (e.classList.contains('5')) {
        let eClass = e.classList[1];
        console.log(eClass);
       let star =  e.children;
       for (let i = 0; i < eClass; i++) {
           star[i].classList.add('active');
       }

}));


