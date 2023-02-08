
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
                            <form action="<?php echo site_url('categories_controller/insertCategories');?>" method="post">
                                <div class="card-body"> 
                                    <div class="row mb-3" style="text-align: center; color: orange; font-size: 25px;">
                                        <p><div class="col"> Nom du categorie: <input type="text" class="form-control" name="nom"/> </div> </p>
                                        <button type="submit" class="btn btn-outline-secondary"> Add</button>   
                                       
                                    </div>
                                </div>   
                            </form>
                            </div>
                        </div>
                    </div>
    