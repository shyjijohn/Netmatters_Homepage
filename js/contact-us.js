
document.addEventListener('DOMContentLoaded', function () {

    // Form validation
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (event) {
            let valid = true;
            form.querySelectorAll('.js-error').forEach(el => el.remove());

            function showError(field, msg) {
                const span = document.createElement('span');
                span.className = 'error js-error';
                span.textContent = msg;
                field.parentNode.appendChild(span);
                valid = false;
            }

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const message = document.getElementById('message');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


            const phonePattern = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;

            if (phone.value.trim() === '') {
                showError(phone, 'Please enter your telephone number.');
            } else if (!phonePattern.test(phone.value.trim())) {
                showError(phone, 'Please enter a valid telephone number.');
            }


            if (email.value.trim() === '') {
                showError(email, 'Please enter your email address.');
            } else if (!emailPattern.test(email.value.trim())) {
                showError(email, 'Please enter a valid email address.');
            }

            if (phone.value.trim() === '') showError(phone, 'Please enter your telephone number.');
            if (message.value.trim() === '') showError(message, 'Please enter a message.');

            if (!valid) event.preventDefault();
        });
    }

    // Out of Hours accordion
    const toggle = document.getElementById('oohToggle');
    const body = document.getElementById('oohBody');
    if (toggle && body) {
        toggle.addEventListener('click', function () {
            body.classList.toggle('open');
            toggle.classList.toggle('active');
        });
    }
});