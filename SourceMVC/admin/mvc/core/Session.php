<?php

session_start();
function ss_set($key, $item)
{
    $_SESSION[$key] = $item;
}
function ss_get($key)
{
    return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
}
//cart
// function ss_set_item($item)
// {
//     $_SESSION['cart'][] = $item;
// }
// function ss_get_item($key)
// {
//     return isset($_SESSION['cart'][$key]) ? $_SESSION['cart'][$key] : false;
// }
// function ss_delete_item($key)
// {
//     if (isset($_SESSION['cart'][$key])) {
//         unset($_SESSION['cart'][$key]);
//     }
// }
//
function ss_delete($key)
{
    if (isset($_SESSION[$key])) {
        unset($_SESSION[$key]);
    }
}
