function showConfirmationMessage(message) {
    let confirmationMessage = document.createElement('div');
    confirmationMessage.textContent = message;
    confirmationMessage.classList.add('confirmation-message');
  
    document.body.appendChild(confirmationMessage);
  

    setTimeout(function() {
      confirmationMessage.remove();
    }, 3000);
  }
  

  function showDeleteConfirmation(idPedido) {
    let confirmDelete = confirm('Tem certeza que deseja excluir este registro?');
  
    if (confirmDelete) {

      window.location.href = 'excluir.php?id_pedido=' + idPedido;
    }
  }
  

  if (window.location.search.includes('excluido')) {
    let params = new URLSearchParams(window.location.search);
    let excluido = params.get('excluido');
  
    
    if (excluido === '1') {
      showConfirmationMessage('Registro excluído com sucesso!');
    } else if (excluido === '0') {
      showConfirmationMessage('Erro ao excluir o registro. Por favor, tente novamente.');
    }
  }
  

  let deleteLinks = document.querySelectorAll('#excluirLink');
  
  
  deleteLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      let idPedido = this.getAttribute('data-id');
      showDeleteConfirmation(idPedido);
    });
  });
  