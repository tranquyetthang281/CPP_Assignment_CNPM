<table class="table table-striped table-dark table-hover mt-4" style="color:white">
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

        <?php if ($data['orderList']) {
            foreach ($data['orderList'] as $key => $value) { ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td> <?php echo $value['orderID'] ?> </td>
                    <td><?php echo $value['orderDate'] ?></td>
                    <td><?php echo $value['tableNumber'] ?></td>
                    <td><?php echo $value['totalPrice'] ?></td>
                    <td>
                        <?php echo $value['stateName'] ?>
                    </td>

                </tr>

        <?php  }
        } ?>
    </tbody>
</table>