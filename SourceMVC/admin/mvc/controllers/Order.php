<?php
class Order extends Controller
{
    public $data = array();
    function OrderPage()
    {
        $category = $this->model('Category');
        $list_category = $category->get_category();
        $orderModel = $this->model('OrderModel');
        $orders = $orderModel->get_all_order();
        $this->data = array(
            'category' => $list_category,
            'render' => 'order',
            'orderList' => $orders,
            'category_type' => -1
        );
        $this->view('layout', $this->data);
    }
}
