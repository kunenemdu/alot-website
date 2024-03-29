<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALOTSports | Future</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="/script & sheets/nike-brand.css">
    <script src="/script & sheets/script.js"></script>
    <script src="https://use.fontawesome.com/cfbb02897a.js"></script>
</head>

<body>
    <div class="breadcrumb">
        <li><a href="index.php">HOME</a></li>
        <li><a href="men.php">MEN</a></li>
        <li>FUTURE COLLECTION</li>
    </div>
    <div class="grid-container">
        <div class="logo-left">
            <img src="/images/future-logo.png" alt="" style="top: 8.5vw; height: 45px;">
        </div>
        <div class="item">
            <h2>PUMA FUTURE Collection</h2>
            <p>Run The Streets. <br> Do You. <br> Research and shop all the latest gear from the world of <br> Fashion,
                Sport, and everywhere in
                between.</p>
        </div>
        <div class="item1">
            <nav class="product-filter">
                <div class="sort">
                    <div class="collection-sort">
                        <label>Sort by</label>
                        <select>
                            <option value="/">Popularity</option>
                            <option value="abc">Name: Ascending</option>
                            <option value="cba">Name: Descending</option>
                            <option value="l2h">Price: Ascending</option>
                            <option value="h2l">Price: Descending</option>
                            <option value="/">Date: Newest</option>
                        </select>
                    </div>
                </div>
            </nav>
        </div>
        <div class="item2">
            <div class="colour">
                <h5>Colour</h5>
                <button class="filter-button" data-filter="Red" style="background-color: red"></button>
                <button class="filter-button" data-filter="Black" style="background-color: black"></button>
                <button class="filter-button" data-filter="Yellow" style="background-color: yellow"></button>
                <button class="filter-button" data-filter="Green" style="background-color: green"></button>
            </div>
            <div class="reset">
                <button class="filter-button" data-filter="all"><i class="fa fa-refresh"></i></button>
            </div>
        </div>
        <div class="item3 dropdown">
            <div id="myDropdown" class="products dropdwon-content">
                <?php
                // Create connection
                require_once('conn.php');
                $sql = "SELECT * FROM products 
                WHERE name LIKE '%Future%'";

                $allproducts = mysqli_query($conn, $sql);
                while ($product = mysqli_fetch_assoc($allproducts)) { ?>
                    <a href="product-page.php?pid=<?php print $product['id']?>">
                        <div class="product-card filter <?php print $product['colour'] ?> <?php print $product['gender'] ?> <?php print $product['category'] ?>">
                            <div class="product-image">
                                <img src="/kits/<?php echo $product['id'] ?>.jpg">
                            </div>
                            <div class="product-info">
                                <h5><?php echo $product['brand'] . " " . $product['name'] ?></h5>
                                <p class="colour"><?php print $product['colour'] ?></p>
                                <p class="category"><?php print $product['gender'] ?> <?php print $product['category'] ?></p>
                                <p class="price">£<?php print $product['price'] ?></p>
                            </div>
                        </div>
                    </a><?php } // close while loop 
                        ?>
            </div>
        </div>
        <div class="item5">
            <button>SHOW MORE</button>
        </div>
    </div>
   <script src="alot.js"></script>
</body>


</html>
<?php include('footer.php') ?>