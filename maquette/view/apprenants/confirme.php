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
                <div class="container-fluid py-5">
                    <!-- Apprenant Form -->
                    <div class="card">
                        <div class="card-header bg-purple text-light">
                            <h3 class="card-title">Confirme Apprenant</h3>
                        </div>
                        <div class="card-body">
                            <!-- Your form content goes here -->
                            <form action="#" method="POST">
                                <!-- Add your form fields here -->
                                <div class="form-group">
                                    <label for="filier">Filier:</label>
                                    <select class="form-control" id="filier" name="filier" required>
                                        <option value="option1">Dev Web</option>
                                        <option value="option2">Dev Mobile</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="groupe">Groupe:</label>
                                    <select class="form-control" id="groupe" name="groupe" required>
                                        <option value="group1">101</option>
                                        <option value="group1">102</option>
                                        <option value="group1">102</option>
                                        <option value="group2">103</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn bg-purple">Confirme</button>
                            </form>
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