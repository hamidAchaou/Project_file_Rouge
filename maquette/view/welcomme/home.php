<!DOCTYPE html>
<html lang="en">

<!-- include heade -->
<?php include "../layouts/head.php" ?>


<body class="hold-transition sidebar-mini">

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/aside.php" ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>60</h3>
                                    <p>APPTRENANTS</p>
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
                                    <p>ENSEIGNANTS</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="small-box-footer text-dark">
                                    Total des ensagnent
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
                                total des salles
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 class="text-dark">2</h3>
                                    <p class="text-dark">CLASSES</p>
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

            <!-- 10 DERNIERS ENREGESTEES -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your content goes here -->
                    <div class="card">
                        <div class="card-header bg-purple">
                            <div class="row">
                                <h5 class="pt-1 pr-2">infos :</h5>
                                <a href="../apprenants/not-confirme.php" class="btn bg-light">
                                    <i class="fas fa-graduation-cap"></i> 10 DERNIERS ENREGISTES
                                </a>
                                <a href="../apprenants/not-confirme.php" class="btn text-light">
                                    <i class="fa-solid fa-check-double"></i> APPRENANTS NOT CONFIRM
                                </a>
                                <a href="../salles/salles-disponible.php" class="btn text-light">
                                    <i class="fa-regular fa-square-plus"></i> SALE DISPONIBLES
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
            <!-- / .10 DERNIERS ENREGESTEES -->

        </div>
        <!-- /.content-wrapper -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/footer.php" ?>

    </div>
    <!-- ./wrapper -->

    <!-- AdminLTE JS -->
    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <!-- link js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>