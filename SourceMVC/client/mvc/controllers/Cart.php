<?php
class Cart extends Controller
{
    function AddItem()
    {
        $item = $this->model("ItemModel");
        $item_info = $item->get_item_info($_POST['item_id']);

        if (!ss_get($item_info['name'])) {
            ss_set($item_info['name'], array(
                'id' => $item_info['id'],
                'total_price' => $item_info['price'],
                'val' => 1
            ));
        } else {
            $val = ss_get($item_info['name'])['val'];
            $val++;
            ss_set($item_info['name'], array(
                'id' => $item_info['id'],
                'total_price' => (int)$item_info['price'] * $val,
                'val' => $val
            ));
        }
        echo ($this->view('Cart'));
    }
    function updatePrice()
    {
        $item = $this->model("ItemModel");
        $item_info = $item->get_item_info($_POST['item_id']);
        ss_set($item_info['name'], array(
            'id' => $item_info['id'],
            'total_price' => $item_info['price'] * (int)$_POST['val'],
            'val' => (int)$_POST['val']
        ));
        echo ($item_info['price'] * (int)$_POST['val']);
    }
}
