<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management - AdminLTE</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="../../node_modules/admin-lte/dist/css/adminlte.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <!-- Wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once "../layouts/nav.php" ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/aside.php" ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Gestion des Apprenants</h1>
                        </div>
                    </div>
                </div>
            </div>



            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your content goes here -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste des Apprenants</h3>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Liste des étudiantes</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nom</th>
                                                            <th>Prénom</th>
                                                            <th>Date de naissance</th>
                                                            <th>Classe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Dupont</td>
                                                            <td>Jeanne</td>
                                                            <td>19/05/2003</td>
                                                            <td>1ère</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Martin</td>
                                                            <td>Marie</td>
                                                            <td>05/08/2002</td>
                                                            <td>2ème</td>
                                                        </tr>
                                                        <!-- Add more rows as needed -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>School Admin &copy; 2024</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- AdminLTE JS -->
    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>

</body>

</html>