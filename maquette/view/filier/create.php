<!DOCTYPE html>
<html lang="en">
<!-- Include head -->
<?php include "../layouts/head.php"; ?>

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
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header bg-teal text-light">
                                <h3 class="card-title">Créer une nouvelle filier</h3>
                            </div>
                            <div class="card-body">
                                <!-- Your form for creating a new record -->
                                <?php include_once "./form-feilds.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
