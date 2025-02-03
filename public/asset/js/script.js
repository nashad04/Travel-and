/*=============== SHOW MENU =============== */
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*=============== SHOW MENU =============== */
const navLink = document.querySelectorAll('.nav__link')


const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== ADD BLUR TO HEADER=============== */
const blurHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the blur-header class to the header
    this.scrollY >= 50 ? header.classList.add('blur-header') 
                        : header.classList.remove('blur-header')
}
window.addEventListener('scroll', blurHeader)

/*=============== SHOW SCROLL UP =============== */
const scrollUp = ()=>{
    const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
                        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL SECTIONS ACTIVE LINK =============== */

const sections = document.querySelectorAll('section[id]')

const scrollActive = ()=>{
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 58,
        sectionId = current.getAttribute('id'),
        sectionClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')
        
        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionClass.classList.add('active-link')
        }else{
            sectionClass.classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)

/*=============== SCROLL REVEAL ANIMATION =============== */

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 3000,
    delay: 400,
    // reset:true // Animations repeat
});

sr.reveal('.home__data',{ origin: 'right' });
sr.reveal('.home__cards', { delay: 600, distance: '100px', interval: 100, origin: 'bottom' });
sr.reveal('.service__data', { origin: 'right' });
sr.reveal('.service__cards', { origin: 'left' });
sr.reveal('.service__image', { origin: 'bottom' });
sr.reveal('.about__data ', { origin: 'right' });
sr.reveal('.about__image ', { origin: 'left' });
sr.reveal('.popular__card',{interval:200})
sr.reveal('.explore__data, .explore__user',{ origin: 'left' });
sr.reveal('.footer__container',{ origin: 'right' })
sr.reveal('.section__title',{origin:'right '})
sr.reveal('.join__image ',{origin:'right '})
sr.reveal('.join__data',{origin:'right '})
sr.reveal('.service-category__data',{origin:'bottom'})
sr.reveal('.service-container',{origin:'right'})
sr.reveal('.box-card',{origin:'right'})
sr.reveal('.testimonial__container',{origin:'right'})


const pathName = window.location.pathname;
const pageName = pathName.split("/").pop();

if(pageName === 'index.html'){
    document.querySelector('.nav__link').classList.add('');
}

if(pageName === 'service.html'){
    document.querySelector('.active-link').classList.add('nav__link');
}

let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
})

//step 1: get DOM
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let listItemDom = document.querySelector('.carousel .list');
let thumbnailDom = document.querySelector('.carousel .thumbnail')

nextDom.oneclick = function(){
    showSlider('next');
}

let timeRunning =  3000;
let timeAutoNext = 7000;
let runTimeOut;
let runAutoRun = setTimeout(()=>{
    nextDom.click();
}, timeAutoNext);

function showSlider(type){
    let itemSlider = document.querySelectorAll('.carousel .list .item')
    let itemThumbnail = document.querySelectorAll('.carousel .thumbnail')

    if(type === 'next'){
        listItemDom.appendChild(itemSlider[0]);
        thumbnailDom.appendChild(itemThumbnail[0]);
        carouselDom.classList.add('next');
    }else{
        let positionLastItem =itemSlider.lenght = 1;
        thumbnailDom.prepend(itemSlider[positionLastItem]);
        carouselDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() =>{
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');


    },timeRunning);
    clearTimeout(runAutoRun);
    runAutoRun = setTimeout(()=>{
        nextDom.click();
    }, timeAutoNext);
}

