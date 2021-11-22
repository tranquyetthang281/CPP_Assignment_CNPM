<?php $DOMAIN = 'http://localhost/CPP_Assignment_CNPM/SourceMVC/client' ?>
<button type="button" class="btn btn-info">
    <a href="http://localhost/CPP_Assignment_CNPM/SourceMVC/client/" style="color: black; text-decoration: none">Back </a>
</button>
<div class="menu mx-auto">
    <div class="category mx-auto" id="menu1">
        <div class="title">
            <h1>Burger Menu</h1>
        </div>
        <div class="list-item">
            <div class="d-flex justify-content-start flex-wrap">

                <?php foreach ($data['items_category'] as $key => $item) {
                ?>
                    <div class="item">
                        <div type="button" data-bs-toggle="modal" data-bs-target="#detail<?php echo $item['id'] ?>">
                            <?php include "DetailItemModal.php" ?>
                            <img src="http://localhost/CPP_Assignment_CNPM/SourceMVC/images/<?php echo $item['image'] ?>" alt=" " />
                        </div>
                        <div class=" name"><?php echo $item['name'] ?>
                        </div>
                        <div class="price"><?php echo $item['price'] ?></div>
                        <div class="buy-now item<?php echo $item['id'] ?>">Buy Now</div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
</div>