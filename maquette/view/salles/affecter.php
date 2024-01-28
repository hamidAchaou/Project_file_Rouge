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
            <div class="container pt-4">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header bg-olive text-light">
                                <h3 class="card-title">Affecter la salle</h3>
                            </div>
                            <div class="card-body">
                                <!-- Your form for creating a new record -->
                                <form action="../process_create.php" method="POST">

                                    <div class="mb-3 form-group">
                                        <label for="emplacement" class="form-label">salle:</label>
                                        <select class="form-control" id="emplacement" name="emplacement" required>
                                            <option value="Floor1">salle 1</option>
                                            <option value="Floor2">salle 2</option>
                                            <option value="Floor2">salle 3</option>
                                            <option value="Floor2">salle 4</option>
                                            <option value="Floor2">salle 5</option>
                                            <option value="Floor2">salle 6</option>
                                            <option value="Floor2">salle 7</option>
                                            <option value="Floor2">salle 8</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="emplacement" class="form-label">affecter a:</label>
                                        <input type="number" class="form-control" id="capacity" name="affecter" required>
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