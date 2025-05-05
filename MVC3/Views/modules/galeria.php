<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Galería Dump</title>
  <style>

    h1 {
      text-align: center;
      font-size: 40px;
      margin-bottom: 10px;
    }

    p {
      text-align: center;
      font-size: 20px;
      margin-bottom: 30px;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .gallery img {
      width: 48%;
      margin: 1%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.03);
    }

    @media (max-width: 768px) {
      .gallery img {
        width: 98%;
        margin: 1% 0;
      }
    }
  </style>
</head>
<body>

  <h1>DUMP</h1>
  <p>FOTOS RANDOM.</p>

  <div class="gallery">
    <img src="images/1.jpg" alt="1">
    <img src="images/2.jpg" alt="2">
    <img src="images/3.jpg" alt="3">
    <img src="images/4.jpg" alt="4">
    <img src="images/5.jpg" alt="5">
    <img src="images/6.jpg" alt="6">
    <img src="images/7.jpg" alt="7">
    <img src="images/8.jpg" alt="8">
    <img src="images/9.jpg" alt="9">
    <img src="images/10.jpg" alt="10">
    <img src="images/11.jpg" alt="11">
    <img src="images/12.jpg" alt="12">
    <img src="images/13.jpg" alt="13">
    <img src="images/14.jpg" alt="14">
    <img src="images/15.jpg" alt="15">
  </div>

</body>
</html>
