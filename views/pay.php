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
        <h1>Confirmation de paiement</h1>
        <?php
        if($_GET["pr"]==1){?>
            <h2 style="color:#ffd861;">Basic 29$</h2>
            <?php
        }elseif($_GET["pr"]==2){
            echo " <h2 style='color:#833af8;'>Premium 59$</h2>";
        }else{
            header('location:./index.php');
        }
        ?>
        <div class="first-row">
            <div class="owner">
                <h3>Nom et Prenom</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Numéro de la carte</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Expiration</h3>
            <div class="selection">
                <div class="date">
                    <input type="date" name="" id="">
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="pp.png" alt="">
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
        <?php
        if($_GET["pr"]==1){?>
            <a class="conf" style='background:#ffd861;' href="">Confirm</a>
            <?php
        }elseif($_GET["pr"]==2){
            echo "<a class='conf' style='background:#833af8;' href=''>Confirm</a>";
        }
        ?>
        
    </div>
    </div>
<?php
include "../cadre/footer.php";
?>