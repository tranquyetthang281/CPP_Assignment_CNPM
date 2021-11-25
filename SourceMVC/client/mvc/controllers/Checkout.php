<?php
class Checkout extends Controller
{
    function getContent()
    {
        $data['page'] = 'Checkout';
        echo ($this->view('Home', $data));
    }
    function doCheckOut()
    {
        $tableNum = (int)$_POST['tableNumber'];
        $total = 0;
        foreach ($_SESSION as $key => $val) {
            $total += (int)$val['total_price'];
        }
        $order = $this->model("Order");
        $orderDate = date("Y-m-d h:i:s");
        $order->doOrder($orderDate, $tableNum, $total);
        session_destroy();
        echo 'success';
    }
}
