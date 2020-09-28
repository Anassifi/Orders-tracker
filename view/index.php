<?php session_start(); ?>
<?php include '../includes/autoloader.php'; ?>
<?php include '../includes/getdel.php'; ?>

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
    <div>
        <div class="mt-4">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h4 class="mb-4">All delivery's</h4>
                    <?php session_unset(); ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Full name</th>
                                <th scope="col">City</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Id Product</th>
                                <th scope="col">Code Pack</th>
                                <th scope="col">Product Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $product = new Product();

                            $rows = $product->select();

                            foreach ($rows as $row) :
                            ?>
                                <tr>
                                    <th scope="row"><?= $row['id_client'] ?></th>
                                    <td><?= $row['date'] ?></td>
                                    <td><?= $row['full_name'] ?></td>
                                    <td><?= $row['city'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><?= $row['phone_number'] ?></td>
                                    <td><?= $row['id_product'] ?></td>
                                    <td><?= $row['code_pack'] ?></td>
                                    <td><?= $row['product_type'] ?></td>
                                    <td><?= $row['price'] ?></td>
                                    <td><?= $row['status'] ?></td>
                                    <td><a class="btn btn-sm btn-primary" href="edit.php?id=<?= $row['id_client'] ?>">Edit</a> &nbsp; <a class="btn btn-sm btn-danger" href="index.php?del=<?= $row['id_client'] ?>">Delete</a></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>