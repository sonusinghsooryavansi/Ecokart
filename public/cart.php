<?php
session_start();

// Agar cart empty hai
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<div class='container mt-5'>
            <h2 class='text-center text-success'>🌱 Your EcoKart is Empty!</h2>
            <div class='text-center mt-3'>
                <a href='index.php' class='btn btn-success'>Continue Shopping</a>
            </div>
          </div>";
    exit;
}

// Handle quantity update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['qty'] as $id => $q) {
        $q = intval($q);
        if ($q > 0) {
            $_SESSION['cart'][$id]['quantity'] = $q;
        } else {
            unset($_SESSION['cart'][$id]);
        }
    }
    header("Location: cart.php");
    exit;
}

// Handle remove single item
if (isset($_GET['action']) && $_GET['action'] === 'remove' && isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: cart.php");
    exit;
}

// Calculate grand total
$grand_total = 0;
foreach ($_SESSION['cart'] as $item) {
    $grand_total += $item['price'] * $item['quantity'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EcoKart - Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#f5fff5; }
        .eco-header { background:#2d6a4f; color:#fff; padding:15px; border-radius:10px; }
        .eco-btn { background:#40916c; color:#fff; }
        .eco-btn:hover { background:#2d6a4f; color:#fff; }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="eco-header mb-4">
        <h2 class="mb-0">🛒 Your EcoKart</h2>
    </div>

    <form method="post">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-success">
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th style="width:120px;">Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $id => $item): 
                $total = $item['price'] * $item['quantity'];
            ?>
                <tr>
                    <td class="text-start">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo htmlspecialchars($item['image']); ?>" width="70" class="me-3 rounded">
                            <span><?php echo htmlspecialchars($item['name']); ?></span>
                        </div>
                    </td>
                    <td>₹<?php echo number_format($item['price'], 2); ?></td>
                    <td>
                        <input type="number" name="qty[<?php echo $id; ?>]" value="<?php echo $item['quantity']; ?>" min="0" class="form-control">
                        <small class="text-muted">Set 0 to remove</small>
                    </td>
                    <td>₹<?php echo number_format($total, 2); ?></td>
                    <td>
                        <a href="cart.php?action=remove&id=<?php echo $id; ?>" class="btn btn-sm btn-outline-danger">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-end"><strong>Grand Total</strong></td>
                    <td colspan="2"><strong>₹<?php echo number_format($grand_total, 2); ?></strong></td>
                </tr>
            </tfoot>
        </table>

        <div class="d-flex justify-content-between">
            <a href="index.php" class="btn btn-outline-success">← Continue Shopping</a>
            <div>
                <button type="submit" name="update_cart" class="btn eco-btn me-2">Update Cart</button>
                <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
