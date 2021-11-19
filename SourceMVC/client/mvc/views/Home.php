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
        <div class="banner">
            <!-- slide -->
            <div class="banner-slide">
                <div class="slides">
                    <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner1.jpg')"></div>
                    <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner2.jpg')"></div>
                    <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/banner3.jpg')"></div>
                    <div class="slide" style="background-image: url('<?php echo $DOMAIN ?>/public/images/bg.jpg')"></div>
                </div>
                <div class="navigation">
                    <div id="1" class="bar checked"></div>
                    <div id="2" class="bar"></div>
                    <div id="3" class="bar"></div>
                    <div id="4" class="bar"></div>
                </div>
            </div>
            <!-- slide -->
            <div class="banner-left">
                <div class="banner2"></div>
                <div class="banner3"></div>
            </div>
        </div>
        <!-- banner end -->
        <div class="categories">
            <?php foreach ($data as $key => $value) { ?>
                <div class="scroll-menu"><?php echo $value['category']['name'] ?></div>
            <?php } ?>
        </div>
        <div class="menu mx-auto">
            <?php foreach ($data as $key => $value) { ?>
                <div class="category mx-auto" id="<?php echo "menu" . $value['category']['id'] ?>">
                    <div class="title">
                        <h1><?php echo $value['category']['name'] ?></h1>
                    </div>
                    <div class="list-item">
                        <div class="d-flex justify-content-start flex-wrap">
                            <?php foreach ($value['items'] as $key => $item) { ?>
                                <div class="item">
                                    <img src="<?php echo $DOMAIN ?>/public/images/burger2.png" alt="  " />
                                    <div class="name"><?php echo $item['name'] ?></div>
                                    <div class="price"><?php echo $item['price'] ?></div>
                                    <div class="buy-now" id="item<?php echo $item['id'] ?>">Buy Now</div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <a herf="#" class="read-more">Read more</a>
                </div>
            <?php }
            ?>
        </div>


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


    </div>
    <!-- content end -->
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
</body>

</html>