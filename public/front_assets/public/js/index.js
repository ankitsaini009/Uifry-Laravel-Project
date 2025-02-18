function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    if (menu.classList.contains('-translate-x-full')) {
        menu.classList.remove('-translate-x-full', 'opacity-0');
        menu.classList.add('translate-x-0', 'opacity-100');
    } else {
        menu.classList.add('-translate-x-full', 'opacity-0');
        menu.classList.remove('translate-x-0', 'opacity-100');
    }
}

function profileMenu() {
    const profilebar = document.getElementById('profile-menu');
    profilebar.classList.toggle('hidden');
}

function footerbar() {
    const profilemenu = document.getElementById('footer-menu');
    profilemenu.classList.toggle('hidden');
}
function toggleModal() { 
    document.getElementById('video-modal-popup').classList.toggle('hidden') 
}

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swiper4', {
        slidesPerView: 3,
        spaceBetween: 25,
        navigation: {
            nextEl: '.swiper-button-next4',
            prevEl: '.swiper-button-prev4',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swipe1', {
        slidesPerView: 4.5,
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next1',
            prevEl: '.swiper-button-prev1',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 4.5,
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swipe2', {
        slidesPerView: 3.4,
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next2',
            prevEl: '.swiper-button-prev2',
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3.4,
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swipe3', {
        slidesPerView: 8,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next3',
            prevEl: '.swiper-button-prev3',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.swipe5', {
        slidesPerView: 3.4,
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next5',
            prevEl: '.swiper-button-prev5',
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3.4,
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.articleSwiper', {
        slidesPerView: 8,
        spaceBetween: 20,
        navigation: {
            nextEl: '.article-button-next',
            prevEl: '.article-button-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20,
            }
        }
    });
});

const swiperQuiz = new Swiper(".animeslide", {
    effect: "fade",
    loop: true,
    speed: 900,
    centeredSlides: true,
    navigation: {
        nextEl: ".login-button-next",
        prevEl: ".login-button-prev"
    },
    runCallbacksOnInit: true
});

function toggleAccordion(button) {
    const content = button.nextElementSibling;
    const isOpen = content.classList.contains("active");

    // Pehle sabhi accordion close karenge
    document.querySelectorAll('.accordion-content').forEach((div) => {
        div.classList.remove("active");
        div.style.maxHeight = "0px";
        div.style.paddingTop = "0px";
        div.style.paddingBottom = "0px";
    });

    document.querySelectorAll('.accordion-btn').forEach((btn) => btn.classList.remove("active"));
    document.querySelectorAll('.toggle-icon').forEach((icon) => icon.textContent = '+');

    // Agar clicked accordion already open hai, to close kar do
    if (!isOpen) {
        content.classList.add("active");
        content.style.maxHeight = content.scrollHeight + "px";
        content.style.paddingTop = "8px";
        content.style.paddingBottom = "8px";
        button.classList.add("active");
        button.querySelector('.toggle-icon').textContent = '−';
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const firstContent = document.querySelector(".accordion-content.active");
    if (firstContent) {
        firstContent.style.maxHeight = firstContent.scrollHeight + "px";
    }
});

function togglePasswordVisibility(inputId, iconId) {
    const passwordInput = document.getElementById(inputId);
    const eyeIcon = document.getElementById(iconId);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    }
}