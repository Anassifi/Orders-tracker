<?php session_start(); ?>

<?php
if (isset($_POST["submit"]) || isset($_POST["update"])) {
    $date = $_POST["date"];
    $full_name = $_POST["full_name"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];
    $id_product = $_POST["id_product"];
    $code_pack = $_POST["code_pack"];
    $product_type = $_POST["product_type"];
    $price = $_POST["price"];
    $status = $_POST["status"];

    $fields = [
        'date' => $date,
        'full_name' => $full_name,
        'city' => $city,
        'address' => $address,
        'phone_number' => $phone_number,
        'id_product' => $id_product,
        'code_pack' => $code_pack,
        'product_type' => $product_type,
        'price' => $price,
        'status' => $status
    ];

    $product = new Product();

    if (isset($_POST["submit"])) {

        $product->insert($fields);
    } elseif (isset($_POST["update"])) {

        $id = $_GET['id'];

        CreateSession("ID", $result['id_client']);

        if (isset($_SESSION["ID"]) && $_SESSION["ID"] == $id) {

            $product->update($fields, $id);
        }
    }

    // debug($result['id_client']);
    // exit();
}
