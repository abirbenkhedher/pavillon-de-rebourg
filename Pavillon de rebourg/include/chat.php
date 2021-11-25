<?php 
include('include/connect_db.php');



$req3 = $bdd->query("SELECT  count(id_message) FROM message_contact");
$data3 = $req3->fetch();
$mes=$data3[0];



?>
                      
                      
                      
                      
                      
                      
                      <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill"><?php echo $mes ?></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <a href="liste_des_contactes.php" class="small text-reset text-decoration-underline"> Messages</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    include ('include/connect_db.php');
                                    $req1 = $bdd->query("select * from message_contact");
							        //$donnees1 = $req1->fetch();
                                ?>
                                    
                                <div data-simplebar style="max-height: 230px;">
                                <?php while($donnees1 = $req1->fetch()){?>
                                    <a href="liste_des_contactes.php" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/profile.png" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            
                                            
                                        
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1"><?php echo $donnees1['nom_message']?> <?php echo $donnees1['prenom_message']?></h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1"><?php echo $donnees1['sujet_message']?></p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php } ?>
                                
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="liste_des_contactes.php">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                                    </div>
                                    