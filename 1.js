const menu =document.querySelector('#agri-menu');
const menuLinks =document.querySelector('.navbar__menu');

menu.addEventListener('click',function() {
    menu.classList.toggle('is-active');
    menu.classList.toggle('active');
});