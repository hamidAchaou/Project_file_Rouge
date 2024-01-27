<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des apprenants</title>
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- link css  -->
    <link rel="stylesheet" href="../assets/css/app.css">
</head>

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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="">
                        <h1>années scolaire</h1>
                        </div>
                        <!-- <div class="">
                            <a href="#" class="btn bg-purple  ">
                                <i class="fas fa-plus"></i> Nouveau Apprenats
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- apprenants -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Card for Les apprenants -->
                    <div class="card">
                        <div class="card-header bg-purple row  text-light mx-3">
                            <div class="col-md-6">
                                <h3 class="card-title">
                                    <i class="fa-solid fa-plus"></i> Ajouter
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Table for apprenants -->
                            <div class="card-body table-responsive p-0">
                                <?php include_once 'form.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .apprenants -->

        </div>
        <!-- / .List des apprenants -->

        <!-- Main Sidebar Container -->
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