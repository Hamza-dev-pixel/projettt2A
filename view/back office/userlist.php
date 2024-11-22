<?php
include '../../controller/usercontroller.php';
$userC = new userController();
$list = $userC->listUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Uniboard Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .table th,
    .table td {
      vertical-align: middle;
    }

    .progress {
      height: 20px;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-primary {
      border-radius: 5px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .add-course-card {
      background-color: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .add-course-card h4 {
      margin-bottom: 20px;
      color: #007bff;
    }

    .add-course-card .form-control {
      border: 1px solid #007bff;
    }

    .add-course-card .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .add-course-card .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container-scroller d-flex">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Gestion cours</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li id="coursSection"  class="nav-item"> <a class="nav-link" href="courslist.php">cours</a></li>
              <li id="formationsSection" class="nav-item"> <a class="nav-link" href="formationlist.php">formations</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Evenements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Reclammation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Forums</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi -account menu-icon"></i>
            <span class="menu-title">Gestion utilisateur</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="prof bo.php"> Enseignant </a></li>
              <li class="nav-item"> <a class="nav-link" href="etud bo.php"> Étudiant </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index.html">
                <i class="mdi mdi-book" style="font-size: 24px; color: #007bff;"></i> <!-- Icône de livre -->
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <i class="mdi mdi-book" style="font-size: 20px; color: #007bff;"></i> <!-- Icône de livre pour la version mini -->
            </a>
        </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1"> Uniboard - All in One</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Enseignat 1 
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      La reunion est reportée
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Etudiant1
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      J'ai raté mon examen 
                    </p>
                  </div>
                </a>
              </div>
            </li>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/esprit.png" alt="profile"/>
                <span class="nav-profile-name">Admin</span>
              </a>
            </li>
            <a href="../frontOffice/courses.html" class="nav-link icon-link">
    <i class="mdi mdi-web"></i>
</a>

            </li>
          </ul>
        </div>
      </nav>

      <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des utilisateurs</h4>
        <div class="table-responsive">
            <table class="table table-striped" id="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Date de naissance</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($list as $user) { ?>
                        <tr>
                            <td><?= $user['id']; ?></td>
                            <td><?= htmlspecialchars($user['nom_utilisateur']); ?></td>
                            <td><?= htmlspecialchars($user['email']); ?></td>
                            <td><?= htmlspecialchars($user['date_naissance']); ?></td>
                            <td><?= htmlspecialchars($user['role']); ?></td>
                            <td>
                                <a href="deleteUser.php?id=<?= $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">Supprimer</a>
                                <a href="updateUser.php?id=<?= $user['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    </div>
</div>
</div>

<!-- Scripts JS -->
<script src='vendors/js/vendor.bundle.base.js'></script>

      <footer class="footer">
        <div class="card">
          <div class="card-body">
            <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="index.html" target="_blank">uniboard.com</a>2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">your way to success <a href="index.html" target="_blank"> uniboard dashboard </a> </span>
            </div>
          </div>
        </div>
      </footer>
      <!-- main-panel ends -->
    </div>
      <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
    </body>

</html>