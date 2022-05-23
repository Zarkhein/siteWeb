<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/nossites.css" />
    <title>Nos sites</title>
  </head>
  <body>
    <?php include("php/header.php"); ?>
    <div class="container-fluid">
      <div class="row Info">
      <div class="row carte">
        <div class="col-sm-12 my-5">
          <div class="article-map">
            <div class="svg">
              <h2 class="text-center" id="mainTitle">Our sites</h2>
            </div>
            <p class="text-white text-center">Nos principaux sites de stockage sont situés dans le Nord Pas de Calais. Plus de 110 000 m² disponibles, des aires extérieures modulables, des accès facilités par la proximité d'autoroutes et d'un port fluvial.</p>
          </div>
        </div>
      </div>
        <div class="col-sm-6 bg">
          <div class="info my-5">
            <h2 class="title-info" onclick="swapMap(0)">  Delquignies Mortagne</h2>
            <p class="text-white title-gps">30 Rue du Commandant Chaumonot, 59158 Mortagne-du-Nord</p>
          </div>
          <div class="info my-5">
            <h2 class="title-info" onclick="swapMap(1)">Delquignies Roncq</h2>
            <p class="text-white title-gps">Z.A. Les Champs, 59223 Roncq</p>
          </div>
          <div class="info my-5">
            <h2 class="title-info" onclick="swapMap(2)">Delquignies Valenciennes</h2>
            <p class="text-white title-gps">Zoning Industriel 2, 59220 Rouvignies</p>
          </div>
          <div class="info my-5">
            <h2 class="title-info" onclick="swapMap(3)">Delquignies Onnaing</h2>
            <p class="text-white title-gps">Parc d'Activités de la Vallée de l'Escaut, 59264 Onnaing</p>
          </div>
        </div>
        <div class="col-sm-6 bg">
          <div class="embed-responsive embed-responsive-4by3 iframe2 text-center google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2537.9537308553004!2d3.4439904163226926!3d50.49781889183067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2e65d9338a4d5%3A0x7ef71572b9da95b!2sDelquignies%20Logistique!5e0!3m2!1sfr!2sfr!4v1650981600979!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="map" class="dgs" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <?php include("php/footer2.php"); ?>
    <script type="text/javascript" src="../js/googleMap.js"></script>
  </body>
</html>
