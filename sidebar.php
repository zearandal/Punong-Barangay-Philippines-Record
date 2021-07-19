<?php
session_start();
if (!isset($_SESSION['id'])) {   header("Location: ../index.php"); exit();    }
include "db_connection.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="public/css/sidebar-style.css" />
    <!-- <link rel= "stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <script src="public/js/sidebar.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <!-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <!-- <img class = "sidebar-logo" src="public/img/phbarangay-logo.png"> -->
                    <i class="bx bx-layer nav_logo-icon"></i>
                    <span class="nav_logo-name">Punong Barangay PR</span>

                </a>
                <div class="nav_list">
                    <a href="#" class="nav_link active">

                        <i class='bx bxs-dashboard nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart nav_icon'></i>

                        <span class="nav_name">Stats</span>
                    </a>
                    <a href="#" class="nav_link" id="create-users">
                        <i class='bx bxs-user-plus nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>

                </div>
            </div>
            <a href="../../logout.php" class="nav_link">
                <i class='bx bx-log-out-circle nav_icon'></i>

                <span class="nav_name">Logout</span>
            </a>
        </nav>
    </div>
</body>

</html>

<?php
if ($_SESSION['role'] == 'Mayor' && 'Congressman'  && 'Chairman' && 'Governor') { ?>
    <script>
        document.getElementById("create-users").style.display = "none";
    </script>
<?php } ?>