document.addEventListener('DOMContentLoaded', function () {
    console.log("Démarrage du script !");

    const video = document.getElementById('bannerVideo');
    const bannerImg = document.querySelector('.banner-img');

    if (video) {
        video.addEventListener('error', function () {
            bannerImg.style.display = 'block';
            video.style.display = 'none';
        });
    }

    if (window.innerWidth <= 768) {
        bannerImg.style.display = 'block';
        if (video) video.style.display = 'none';
    }

    // Wait until Swiper is ready to display the carousel
    if (typeof Swiper !== 'undefined') {
        const swiperContainer = document.querySelector('.swiper-container');
        if (swiperContainer) {
            console.log("Initialisation de Swiper...");
            const swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: false,
                slidesPerView: 3,
                loop: true,
                spaceBetween: 110,
                autoplay: {
                    delay: 4500,
                    disableOnInteraction: false
                },
                coverflowEffect: {
                    rotate: 60,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
            });
            console.log("Swiper initialisé.");
        } else {
            console.error("Élément Swiper non trouvé.");
        }
    } else {
        console.error("Swiper n'est pas défini.");
    }

    function isScrolledIntoView(elem) {
        let rect = elem.getBoundingClientRect();
        let elemTop = rect.top;
        let elemBottom = rect.bottom;
        return (elemTop >= 0 && elemTop <= window.innerHeight) || (elemBottom >= 0 && elemBottom <= window.innerHeight);
    }

    function applySlideUpAnimations() {
        let slideUpElements = document.querySelectorAll('.slide-up');
        let titleAnimationElements = document.querySelectorAll('.title-animation');

        slideUpElements.forEach(function (elem) {
            if (isScrolledIntoView(elem) && !elem.classList.contains('visible')) {
                elem.classList.add('visible');
                console.log('slideUpElement visible:', elem);
            }
        });

        titleAnimationElements.forEach(function (elem) {
            if (isScrolledIntoView(elem) && !elem.classList.contains('visible')) {
                elem.classList.add('visible');
                console.log('titleAnimationElement visible:', elem);
            }
        });
    }

    function applyParallaxEffect() {
        let image = document.querySelector('img.parallax');
        if (image) {
            let scrolled = window.scrollY;
            let rate = scrolled * 0.5;
            let floatOffset = 20 * Math.sin(Date.now() / 1000);
            image.style.transform = 'translateY(' + (rate + floatOffset) + 'px)';
            console.log('applyParallaxEffect:', image.style.transform);
        }
    }

    let lastScrollTop = 0;
    const placeElement = document.getElementById('place');

    function handleScroll() {
        const scrollPosition = window.scrollY;

        if (scrollPosition > lastScrollTop) {
            placeElement.classList.add('scrolling-down');
            placeElement.classList.remove('scrolling-up');
        } else {
            placeElement.classList.add('scrolling-up');
            placeElement.classList.remove('scrolling-down');
        }

        lastScrollTop = scrollPosition <= 0 ? 0 : scrollPosition;
        console.log('handleScroll:', scrollPosition);
    }

    const menuToggle = document.querySelector('.menu-toggle');
    const menuContainer = document.querySelector('.menu-container');
    const navLinks = document.querySelectorAll('.nav-link');

    function resetMenuItems() {
        navLinks.forEach(link => {
            link.classList.remove('visible');
            link.style.opacity = '0';
            link.style.transform = 'translateY(50px)';
        });

        // Force a reflow to restart CSS animations
        void menuContainer.offsetHeight;

        navLinks.forEach(link => {
            link.style.opacity = '';
            link.style.transform = '';
        });

        console.log('resetMenuItems called');
    }

    function closeMenu() {
        menuToggle.classList.remove('active');
        menuContainer.classList.remove('active');
        setTimeout(() => {
            resetMenuItems();
        }, 300); // Delay to ensure animations are reset
        console.log('closeMenu called');
    }

    function openMenu() {
        menuToggle.classList.add('active');
        menuContainer.classList.add('active');
        console.log('openMenu called');
    }

    menuToggle.addEventListener('click', function () {
        const isActive = menuToggle.classList.contains('active');
        if (isActive) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            closeMenu();
            console.log('Link clicked, menu closed');
        });
    });

    function init() {
        applySlideUpAnimations();
        applyParallaxEffect();
        handleScroll();
        console.log('Initialization complete');
    }

    init();

    window.addEventListener('scroll', function () {
        applySlideUpAnimations();
        applyParallaxEffect();
        handleScroll();
    });

    setInterval(applyParallaxEffect, 16);

     // Add logs to check the state of elements before and after opening/closing the menu

    console.log('Initial navLink states:');
    navLinks.forEach(link => {
        console.log(link.style.opacity, link.style.transform);
    });

    console.log('Initial menuContainer state:', menuContainer.classList);

// Check the states after opening/closing
menuToggle.addEventListener('click', function () {
        console.log('menuToggle clicked:', menuToggle.classList.contains('active') ? 'opening' : 'closing');
        navLinks.forEach(link => {
            console.log(link.style.opacity, link.style.transform);
        });
        console.log('menuContainer state:', menuContainer.classList);
    });
});
