<?php
class OrderModel extends Database
{
    function get_all_order()
    {
        $sql = "SELECT * FROM `order`";
        return $this->get_list($sql);
    }
    function update_state($orderId, $state)
    {
        $state = (int)$state;
        $sql = "UPDATE FROM order SET state = '$state' where orderID = $orderId";
    }
}
