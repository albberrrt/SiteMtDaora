const navImages = document.getElementsByClassName('navImages');
const navDiv = document.getElementsByClassName('nav-Div');
const dropMenu = document.getElementById('dropMenu');
const setaImg = document.getElementById('setaImg');
const buttonMenu = document.getElementById('buttonMenu');

var selected = 0;

for (let fstElem of navImages) {
    fstElem.addEventListener('mouseenter', () => {
        console.log(selected);
        setaImg.classList.add('setaHovered');
    })
    fstElem.addEventListener('mouseleave', () => {
        if (selected == 0) {
            setaImg.classList.remove('setaHovered');
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
        selected = 0;
    }
});