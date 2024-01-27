<!DOCTYPE html>
<html lang="en">
<!-- include heade -->
<?php include "../layouts/head.php" ?>

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
            <!-- Filter -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="">
                            <h1>Liste des Apprenats Not confirme</h1>
                        </div>
                        <div class="">
                            <a href="./create.php" class="btn bg-purple">
                                <i class="fas fa-plus"></i> Nouveau Apprenats
                            </a>
                        </div>
                    </div>

                    <div class="my-2">
                        <div class="card w-100">
                            <!-- Filter Form -->
                            <div class="filter-apprenants card-header">
                                <form action="" class="d-flex align-items-center w-100">
                                    <div class="col-md-1 text-navy m-0 p-0 d-flex align-items-center">
                                        <h3 class="m-0 p-0 border-right pr-4">
                                            <i class="fas fa-filter"></i>
                                        </h3>
                                    </div>
                                    <div class="form-group-sm mr-2 row col-md-3">
                                        <label for="annees-colaire" class="col-md-6 mt-2 p-0">Année scolaire:</label>
                                        <select class="input-groupe-sm form-control col-md-6 p-0" name="annees-colaire" id="annees-colaire">
                                            <option value="2020" class="input-groupe-sm">2020</option>
                                            <option value="2021" class="input-groupe-sm">2021</option>
                                            <option value="2022" class="input-groupe-sm">2022</option>
                                            <option value="2023" class="input-groupe-sm">2023</option>
                                            <option value="2024" class="input-groupe-sm">2024</option>
                                        </select>
                                    </div>

                                    <div class="form-group-sm mr-2 row col-md-3 p-0">
                                        <label for="filiere" class="col-md-3 mt-2 p-0 pl-1">Filière:</label>
                                        <select class="input-groupe-sm form-control col-md-9 p-0" name="filiere" id="filiere">
                                            <option value="Dev Web" class="input-groupe-sm">Dev Web</option>
                                            <option value="Dev Mobile" class="input-groupe-sm">Dev Mobile</option>
                                        </select>
                                    </div>
                                    <div class="form-group-sm mr-2 row col-md-3">
                                        <label for="groupe" class="col-md-5 h6 mt-2">Groupe:</label>
                                        <select class="input-groupe-sm form-control col-md-7" name="groupe" id="groupe">
                                            <option value="Groupe A" class="input-groupe-sm">Groupe A</option>
                                            <option value="Groupe B" class="input-groupe-sm">Groupe B</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm bg-navy col-md-2" type="button">FILTER</button>
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
                        <div class="card-header bg-purple  text-light mx-3 row">
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
                        <div class="card-body">
                            <!-- Table for apprenants -->
                            <div class="card-body table-responsive p-0 pb-3">
                                <table class="table table-striped text-nowrap">
                                    <!-- Table headers -->
                                    <thead>
                                        <tr>
                                            <th>Details</th>
                                            <th>Prénom</th>
                                            <th>Nom</th>
                                            <th>D.Naiss</th>
                                            <th>Adresse</th>
                                            <th>Classe</th>
                                            <th>Groupe</th>
                                            <th>Mobile</th>
                                            <th>Sexe</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- Table body -->
                                    <tbody>

                                        <tr>
                                            <td>
                                                <a href="./show.php" class="text-purple">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>Hamid</td>
                                            <td>Achaou</td>
                                            <td>02/08/1999</td>
                                            <td>Tanger Complex Hassani</td>
                                            <td>Mobile</td>
                                            <td>A</td>
                                            <td>0643320632</td>
                                            <td>M</td>
                                            <td>
                                                <a href="./confirme.php" class="btn btn-sm bg-success" title="confirme">
                                                    <i class="fa-solid fa-check"></i> Confirme
                                                </a>
                                                <a href="#" class="btn btn-sm btn-secondary" title="Edit">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fa-solid fa-x"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="./show.php" class="text-purple">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>Hamid</td>
                                            <td>Achaou</td>
                                            <td>02/08/1999</td>
                                            <td>Tanger Complex Hassani</td>
                                            <td>Mobile</td>
                                            <td>A</td>
                                            <td>0643320632</td>
                                            <td>M</td>
                                            <td>
                                            <a href="./confirme.php" class="btn btn-sm bg-success" title="confirm">
                                                    <i class="fa-solid fa-check"></i> Confirme
                                                </a>                                                <a href="#" class="btn btn-sm btn-secondary" title="Edit">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fa-solid fa-x"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <a href="./show.php" class="text-purple">
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                            <td>Hamid</td>
                                            <td>Achaou</td>
                                            <td>02/08/1999</td>
                                            <td>Tanger Complex Hassani</td>
                                            <td>Mobile</td>
                                            <td>A</td>
                                            <td>0643320632</td>
                                            <td>M</td>
                                            <td>
                                            <a href="./confirme.php" class="btn btn-sm bg-success" title="confirm">
                                                    <i class="fa-solid fa-check"></i> Confirme
                                                </a>                                                <a href="#" class="btn btn-sm btn-secondary" title="Edit">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fa-solid fa-x"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-flex flex-row-reverse align-items-center pt-2">
                                    <ul class="pagination  m-0 ">
                                        <li class="page-item"><a class="page-link text-purple" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link text-purple active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link text-purple" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link text-purple" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link text-purple" href="#">»</a></li>
                                    </ul>
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