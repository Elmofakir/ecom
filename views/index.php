<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:./accueil.php');
}elseif(isset($_SESSION['partenaire'])){
    header('location:./dash.php');
}
include "../cadre/header.php";
?>
<div class="container">
  <div class="wrapper">
    <div class="table basic">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">29</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Compte d'utilisateur</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Accéder aux cours</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Certificats</span>
          <span class="icon cross"><i class="fas fa-times"></i></span>
        </li>
        <li>
          <span class="list-name">Support</span>
          <span class="icon cross"><i class="fas fa-times"></i></span>
        </li>
      </ul>
      <div class="btn"><button onclick="window.location = './pay.php?pr=1'">Obtenir</button></div>
    </div>
    <div class="table premium">
      <div class="ribbon"><span>Recommend</span></div>
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">59</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Compte d'utilisateur</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Accéder aux cours</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Certificats</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Support</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <div class="btn"><button onclick="window.location = './pay.php?pr=2'">Obtenir</button></div>
    </div>
    <div class="table ultimate">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">0</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Compte partenaire</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Industrie du contenu</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Obtenir des bénéfices</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Support</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <div class="btn"><button onclick="window.location = './part.php'">S'abonner</button></div>
    </div>
  </div>
</div>
<?php
include "../cadre/footer.php";
?>