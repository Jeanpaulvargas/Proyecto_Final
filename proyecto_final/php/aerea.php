<?php include('header.php'); ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
  /* Estilos específicos para la página de la Fuerza Aérea */
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #000;
  }

  .content-section {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
  }

  h2.section-title {
    color: #333;
    font-size: 2.4rem;
    margin-bottom: 20px;
    text-align: center;
  }

  p {
    font-size: 1.1rem;
    line-height: 1.8;
    text-align: justify;
    margin-bottom: 20px;
  }

  .mission-vision {
    text-align: center;
  }

  .activities {
    text-align: center;
  }

  /* Estilos para el carrusel */
  .carousel-item img {
    width: 100%;
    height: auto;
  }

  .carousel-caption {
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 20px;
  }

  .carousel-caption h5, .carousel-caption p {
    margin-bottom: 0;
  }
</style>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12 content-section">
      <h2 class="section-title">Fuerza Aérea de Guatemala</h2>
     <br>
      <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/aereo3.jpeg" class="d-block w-100" alt="Fuerza Aérea 1">
            <div class="carousel-caption">
            
              <p>Protegiendo el espacio aéreo nacional.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/aereo2.jpg" class="d-block w-100" alt="Fuerza Aérea 2">
            <div class="carousel-caption">
          
              <p>Garantizar la soberanía del espacio aéreo guatemalteco.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/aereo1.jpeg" class="d-block w-100" alt="Fuerza Aérea 3">
            <div class="carousel-caption">
             
              <p>Ser una fuerza aérea moderna y altamente capacitada.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
<br><br><br>
      <!-- Contenido adicional -->
      <div class="mission-vision">
        <h3>Misión</h3>
        <p>
          Nuestra misión es garantizar la soberanía del espacio aéreo guatemalteco, protegiendo la integridad territorial y contribuyendo a la seguridad nacional.
        </p>
        <h3>Visión</h3>
        <p>
          Buscamos ser una fuerza aérea moderna, eficiente y altamente capacitada, reconocida por su profesionalismo y compromiso con Guatemala.
        </p>
      </div>
      <h3 class="activities">Actividades Principales</h3>
      <ul>
        <li>Vigilancia del espacio aéreo para detectar y responder a amenazas.</li>
        <li>Apoyo en operaciones terrestres y marítimas mediante reconocimiento aéreo.</li>
        <li>Transporte de personal y suministros en situaciones de emergencia y desastres naturales.</li>
        <li>Entrenamiento y capacitación continua del personal aéreo.</li>
        <li>Mantenimiento y operación de aeronaves para garantizar su disponibilidad operativa.</li>
      </ul>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $('.carousel').carousel({
    interval: 5000 // Cambiar el valor a la cantidad de milisegundos deseada
  });
</script>
