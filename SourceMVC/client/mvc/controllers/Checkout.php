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
        session_destroy();
        echo 'success';
    }
}
