<?php
class Contact extends Controller
{
    function Show()
    {
        $data['page'] = 'Contact';
        return ($this->view("Home", $data));
    }
}