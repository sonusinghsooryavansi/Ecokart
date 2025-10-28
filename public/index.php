<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to EcoCart 🌿</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .split-hero {
        display: flex;
        height: 100vh;
        position: relative;
    }

    .split-hero .left {
        flex: 1;
        background: url('download.jpg') center/cover no-repeat;
    }

    .split-hero .right {
        flex: 1;
        overflow: hidden;
    }

    .split-hero video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .split-hero .hero-content {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        transform: translate(-50%, -50%);
        color: #175c12ff;
        text-align: center;
    }


    .hero-content h1 {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 1.2s ease forwards;
    }

    .hero-content p {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 1.2s ease forwards 0.5s;
    }

    .hero-content a {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 1.2s ease forwards 1s;
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>

    <section class="split-hero">
        <!-- Left side image -->
        <div class="left"></div>

        <!-- Right side video -->
        <div class="right">
            <video autoplay muted loop>
                <source src="video.mp4" type="video/mp4">
            </video>
            <div class="hero-content">
                <h1>Welcome to EcoCart 🌿</h1>
                <p>Shop smart, live green</p>
                <a href="nav.php" class="btn btn-success">Explore Now</a>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <hr class="bg-white">
            <p class="text-center mb-0">&copy; <?php echo date('Y'); ?> EcoKart. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>