<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:./login.php');
}
include "../cadre/header.php";
?>
<div class="sty">
    <div class="container4">
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button  onclick="window.location = './cours.php'" >Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button>Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button>Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button>Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button>Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
        <div class="wrapperv2">
            <img src="../images/laravel.jpg" alt="">
            <div class="content">
                <span>Laravel</span>
                <p>Langue: Arabic</p>
            </div>
            <div class="row">
                <div class="lang">Rachid El Mofakir&#10004	</div>
                <div class="buttons">
                    <button>Regardez</button>
                    <button>plus tard</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
include "../cadre/footer.php";
?>
