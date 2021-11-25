<?php
class Order extends Database
{
    function doOrder($orderDate, $tableNumber, $totalPrice)
    {
        $sql = "INSERT INTO `order`(orderDate,tableNumber,totalPrice,stateID) values ('$orderDate','$tableNumber','$totalPrice','1')";
        echo $sql;
        $this->query($sql);
    }
}
