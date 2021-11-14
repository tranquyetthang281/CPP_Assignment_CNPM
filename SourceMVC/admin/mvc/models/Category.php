<?php

class Category extends Database
{
    function get_category()
    {
        $sql = "SELECT name FROM category";
        return $this->get_list($sql);
    }
}
