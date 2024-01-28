<!DOCTYPE html>
<html lang="en">
<!-- Include header -->
<?php include "../layouts/head.php" ?>

<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../layouts/nav.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/aside.php"; ?>

        <!-- Create Apprenants Form -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid py-4">

                    <!-- Apprenant Form -->
                    <div class="card">
                        <div class="card-header bg-teal text-light">
                            <h3 class="card-title">Nouveau Apprenant</h3>
                        </div>
                        <div class="card-body">
                            <!-- git form create apprenants -->
                            <?php include_once "./form-feilds.php" ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.Create Apprenants Form -->

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
