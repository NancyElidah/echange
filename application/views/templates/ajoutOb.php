
        <div class="content-body">
            <div class="container-fluid">
		        <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body"> 
                                <div class="row mb-3" style="text-align: center; color: orange; font-size: 15px;">
                                </div>
                            </div>
                            <form action="<?php echo site_url('objet_controller/insert');?>" method="post">
                                <div class="card-body"> 
                                    <div class="row mb-3" style="text-align: center; color: orange; font-size: 25px;">
                                        <p><div class="col"> Nom du categorie:
                                            <?php for ($i=0 ; $i<count($value) ; $i++){ ?>
                                            <select nanme="categorie">
                                                    <option value="<?php echo $value[$i]['id'] ;?>"><?php echo $value[$i]['nom'];?></option>
                                                    <?php } ?>
                                            </select>
                                             </div> </p>
                                        <p><div class="col"> Nom de l'objet: <input type="text" class="form-control" name="nom"/> </div> </p>
                                        <p><div class="col"> Description: <input type="text" class="form-control" name="desc"/> </div> </p>
                                        <p><div class="col"> quantite <input type="number" class="form-control" name="quantite"/> </div> </p>
                                        <p><div class="col"> Son prix: <input type="number" class="form-control" name="prix"/> </div> </p>
                                        <button type="submit" class="btn btn-outline-secondary"> Add</button>   
                                       
                                    </div>
                                </div>   
                            </form>
                            </div>
                        </div>
                    </div>
    