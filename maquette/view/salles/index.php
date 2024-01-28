<!DOCTYPE html>
<html lang="en">
<!-- Include head -->
<?php include "../layouts/head.php" ?>

<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once "../layouts/nav.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/aside.php"; ?>

        <!-- List des apprenants -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <h1>Liste des Salles</h1>
                        </div>
                        <div>
                            <a href="./create.php" class="btn bg-teal">
                                <i class="fas fa-plus"></i> Nouveau salles
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.Filter -->

            <!-- Apprenants -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Card for Les apprenants -->
                    <div class="card">
                        <div class="card-header bg-olive">
                            <div class="text-light row">
                                <div class="col-md-9">
                                    <h3 class="card-title">LIST DES SALLES</h3><br>
                                    <div class="d-flex">
                                        <a href="./salles-disponible.php" class="btn text-light">
                                            <i class="fa-solid fa-eye"></i> Liste des salles disponible
                                        </a>
                                    </div>
                                </div>
                                <div class="p-0 col-md-3">
                                    <div class="input-group input-group-sm col-md-12 p-0">
                                        <input type="text" name="search-input" id="search-input" class="form-control float-right" placeholder="Recherche">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table for apprenants -->
                            <div class="card-body table-responsive p-0">
                                <?php include_once "./content-table.php" ?>

                            </div>
                        </div>
                    </div>
            </section>
            <!-- / .Apprenants -->

        </div>
        <!-- /.List des apprenants -->

        <!-- Footer -->
        <?php include_once "../layouts/footer.php"; ?>
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
