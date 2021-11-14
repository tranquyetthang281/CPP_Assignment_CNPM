<?php

class Home extends Controller{
   
    public $menuModel, $itemModel;

    public function __construct(){
        $this->menuModel = $this->model("MenuModel");
        $this->itemModel = $this->model("ItemModel");
    }

    function Show() {
        $this->view("home",[
            "render"=>"home",
        ]);   
    }
}