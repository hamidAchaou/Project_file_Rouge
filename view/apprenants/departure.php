<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include header -->
    <?php include "../layouts/head.php" ?>
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Your Page Title</title>
</head>

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
                                    <select class="form-control" id="raison" name="raison" required>
                                        <option value="group1">
                                            Expulsé
                                        </option>
                                        <option value="group2">
                                            Départ
                                        </option>
                                        <option value="group3">
                                            Obtention de certificat
                                        </option>
                                        <option value="group4">
                                            Autre raison
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
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