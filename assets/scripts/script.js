document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
        menuToggle.classList.toggle('open');
    });

    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function(question) {
        question.addEventListener('click', function() {
            const answer = question.nextElementSibling;
            const isVisible = answer.style.maxHeight && answer.style.maxHeight !== '0px';

            faqQuestions.forEach(function(q) {
                q.nextElementSibling.style.maxHeight = '0';
            });

            if (!isVisible) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });
});
