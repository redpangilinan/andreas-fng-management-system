<?php
session_start();
include "../assets/php/login_validation.php";
include "../assets/php/logout.php";
include "../assets/php/dashboard_counter.php";
validateSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <?php include "../assets/php/extensions/sidebar.php" ?>
    <main>
        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- Header -->
                <header>
                    <h1>Dashboard</h1>
                    <hr>
                </header>
                <p style="font-size: 1.5rem;">Welcome, <?php echo $_SESSION["fullname"] ?>!</p>
                <div class="grid-ish">
                    <!-- Shows total users -->
                    <div class="grid-box">
                        <div class="content">
                            <p style="font-size: 2rem;"><?php userCount() ?></p>
                            <p>Users</p>
                        </div>
                        <div class="content">
                            <i class="fa-solid fa-users fa-4x"></i>
                        </div>
                    </div>
                    <!-- Shows total records -->
                    <div class="grid-box">
                        <div class="content">
                            <p style="font-size: 2rem;"><?php productCount() ?></p>
                            <p>Products</p>
                        </div>
                        <div class="content">
                            <i class="fa-solid fa-table-list fa-4x"></i>
                        </div>
                    </div>
                    <!-- These are just filler boxes ahead -->
                    <div class="grid-box">
                        <div class="content">
                            <p style="font-size: 2rem;"><?php orderCount() ?></p>
                            <p>Orders</p>
                        </div>
                        <div class="content">
                            <i class="fa-solid fa-shipping-fast fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>