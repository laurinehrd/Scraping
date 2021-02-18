
<!-- page toutes les extractions -->
<h2 class="h2-titlePage">Toutes les extractions</h2>


    <?php 
        foreach($data['listes'] as $liste)
        {

            ?>

                <div class="card w-50 mx-auto mb-5">
                    <div class="card-header"><?= $liste['category']?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $liste['name']?></h5>
                        <a href="<?= $liste['url']?>" target="_blank"><?= $liste['url']?></a>
                        
                        <div class="d-flex justify-content-between mt-3">

                            <form action="?action=listScrap" method="post">
                                <input type="hidden" name="idScrapUpdate" value="<?php echo $liste['id']; ?>">
                                <input type="hidden" name="updateName" value="<?php echo $liste['name']; ?>">
                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Modifier</button>
                            </form>
                            <form action="?action=listScrap" method="post">
                                <input type="hidden" name="idScrap" value="<?php echo $liste['id']; ?>">
                                <button type="button" value="<?php $liste['id']?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Êtes-vous sûr de vouloir supprimer l'extraction ? <br>
                                            Aucun retour en arrière ne sera possible.

                                            <div class="form-check mt-3">
                                                <input class="form-check-input" type="checkbox" name="deleteScrap" id="flexCheckDefault">
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
                            </form>
                            
                        </div>
                        


                    </div>
                </div>

            <?php 
        } 
    ?>

    

<!-- fin page toutes les extractions -->
