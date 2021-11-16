<?php $DOMAIN = 'http://localhost/Project/CPP_Assignment_CNPM/SourceMVC/admin'; ?>
<div class="content list-item">
    <div class="row justify-content-center">
        <?php foreach ($data['item'] as $key => $value) { ?>
            <div class="col-lg-3 col-md-6 item" id="item<?php echo $value['id'] ?>">
                <div class="contain-item">
                    <img src="<?php echo $DOMAIN ?>/public/images/<?php echo $value['image'] ?>" alt="<?php echo $value['name'] ?>" />
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
                <div class="delete-button">
                    <span title="Delete">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </span>
                </div>
            </div>
        <?php } ?>

    </div>
</div>