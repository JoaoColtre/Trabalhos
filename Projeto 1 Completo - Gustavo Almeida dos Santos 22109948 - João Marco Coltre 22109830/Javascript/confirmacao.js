document.addEventListener('DOMContentLoaded', function() {
    let form = document.querySelector('.formulario');
    let successMessage = document.createElement('div');
    successMessage.textContent = 'Solicitação enviada com sucesso!';
    successMessage.style.backgroundColor = 'green';
    successMessage.style.color = 'white';
    successMessage.style.padding = '10px';
    successMessage.style.marginBottom = '20px';

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 

        form.parentNode.insertBefore(successMessage, form); 

        setTimeout(function() {
            form.submit();
            successMessage.remove();
        }, 3000); 
    });
});
