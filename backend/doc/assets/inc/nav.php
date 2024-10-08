<?php
    $doc_id = $_SESSION['doc_id'];
    $doc_number = $_SESSION['doc_number'];
    $ret="SELECT * FROM  his_docs WHERE doc_id = ? AND doc_number = ?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('is',$doc_id, $doc_number);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/<?php echo $row->doc_dpic;?>" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        <?php echo $row->doc_fname;?> <?php echo $row->doc_lname;?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Bienvenue !</h6>
                    </div>


                    <a href="his_doc_modifier-compte.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Modifier compte</span>
                    </a>


                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="his_doc_logout_partial.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Se déconnecter</span>
                    </a>

                </div>
            </li>

           

        </ul>


        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Créer un Nouveau
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    

                    <!-- item-->
                    <a href="his_doc_ajouter_patient.php" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Patient</span>
                    </a>



                    <!-- item-->
                    <a href="his_doc_labo_rapport.php" class="dropdown-item">
                        <i class="fe-hard-drive mr-1"></i>
                        <span>Données de santé</span>
                    </a>
                </div>
            </li>

        </ul>
    </div>
<?php }?>