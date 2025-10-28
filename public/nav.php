<?php
include __DIR__ . '/../assets/style.css';
include __DIR__ . '/../config/db.php';

session_start();

// Function to check active page
function isActive($page){
    return basename($_SERVER['PHP_SELF']) == $page ? 'active' : '';
}
?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom px-4 py-3">
    <a class="navbar-brand" href="index.php">EcoCart 🌿</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive('index.php'); ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive('products.php'); ?>" href="products.php">Products</a>
            </li>

            <?php if(isset($_SESSION['user_id'])): ?>
            <li class="nav-item">
                <span class="nav-link">Welcome, <?php echo $_SESSION['user_name']; ?> 👋</span>
            </li>
            <li class="nav-item ms-3">
                <a class="btn btn-eco" href="cart.php">🛒 Cart</a>
            </li>
            <li class="nav-item ms-2">
                <a class="btn btn-eco" href="logout.php">Logout</a>
            </li>
            <?php else: ?>
            <li class="nav-item ms-3">
                <a class="btn btn-eco" href="login.php">Login</a>
            </li>
            <li class="nav-item ms-2">
                <a class="btn btn-eco" href="register.php">Register</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">Our Products</h2>
    <div class="row">

        <!-- Product Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/brush.jpg" class="card-img-top" alt="Bamboo Toothbrush" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Bamboo Toothbrush</h5>
                    <p class="card-text">₹200</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="101">
                        <input type="hidden" name="product_name" value="Bamboo Toothbrush">
                        <input type="hidden" name="product_price" value="200">
                        <input type="hidden" name="product_image" value="/ecokart/public/brush.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/straws.jpg" class="card-img-top" alt="Bamboo Straws" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Bamboo Straws</h5>
                    <p class="card-text">₹100</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="102">
                        <input type="hidden" name="product_name" value="Bamboo Straws">
                        <input type="hidden" name="product_price" value="100">
                        <input type="hidden" name="product_image" value="/ecokart/public/straws.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/bags.jpg" class="card-img-top" alt="Jute Bags" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Jute Bags</h5>
                    <p class="card-text">₹800</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="103">
                        <input type="hidden" name="product_name" value="Jute Bags">
                        <input type="hidden" name="product_price" value="800">
                        <input type="hidden" name="product_image" value="/ecokart/public/bags.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/clay.jpg" class="card-img-top" alt="Clay Items" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Clay Items</h5>
                    <p class="card-text">₹600</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="104">
                        <input type="hidden" name="product_name" value="Clay Items">
                        <input type="hidden" name="product_price" value="600">
                        <input type="hidden" name="product_image" value="/ecokart/public/clay.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/lamps.jpg" class="card-img-top" alt="Solar Lamps" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Solar Lamps</h5>
                    <p class="card-text">₹2000</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="105">
                        <input type="hidden" name="product_name" value="Solar Lamps">
                        <input type="hidden" name="product_price" value="2000">
                        <input type="hidden" name="product_image" value="/ecokart/public/lamps.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/skincare.jpg" class="card-img-top" alt="Herbal Skincare" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Herbal Skincare</h5>
                    <p class="card-text">₹4000</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="106">
                        <input type="hidden" name="product_name" value="Herbal Skincare">
                        <input type="hidden" name="product_price" value="4000">
                        <input type="hidden" name="product_image" value="/ecokart/public/skincare.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/wallets.jpg" class="card-img-top" alt="Cork Wallets" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Cork Wallets</h5>
                    <p class="card-text">₹1500</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="107">
                        <input type="hidden" name="product_name" value="Cork Wallets">
                        <input type="hidden" name="product_price" value="1500">
                        <input type="hidden" name="product_image" value="/ecokart/public/wallets.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/fertilizers.jpg" class="card-img-top" alt="Organic Fertilizers" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Organic Fertilizers</h5>
                    <p class="card-text">₹4000</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="108">
                        <input type="hidden" name="product_name" value="Organic Fertilizers">
                        <input type="hidden" name="product_price" value="4000">
                        <input type="hidden" name="product_image" value="/ecokart/public/fertilizers.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Product Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/ecokart/public/notebooks.jpg" class="card-img-top" alt="Recycled Notebooks" style="height:250px;object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Recycled Notebooks</h5>
                    <p class="card-text">₹900</p>
                    <form action="addtocart.php" method="POST">
                        <input type="hidden" name="product_id" value="109">
                        <input type="hidden" name="product_name" value="Recycled Notebooks">
                        <input type="hidden" name="product_price" value="900">
                        <input type="hidden" name="product_image" value="/ecokart/public/notebooks.jpg">
                        <button type="submit" class="btn btn-success">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-success text-white mt-5 pt-4 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About EcoKart 🌿</h5>
                    <p>EcoKart is your one-stop online store for sustainable and eco-friendly products. Join us in making the planet greener!</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="products.php" class="text-white text-decoration-none">Products</a></li>
                        <li><a href="login.php" class="text-white text-decoration-none">Login</a></li>
                        <li><a href="register.php" class="text-white text-decoration-none">Register</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>📧 support@ecokart.com</p>
                    <p>📞 +91 1234567890</p>
                    <p>🌍 India</p>
                </div>
            </div>
            <hr class="bg-white">
            <p class="text-center mb-0">&copy; <?php echo date('Y'); ?> EcoKart. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>
