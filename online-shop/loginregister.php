<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <style>
     @media only screen and (max-width: 600px) {
        header {
            flex-direction: column;
            align-items: center;
        }

        .header-container {
            margin-top: 20px;
            flex-direction: column;
        }

        .products-container {
            justify-content: center;
            display: flex;
            align: center
        }

        .product-item {
            margin: 10px 0 ;
        }

        footer {
            position: relative;
        }
    }
  </style>

<head>
  <meta charset="UTF-8">
  <title>LOGIN Register</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>

@media screen and (max-width: 768px) {
  header {
    text-align: center;
    flex-direction: column;
    align-items: center;
  }

  .header-container {
    display: flex;
    flex-direction: column;
  }

  .forms-section {
    padding: 20px;
  }
}

</style>
<body>
  <header>
    <img src="public/dex.png" alt="dex Logo">
    <div class="header-container">
      <p><a href="index.php">Home</a></p>
      <p><a href="about.php">About Us</a></p>
      <p><a href="contact.php">Contact Us</a></p>
      <p><a href="products.php">Products</a></p>
      <P><a href="loginregister.php">Login/Register</a></P>
    </div>
  </header>
  <section class="forms-section">
    <div class="forms">
      <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
          Login
          <span class="underline"></span>
        </button>
        <?php include("login.php"); ?>
      </div>
      <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
          Register
          <span class="underline"></span>
        </button>
        <?php include("register.php"); ?>
      </div>
    </div>
  </section>
</body>
<script src="script.js"></script>
</html>