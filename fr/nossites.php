<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/nossites.css" />
    <title>Nos sites - Delquignies Logistique</title>
    <meta name="Content-Type" content="UTF-8" />
    <meta name="Content-Language" content="fr" />
    <meta
      name="Description"
      content="Nos principaux sites de stockage sont situés dans le Nord Pas de Calais."
    />
    <meta
      name="Keywords"
      content="Mortagne-du-nord, Roncq, valenciennes, Onnaing, localisation, sites, secteurs, activités, stockage, nord, pas de calais, haut de france, aires, modulables, proximité, autoroutes, fluvial , port"
    />
    <meta name="Subject" content="Nos sites principaux" />
    <meta name="Copyright" content="Delquignies Logistiques" />
    <meta name="Author" content="Delquignies Logistiques" />
    <meta name="Identifier-Url" content="delquignies-site/fr/nossites.php" />
    <meta name="Revisit-After" content="15 days" />
    <meta name="Robots" content="all" />
    <meta name="Rating" content="general" />
    <meta name="Distribution" content="global" />
    <meta name="Geography" content="Mortagne du nord,  France, 59158" />
    <meta name="Category" content="environment" />
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon" />
  </head>
  <body onload="breadcrumbs('siteId')">
    <?php include("php/header.php"); ?>
    <div class="container-fluid">
      <div class="row Info">
        <div class="row carte">
          <div class="col-sm-12 my-5">
            <div class="article-map">
              <div class="svg">
                <h1 class="text-center" id="mainTitle">Nos sites principaux</h1>
              </div>
              <p class="text-white text-center">
                Nos principaux sites de stockage sont situés dans le Nord Pas de
                Calais. Plus de <strong>110 000</strong> m² disponibles, des aires extérieures
                modulables, des accès facilités par la proximité d'<strong>autoroutes</strong> et
                d'un port <strong>fluvial</strong>.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 bg">
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(0)">
              Delquignies Mortagne
            </h2>
            <p class="text-white title-gps">
              30 Rue du Commandant Chaumonot, 59158 Mortagne-du-Nord
            </p>
          </div>
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(1)">Delquignies Roncq</h2>
            <p class="text-white title-gps">Z.A. Les Champs, 59223 Roncq</p>
          </div>
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(2)">
              Delquignies Valenciennes
            </h2>
            <p class="text-white title-gps">
              Zone Industrielle , 59220 Rouvignies
            </p>
          </div>
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(3)">Delquignies Onnaing</h2>
            <p class="text-white title-gps">
              Parc d'Activités de la Vallée de l'Escaut, 59264 Onnaing
            </p>
          </div>
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(4)">Delquignies Calais</h2>
            <p class="text-white title-gps">
              Parc d'Activités de la Vallée de l'Escaut, 62100 Calais
            </p>
          </div>
          <div class="info my-2">
            <h2 class="title-info" onclick="swapMap(4)">Delquignies Lesquin</h2>
            <p class="text-white title-gps">
              423 Rue du Haut de Sainghin, 59273 Fretin
            </p>
          </div>
        </div>
        <div class="col-sm-6 bg">
          <div
            class="embed-responsive embed-responsive-4by3 iframe2 text-center google-maps"
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2537.9537308553004!2d3.4439904163226926!3d50.49781889183067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2e65d9338a4d5%3A0x7ef71572b9da95b!2sDelquignies%20Logistique!5e0!3m2!1sfr!2sfr!4v1650981600979!5m2!1sfr!2sfr"
              title="Localisation des sites"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              id="map"
              class="dgs"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
      </div>
    </div>
    <?php include("php/footer2.php"); ?>
    <script type="text/javascript" src="../js/googleMap.js"></script>
    <script type="text/javascript" src="../js/breadcrumbs.js"></script>
  </body>
</html>
