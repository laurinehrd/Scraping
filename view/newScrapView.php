
<!-- page nouvelle extraction -->
<h2 class="h2-titlePage">Nouvelle extraction</h2>

<div class="form-scrap">

    <form action="?action=newScrap" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="inputName" class="form-label">Nom de l'extraction</label>
            <input type="text" class="form-control" id="inputName" name="scrapName" placeholder="Actualité Presse-Citron">
        </div>
        <div class="col-md-6">
            <label for="inputCategory" class="form-label">Catégorie</label>
            <input type="text" class="form-control" id="inputCategory" name="scrapCategory" placeholder="Web">
        </div>
        <div class="col-12">
            <label for="inputUrl" class="form-label">URL du site</label>
            <input type="text" class="form-control" id="inputUrl" name="scrapUrl" placeholder="https://nomdusite.fr">
        </div>
        <div class="col-md-6">
            <label for="inputSelect" class="form-label">Sélecteur parent</label>
            <input type="text" class="form-control" id="inputSelect" name="selectParent" placeholder=".div">
        </div>
        <div class="col-md-6">
            <label for="inputUnderSelect" class="form-label">Sous sélecteur</label>
            <input type="text" class="form-control" id="inputUnderSelect" name="underSelect" placeholder="li">
        </div>
        <div class="col-md-6">
            <label for="inputSelectChild" class="form-label">Élements à sélectionner</label>
            <input type="text" class="form-control" id="inputSelectChild" name="selectChild" placeholder="a">
        </div>
        <div class="col-md-6">
            <label for="inputType" class="form-label">Type</label>
            <select id="inputType" class="form-select" name="scrapType">
                <option value="-1" selected>Choisir...</option>
                <?php // on génère l'affichage des types de données
                foreach($data['types'] as $type)
                {

                ?>
                <option value="<?= $type['id_type']?>"><?= $type['type']?></option>
                <?php } ?>

            </select>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Extraire</button>
        </div>
    </form>

    <?php
        if(!empty($_SESSION['newScrap'])){
            echo '  <div class="alert alert-danger w-75 mx-auto mt-3" role="alert">
                        ' . $_SESSION['newScrap'] . '
                    </div>
            ';
            $_SESSION['newScrap'] = '';
        }
    ?>

</div>
<!-- fin page nouvelle extraction -->

