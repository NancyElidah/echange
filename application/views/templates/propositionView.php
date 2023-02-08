<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Proposition d'echange</h4>
                                <form action="<?php echo site_url('proposition_controller/add')?>" method="post">
                                    <input type = "hidden" name="objet2" value="<?php echo $info[0];?>">
                                    <input type = "hidden" name="user2" value="<?php echo $info[1];?>">
                                    <select name = "object1">
                                        <?php for ($i = 0 ; $i < count($myObjet) ; $i++) { ?>
                                            <option value="<?php echo $myObjet[$i]['id'] ; ?>"><?php echo $myObjet[$i]['nom'] ; ?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="number" name="qte1">
                                    <input type="number" name="qte2">
                                    <input type="datetime" name="date">
                                    <input typ="submit" value="valid">
                                </form>
                            </div>
                        </div> 
                    </div>
            </div>
</div>