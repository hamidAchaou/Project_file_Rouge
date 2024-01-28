<!DOCTYPE html>
<html lang="en">

<?php include_once "../layouts/head.php" ?>


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
                        <div class="card-header bg-teal text-light">
                            <h3 class="card-title">départ apprenants</h3>
                        </div>
                        <div class="card-body">
                            <!-- Your form content goes here -->
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="dateDepart">Date du départ:</label>
                                    <input type="date" class="form-control" id="dateDepart" name="dateDepart" value="2023-12-12" required>
                                </div>


                                <div class="form-group">
                                    <label for="raison">Raison du départ:</label>
                                    <input type="text" class="form-control" id="raison-depart" name="raison-depart" value="Obtention de certificat" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" ></textarea>
                                </div>

                                <button type="submit" class="btn bg-teal">Confirme</button>
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
