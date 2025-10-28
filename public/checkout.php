<?php
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit;
}

$grand_total = 0;
foreach ($_SESSION['cart'] as $item) {
    $grand_total += $item['price'] * $item['quantity'];
}

// Optional: clear cart after checkout
// $_SESSION['cart'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EcoKart - Checkout</title>
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
        <h2 class="mb-0">💳 Checkout</h2>
    </div>

    <table class="table table-bordered text-center align-middle">
        <thead class="table-success">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['cart'] as $item): 
            $total = $item['price'] * $item['quantity'];
        ?>
            <tr>
                <td class="text-start"><?php echo htmlspecialchars($item['name']); ?></td>
                <td>₹<?php echo number_format($item['price'],2); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>₹<?php echo number_format($total,2); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-end"><strong>Grand Total</strong></td>
                <td><strong>₹<?php echo number_format($grand_total,2); ?></strong></td>
            </tr>
        </tfoot>
    </table>

    <div class="text-end mt-4">
        <a href="index.php" class="btn btn-outline-success me-2">← Continue Shopping</a>
        <a href="index.php" class="btn btn-success">Confirm & Pay</a>
    </div>
</div>
</body>
</html>
