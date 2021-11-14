<?php
class Home extends Controller
{
    function __construct()
    {
    }
    function Homepage()
    {
        $category = $this->model('Category');
        $item = $this->model('Item');
        $all_item = $item->get_all_item();
        $list_category = $category->get_category();
        $data = array(
            'category' => $list_category,
            'item' => $all_item
        );
        $this->view('layout', $data);
    }
}
