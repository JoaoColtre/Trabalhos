function animar() {
    let img = document.getElementById("animacao");
    let escalaInicial = 1; 
    let escalaFinal = 1.2; 
    

    function aplicarEscala() {
      img.style.transform = "scale(" + escalaFinal + ")";
      

      setTimeout(function() {
        img.style.transform = "scale(" + escalaInicial + ")";
      }, 1000); // 
    }
    
    setInterval(aplicarEscala, 2000); 
  }
  
  document.addEventListener("DOMContentLoaded", animar);