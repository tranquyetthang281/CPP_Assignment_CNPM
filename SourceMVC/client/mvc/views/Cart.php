<div class="offcanvas offcanvas-end" id="my-cart">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">My Cart</h1>
    </div>
    <div class="offcanvas-body ">
        <?php
        $cart = $_SESSION;
        foreach ($cart as $key => $value) { ?>
            <div class="item" id="cart-item<?php $value['id'] ?>">
                <img src="./burger.png" alt="" />
                <div class="name">
                    <?php echo ($key)  ?>
                </div>
                <div class="quantity">
                    <div class="decrease">
                        <ion-icon name="remove-outline"></ion-icon>
                    </div>
                    <div class="number"><?php echo $value['val'] ?></div>
                    <div class="increase">
                        <ion-icon name="add-outline"></ion-icon>
                    </div>
                </div>
                <div class="price price-item-cart"><?php echo $value['total_price'] ?>$</div>
                <div class="remove-item text-danger">Remove</div>
            </div>
        <?php }

        ?>
    </div>
    <div class="checkout">
        <div class="total">Total:</div>
        <div class="checkout-button">Checkout</div>
    </div>
</div>