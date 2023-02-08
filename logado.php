<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (!isset($_SESSION['id'])) {
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styleHome.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg text-light"  style="background-color:rgba(105, 10, 10, 0.74) ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="images/Logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="logado.php">Home</a>
            <a class="nav-link" href="região.php">Região</a>
            <a class="nav-link" href="produtor.php">Produtor</a>
            <a class="nav-link" href="vinho.php">Vinho</a>
            <a class="nav-link" href="sair.php">Sair</a>

          </div>
        </div>
      </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide"
      data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="images/CR1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/CR2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/CR3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button"
        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="titulo" align="center" 
    style="background-color:rgba(105, 10, 10, 0.74);
    border-radius:30px; 
    color:white;
    height:50px; 
    width: 400px; 
    margin-top:20px; 
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    font-size:xx-large">
    <a>Destaques da Semana</a>
    </div>
    
    

    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="images/capa06.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Barone Montalto</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa07.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center" >Quadrifolia</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa09.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Euro</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa10.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Rosso</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa09.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Brunello</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa10.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Rose</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="titulo2" align="center" 
    style="background-color:rgba(105, 10, 10, 0.74);
    border-radius:30px; 
    color:white;
    height:50px; 
    width: 400px; 
    margin-top:20px; 
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    font-size:xx-large">
    <a>Especiais</a>
    </div>

    <div class="wrapper">


      <section id="section1">
        <a href="#section3" class="arrow__btn">‹</a>
        <div class="item">
          <img
            src="images/capa01.png">
        </div>
        <div class="item">
          <img
            src="images/capa02.png">
        </div>
        <div class="item">
          <img
            src="images/capa03.png">
        </div>
        <div class="item">
          <img
            src="images/capa04.png">
        </div>
        <div class="item">
          <img
            src="images/capa05.png">
        </div>
        <a href="#section2" class="arrow__btn">›</a>
      </section>
      <section id="section2">
        <a href="#section1" class="arrow__btn">‹</a>
        <div class="item">
          <img
            src="images/capa05.png">
        </div>
        <div class="item">
          <img
            src="images/capa04.png">
        </div>
        <div class="item">
          <img
            src="images/capa03.png">
        </div>
        <div class="item">
          <img
            src="images/capa02.png">
        </div>
        <div class="item">
          <img
            src="images/capa01.png">
        </div>
        <a href="#section1" class="arrow__btn">›</a>
      </section>
    </div>


    <div class="titulo2" align="center" 
    style="background-color:rgba(105, 10, 10, 0.74);
    border-radius:30px; 
    color:white;
    height:50px; 
    width: 400px; 
    margin-top:50px; 
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px;
    font-size:xx-large">
    <a>Variedades</a>
    </div>

      
    <div class="container">
    <div class="row row-cols-2 row-cols-md-4 g-3">
  <div class="col">
    <div class="card">
      <img src="images/capa06.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Barone Montalto</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa07.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center" >Quadrifolia</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa09.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Euro</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa10.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Rosso</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa09.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Brunello</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa10.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Fanti Rose</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa06.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center">Barone Montalto</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/capa07.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" align="center" >Quadrifolia</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<footer class=" text-white text-center text-lg-start mt-4" style="background-color:rgba(105, 10, 10, 0.74)">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Ana Flávia 
  </div>
  <!-- Copyright -->
</footer>


  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

</html>