<?php
$bien=$nost=$cata=$gale=$cont=0;
switch (basename($_SERVER['PHP_SELF'])) {
    case "inicio.php":
      $inicio="class='active'";
    break;

    case "nosotros.php":
      $nosotros="class='active'";
    break;

    case "edc-en-peru.php":
      $edc="class='active'";
    break;

    case "responsabilidad-social.php":
      $responsabilidad="class='active'";
    break;

    case "noticias.php":
      $noticias="class='active'";
    break;

    case "contacto.php":
      $contacto="class='active'";
    break;
}
?>

<header id="changeHeader" class="headerSpace col-12 offset-md-0 col-md-12 offset-lg-1 col-lg-10 np">
  <div class="container">
  <div class="row no-gutters">
    <div class="logo col-5 col-md-3 col-lg-2 col-xl-2">
      <a href="inicio.php">
      <img id="logoHeader" class="logo-responsive" src="app/img/logo.png" alt="Energy Logo">
      </a>
    </div>
    <div id="linksHeaderChange" class="nav col-7 col-md-9 col-lg-10 col-xl-10">
      <div class=" d-none d-sm-none d-md-none d-lg-block col-lg-12 np">
        <ul class="links">
          <li>
            <a <?= $inicio ?> href="inicio.php">
              Inicio
            </a>
            <span class="lineNav">|</span>
          </li>
          <li>
            <a <?= $nosotros ?> href="nosotros.php">
              Quiénes Somos
            </a>
            <span class="lineNav">|</span>
          </li>
          <li>
            <a <?= $edc ?> href="edc-en-peru.php">
              EDC en Perú
            </a>
            <span class="lineNav">|</span>
          </li>

          <li>
            <a <?= $responsabilidad ?> href="responsabilidad-social.php">
              Responsabilidad Social
            </a>
            <span class="lineNav">|</span>
          </li>

          <li>
            <a <?= $noticias ?> href="noticias.php">
              Noticias
            </a>
            <span class="lineNav">|</span>
          </li>
          <li>
            <a <?= $contacto ?> href="contacto.php">
              Contacto
            </a>
          </li>
        </ul>
      </div>
      <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none col-md-12 np">
        <button name="SandwichButton" onclick="SandwichEffect()" class="bte2" id="btn2">
          <span id="lin1" class="spn12"></span>
          <span id="lin2" class="spn22"></span>
          <span id="lin3" class="spn32"></span>
          <span id="lin4" class="spn42"></span>
          <span id="lin6" class="spn62"></span>
        </button>
      </div>
    </div>
  </div>
  </div>
  <div id="subheader" class="d-block d-sm-block d-md-block d-lg-none d-xl-none col-md-12">
    <ul class="subnav-mobile">
      <li>
        <a <?= $inicio ?> href="inicio.php">
          Inicio
        </a>
      </li>
      <li>
        <a <?= $nosotros ?> href="nosotros.php">Quiénes Somos</a>
      </li>
      <li>
        <a <?= $edc ?> href="edc-en-peru.php">EDC en Perú</a>
      </li>
      <li>
        <a <?= $responsabilidad ?> href="responsabilidad-social.php">Responsabilidad Social</a>
      </li>
      <li>
        <a <?= $noticias ?> href="noticias.php">Noticias</a>
      </li>
      <li>
        <a <?= $contacto ?> href="contacto.php">Contacto</a>
      </li>
    </ul>
  </div>
</header>