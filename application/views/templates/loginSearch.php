<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Proposition d'echange</h4>
                                <form action="<?php echo site_url('objet_controller/control_research')?>" method="post">
                                    <input type="text" name="motCle" placeholder="Mot cle">
                                    <select name="idCat">
                                        <?php for ($i = 0 ; $i < count($categorie) ;$i++ ) { ?>
                                            <option value ="<?php echo $categorie[$i]['id'] ;?>"><?php echo $categorie[$i]['nom'] ;?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                        </div> 
                    </div>
            </div>
</div>