<?php

class Widgets extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // GET active widgets list with order.
    public function get_list(): string
    {
        return "";
    }

    // get whole widgets' credentials according to app_id.
    public function get(): string
    {
        return "";
    }

    // Update active widgets' order.
    public function reorder(): string
    {
        $this->get_list();
        return "";
    }
}
