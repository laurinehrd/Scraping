
<!-- page se connecter -->
<div class="section-home">

    <div class="content col-md-6">

        <div class="logo mx-auto">
            <a href="?action=home">
                <img src="assets/images/logoScrap.png" alt="logo Scrap">
                <h1>Scrap</h1>
            </a>
        </div>
        <div class="accessAccount">
            <h2>Se connecter</h2>

            <form action="?action=signIn" method="post">
                <div class="form-floating mb-4">
                    <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
                    <label for="floatingEmail">Adresse mail</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Mot de passe</label>
                </div>

                <button type="submit" class="btn btn-outline-primary">Se connecter</button>
            </form>

            <?php
            if(isset($error))
            { 
                ?>
                    <p>Il y a une erreur</p>

                <?php 
            }

            ?>

        </div>
        
    </div>

    <div class="image col-md-6"></div>

</div>
<!-- fin page se connecter -->
