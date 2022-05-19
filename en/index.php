<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/index.css" />
    <title>Accueil</title>
  </head>
  <body>
    <?php include("php/script.php"); ?>
    <?php include("php/header.php"); ?>
    <div class="body">
      <div
        id="carouselDelquigniesSlidesOnly"
        class="carousel slide my-50"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/Display/photo3.jpg" class="d-block w-100" alt="" />
          </div>
          <div class="carousel-item">
            <img src="../img/Display/photo4.jpg" class="d-block w-100" alt="" />
          </div>
          <div class="carousel-item">
            <img src="../img/Display/photo6.jpg" class="d-block w-100" alt="" />
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row Article1">
          <div class="col-md-6 my-5">
            <p class="display-2 text-white quote">Service provider for the industry since 1867</p>
            <div class="article-texte my-5">
              <h1>Logistique North</h1>
              <h2>Sous titre de l'article</h2>
              <p class="text-white">
              Committed to an environmental action plan with the "Objective CO2" charter, with a view to reducing fuel consumption and CO2 emissions, and a member of "CD2E", the company Delquignies is the first transporter in the north of the territory to be equipped with a Euro 6 standard truck.              </p>
            </div>
          </div>
          <div class="col-md-6 my-5">
            <img
              src="../img/Display/photo1.jpg"
              class="img-fluid photo-border"
              alt=""
            />
          </div>
        </div>
        <div class="row background py-5 photo-rounded">
          <div class="col-md-4 text-center">
            <a href="#"><img src="../img/placeholder/photo3.jpg" class="img-fluid" alt=""></a>
            <a href="#" ><p class="text-white text-center mt-5 mb-3 btnMenu h3">Nos métiers</p></a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#"><img src="../img/placeholder/photo3.jpg" class="img-fluid" alt=""></a>
            <a href="#" ><h3 class="text-white text-center mt-5 mb-3 btnMenu h3">Nos sites</h3></a>
          </div>
          <div class="col-md-4 text-center">
            <a href="#"><img src="../img/placeholder/photo3.jpg" class="img-fluid" alt=""></a>
            <a href="#" ><h3 class="text-white text-center mt-5 mb-3 btnMenu h3">Nos engagements</h3></a>
          </div>
        </div>
      </div>
    </div>
    <?php include("php/footer.php"); ?>
  </body>
</html>
