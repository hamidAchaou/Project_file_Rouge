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
                            <div class="card-header bg-olive text-light">
                                <h3 class="card-title">Affecter la salle</h3>
                            </div>
                            <div class="card-body">
                                <!-- Your form for creating a new record -->
                                <form action="../process_create.php" method="POST">

                                    <div class="mb-3 form-group">
                                        <label for="emplacement" class="form-label">Salle:</label>
                                        <select class="form-control" id="emplacement" name="emplacement" required>
                                            <option value="Floor1">Salle 1</option>
                                            <option value="Floor2">Salle 2</option>
                                            <option value="Floor2">Salle 3</option>
                                            <option value="Floor2">Salle 4</option>
                                            <option value="Floor2">Salle 5</option>
                                            <option value="Floor2">Salle 6</option>
                                            <option value="Floor2">Salle 7</option>
                                            <option value="Floor2">Salle 8</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="affecter" class="form-label">Affecter à:</label>
                                        <input type="text" class="form-control" id="affecter" name="affecter" required>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn bg-teal">Affecter</button>
                                    </div>
                                </form>
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
