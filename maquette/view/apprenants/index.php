<!DOCTYPE html>
<html lang="en">

<head>
    <!-- include head -->
    <?php include "../layouts/head.php"; ?>
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="">
                            <h1>Liste des Apprenants</h1>
                        </div>
                        <div class="">
                            <a href="./create.php" class="btn bg-teal">
                                <i class="fas fa-plus"></i> Nouveau Apprenants
                            </a>
                        </div>
                    </div>

                    <div class="">
                        <div class="card w-100">
                            <!-- Filter Form -->
                            <div class="filter-apprenants card-header">
                                <form action="" class="d-flex align-items-center w-100">
                                    <div class="col-md-1 text-olive m-0 p-0 d-flex align-items-center">
                                        <h3 class="m-0 p-0 border-right pr-4">
                                            <i class="fas fa-filter"></i>
                                        </h3>
                                    </div>
                                    <div class="form-group-sm mr-2 row col-md-3">
                                        <label for="annees-colaire" class="col-md-6 mt-2 p-0">Année scolaire:</label>
                                        <select class="input-groupe-sm form-control col-md-6 m-0" name="annees-colaire" id="annees-colaire">
                                            <option value="2020" class="input-groupe-sm">2020</option>
                                            <option value="2021" class="input-groupe-sm">2021</option>
                                            <option value="2022" class="input-groupe-sm">2022</option>
                                            <option value="2023" class="input-groupe-sm">2023</option>
                                            <option value="2024" class="input-groupe-sm">2024</option>
                                        </select>
                                    </div>

                                    <div class="form-group-sm mr-2 row col-md-3 p-0">
                                        <label for="filiere" class="col-md-3 mt-2 p-0 pl-1">Filière:</label>
                                        <select class="input-groupe-sm form-control col-md-9" name="filiere" id="filiere">
                                            <option value="Dev Web" class="input-groupe-sm">Dev Web</option>
                                            <option value="Dev Mobile" class="input-groupe-sm">Dev Mobile</option>
                                        </select>
                                    </div>
                                    <div class="form-group-sm mr-2 row col-md-3 p-0">
                                        <label for="groupe" class="col-md-4 h6 m-0 p-0 pl-2 mt-2 ">Groupe:</label>
                                        <select class="input-groupe-sm form-control col-md-8 m-0" name="groupe" id="groupe">
                                            <option value="Groupe A" class="input-groupe-sm">Groupe A</option>
                                            <option value="Groupe B" class="input-groupe-sm">Groupe B</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm bg-olive col-md-2" type="button" onclick="search()">FILTER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.Filter-->

            <!-- Apprenants -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Card for Les apprenants -->
                    <div class="card">
                        <div class="card-header bg-olive">
                            <div class="  text-light row">
                            <div class="col-md-9">
                                <h3 class="card-title">Les apprenants</h3><br>
                                <div class="d-flex">
                                    <a href="./not-confirme.php" class="btn text-light">
                                        <i class="fa-solid fa-check-double"></i> Liste des apprenants not confirm
                                    </a>
                                    <a href="./apprenants-quite.php" class="btn text-light">
                                        <i class="fa-solid fa-eye"></i> Liste des apprenants quite
                                    </a>
                                </div>
                            </div>
                            <div class="p-0 col-md-3">
                                <div class="input-group input-group-sm  col-md-12 p-0">
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
                        <div class="card-body p-0">
                            <!-- Table for apprenants -->
                            <div class="card-body table-responsive p-0">
                                <?php include_once "./content-table.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / .Apprenants -->
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
