<?php
session_start();
include "../assets/php/login_validation.php";
include "../assets/php/logout.php";
validateSession();
privateAccess();
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Products</title>
</head>

<body>
    <?php include "../assets/php/extensions/sidebar.php" ?>
    <main>
        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- Header -->
                <header>
                    <h1>Products</h3>
                        <hr>
                </header>
                <!-- Add Form -->
                <div class="datatable-container">
                    <form class="card" id="form_add">
                        <h1 class="fs-4">Add Products</h1>
                        <div class="mb-3">
                            <label for="product" class="form-label">Product</label>
                            <input type="text" class="form-control" id="product" placeholder="Product" required>
                        </div>
                        <div class="mb-3">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" rows="3" placeholder="Details" required></textarea>
                        </div>
                        <button type="submit" class="add-confirm btn btn-primary">Confirm</button>
                    </form>
                    <!-- Data Table w/ Search -->
                    <div class="w-100">
                        <input type="text" class="form-control" id="search_records" placeholder="Search">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Details</th>
                                        <th>Price</th>
                                        <th>Modify</th>
                                    </tr>
                                </thead>
                                <tbody id="search_results">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <!-- Edit Modal -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Edit Form -->
                <form id="form_edit">
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="edit-confirm btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/js/alerts.js"></script>
    <script src="../assets/js/ajax/products_data.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>