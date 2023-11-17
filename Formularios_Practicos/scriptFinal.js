var acertijoActual = 1; // Variable para llevar un seguimiento del acertijo actual

// Muestra el primer acertijo al cargar la página
document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'block';

function Respuesta1(){
    var respuesta1 = document.getElementById('lenguaje').value.toLowerCase();
    if (respuesta1 === 'html') {
        alert ('¡La respuesta es correcta, estás más cerca de recibir la ubicación del evento');
    
        document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'none';
        acertijoActual++;
        document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'block';
    } else {
        alert('Incorrecto.')
        alert('Aquí va una pista... Hypertext Markup Language');
    }
}

function Respuesta2(){
    var respuesta2 = document.getElementById('red').value.toLowerCase();
    if (respuesta2 === 'internet') {
        alert ('¡Super, ya casi lo logras!');
    
        document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'none';
        acertijoActual++;
        document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'block';
    } else {
        alert('Incorrecto.')
        alert('Aquí va una pista... Red de computadoras interconectadas a nivel mundial en forma de tela de araña');
    }
}

function Respuesta3(){
    var respuesta3 = document.getElementById('software').value.toLowerCase();
    if (respuesta3 === 'antivirus') {
        alert ('¡Felicitaciones!');
    
        document.querySelector('.form fieldset:nth-child(' + acertijoActual + ')').style.display = 'none';
        document.getElementById('mensaje-container').style.display = 'block';
    } else {
        alert('Incorrecto.')
        alert('Aquí va una pista... Detecta la presencia de un virus informático en un disquete o en una computadora y lo elimina.');
    }
}

let map;

window.initMap = function() {

  if (typeof google !== 'undefined' && google.maps) {
    const { Map, Marker } = google.maps;

    map = new Map(document.getElementById("map"), {
      center: { lat: -34.90655288049777, lng: -56.20517633951238 },
      zoom: 15,
    });

    var marker = new Marker({
      position: { lat: -34.90655288049777, lng: -56.20517633951238 },
      map: map
    });
}
};
