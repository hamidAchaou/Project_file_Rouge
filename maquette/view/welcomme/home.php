<!DOCTYPE html>
<html lang="fr">

<!-- inclure l'en-tête -->
<?php include "../layouts/head.php" ?>


<body class="hold-transition sidebar-mini">

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Barre de navigation -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- /.navbar -->

        <!-- Conteneur principal de la barre latérale -->
        <?php include_once "../layouts/aside.php" ?>


        <!-- Conteneur du contenu. Contient le contenu de la page -->
        <div class="content-wrapper">
            <!-- En-tête du contenu (en-tête de page) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-3 col-6">
                            <!-- petit bloc -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>60</h3>
                                    <p>APPRENANTS</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="small-box-footer">
                                    Total des apprenants enregistrés
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>5</h3>
                                    <p>GROUPE</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="small-box-footer text-dark">
                                    Total des enseignants
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>10</h3>
                                    <p>SALLES</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <div class="small-box-footer">
                                    Total des salles
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- petit bloc -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 class="text-dark">2</h3>
                                    <p class="text-dark">FILIÈRE</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chalkboard"></i>
                                </div>
                                <div class="small-box-footer text-dark">
                                    Classes au total
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.content-header -->

            <!-- 10 DERNIERS ENREGISTREMENTS -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Votre contenu va ici -->
                    <div class="card">
                        <div class="card-header bg-teal">
                            <div class="row">
                                <h5 class="pt-1 pr-2">infos :</h5>
                                <a href="../apprenants/not-confirme.php" class="btn bg-light">
                                    <i class="fas fa-graduation-cap"></i> 10 DERNIERS ENREGISTREMENTS
                                </a>
                                <a href="../apprenants/not-confirme.php" class="btn text-light">
                                    <i class="fa-solid fa-check-double"></i> APPRENANTS NON CONFIRMÉS
                                </a>
                                <a href="../salles/salles-disponible.php" class="btn text-light">
                                    <i class="fa-regular fa-square-plus"></i> SALLES DISPONIBLES
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body table-responsive p-0">
                                <?php include_once "../apprenants/content-table.php" ?>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .10 DERNIERS ENREGISTREMENTS -->

        </div>
        <!-- /.content-wrapper -->

        <!-- Conteneur principal de la barre latérale -->
        <?php include_once "../layouts/footer.php" ?>

    </div>
    <!-- ./wrapper -->

    <!-- AdminLTE JS -->
    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <!-- lien js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>
