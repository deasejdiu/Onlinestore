<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup</title>
    <style>
        body {
            font-family: Arial, sans-serif;

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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: center;
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

        button {
            background-color: #373737;
            border-radius: 8%;
            padding: 7px;
            color: #d2d2d2;
        }

        @media only screen and (max-width: 600px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .header-container p {
                margin: 10px 0;
            }

            .container {
                margin: 20px;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="index.php"><img src="public/dex.png" alt="dex Logo"></a>
    </header>
    <div class="container">
        <?php
        include('connection.php');
        $sql = "SELECT products.*, users.username AS username FROM products LEFT JOIN users ON products.userId = users.id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="product">';
                echo '<h2>' . $row['name'] . '</h2>';
                echo '<p>Added/Edited by: ' . $row['username'] . '</p>';
                echo '<a href="makeup_details.php" class="product-link">';
                echo '<img src="' . $row['image'] . '" alt="" style="width: 200px; height: 200px;"></a>';
                echo '<div class="price">' . $row['price'] . ' €</div>';
                echo '<button>Add to Cart</button>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </div>
</body>

</html>