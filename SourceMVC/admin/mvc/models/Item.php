<?php
class Item extends Database
{
    function get_all_item()
    {
        $sql = "SELECT * from item ";
        return $this->get_list($sql);
    }
}
