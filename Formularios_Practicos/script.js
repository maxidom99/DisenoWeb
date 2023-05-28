const fieldsets = document.querySelectorAll('fieldset');

fieldsets.forEach(fieldset => {
  fieldset.addEventListener('mouseenter', () => {
    fieldset.classList.add('active');
  });

  fieldset.addEventListener('mouseleave', () => {
    fieldset.classList.remove('active');
  });
});

function validarFechas() {
    const fechaActual = new Date().toISOString().split('T')[0];
    const fechaIdaInput = document.getElementById('fechaida');
    const fechaVueltaInput = document.getElementById('fechavuelta');
    const fechaIda = new Date(fechaIdaInput.value);
    const fechaVuelta = new Date(fechaVueltaInput.value);
  
    fechaIdaInput.setAttribute('min', fechaActual);
    fechaVueltaInput.setAttribute('min', fechaActual);
  
    if (fechaVuelta < fechaIda) {
      fechaVueltaInput.setCustomValidity('La fecha de vuelta no puede ser anterior a la fecha de ida.');
    } else {
      fechaVueltaInput.setCustomValidity('');
    }
  }
  
  
