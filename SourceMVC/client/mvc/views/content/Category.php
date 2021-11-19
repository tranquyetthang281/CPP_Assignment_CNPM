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
                    if ($key <= 3) { ?>
                        <div class="item">
                            <img src="<?php echo $DOMAIN ?>/public/images/burger2.png" alt="  " />
                            <div class="name"><?php echo $item['name'] ?></div>
                            <div class="price"><?php echo $item['price'] ?></div>
                            <div class="buy-now" id="item<?php echo $item['id'] ?>">Buy Now</div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>