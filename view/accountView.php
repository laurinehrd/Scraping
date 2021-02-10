
<!-- page mon compte -->
<h2 class="h2-titlePage">Mon compte</h2>

<div class="form-account">
    <div class="text-center mb-4">
        <img src="assets/images/user-big.png" alt="icon user">
    </div>

    <form action="" method="post">

        <?php 
            if(!empty($_SESSION['user']))
            {
        ?>

        <div class="row g-2 mb-4">
            <div class="col-md">
                <input type="name" class="form-control" id="floatingFirstname" name="updateFirstname" value="<?php echo $_SESSION['user']['firstname']; ?>" disabled>
            </div>
            <div class="col-md">
                <input type="name" class="form-control" id="floatingName" name="updateName" value="<?php echo $_SESSION['user']['name']; ?>" disabled>
            </div>
        </div>
        <div class="mb-4">
            <input type="email" class="form-control" id="floatingEmail" name="updateEmail" value="<?php echo $_SESSION['user']['email']; ?>" disabled>
        </div>
        <div class="input-group mb-4">
            <input type="password" class="form-control" placeholder="mot de passe caché" aria-label="password" aria-describedby="button-addon2" disabled>
            <button class="btn btn-secondary" type="button" id="button-addon2">Modifier le mot de passe</button>
        </div>

        <div class="button-update-delete"> 
            <button type="button" class="btn btn-primary" id="updateAccount">Modifier les informations</button>
            <button type="submit" class="btn btn-success" id="validate">Valider les modifications</button>

            <button type="submit" class="btn btn-danger" id="deleteAccount">Supprimer le compte</button>
        </div>
        
        <?php 
            } 
        ?>

    </form>

</div>



<!-- fin page mon compte -->

