const form = document.getElementById('myForm');

form.addEventListener('submit', function(event) {
  if (!validateForm()) {
    event.preventDefault();
  }
});

function validateForm() {
  const email = document.getElementById('titulo').value;
  const motivo = document.getElementById('tags').value;
  const mensagem = document.getElementsByName('descricao')[0].value;

  let hasErrors = false;

  removeErrorMessages(); 

  if (email === '') {
    displayError('Por favor, preencha o campo de email.');
    hasErrors = true;
  }

  if (motivo === '') {
    displayError('Por favor, preencha o campo de motivo de contato.');
    hasErrors = true;
  }

  if (mensagem === '') {
    displayError('Por favor, preencha o campo de mensagem.');
    hasErrors = true;
  }

  return !hasErrors;
}

function displayError(message) {
  const errorElement = document.createElement('p');
  errorElement.textContent = message;
  errorElement.classList.add('error');

  const submitButton = document.querySelector('.submit-btn');
  submitButton.parentNode.insertBefore(errorElement, submitButton);
}

function removeErrorMessages() {
  const errorMessages = document.querySelectorAll('.error');
  errorMessages.forEach(function(errorMessage) {
    errorMessage.parentNode.removeChild(errorMessage);
  });
}
