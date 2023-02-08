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
                                <form action = "<?php echo site_url('categories_controller/ajoutPlace');?>" method="post">
                                    <button type="submit" class="btn btn-outline-secondary"> Ajout des categories </button> 
                                </form>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                        
                                                <th>Categorie</th>
                                                <th>Modifier</th>
                                                <th>Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0 ; $i < count($value) ;$i++) { ?>
                                                <tr>
                                                    <td><?php echo $value[$i]['nom'] ; ?></td>
                                                    <td><a href="<?php echo site_url('categories_controller/index/'.$value[$i]['id']);?>">Modifier</a></td>
                                                    <td><a href ="<?php echo site_url('templates/deleteCategorie');?>">Supprimer</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>