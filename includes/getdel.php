<?php

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $product = new Product();

    $product->delete($id);
}
