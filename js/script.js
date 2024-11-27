const navItems = document.querySelectorAll('.nav-link');
navItems.forEach(item => {
    item.addEventListener('click', function () {
        navItems.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});
document.querySelector('.item1').classList.add('active');

// JavaScript to add "is-sticky" class when user scrolls down
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');

    if (window.scrollY > 100) {
        header.classList.add('is-sticky', 'position-sticky', 'top-0', 'container-fluid');
    } else {
        header.classList.remove('is-sticky', 'position-sticky', 'top-0', 'container-fluid');
    }
});
//add year

document.getElementById("current-year").textContent = new Date().getFullYear();


document.addEventListener("DOMContentLoaded", function() {
    AOS.init({
        useClassNames: true,
        initClassName: false,
        animatedClassName: 'animated',
        duration: 1000,
    });
});