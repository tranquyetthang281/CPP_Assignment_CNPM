<div class="manage-order">
    <div class="search-title">Tìm kiếm</div>
    <div class="search-bar col-lg-6">
        <input type="text" class="mt-3 form-control w-50 search-item" placeholder="Tìm kiếm theo mã đơn hàng..." />
    </div>
    <a class="text-danger" href="<?php echo $DOMAIN ?>/Order/removeAll">
        Delete All
    </a>
</div>
<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Số bàn</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Username</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php if ($data['orderList']) {
            foreach ($data['orderList'] as $key => $value) { ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td> <?php echo $value['orderID'] ?> </td>
                    <td><?php echo $value['orderDate'] ?></td>
                    <td><?php echo $value['tableNumber'] ?></td>
                    <td><?php echo $value['totalPrice'] ?></td>
                    <td class="text-primary ">
                        <a href="<?php echo $DOMAIN ?>/Order/changeState/<?php echo $value['orderID'] ?>">
                            <?php echo $value['stateName'] ?>
                        </a>
                    </td>
                    <td><?php echo $value['username'] ?></td>
                    <td style="display:flex">
                        <a class="text-danger" href="<?php echo $DOMAIN ?>/Order/deleteOrder/<?php echo $value['orderID'] ?>">
                            Delete
                        </a>

                    </td>
                </tr>

        <?php  }
        } ?>
    </tbody>
</table>
</div>