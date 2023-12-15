let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

const faqQuestions = document.querySelectorAll('.faq-question');
const faqAnswers = document.querySelectorAll('.faq-answer');

faqQuestions.forEach((question, index) => {
  question.addEventListener('click', () => {
    faqAnswers[index].style.display = faqAnswers[index].style.display === 'block' ? 'none' : 'block';
  });
});
