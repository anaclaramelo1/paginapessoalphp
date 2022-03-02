
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Galeria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">Ana Melo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producoes.php">Produções</a>       
    </ul>
  </div>  
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" height="200">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" height="200">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" height="200">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div> 
</div>

<div class="container" style="margin-top:30px">
  <div class="row">
    <h2>Galeria</h2>

    <div class="card-columns">
  <div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto1.jpg" height="300">
    </div>
  </div><div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto2.jpg" height="300">
    </div>
  </div><div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto3.jpg" height="300">
    </div>
  </div><div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto5.jpg" height="300">
    </div>
  </div><div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto6.jpg" height="300">
    </div>
  </div><div class="card bg-light">
    <div class="card-body text-center">
      <img src="img/foto4.jpg" height="300">
    </div>
  </div>
</div>
    
   
  </div>
</div>

<div id="rodape" class="jumbotron text-center" style="margin-bottom:0">
  <div class="row">
    <div class="col-sm-4"> <p><br><br><p>
      Ana Clara Melo Petrosino - GU3007006<br>
      4° ano informática 

      
    </div>    
    <div class="col-sm-4"> 
     <h5>Contatos:</h5><p><br>
      anapetrosino1@gmail.com<br>
      ana.petrosino@aluno.ifsp.edu.br
     
      
    </div> <p> <p> <p>
    <div class="col-sm-4"> <br> <p><br>
     
     <a href = "https://www.instagram.com/melo_ana1/"><img src = "img/insta.png" height = "48"></a>
    <a href = "https://www.facebook.com/anaclara.melo.5680"><img src = "img/face.png" height = "50"></a><p>
      
    </div>
    
  </div>
</div>

</body>
</html>
