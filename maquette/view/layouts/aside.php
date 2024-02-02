<?php
// Get the current route URL
$current_route = $_SERVER['REQUEST_URI'];

$appranantsIndex = '/PFE_2024/Project_file_Rouge/maquette/view/apprenants/index.php';
$appranantsNotConfirme = '/PFE_2024/Project_file_Rouge/maquette/view/apprenants/not-confirme.php';

?>

<aside class="main-sidebar sidebar-light-teal  elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="../assets/img/logo-solicode-2.jpg" alt="School Logo" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Solicode</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="../welcomme/home.php" class="nav-link  <?php echo ($current_route == '/PFE_2024/Project_file_Rouge/maquette/view/welcomme/home.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Tableau De Bord</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../apprenants/index.php" class="nav-link  <?php echo ($current_route == $appranantsIndex || $current_route == $appranantsNotConfirme) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Apprenants</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../filier/index.php" class="nav-link  <?php echo ($current_route == '/PFE_2024/Project_file_Rouge/maquette/view/filier/index.php') ? 'active' : ''; ?>">
                    <i class="fa-solid fa-code-branch"></i>
                        <p>filier</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../groupe/index.php" class="nav-link  <?php echo ($current_route == '/PFE_2024/Project_file_Rouge/maquette/view/groupe/index.php') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-users-rays"></i>
                        <p>Groupe</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../annes-scolaire/index.php" class="nav-link  <?php echo ($current_route == '/PFE_2024/Project_file_Rouge/maquette/view/annes-scolaire/index.php') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-calendar-days"></i>
                        <p>Année scolaire</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>