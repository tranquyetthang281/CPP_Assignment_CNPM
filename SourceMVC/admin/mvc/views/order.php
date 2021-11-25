<div class="manage-order">
    <div class="search-title">Tìm kiếm</div>
    <div class="search-bar">
        <input type="text" class="mt-3 form-control w-50 search-item" placeholder="Tìm kiếm theo mã đơn hàng..." />
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if ($data['orderList']) {
                    foreach ($data['orderList'] as $key => $value) { ?>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td> <?php echo $value['orderID'] ?> </td>
                        <td><?php echo $value['orderDate'] ?></td>
                        <td><?php echo $value['tableNumber'] ?></td>
                        <td><?php echo $value['totalPrice'] ?></td>
                        <td><?php echo $value['stateID'] ?></td>
                <?php  }
                } ?>

            </tr>
        </tbody>
    </table>
</div>