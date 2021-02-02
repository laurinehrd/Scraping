<?php ob_start(); ?>

<!-- page dashboard -->

<!-- header -->
<div class="navbar">
    <div class="icon-home">
        <a href="?action=dashboard">
            <img src="assets/images/home.png" alt="icon home">
        </a>
    </div>
    <div class="logo">
        <a href="?action=home">
            <img src="assets/images/logoScrap.png" alt="logo Scrap">
            <h1>Scrap</h1>
        </a>
    </div>
    <div class="account">
        <div class="text">
            <a href="?action=account">Mon compte</a>
            <a href="">Se déconnecter</a>
        </div>
        <div class="icon">
            <a href="?action=account">
                <img src="assets/images/user.png" alt="icon user">
            </a>
        </div>
    </div>
</div>
<!-- fin header -->

<h2 class="h2-dashboard">Que voulez-vous faire ?</h2>

<div class="menu">
    <a href="?action=newScrap">
        <div class="card">
            <h3>Faire une extraction</h3>
        </div>
    </a>
    <a href="?action=listScrap">
        <div class="card">
            <h3>Voir les extractions</h3>
        </div>
    </a>
    <a href="?action=historical">
        <div class="card">
            <h3>Voir l'historique</h3>
        </div>
    </a>
</div>





<!-- fin page dashboard -->

<?php
$content = ob_get_clean();

require "view/template-home.php";