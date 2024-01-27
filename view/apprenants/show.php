<!DOCTYPE html>
<html lang="en">

<?php include_once "../layouts/head.php" ?>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f6f9;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content-wrapper {
        flex: 1;
        padding: 20px;
    }

    .box {
        background: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .box-profile {
        padding: 20px;
        text-align: center;
    }

    .profile-user-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .profile-username {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .text-muted {
        font-size: 1rem;
        color: #6c757d;
    }

    .list-group-item {
        justify-content: space-between;
    }

    .box-header {
        background-color: #f8f9fa;
        padding: 10px;
    }

    .box-title {
        font-size: 1.25rem;
        margin: 0;
    }

    .box-body {
        padding: 20px;
    }

    .margin-r-5 {
        margin-right: 5px;
    }

    .label {
        margin-right: 5px;
    }

    .btn-purple {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-purple:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>

<body class="hold-transition sidebar-mini">
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once "../layouts/nav.php"; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/aside.php"; ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">

                    <div class="card">
                        <div class="card-header bg-purple">
                            More details apprenants
                            <div class="card-tools">
                                <!-- Edit Button -->
                                <a href="./edit.php" type="button" class="btn btn-tool" data-toggle="tooltip" title="Modifier">
                                    <i class="fas fa-edit h5"></i>
                                </a>
                                <!-- Delete Button -->
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Supprimer">
                                    <i class="fas fa-trash text-danger h5"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-purple">
                                <div class="box-body box-profile">
                                    <img class="profile-user-img img-responsive img-circle" src="../assets/img/directeur.png" alt="User profile picture">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="profile-username">Achaou Hamid</h3>
                                        <h3 class="profile-username">اشعو حميد</h3>
                                    </div>
                                    <p class="text-muted text-center">2023-2024</p>
                                    <ul class="list-group list-group-unbordered">
                                        <li class="list-group-item">
                                            <b>FILIER</b> <span class="pull-right">Dev mobile</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Groupe</b> <span class="pull-right">A</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Mobile: </b> <span class="pull-right">+212643320632</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="card" style="min-height: 405px;">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#scolarite" data-toggle="tab">Scolarité</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#inscription" data-toggle="tab">Inscription</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#identificationApprenants" data-toggle="tab">Identification de l'apprenant</a></li>
                                    </ul>
                                </div>
                                <div class="card-body px-1">
                                    <div class="tab-content">
                                        <!-- Info Scolarité -->
                                        <div class="tab-pane table-responsive active" id="scolarite">
                                            <h6 class="pl-3">Info scolaire</h6>
                                            <table class="table table-striped text-nowrap">
                                                <!-- Table headers -->
                                                <thead>
                                                    <tr>
                                                        <th>Matricule d'étudiant</th>
                                                        <th>Niveau scolaire</th>
                                                        <th>Étudiant actif</th>
                                                        <th>Filière</th>
                                                        <th>Groupe</th>
                                                        <th>Nom d'établissement</th>
                                                    </tr>
                                                </thead>
                                                <!-- Table body -->
                                                <tbody>
                                                    <tr>
                                                        <td>123456</td>
                                                        <td>12th Grade</td>
                                                        <td>Yes</td>
                                                        <td>Science</td>
                                                        <td>A</td>
                                                        <td>Solicode</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Info Inscription -->
                                        <div class="tab-pane" id="inscription">
                                            <div class="card-body table-responsive p-0 pl-2">
                                                <h6>Details Inscription and Départ</h6>

                                                <table class="table table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Date Inscrit</th>
                                                            <th>Date de confirmation</th>
                                                            <th>Nom d'établissement</th>
                                                            <th>Date de départ</th>
                                                            <th>Raison de départ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>09/08/2022</td>
                                                            <td>09/09/2022</td>
                                                            <td>Solicode</td>
                                                            <td>07/07/2023</td>
                                                            <td>Obtenir un certificat en développement web</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Identification Apprenants -->
                                        <div class="tab-pane" id="identificationApprenants">
                                            <div class="card-body table-responsive p-0 pl-3">
                                                <h6>Information personnelle</h6>
                                                <table class="table table-striped text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Nom: الاسم</th>
                                                            <th>Prénom: النسب</th>
                                                            <th>Sexe: الجنس</th>
                                                            <th>Date Naissance</th>
                                                            <th>Lieu Naissance</th>
                                                            <th>CIN</th>
                                                            <th>Mobile</th>
                                                            <th>Adresse</th>
                                                            <th>Adresse Postale</th>
                                                            <th>Email</th>
                                                            <th>Ville</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Achaou اشعو</td>
                                                            <td>Hamid حميد</td>
                                                            <td>Mâle ذكر</td>
                                                            <td>02/08/1999</td>
                                                            <td>Imintanoute</td>
                                                            <td>EB199944e</td>
                                                            <td>0643320632</td>
                                                            <td>Tanger complex hassani</td>
                                                            <td>90000</td>
                                                            <td>achaou.hamid.solicode@gmail.com</td>
                                                            <td>Tanger</td>
                                                        </tr>
                                                        <!-- Add more rows as needed -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="box box-purple">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Identification de l'apprenant</h3><br>
                                <h6>Information personnelle</h6>
                            </div>
                            <div class="card-body">
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nom: الاسم</th>
                                                <th>Prénom: النسب</th>
                                                <th>Sexe: الجنس</th>
                                                <th>Date Naissance</th>
                                                <th>Lieu Naissance</th>
                                                <th>CIN</th>
                                                <th>Mobile</th>
                                                <th>Adresse</th>
                                                <th>Adresse Postale</th>
                                                <th>Email</th>
                                                <th>Ville</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Achaou اشعو</td>
                                                <td>Hamid حميد</td>
                                                <td>Mâle ذكر</td>
                                                <td>02/08/1999</td>
                                                <td>Imintanoute</td>
                                                <td>EB199944e</td>
                                                <td>0643320632</td>
                                                <td>Tanger complex hassani</td>
                                                <td>90000</td>
                                                <td>achaou.hamid.solicode@gmail.com</td>
                                                <td>Tanger</td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Main Sidebar Container -->
        <?php include_once "../layouts/footer.php"; ?>
    </div>

    <!-- AdminLTE JS -->
    <script src="../../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
    <script src="../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
    <!-- link js -->
    <script src="../assets/js/app.js"></script>
</body>

</html>