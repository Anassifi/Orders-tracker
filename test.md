$product = new Product();

                                $cities = $product->cities();

                                ?>
                                
                                <?php foreach ($cities as $city) : ?>
                                    <option value="<?= $city["city"] ?>"><?= $city["city"] ?></option>
                                <?php endforeach; ?>