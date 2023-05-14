const tema = document.querySelector('#troca-tema');
const body = document.querySelector('body');

tema.addEventListener('click', () => {
  body.classList.toggle('dark-theme');
});