<?php
$DOMAIN = 'http://localhost/Project/CPP_Assignment_CNPM/SourceMVC/admin';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.min.css" />
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/jquery.min.js"></script>
    <script src="<?php echo $DOMAIN ?>/public/bootstrap5/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href=" <?php echo $DOMAIN ?>/public/style.css" />
    <title>Document</title>
</head>

<?php
?>

<body>
    <div class="header">
        <h1>Quản lý sản phẩm</h1>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 task">
                <div class="title">TASK</div>
                <div class="nav-list">
                    <div class="all-item bg-primary mt-2">List of all items</div>

                    <div class="categories">
                        <?php foreach ($data['category'] as $key => $value) { ?>
                            <div id="category<?php echo $value['id'] ?>" class="category mt-2"> <?php echo $value['name']  ?> </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="add-item bg-secondary mt-2">Add new item</div>
            </div>
            <div class="col-lg-9 col-md-8 action">
                <div class="content list-item">
                    <div class="row justify-content-center">
                        <?php foreach ($data['item'] as $key => $value) { ?>
                            <div class="col-lg-3 col-md-6 item" id="item<?php echo $value['id'] ?>">
                                <div class="contain-item">
                                    <img src="<?php echo $DOMAIN ?>/public/images/burger.png" alt="Burger" />
                                    <div class="item-name"><?php echo $value['name'] ?></div>
                                    <div class="bottom">
                                        <div class="edit-text">Edit Item</div>
                                        <div class="button-plus">
                                            <div class="contain-icon">
                                                <ion-icon name="add-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".categories").hide();
        $(".all-item").click(function() {
            $(".categories").slideToggle();
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>