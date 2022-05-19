<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/header.css" />
    <title>Delquignies Logistics</title>
  </head>
  <body>
    <?php include("../fr/php/script.php"); ?>
    <nav class="navbar navbar-expand-sm" id="navBackground">
      <div class="container-fluid">
        <a href="../en/index.php" class="navbar-brand"
          ><img
            src="../img/Logo-Delquignies-Logistique_o.png"
            alt=""
            height="64"
        /></a>
        <div class="flag-block">
          <?php 
            echo "<a href='../fr/".$link[3]."'>"
          ?>
          <img src="../img/france.png" id="flag" alt="alt"/>
          </a>
          <?php 
            echo "<a href='../en/".$link[3]."'>"
          ?><img src="../img/royaume-uni.png" id="flag" alt="alt"
          /></a>
        </div>
        <button
          type="button"
          class="navbar-toggler"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="nav navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a
                id="demo"
                href="#"
                onclick="myFunctionEN()"
                class="nav-link h3 text-light active dropdown-toggle"
                data-bs-toggle="dropdown"
                >Our jobs</a
              >
              <div class="dropdown-menu" id="dropdownBackground">
                <a href="transport.php" class="dropdown-item text-light" id="trans">Transport</a>
                <a href="stockage.php" class="dropdown-item text-light" id="trans">Storage</a>
                <a href="logistique.php" class="dropdown-item text-light" id="trans">Logistics</a>
                <a href="douane.php" class="dropdown-item text-light" id="trans">Customs</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link h3 text-light" id="test"
                >Our locations</a
              >
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link h3 text-light" id="test" 
                >Our commitments</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="../js/script_en.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>