<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dex</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="public/dex.png" alt="Dex Logo" class="logo">
        </div>
        <nav class="header-container">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="products.php">Products</a>
            <a href="loginregister.php">Login/Register</a>
        </nav>
    </header>

    <main>
        <div class="products-container">
            <div class="product-item">
                <a href="parfume.php">
                    <img src="parfume.jpg" alt="Parfume">
                </a>
                <h3>Parfumes</h3>
            </div>
            <div class="product-item">
                <a href="makeup.php">
                    <img src="makeupp.jpg" alt="Makeup">
                </a>
                <h3>Makeup</h3>
            </div>
            <div class="product-item">
                <a href="skincare.php">
                    <img src="skincare.jpg" alt="Skincare">
                </a>
                <h3>Skincare</h3>
            </div>
            <div class="product-item">
                <a href="newProducts.php">
                    <img src="newproduct.png" alt="Download">
                </a>
                <h3>New products</h3>
            </div>
        </div>
    </main>

    <footer>
        <div class="social-links">
            <div class="social-link-container">
                <img src="public/facebook.png" alt="Facebook">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
            </div>
            <div class="social-link-container">
                <img src="public/tiktok.svg" alt="Tiktok">
                <a href="https://www.tiktok.com/en/" target="_blank">TikTok</a>
            </div>
            <div class="social-link-container">
                <img src="public/instagram.png" alt="Instagram">
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
            </div>
        </div>
        <p>Prizren, Kosove/ 049 999 999/ info@dex.com</p>
    </footer>
</body>

</html>
