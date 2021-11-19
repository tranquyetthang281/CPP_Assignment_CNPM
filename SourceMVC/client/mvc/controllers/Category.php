<?php
class Category extends Controller
{
    function getCategory($category_id)
    {
        $item = $this->model("ItemModel");
        $data['page'] = 'Category';
        $data['items_category'] = $item->get_item_category($category_id);
        return ($this->view("Home", $data));
    }
}
