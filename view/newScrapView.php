
<!-- page nouvelle extraction -->
<h2 class="h2-titlePage">Nouvelle extraction</h2>

<div class="form-scrap">

    <form class="row g-3">
        <div class="col-12">
            <label for="inputName" class="form-label">Nom de l'extraction</label>
            <input type="text" class="form-control" id="inputName" placeholder="Soldes Amazon">
        </div>
        <div class="col-12">
            <label for="inputUrl" class="form-label">URL du site</label>
            <input type="text" class="form-control" id="inputUrl" placeholder="https://nomdusite.fr">
        </div>
        <div class="col-12">
            <label for="inputSelect" class="form-label">Sélecteur parent</label>
            <input type="text" class="form-control" id="inputSelect" placeholder="div">
        </div>
        <div class="col-md-4">
            <label for="inputSelectChild" class="form-label">Élements à sélectionner</label>
            <input type="text" class="form-control" id="inputSelectChild" placeholder="a">
        </div>
        <div class="col-md-4">
            <label for="inputType" class="form-label">Type</label>
            <select id="inputType" class="form-select">
            <option selected>Choisir...</option>
            <option>Texte</option>
            <option>Monétaire</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputCategory" class="form-label">Catégorie</label>
            <input type="text" class="form-control" id="inputCategory">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Extraire</button>
        </div>
    </form>

</div>
<!-- fin page nouvelle extraction -->

