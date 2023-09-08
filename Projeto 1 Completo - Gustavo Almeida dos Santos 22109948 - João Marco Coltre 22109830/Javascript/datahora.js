function obterDataCorrente() {
    let data = new Date();
    
    let dia = ("0" + data.getDate()).slice(-2);
    let mes = ("0" + (data.getMonth() + 1)).slice(-2);
    let ano = data.getFullYear();
    
    return dia + "/" + mes + "/" + ano;
  }
  
  function obterHoraAtual() {
    let data = new Date();
    
    let horas = ("0" + data.getHours()).slice(-2);
    let minutos = ("0" + data.getMinutes()).slice(-2);
    let segundos = ("0" + data.getSeconds()).slice(-2);
    
    return horas + ":" + minutos + ":" + segundos;
  }
  
  function exibirDataHoraAtual() {
    let elementoData = document.getElementById("data");
    let elementoHora = document.getElementById("hora");
    
    elementoData.innerHTML = obterDataCorrente();
    elementoHora.innerHTML = obterHoraAtual();
  }
  

  setInterval(exibirDataHoraAtual, 1000);