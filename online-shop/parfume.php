<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Parfumes</title> 
    <style> 

body { 
    font-family: Arial, sans-serif;
    background-color: white;
    
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
}

.product {
    border: 1px solid #D2D2D2;
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
    margin-top: 10px;
}
button{
    background-color: #373737;
    color: #d2d2d2;
    border-radius: 8%;
    padding: 7px;
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
        <a href="index.php"><img src="public/dex.png" alt="dex Logo"></a>
    </header>

    <div class="container"> 
        <div class="product"> 
            <h2>GIORGIO ARMANI SI </h2> 
            <a href="product_details.php" class="product-link">
            <img src="parfums/giorgioarmanisi.png" alt="GIORGIO ARMANI SI" style="width: 200px; height: 200px" ></a>
            <p>EAU DE PARFUM</p> 
            <div class="price">94.80 € </div> 
            <button class="loginButton">Add to Cart</button>
        </div>
       
        <div class="product">
            <h2>GIORGIO ARMANI MY WAY NACRE </h2>
            <a href="product_details1.php" class="product-link">
            <img src="parfums/giorgioarmanimywaynacre.png " alt=" GIORGIO ARMANI MY WAY NACRE " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">124.70 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>GIORGIO ARMANI STRONGER WITH YOU AMBER </h2>
            <a href="product_details2.php" class="product-link">
            <img src="parfums/giorgioarmanistrongerwithyouamber.png" alt=" GIORGIO ARMANI STRONGER WITH YOU AMBER " style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">88.50 €</div>
            <button class="loginButton">Add to Cart</button>
        </div>
    </div>
    
    <div class="container">
        <div class="product">
            <h2>JEAN PAUL GAULTIER GAULTIER DIVINE</h2>
            <a href="product_details3.php" class="product-link">
            <img src="parfums/jeanpaulgaultiergaultierdivine.PNG " alt="JEAN PAUL GAULTIER GAULTIER DIVINE" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">162.30 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL LA BELLE LE PARFUM </h2>
            <a href="product_details4.php" class="product-link">
            <img src="parfums/jeanpaullabelle.PNG" alt="JEAN PAUL LA BELLE LE PARFUM" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM INTENSE</p>
            <div class="price">123.20 € </div>
            <button class="loginButton">Add to Cart</button>
        </div>
    
        <div class="product">
            <h2>JEAN PAUL GAULTIER SCANDAL</h2>
            <a href="product_details5.php" class="product-link">
            <img src="parfums/jeanpaulgaultierscandal.jpeg " alt="JEAN PAUL GAULTIER SCANDAL" style="width: 200px; height: 200px;"></a>
            <p>EAU DE PARFUM</p>
            <div class="price">152.60 € </div>
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
