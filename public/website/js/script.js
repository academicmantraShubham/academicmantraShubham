
window.onscroll = function () {
    scrollFunction();
    scrollFunctionBTT(); // back to top button
};

function scrollFunction() {
    let intViewportWidth = window.innerWidth;
    if (document.body.scrollTop > 30 || (document.documentElement.scrollTop > 30) & (intViewportWidth > 991)) {
        document.getElementById("navbar").classList.add("top-nav-collapse");
    } else if (document.body.scrollTop < 30 ||
        (document.documentElement.scrollTop < 30) & (intViewportWidth > 991)
    ) {
        document.getElementById("navbar").classList.remove("top-nav-collapse");
    }
}

// NAVBAR ON MOBILE
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener("click", () => {
        document.querySelector(".offcanvas-collapse").classList.toggle("open");
    });
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
    document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

//NAV DROP DOWN MENU HOVER
// $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
//     $('.dropdown-submenu .dropdown-menu.show').removeClass("show");
//     var $subMenu = $(this).next(".dropdown-menu");
//     $subMenu.toggleClass('show');
//     return false;
//  });

document.querySelectorAll('.dropdown-menu a.dropdown-toggle.second').forEach(
    elem => {
        //SUBMENU HOVER
        if (window.innerWidth > 991) {
            elem.addEventListener("mouseenter",
                (e) => {
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                }
            );
            elem.addEventListener("mouseleave",
                (e) => {
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                }
            );
        } else {
            elem.addEventListener("click",
                (e) => {
                    // $dropDownMenu = document.querySelector('.dropdown-submenu .dropdown-menu.show');
                    // if ( $dropDownMenu?.classList.contains('show')) {
                    //     $dropDownMenu.classList.remove("show");
                    // }
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                    setTimeout(() => {
                        if (!e.target.parentNode.parentNode.classList.contains('show')) {
                            e.target.parentNode.parentNode.classList.add("show");
                            e.target.parentNode.parentNode.previousElementSibling.classList.add("show");
                        }
                    }, 100);
                }
            )
        }
    }
);

document.querySelectorAll('.dropdown-menu a.dropdown-toggle.third').forEach(
    elem => {
        //SUBMENU HOVER
        if (window.innerWidth > 991) {
            elem.addEventListener("mouseenter",
                (e) => {
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                }
            );
            elem.addEventListener("mouseleave",
                (e) => {
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                }
            );
        } else {
            elem.addEventListener("click",
                (e) => {
                    // $dropDownMenu = document.querySelector('.dropdown-submenu .dropdown-menu.show');
                    // if ( $dropDownMenu?.classList.contains('show')) {
                    //     $dropDownMenu.classList.remove("show");
                    // }
                    var $subMenu = e.target.nextElementSibling;
                    $subMenu.classList.toggle('show');
                    setTimeout(() => {
                        if (!e.target.parentNode.parentNode.classList.contains('show')) {
                            e.target.parentNode.parentNode.classList.add("show");
                            e.target.parentNode.parentNode.previousElementSibling.classList.add("show");
                        }
                    }, 100);
                }
            )
        }
    }
);

document.querySelectorAll('.dropdown-submenu .dropdown-menu').forEach(
    elem => {
        //SUBMENU HOVER
        elem.addEventListener("mouseenter",
            (e) => {
                var $parent = e.target;
                $parent.classList.toggle('show');
            }
        );
        elem.addEventListener("mouseleave",
            (e) => {
                var $parent = e.target;
                $parent.classList.toggle('show');
            }
        );
    }
);

// HOVER ON DESKTOP
function toggleDropdown(e) {
    const _d = e.target.closest(".dropdown");
    let _m = document.querySelector(".dropdown-menu", _d);

    setTimeout(
        function () {
            const shouldOpen = _d.matches(":hover");
            _m.classList.toggle("show", shouldOpen);
            _d.classList.toggle("show", shouldOpen);

            _d.setAttribute("aria-expanded", shouldOpen);
        },
        e.type === "mouseleave" ? 300 : 0
    );
}

// ON HOVER
// const dropdownCheck = document.querySelector(".dropdown");

// if (dropdownCheck !== null) {
//     document
//         .querySelector(".dropdown")
//         .addEventListener("mouseleave", toggleDropdown);
//     document
//         .querySelector(".dropdown")
//         .addEventListener("mouseover", toggleDropdown);

//     // ON CLICK
//     document.querySelector(".dropdown").addEventListener("click", (e) => {
//         const _d = e.target.closest(".dropdown");
//         let _m = document.querySelector(".dropdown-menu", _d);
//         if (_d.classList.contains("show")) {
//             _m.classList.remove("show");
//             _d.classList.remove("show");
//         } else {
//             _m.classList.add("show");
//             _d.classList.add("show");
//         }
//     });
// }

/* BACK TO TOP BUTTON */
// GET THE BUTTON
myButton = document.getElementById("myBtn");

// WHEN THE USER SCROLLS DOWN 20PX FROM THE TOP OF THE DOCUMENT, SHOW THE BUTTON
function scrollFunctionBTT() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        myButton.style.display = "block";
    } else {
        myButton.style.display = "none";
    }
}

// WHEN THE USER CLICKS ON THE BUTTON, SCROLL TO THE TOP OF THE DOCUMENT
function topFunction() {
    document.body.scrollTop = 0; // for Safari
    document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}

// AOS ANIMATION ON SCROLL
AOS.init({
    duration: 1000,
    easing: "ease",
    once: true, // whether animation should happen only once - while scrolling down
});

/* CARD SLIDER - SWIPER */
var cardSlider = new Swiper(".card-slider", {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 3,
    spaceBetween: 70,
    breakpoints: {
        // when window is <= 767px
        767: {
            slidesPerView: 1,
        },
        // when window is <= 991px
        991: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
});

/*WRITERS CARD SLIDER - SWIPER */
var cardSlider = new Swiper(".writers-slider", {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    loop: true,
    navigation: {
        nextEl: "#writers-button-next",
        prevEl: "#writers-button-prev",
    },
    slidesPerView: 2,
    spaceBetween: 70,
    breakpoints: {
        // when window is <= 767px
        767: {
            slidesPerView: 1,
        },
        // when window is <= 991px
        991: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
});
