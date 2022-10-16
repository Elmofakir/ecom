<?php
session_start();
if(isset($_SESSION['user'])){
    header('location:./accueil.php');
}elseif(isset($_SESSION['partenaire'])){
    header('location:./dash.php');
}
include "../cadre/header.php";
?>
<div class="cont">
    <div class="container2">
        <h1>Confirmer l'abonnement</h1>
            <h2 style="color:#43ef8b;">Partenaire</h2>
            <div class="second-row">
            <div class="card-number">
                <h3>Nom et Prenom</h3>
                <div class="input-field">
                    <input type="email">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Email</h3>
                <div class="input-field">
                    <input type="email">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Mot de passe</h3>
                <div class="input-field">
                    <input type="password">
                </div>
            </div>
        </div>
            <a class="conf" style='background:#43ef8b;' href="">Confirm</a>

        
    </div>
    </div>
    <?php
include "../cadre/footer.php";
?>