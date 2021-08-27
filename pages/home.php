<?php   
  include './dados/dados.php'; 

?>

<div id="home" class="container">
  <div class="row">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
      <?php foreach($destaque as $item){ 
        if ($item["id"] == 1){
      ?>

        <div class="carousel-item active">
          <img src="./img/<?=$item["imagem"];?>" class="d-block w-100"
            alt=<?=$item["titulo"];?>>
          <div class="carousel-caption d-none d-md-block">
            <h5><?=$item["titulo"];?></h5>
            <p><?=$item["descricao"];?></p>
            <a href="#" class="btn btn-dark btnslide">Comprar</a>
          </div>
        </div>
        <?php } else { ?>

        <div class="carousel-item">
          <img src="./img/<?=$item["imagem"];?>" class="d-block w-100"
            alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5><?=$item["titulo"];?></h5>
            <p><?=$item["descricao"];?></p>
            <a href="#" class="btn btn-dark btnslide">Comprar</a>
          </div>
        </div>

        <?php } } ?>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Proximo</span>
      </button>
    </div>

    <div class="card">
      <img src="./img/<?=$item["imagem"];?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$card[0]["titulo"];?></h5>
        <p class="card-text"><?=$card[0]["descricao"];?></p>
        <a href="#" class="btn btn-dark">Comprar</a>
      </div>
    </div>
  </div>

  <div class="row">

  <?php foreach($cardList as $item){  ?>
    <div class="card">
      <img
        src="./img/<?=$item["imagem"];?>"
        class="card-img-top" alt=<?=$item["titulo"];?>>
      <div class="card-body">
        <h5 class="card-title"><?=$item["titulo"];?></h5>
        <p class="card-text"><?=$item["descricao"];?></p>
        <a href="#" class="btn btn-dark">Comprar</a>
      </div>
    </div>
    <?php } ?>
    
  </div>
</div>