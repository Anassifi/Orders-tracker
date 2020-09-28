<?php include '../includes/autoloader.php'; ?>

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
                    <h4 class="mb-4">Add product</h4>
                    <!-- Start Form -->

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="date">Date :</label>
                            <input type="text" class="form-control" name="date" placeholder="Add date" value="<?=
                                                                                                                    date("Y-m-d H:i:s");
                                                                                                                ?>">
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name :</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Add Full Name">
                        </div>
                        <div class="form-group">
                            <label for="city">City :</label>
                            <select name="city" class="form-control" aria-placeholder="Select city">
                                <?php
                                $cities = [];

                                $cities['CA'] = 'Casablanca';
                                $cities['FE'] = 'Fez';
                                $cities['TA'] = 'Tangier';
                                $cities['MA'] = 'Marrakech';
                                $cities['SA'] = 'Sale';
                                $cities['ME'] = 'Meknes';
                                $cities['RA'] = 'Rabat';
                                $cities['OU'] = 'Oujda';
                                $cities['KE'] = 'Kentira';
                                $cities['AG'] = 'Agadir';
                                $cities['TE'] = 'Tetouan';
                                $cities['SA'] = 'Safi';
                                $cities['MO'] = 'Mohammedia';
                                $cities['KH'] = 'Khouribga';
                                $cities['SE'] = 'Settat';
                                $cities['ES'] = 'Essouira';
                                $cities['YO'] = 'Youssoufia';
                                $cities['BG'] = 'Ben Guerir';
                                ?>

                                <?php foreach ($cities as $city => $name) : ?>
                                    <option><?= $name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" class="form-control" name="address" placeholder="Add Address">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number :</label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Add Phone number">
                        </div>
                        <div class="form-group">
                            <label for="id_product">Id product :</label>
                            <input type="text" class="form-control" name="id_product" placeholder="Add Id Client">
                        </div>
                        <div class="form-group">
                            <label for="code_pack">Code pack :</label>
                            <input type="text" class="form-control" name="code_pack" placeholder="Add Code Pack">
                        </div>
                        <div class="form-group">
                            <label for="product_type">Product Type :</label>
                            <input type="text" class="form-control" name="product_type" placeholder="Add product type">
                        </div>
                        <div class="form-group">
                            <label for="price">Price :</label>
                            <input type="text" class="form-control" name="price" placeholder="Add price">
                        </div>
                        <div class="form-group">
                            <label for="status">Status :</label>
                            <select name="status" class="form-control" aria-placeholder="Define status">
                                <option>Delivered</option>
                                <option>Shipped</option>
                                <option>Canceled</option>
                            </select>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success" value="Add product">
                    </form>

                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- end Main -->
</body>

</html>