//'use strict';

window.addEventListener('DOMContentLoaded', (e) => {
    e.preventDefault();
    //? Modal
    const btn = document.querySelector('.button__black'),
        modal = document.querySelector('.modal'),
        closeBtn = document.querySelector('.modal__close');

    function openModal() {
        modal.classList.toggle('modal__active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.toggle('modal__active');
        document.body.style.overflow = '';
    }

    if (btn != null) {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal();
        });
    }

    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.code === "Escape" && modal.classList.contains('modal__active')) {
            closeModal();
        }
    });

    //? Page up

    const pageUp = document.querySelector('.pageup');

    function trackScroll() {
        const scrolled = window.pageYOffset;
        const coords = document.documentElement.clientHeight;

        if (scrolled > coords) {
            pageUp.classList.add('pageup__show');
        }
        if (scrolled < coords) {
            pageUp.classList.remove('pageup__show');
        }
    }

    function backToTop() {
        const scrollStep = window.pageYOffset / 50;
        if (window.pageYOffset > 0) {
            window.scrollBy(0, -(scrollStep));
            setTimeout(backToTop, 0);
        }
    }

    window.addEventListener('scroll', trackScroll);
    pageUp.addEventListener('click', backToTop);

    //? Hamburger

    const hamburger = document.querySelector('.hamburger'),
        menu = document.querySelector('.menu'),
        menuItem = document.querySelectorAll('.menu__item');

    function openMenu() {
        hamburger.classList.toggle('hamburger__active');
        menu.classList.toggle('menu__active');
        menu.classList.remove('menu__show');
    }

    hamburger.addEventListener('click', openMenu);

    let i;
    for (i = 0; i < menuItem.length; i++) {
        menuItem[i].addEventListener('click', function () {
            this.classList.toggle('menu__item__active');
            let subMenu = this.nextElementSibling;
            if (subMenu.style.maxHeight == "20em") {
                subMenu.style.maxHeight = '0em';
            } else {
                subMenu.style.maxHeight = '20em';
            }

        });
    }

    menu.addEventListener('click', (e) => {
        if (e.target === menu) {
            hamburger.classList.toggle('hamburger__active');
            menu.classList.toggle('menu__active');
        }
    });

    //? Slider promo
    const promoSliders = document.querySelectorAll('.promo__slide'),
        promoPrev = document.querySelector('.btn-prev'),
        promoNext = document.querySelector('.btn-next'),
        dotsWrapper = document.querySelector('.dots-wrapper'),
        promoDots = [];


    let index = 1;

    for (let i = 0; i < promoSliders.length; i++) {
        const promoDot = document.createElement('div');//* создаём dots к каждому слайду
        promoDot.setAttribute('data-slide', i + 1); //* добаляем каждой dot дата атрибут и он будет каждый раз увеличиваться на 1
        promoDot.classList.add('dot');//*добавляем класс dots

        if (i == 0) {
            promoDot.style.opacity = 1;//* добавляем класс активности dots
        }

        dotsWrapper.append(promoDot);
        promoDots.push(promoDot); //* push dots в массив
    }

    showSlides(index);

    function showSlides(n) { //* функция по показу слайдов
        if (n > promoSliders.length) {
            index = 1;
        }

        if (n < 1) {
            index = promoSliders.length;
        }

        promoSliders.forEach(item => item.style.display = 'none');

        promoSliders[index - 1].style.display = 'block';
    }

    function plusSlides(n) { //*перелистываем слайд
        showSlides(index += n);
    }

    promoPrev.addEventListener('click', () => {
        plusSlides(-1);
    });

    promoNext.addEventListener('click', () => {
        plusSlides(1);
    });

    promoDots.forEach(dot => {
        dot.addEventListener('click', (e) => {
            const slideTo = e.target.getAttribute('data-slide');

            index = slideTo;

            promoDots.forEach(dot => dot.style.opacity = '.5');
            promoDots[index - 1].style.opacity = 1;

            showSlides(index);
        });
    });
    //? Slider reviews
    const reviewsSlides = document.querySelectorAll('.reviews-item'),
        reviewsPrev = document.querySelector('.reviews__btn-prev'),
        reviewsNext = document.querySelector('.reviews__btn-next'),
        slidesWrapper = document.querySelector('.reviews__items'),
        slidesField = document.querySelector('.reviews__items-wrap'),
        width = window.getComputedStyle(slidesWrapper).width,
        dotsWrap = document.querySelector('#reviews-dots');


    let position = 0; // положение ленты прокрутки
    const dotArr = [];

    for (let i = 0; i < reviewsSlides.length; i++) {    //* создаем dots
        const dot = document.createElement('div');
        dot.setAttribute('data-slide-to', i + 1);
        dot.classList.add('dot');

        if (i == 0) {
            dot.style.opacity = 1;
        }

        dotsWrap.append(dot);
        dotArr.push(dot);
    }

    function deleteNotDigits(str) {
        return +str.replace(/\D/g, '');
    }


    function showToSlides(count, slides, widthWrap, field, next, prev) {

        field.style.width = 100 * slides.length + '%';

        slides.forEach(slide => {
            slide.style.width = widthWrap / count + 'px';
        });


        next.addEventListener('click', () => {

            if (position == (widthWrap * (slides.length - count)) / count) {
                position = 0;
            } else {
                position += widthWrap / count;
            }

            field.style.transform = `translateX(-${position}px)`;

            if (index == slides.length) {
                index = 1;
            } else {
                index++;
            }
        });

        prev.addEventListener('click', () => {
            if (position == 0) {
                position = (widthWrap * (slides.length - count)) / count;
            } else {
                position -= widthWrap / count;
            }

            field.style.transform = `translateX(-${position}px)`;

            if (index == 1) {
                index = slides.length;
            } else {
                index--;
            }
        });
    }


    if (window.innerWidth > 992) {

        showToSlides(2, reviewsSlides, deleteNotDigits(width), slidesField, reviewsNext, reviewsPrev);

    } else {

        showToSlides(1, reviewsSlides, deleteNotDigits(width), slidesField, reviewsNext, reviewsPrev);

        dotArr.forEach(dot => {
            dot.addEventListener('click', (e) => {
                const slideTo = e.target.getAttribute('data-slide-to');

                index = slideTo;

                position = deleteNotDigits(width) * (slideTo - 1);
                slidesField.style.transform = `translateX(-${position}px)`;

                dotArr.forEach(dot => dot.style.opacity = '.5');
                dotArr[index - 1].style.opacity = 1;
            });
        });
    }

    //? Slider clients

    const clientsSlides = document.querySelectorAll('.slide__item'),
        clientsPrev = document.querySelector('#btn-prev'),
        clientsNext = document.querySelector('#btn-next'),
        clientsWrapper = document.querySelector('.clients__slides'),
        clientsField = document.querySelector('.clients__slide'),
        clientsWidth = window.getComputedStyle(clientsWrapper).width,
        dotsClients = document.querySelector('.dots-wrapper-clients');


    const dotArrClients = [];

    for (let i = 0; i < clientsSlides.length; i++) {
        const dot = document.createElement('div');
        dot.setAttribute('data-slides', i + 1);
        dot.classList.add('dot');

        if (i == 0) {
            dot.style.opacity = 1;
        }

        dotsClients.append(dot);
        dotArrClients.push(dot);
    }

    if (window.innerWidth > 1200) {
        showToSlides(6, clientsSlides, deleteNotDigits(clientsWidth), clientsField, clientsNext, clientsPrev);
    } else if (window.innerWidth <= 1200 && window.innerWidth > 992) {
        showToSlides(5, clientsSlides, deleteNotDigits(clientsWidth), clientsField, clientsNext, clientsPrev);
    } else if (window.innerWidth <= 992 && window.innerWidth > 768) {
        showToSlides(4, clientsSlides, deleteNotDigits(clientsWidth), clientsField, clientsNext, clientsPrev);
    } else {
        showToSlides(2, clientsSlides, deleteNotDigits(clientsWidth), clientsField, clientsNext, clientsPrev);

        dotArrClients.forEach(dot => {
            dot.addEventListener('click', (e) => {
                const slideTo = e.target.getAttribute('data-slides');

                index = slideTo;

                let count = 2;
                position = (deleteNotDigits(clientsWidth) * (slideTo - 1)) / count;
                clientsField.style.transform = `translateX(-${position}px)`;

                dotArrClients.forEach(dot => dot.style.opacity = '.5');
                dotArrClients[index - 1].style.opacity = 1;
            });
        });
    }
});

