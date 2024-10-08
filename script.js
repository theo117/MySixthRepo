document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const appointmentForm = document.getElementById('appointmentForm');

    if (contactForm) {
        contactForm.addEventListener('submit', (event) => {
            if (!validateContactForm()) {
                event.preventDefault();
                alert('Please fill out all required fields.');
            }
        });
    }

    if (appointmentForm) {
        appointmentForm.addEventListener('submit', (event) => {
            if (!validateAppointmentForm()) {
                event.preventDefault();
                alert('Please fill out all required fields.');
            }
        });
    }

    function validateContactForm() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        return name && email && message;
    }

    function validateAppointmentForm() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const date = document.getElementById('date').value;
        const time = document.getElementById('time').value;
        return name && email && date && time;
    }
});
