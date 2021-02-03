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


<!-- page mon compte -->
<h2 class="h2-titlePage">Mon compte</h2>

<div class="form-account">
    <div class="text-center mb-4">
        <img src="assets/images/user-big.png" alt="icon user">
    </div>

    <form action="" method="post">

        <div class="row g-2 mb-4">
            <div class="col-md">
                <input type="name" class="form-control" id="floatingFirstname" placeholder="Laurine">
            </div>
            <div class="col-md">
                <input type="name" class="form-control" id="floatingName" placeholder="Herard">
            </div>
        </div>
        <div class="mb-4">
            <input type="email" class="form-control" id="floatingEmail" placeholder="l.herard@codeur.online">
        </div>
        <div class="input-group mb-4">
            <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="button-addon2">
            <button class="btn btn-secondary" type="button" id="button-addon2">Modifier le mot de passe</button>
        </div>

        <div class="button-update-delete"> 
            <button type="submit" class="btn btn-primary">Modifier les informations</button>
            <button type="submit" class="btn btn-danger">Supprimer le compte</button>
        </div>
        
    </form>

</div>



<!-- fin page mon compte -->


<?php
$content = ob_get_clean();

require "view/template-home.php";