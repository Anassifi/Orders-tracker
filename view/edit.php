<?php include '../functions/functions.php' ?>

<?php include '../includes/autoloader.php'; ?>

<?php include '../includes/editform.php'; ?>

<?php include '../includes/getform.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Deli App</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">DELIVERY APP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Delivery<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addproduct.php">Add delivery</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- end Navbar -->

    <!-- Main -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h4 class="mb-4">Edit delivery</h4>

                    <!-- Start Form -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                        <div class="form-group">
                            <label for="date">Date :</label>
                            <input type="text" class="form-control" name="date" placeholder="Add date" value="<?php echo $result['date']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="full_name">Full Name :</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Add Full Name" value="<?php echo $result['full_name']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="city">City :</label>
                            <select name="city" class="form-control" aria-placeholder="Select city" value="<?php echo $result['city']; ?>">
                                <?php
                                $product = new Product();

                                $cities = $product->cities();

                                ?>
                                <?php foreach ($cities as $city) : ?>

                                    <option value="<?= $city["city"] ?>" <?php if ($city["city"] == $result["city"]) {
                                                                                echo "selected";
                                                                            } ?>><?= $city["city"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class=" form-group">
                            <label for="address">Address :</label>
                            <input type="text" class="form-control" name="address" placeholder="Add Address" value="<?php echo $result['address']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number :</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Add Phone number" value="<?php echo $result['phone_number']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="id_product">Id product :</label>
                            <input type="text" class="form-control" name="id_product" placeholder="Add Id Product" value="<?php echo $result['id_product']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="code_pack">Code pack :</label>
                            <input type="text" class="form-control" name="code_pack" placeholder="Add Code Pack" value="<?php echo $result['code_pack']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="product_type">Product Type :</label>
                            <input type="text" class="form-control" name="product_type" placeholder="Add product type" value="<?php echo $result['product_type']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="price">Price :</label>
                            <input type="text" class="form-control" name="price" placeholder="Add price" value="<?php echo $result['price']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="status">Status :</label>
                            <select name="status" class="form-control" aria-placeholder="Define status" value="<?php echo $result['status']; ?>">
                                <?php
                                $status = [
                                    "DL" => "Delivered",
                                    "SP" => "Shipped",
                                    "CL" => "Canceled"
                                ];

                                ?>
                                <?php foreach ($status as $stat => $value) : ?>

                                    <option value="<?= $value ?>" <?php if ($value == $result['status']) {
                                                                        echo "selected";
                                                                    } ?>><?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- found bug here extra space -->
                        <input type="submit" name="update" class="btn btn-success" value="Add product">

                    </form>

                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- end Main -->
</body>

</html>