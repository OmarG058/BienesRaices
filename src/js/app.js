document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode();
});

function darkMode() {

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode')
    });

}

function eventListeners() {

    const mobilMenu = document.querySelector('.mobile-menu');

    mobilMenu.addEventListener('click',navegacionresponcive);
        console.log('boton responsive');
};

function navegacionresponcive() {

    const navegacion = document.querySelector('.navegacion');

    if (navegacion.classList.contains('mostrar')) {
        
        navegacion.classList.remove('mostrar');
    }else {
        navegacion.classList.add('mostrar');
    }
}