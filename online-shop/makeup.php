<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Makeup</title> 
    <style> 
        body { font-family: Arial, sans-serif;
        
    }
    header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
       
    .container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin: 20px;
        margin-bottom: 70px;
    }

    .product {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        width: 300px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        text-align:center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }

    .product h2 {
        margin-top: 0;
    }

    .product p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .price {
        font-size: 24px;
        font-weight: bold;
        margin-top: 10px;
    }
    button{
        background-color: #373737;
        border-radius: 8%;
        padding: 7px;
        color: #d2d2d2;
    }
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
        }

        .product-item {
            margin: 10px 0;
        }

        footer {
            position: relative;
        }
    }
</style>
</head> 
<body> 
    <header>
        <a href="index.php"><img src="public/dex.png" alt="Dex Logo"></a>
    </header>
    <div class="container"> 
        <div class="product"> 
            <h2> DIOR BACKSTAGE </h2> 
            <a href="makeup_details.php" class="product-link">
            <img src="makeup/dior.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Face & Body Foundation </p> 
            <div class="price"> 43.00 € </div> 
            <button class="loginButton">Add to Cart</button>
        </div>
        <div class="product">
            <h2> ESTEE LAUDER </h2>
            <a href="makeup_details1.php" class="product-link">
            <img src="makeup/esteelauder.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Double wear stay in place foundation</p>
            <div class="price"> 55.60 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> LANCOME TEINT IDOLE </h2>
            <a href="makeup_details2.php" class="product-link">
            <img src="makeup/lancome.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Ultra wear foundation</p>
            <div class="price"> 66.90 €</div>
            <button class="loginButton">Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>SHISEIDO SYNCHRO SKIN RADIANT LIFTING </h2>
            <a href="makeup_details3.php" class="product-link">
            <img src="makeup/shiseido.jpg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Foundation SPF 30   </p>
            <div class="price"> 62.40 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>FENTY PRO FILTER </h2>
            <a href="makeup_details4.php" class="product-link">
            <img src="makeup/fenty.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p> Soft Matte Longwear Liquid Foundation </p>
            <div class="price"> 40.00 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2> CHARLOTTE TILBURY </h2>
            <a href="makeup_details5.php" class="product-link">
            <img src="makeup/charlottetilbury.jpeg" alt="" style="width: 200px; height: 200px;"></a>
            <p>Airbrush Flawless Longwear Foundation  </p>
            <div class="price"> 49.70 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    </div>
</body> 
<script>
  var buttons = document.getElementsByClassName('loginButton');

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
      var isLoggedIn = false;
      
      if (isLoggedIn) {
        alert('Welcome!');
      } else {
        alert('Signin or Login first!');
      }
    });
  }
</script>
</html>