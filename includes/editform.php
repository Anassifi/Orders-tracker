<?php

if(isset($_GET['id']))
{
    $uid = $_GET['id'];

    $product = new Product;

    $result = $product->selectId($uid);
}
