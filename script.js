var groteFoto = document.getElementById('grote-foto');
var miniaturen = document.querySelectorAll('.miniatuur');

function toonFoto(event) {
  var gekozen = event.target;

  groteFoto.src = gekozen.src;
  groteFoto.alt = gekozen.alt;

  for (var i = 0; i < miniaturen.length; i++) {
    miniaturen[i].classList.remove('actief');
  }

  gekozen.classList.add('actief');
}

for (var i = 0; i < miniaturen.length; i++) {
  miniaturen[i].addEventListener('click', toonFoto);
}
