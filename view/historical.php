<?php ob_start(); ?>

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


<!-- page historique -->
<h2 class="h2-titlePage">Historique</h2>

<div>

</div>



<!-- fin page historique -->



<?php
$content = ob_get_clean();

require "view/template-home.php";