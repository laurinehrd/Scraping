
<!-- page créer un compte -->
<div class="section-home">

    <div class="content col-md-6">

        <div class="logo mx-auto">
            <a href="?action=home">
                <img src="assets/images/logoScrap.png" alt="logo Scrap">
                <h1>Scrap</h1>
            </a>
        </div>
        <div class="accessAccount">
            <h2>Créer un compte</h2>

            <form action="?action=signOn" method="post">

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="floatingFirstname" name="createfirstname" placeholder="Firstname" required>
                            <label for="floatingFirstname">Prénom</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="floatingName" name="createname" placeholder="Name" required>
                            <label for="floatingName">Nom</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="floatingEmail" name="createemail" placeholder="name@example.com" required>
                    <label for="floatingEmail">Adresse mail</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" name ="createpassword" placeholder="Password" required>
                    <label for="floatingPassword">Mot de passe</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPasswordConfirm" name="passwordConfirm" placeholder="Password" required>
                    <label for="floatingPasswordConfim">Confirmation du mot de passe</label>
                </div>

                <button type="submit" class="btn btn-outline-primary">S'inscrire</button>
            </form>

            <?php

            // if($errorMdp = true)
            // {
            //     ?>
                    <!-- <p>il y a une erreur</p> -->

                <?php 
            // }

            ?>

        </div>
        
    </div>

    <div class="image col-md-6"></div>

</div>
<!-- fin page créer un compte -->
