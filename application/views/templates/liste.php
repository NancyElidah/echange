<div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
								<div class="container-fluid">
									<div class="row" style="float: left;">
                                        <?php for ($i=0;$i < count($objet) ;$i++) { ?>
                                        <div class="col-xl-3 col-lg-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="new-arrival-product">
														<div class="new-arrivals-img-contnent">
                                                          <img src="<?php echo site_url('assets/images/sary/'.$objet[$i]['images']) ; ?>">
														</div>
														<div class="new-arrival-content text-center mt-3">
															<h4><a href="ecom-product-detail.html"><?php echo $objet[$i]['nom'] ; ?></a></h4>
															<h6><?php echo $objet[$i]['descriptions'] ; ?></h6>
															<span class="price"><?php echo $objet[$i]['prix'] ; ?>Ar</span>
															<p>
                                                            <?php echo site_url('proposition_controller/getvalue/objet2='.$objet[$i]['id'].'&&user2='.$objet[$i]['id_utilisateurs']) ; ?>
                                                            <a href="<?php echo site_url('proposition_controller/getvalue?objet2='.$objet[$i]['id'].'&&user2='.$objet[$i]['id_utilisateurs']) ; ?>">I want to propose</a>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
                                        <?php } ?>
									</div>
								</div>
        					</div>
                        </div>
                    </div>
            </div>   
                                                    </div>    