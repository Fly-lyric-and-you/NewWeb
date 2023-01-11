

ScrollReveal().reveal('.headline', { delay: 100, reset: true});

var slideleft = {
    distance: '80%',
    origin: 'left',
    delay: 100,
    duration: 100,
    opacity: 0,
    reset: false
};
ScrollReveal().reveal('.application', slideleft);
ScrollReveal().reveal('.explication', slideleft);


var slideRight = {
    distance: '150%',
    origin: 'right',
    delay: 100,
    duration: 1500,
    opacity: 0,
    reset: false
};
ScrollReveal().reveal('.cartelien', slideRight);
ScrollReveal().reveal('.support', slideRight);


var slidedown = {
    distance: '150%',
    origin: 'top',
    delay: 100,
    opacity: 0,
    duration: 2000,
    reset: false
};
ScrollReveal().reveal('.two', slidedown);


var slideup = {
    distance: '150%',
    origin: 'bottom',
    delay: 100,
    opacity: 0,
    duration: 2000,
    reset: false
};
ScrollReveal().reveal('.three', slideup);
