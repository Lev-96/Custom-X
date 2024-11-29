const navItems = document.querySelectorAll('.nav-link');
navItems.forEach(item => {
    item.addEventListener('click', function () {
        navItems.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});
document.querySelector('.item1').classList.add('active');

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > navbar.offsetTop) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }

    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (window.scrollY > 200) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

// Close the offcanvas menu when a nav-link is clicked
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");
    const offcanvas = document.querySelector("#navbarNavAltMarkup");

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvas);
            if (bsOffcanvas) {
                bsOffcanvas.hide();
            }
        });
    });
});
//add year

document.getElementById("current-year").textContent = new Date().getFullYear();


document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        useClassNames: true,
        initClassName: false,
        animatedClassName: 'animated',
        duration: 1000,
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const offcanvas = document.getElementById('navbarNav');
    const links = offcanvas.querySelectorAll('.nav-link');

    links.forEach(link => {
        link.addEventListener('click', () => {
            const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvas);
            if (offcanvasInstance) {
                offcanvasInstance.hide(); // Закрыть меню
            }
        });
    });
});
