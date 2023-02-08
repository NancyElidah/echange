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
                            <form action="<?php echo site_url('categories_controller/modifyCategories');?>" method="post">
                                <div class="card-body"> 
                                    <?php echo $id ;?>
                                    <input type="hidden" value="<?php echo $id ; ?>" name="id">
                                    <div class="row mb-3" style="text-align: center; color: orange; font-size: 25px;">
                                        <p><div class="col"> Nom du categorie: <input type="text" class="form-control" name="nom" > </div> </p>
                                        <button type="submit" class="btn btn-outline-secondary"> Modifier </button>   
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>