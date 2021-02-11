
<!-- page mon compte -->
<h2 class="h2-titlePage">Mon compte</h2>

<div class="form-account">
    <div class="text-center mb-4">
        <img src="assets/images/user-big.png" alt="icon user">
    </div>

    <form action="?action=account" method="post">

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

            <!-- <button type="submit" class="btn btn-danger" id="deleteAccount" name="deleteAccount">Supprimer le compte</button> -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" id="deleteAccount" name="deleteAccount" data-bs-toggle="modal" data-bs-target="#deleteAccountBtn">
            Supprimer le compte
            </button>

            <!-- Modal -->
            <div class="modal fade" id="deleteAccountBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Suppression du compte</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer le compte ? <br>
                        Aucun retour en arrière ne sera possible.

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="confirmDelete" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Oui
                            </label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Fin Modal -->

        </div>
        
        <?php 
            } 
        ?>

        <?php
            if(!empty($_SESSION['account'])){
                echo '  <div class="alert alert-success w-75 mx-auto mt-5" role="alert">
                            ' . $_SESSION['account'] . '
                        </div>
                ';
                $_SESSION['account'] = '';
            }
        ?>

    </form>

</div>



<!-- fin page mon compte -->

