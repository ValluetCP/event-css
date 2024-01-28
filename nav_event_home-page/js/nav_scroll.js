const nav = document.querySelector('.navbar');

window.addEventListener('scroll', () =>{
    if(window.scrollY > 500){
        // Si on scroll plus que 500 pixel, on ajoute une class
        // classList = pour accéder aux classes
        nav.classList.add('scroll');
    }
    else{
        nav.classList.remove('scroll');
    }
});