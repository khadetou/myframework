<?php
class Pages
{
    public function __construct()
    {
    }
    public function index()
    {
        echo "This is the index page";
    }
    public function about($id)
    {
        echo $id;
    }
}
