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