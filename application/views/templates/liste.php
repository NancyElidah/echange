<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Other object</h4>
                                <?php for ($i=0;$i < count($objet) ;$i++) { ?>
                                    <div id="content1">
                                        <div id="images">
                                            <img src="<?php echo site_url('assets/image/'.$objet[$i]['images']) ; ?>">
                                        </div>
                                        <div id="desc">
                                            <h1><?php echo $objet[$i]['nom'] ; ?></h1>
                                            <p><?php echo $objet[$i]['prix'] ; ?></p>
                                        </div>
                                        <div id = "button">
                                            <a href="<?php echo site_url('proposition_controller/getvalue/objet2='.$objet[$i]['id'].'&& user2 = '.$objet[$i]['id_utilisateurs']) ; ?>">I want to propose</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> 
                    </div>
            </div>
</div>