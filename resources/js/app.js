import 'bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.mobile-nav-toggle');
    const navmenu = document.querySelector('#navmenu');

    if (toggle && navmenu) {
        toggle.addEventListener('click', () => {
            navmenu.classList.toggle('mobile-open');
            toggle.classList.toggle('bi-list');
            toggle.classList.toggle('bi-x');
        });
    }

    document.querySelectorAll('.navmenu .dropdown > a').forEach((trigger) => {
        trigger.addEventListener('click', (event) => {
            if (window.innerWidth < 1200) {
                event.preventDefault();
                trigger.parentElement.classList.toggle('show');
            }
        });
    });
});
