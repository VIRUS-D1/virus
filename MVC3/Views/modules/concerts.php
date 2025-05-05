<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Conciertos</title>
  <style>
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .flip-card {
      background-color: transparent;
      width: 100%;
      max-width: 49%;
      perspective: 1000px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 600px;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
      border-radius: 10px;
      overflow: hidden;
    }

    .flip-card-front img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .flip-card-back {
      background-color: #2c3e50;
      color: white;
      transform: rotateY(180deg);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
      font-size: 18px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .flip-card {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>

  <h1 style="text-align:center;">Mis conciertos</h1>
  <p style="text-align:center;">A lo largo de mi vida he ido a muchos conciertos —aunque menos de los que me gustaría—, pero algunos de los más importantes para mí son:</p>

  <div class="gallery">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/imagine.jpg" alt="Imagine Dragons">
        </div>
        <div class="flip-card-back">
          Imagine Dragons — Es una banda que me gusta muchísimo. Este concierto es uno de mis favoritos por la energía que transmiten y el setlist. Amo todas sus canciones porque tienen diferentes estados de ánimo, y me identifico con varias. Dan un show inolvidable.
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/maroon5.jpg" alt="Maroon 5">
        </div>
        <div class="flip-card-back">
          Maroon 5 — Nunca pensé que los vería en vivo. Me encanta su música y el espectáculo que dan es increíble. Adam Levine tiene una voz impresionante, y crecí escuchando muchas de sus canciones. Fue una experiencia muy especial.
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/myke.jpg" alt="Myke Towers">
        </div>
        <div class="flip-card-back">
          Myke Towers — No tenía planeado ir, pero al final se dio y logré entrar. Me gustan sus canciones, y la energía del concierto fue brutal. Todos brincaban y cantaban a todo pulmón. Fue una gran sorpresa y me encantó verlo en vivo.
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/top.jpg" alt="Twenty One Pilots">
        </div>
        <div class="flip-card-back">
          Twenty One Pilots — Es mi banda favorita. Verlos de cerca y escuchar en vivo mis canciones favoritas fue un sueño. Lloré con “The Line” porque era la primera vez que la tocaban en un concierto. “Tear in My Heart” y “My Blood” también fueron momentos inolvidables.
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/travis.jpg" alt="Travis Scott">
        </div>
        <div class="flip-card-back">
          Travis Scott — Fue un concierto inesperado, un amigo me invitó y conseguimos boletos. No me arrepiento: la energía fue épica, me metí a los mosh pits y al slam. Saltar y gritar con todos fue una locura que volvería a vivir.
        </div>
      </div>
    </div>

    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="images/morat.jpg" alt="Morat">
        </div>
        <div class="flip-card-back">
          Morat — No soy fan, pero se dio la oportunidad y terminé hasta el frente. Me sorprendió lo mucho que disfruté el concierto. Creo que era uno de esos que no sabía que necesitaba vivir.
        </div>
      </div>
    </div>
  </div>

</body>
</html>
