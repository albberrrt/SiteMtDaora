const navImages = document.getElementsByClassName('navImages');
const navDiv = document.getElementsByClassName('nav-Div');
const dropMenu = document.getElementById('dropMenu');
const setaImg = document.getElementById('setaImg');
const buttonMenu = document.getElementById('buttonMenu');

var selected = 0;

for (let fstElem of navImages) {
    fstElem.addEventListener('mouseenter', () => {
        console.log(selected);

    })
    fstElem.addEventListener('mouseleave', () => {
        if (selected == 0) {

        }
        
    })
    
};

buttonMenu.addEventListener('click', () => {
    if (selected == 0) {
        dropMenu.classList.add('menuHovered');
        setaImg.classList.add('setaHovered');
        selected = 1;
    } else if (selected == 1) {
        dropMenu.classList.remove('menuHovered');
        setaImg.classList.remove('setaHovered');
        selected = 0;
    }
});