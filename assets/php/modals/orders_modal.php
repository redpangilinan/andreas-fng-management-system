<?php
include '../connection.php';
$primary_id = $_POST["primary_id"];
$sql =
    "SELECT order_id, firstname, lastname, address, contact_no, order_details, order_date_time, order_type, mode_of_payment, price, status
    FROM tb_orders
    WHERE order_id = $primary_id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
    <input type="hidden" name="primary_id" id="primary_id" value="<?php echo $primary_id ?>">
    <div class="mb-3 d-flex">
        <div class="w-100">
            <label for="edit_firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="edit_firstname" id="edit_firstname" placeholder="First Name" value="<?php echo $row['firstname'] ?>" required>
        </div>
        <div class=" w-100 ms-2">
            <label for="edit_lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="edit_lastname" id="edit_lastname" placeholder="Last Name" value="<?php echo $row['lastname'] ?>" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="edit_address" class="form-label">Address</label>
        <input type="text" class="form-control" name="edit_address" id="edit_address" placeholder="Address" value="<?php echo $row['address'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="edit_contact_no" class="form-label">Contact No.</label>
        <input type="text" class="form-control" name="edit_contact_no" id="edit_contact_no" placeholder="Contact No." value="<?php echo $row['contact_no'] ?>" required>
    </div>
    <!-- Order Details -->
    <div class="mb-3">
        <label for="edit_products" class="form-label">Products</label>
        <div class="with-button-container">
            <select class="form-select" name="edit_products" id="edit_products" aria-label="Products">
                <?php include "../extensions/cb_products.php" ?>
            </select>
            <button type="button" class="btn btn-success" id="editAddProduct"><i class="fas fa-plus"></i></button>
        </div>
    </div>
    <input type="hidden" name="edit_order_details" id="edit_order_details" value='<?php echo $row['order_details'] ?>'>
    <div class="mb-3">
        <div class="card">
            <div class="card-header">
                Order Details
            </div>
            <ul class="list-group list-group-flush" id="edit_products_list">
            </ul>
            <div class="card-body">
                <div class="mb-3">
                    <label for="edit_price" class="form-label">Total Price</label>
                    <input type="number" class="form-control" name="edit_price" id="edit_price" value="0" placeholder="Price" required>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label for="edit_order_date_time" class="form-label">Delivery Date and Time</label>
        <input type="datetime-local" class="form-control" name="edit_order_date_time" id="edit_order_date_time" placeholder="Delivery Date and Time" value="<?php echo $row['order_date_time'] ?>" required>
    </div>
    <div class="mb-3 d-flex">
        <div class="w-100">
            <label for="edit_order_type" class="form-label">Order Type</label>
            <select class="form-select" name="edit_order_type" id="edit_order_type" value="<?php echo $row['order_type'] ?>" aria-label="Order Type" required>
                <option value="Delivery">Delivery</option>
                <option value="Pick Up">Pick Up</option>
            </select>
        </div>
        <div class="w-100 ms-2">
            <label for="edit_mode_of_payment" class="form-label">Mode of Payment</label>
            <select class="form-select" name="edit_mode_of_payment" id="edit_mode_of_payment" value="<?php echo $row['mode_of_payment'] ?>" aria-label="Mode of Payment" required>
                <option value="Cash on Delivery">Cash on Delivery</option>
                <option value="GCash">GCash</option>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label for="edit_status" class="form-label">Status</label>
        <select class="form-select" name="edit_status" id="edit_status" value="<?php echo $row['status'] ?>" aria-label="Order Status" required>
            <option value="Pending">Pending</option>
            <option value="Pending (Paid)">Pending (Paid)</option>
            <option value="Complete">Complete</option>
            <option value="Cancelled">Cancelled</option>
        </select>
    </div>
<?php
}
?>