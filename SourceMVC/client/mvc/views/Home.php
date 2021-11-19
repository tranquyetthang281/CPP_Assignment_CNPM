<?php
$DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/client';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/css/bootstrap5/bootstrap.min.css" />
    <script src="<?php echo $DOMAIN ?>/public/css/bootstrap5/jquery.min.js"></script>
    <script src="<?php echo $DOMAIN ?>/public/css/bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/style.css" />

    <title>Document</title>
</head>

<body>
    <!-- header start -->
    <header>
        <div class="title">
            <h1>Restaurant POS</h1>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search..." />
            <ion-icon class="icon-search" name="search-outline"></ion-icon>
        </div>
        <div class="cart" data-bs-target="#my-cart" data-bs-toggle="offcanvas">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
    </header>

    <!-- header  end -->

    <!-- contentstart -->
    <div class="container content">
        <!-- banner start -->
        <?php require_once "content/" . $data['page'] . '.php' ?>

    </div>
    <!-- content end -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end" id="my-cart">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">My Cart</h1>
        </div>
        <div class="offcanvas-body list-item-cart">
            <?php require_once "Cart.php" ?>
        </div>
        <div class="checkout">
            <div class="total">Total:</div>
            <div class="checkout-button">Checkout</div>
        </div>
    </div>
    <!-- footer start -->
    <footer>
        <div class="footer">
            <a href="#" id="twitter">
                <ion-icon name="logo-twitter" size="large"></ion-icon>
            </a>

            <a href="#" id="facebook">
                <ion-icon name="logo-facebook" size="large"></ion-icon>
            </a>

            <a href="#" id="instagram">
                <ion-icon name="logo-instagram" size="large"></ion-icon>
            </a>
        </div>
    </footer>
    <!-- footer end -->

    <script src="<?php echo $DOMAIN ?>/public/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>