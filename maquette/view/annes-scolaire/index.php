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
                    <div class="d-flex justify-content-between">
                        <div class="">
                        <h1>list des années scolaire</h1>
                        </div>
                        <div class="">
                            <a href="./create.php" class="btn bg-teal">
                                <i class="fas fa-plus"></i> Nouveau années scolair
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- apprenants -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Card for Les apprenants -->
                    <div class="card">
                        <div class="card-header bg-olive">
                            <div class="row text-light">
                            <div class="col-md-6">
                                <h3 class="card-title">Années scolair</h3><br>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="input-group input-group-sm float-sm-right col-md-6 p-0">
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
                                <table class="table table-striped text-nowrap">
                                    <!-- Table headers -->
                                    <thead>
                                        <tr>
                                            <th>Année scolaire</th>
                                            <th>Date debut</th>
                                            <th>Date fin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody>

                                        <tr>
                                            <td>2020-2021</td>
                                            <td>01/09/2020</td>
                                            <td>01/07/2021</td>
                                            <td>
                                                <!-- Edit and Delete buttons -->
                                                <a href="./edit.php" class="btn btn-sm btn-outline-secondary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#exampleModal" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2021-2022</td>
                                            <td>01/09/2021</td>
                                            <td>01/07/2022</td>
                                            <td>
                                                <!-- Edit and Delete buttons -->
                                                <a href="./edit.php" class="btn btn-sm btn-outline-secondary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#exampleModal" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2022-2023</td>
                                            <td>01/09/2022</td>
                                            <td>01/07/2023</td>
                                            <td>
                                                <!-- Edit and Delete buttons -->
                                                <a href="./edit.php" class="btn btn-sm btn-outline-secondary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#exampleModal" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2023-2024</td>
                                            <td>01/09/2023</td>
                                            <td>01/07/2024</td>
                                            <td>
                                                <!-- Edit and Delete buttons -->
                                                <a href="./edit.php" class="btn btn-sm btn-outline-secondary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#exampleModal" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2024-2025</td>
                                            <td>01/09/2024</td>
                                            <td>01/07/2025</td>
                                            <td>
                                                <!-- Edit and Delete buttons -->
                                                <a href="./edit.php" class="btn btn-sm btn-outline-secondary" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <button class="btn btn-sm btn-outline-danger"  data-toggle="modal" data-target="#exampleModal" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal delete années scolaire  -->
                <?php include_once "./modal-delete-annees-scolaire.php" ?>
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