<?php
class Home extends Controller
{
    function __construct()
    {
    }
    function Homepage()
    {
        $category = $this->model('Category');
        $list_category = $category->get_category();
        $data = array(
            'category' => $list_category
        );
        $this->view('layout', $data);
    }
}
