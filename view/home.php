<?php ob_start(); ?>

<!-- page home -->
<div class="section-home">

    <div class="content col-md-6">

        <div class="logo mx-auto">
            <img src="assets/images/logoScrap.png" alt="logo Scrap">
            <h1>Scrap</h1>
        </div>
        <div class="accessAccount">
            <h2>Accéder au compte</h2>
            <button type="button" class="btn btn-primary">Se connecter</button>
            <button type="button" class="btn btn-outline-primary">S'inscrire</button>
        </div>
        
    </div>

<div class="image col-md-6"></div>

</div>
<!-- fin page home -->


<?php
$content = ob_get_clean();

require "view/template-home.php";

