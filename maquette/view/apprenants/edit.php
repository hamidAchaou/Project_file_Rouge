<!DOCTYPE html>
<html lang="fr">
<!-- Inclure l'en-tête -->
<?php include "../layouts/head.php" ?>

<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Barre de navigation -->
        <?php include_once "../layouts/nav.php"; ?>
        <!-- /.navbar -->

        <!-- Conteneur principal de la barre latérale -->
        <?php include_once "../layouts/aside.php"; ?>

        <!-- Formulaire de création d'apprenants -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid py-4">

                    <!-- Formulaire d'apprenant -->
                    <div class="card">
                        <div class="card-header bg-teal text-light">
                            <h3 class="card-title">Modifier Apprenant</h3>
                        </div>
                        <div class="card-body">
                            <!-- Formulaire de création d'apprenants -->
                            <?php include_once "./form-fields.php" ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.Formulaire de création d'apprenants -->

        <!-- Pied de page -->
        <?php include_once "../layouts/footer.php"; ?>
    </div>
    <!-- /.wrapper -->

    <!-- Scripts JavaScript d'AdminLTE -->
    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <!-- Liens JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>

</html>
