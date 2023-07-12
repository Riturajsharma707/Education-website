burger = document.querySelector('.burger')
navbar = document.querySelector('.navbar')
rightNav = document.querySelector('.rightNav')

burger.addEventListener('click',()=>{
    rightNav.classList.toggle('visibility-class-resp');
    rightNav.classList.toggle('height-nav-resp');
})