<?php
class Cart extends Controller
{
    function AddItem()
    {
        $item = $this->model("ItemModel");
        $item_info = $item->get_item_info($_POST['item_id']);
        if (!ss_get($item_info['name'])) {
            ss_set($item_info['name'], 1);
        } else {
            $val = ss_get($item_info['name']);
            $val++;
            ss_set($item_info['name'], $val);
        }
        $result = array();
        foreach ($_SESSION as $key => $val) {
            $result[$key] = $val;
        }
        // session_destroy();
        echo json_encode($result);
    }
}
