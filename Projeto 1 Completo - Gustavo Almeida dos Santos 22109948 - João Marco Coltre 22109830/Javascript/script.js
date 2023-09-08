document.addEventListener('DOMContentLoaded', () => {
    let menu = document.querySelector('#menu-icon');
    let barranav = document.querySelector('.barranav');
  
    menu.onclick = () => {
      menu.classList.toggle('bx-x');
      barranav.classList.toggle('abre');
    };
  });
  