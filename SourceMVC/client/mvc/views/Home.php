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
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/css/profile.css" />

    <title>Document</title>
</head>

<body>
    <!-- header start -->
    <header>
        <div class="title">
            <a href="<?php echo $DOMAIN ?>" style="text-decoration: none;">
                <h1>Restaurant POS</h1>
            </a>
        </div>
        <div class="search-bar">
            <input type="text" class="form-control search-item" placeholder="Search..." />
            <ion-icon class="icon-search" name="search-outline"></ion-icon>
        </div>
        <!-- <div>About us</div> -->
        <div class="contact">
            <a href="<?php echo $DOMAIN ?>/Contact/Show"> Contact us </a>
        </div>
        <div class="user-action">
            <?php if (isset($_SESSION['token_user'])) { ?>

                <div class="dropdown">

                    <ion-icon name="person-circle-outline" class="icon-profile" data-bs-toggle="dropdown"></ion-icon>
                    <ul class="dropdown-menu drop-menu-end">
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Login/accountPage">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Order/historyPage">Payment History</a></li>
                        <li><a class="dropdown-item" href="<?php echo $DOMAIN ?>/Login/Logout">Logout</a></li>
                    </ul>
                </div>
            <?php } else { ?>
                <a href="<?php echo $DOMAIN ?>/Login/loginPage">
                    Login
                </a>
            <?php } ?>
        </div>
        <?php if ($data['page'] != 'Checkout') { ?>
            <div class="cart" data-bs-target="#my-cart" data-bs-toggle="offcanvas">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="badge bg-danger count-item"></span>
            </div>
        <?php } ?>
        <div class="alert alert-success w-25 message-add">
            <strong>Item has been added to your cart!</strong>
        </div>
    </header>

    <!-- header  end -->
    <!-- searchbox -->
    <div class="search-box hidden">
    </div>

    <!-- searchbox-end -->
    <!-- contentstart -->
    <div class="container content">

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
            <a href="<?php echo $DOMAIN ?>/Checkout/getContent" class="checkout-button">Checkout</a>
            <div class="remove-all" onclick="removeAll()">Remove all</div>
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
    <script>

    </script>
    <script src="<?php echo $DOMAIN ?>/public/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>

    </script>
</body>

</html>