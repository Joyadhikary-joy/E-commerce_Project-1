<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */
?>
    <!--MOst sold items -->
    <section id="top-sale">
        <div class="container py-5">
            <h4 class="font-rubik font-size-20">Most sold items </h4>
            <hr>
            <!--Owl carousel-->
            <div class="owl-carousel owl-theme">
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                        <!-- img fluid for responsive pic -->
                        <div class="text-center">
                            <!-- center all the text -->
                            <br>
                            <h6>Samsung Galaxy S10+</h6> <!-- name of the product -->
                            <div class="rating text-warning font-size-12">
                                <!-- * -->
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span> <!--fas for filld star and far for empty star -->
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15000 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/2.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiaomi poco X3 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span> <!--fas for filld star and far for empty star -->
                            </div>
                            <div class="price py-2">
                                <span>17500 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Oneplus Note 9 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>20000 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1123.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Samsung Note 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>13152 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/88991.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Oneplus 8 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15870 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            <!--text button for scrool   -->
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1122.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Samsung note 11</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15200 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/14.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Realme nazro 30</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15288 taka </span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Top Sale ended -->

    <!--Special Price-->
    <section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-14">
                <!-- bootstrap command for group buttons in right-->
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Xiaomi</button>
                <button class="btn" data-filter=".Oneplus">Oneplus</button>
            </div>

            <div class="grid">
                <!-- filter only apple .. its work like a class .. if we send a then it sort only a -->
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/13.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Apple iPhone 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span> <!--fas for filled star and far for empty star -->
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>110152 taka</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <br>
                                <h6>Samsung Galaxy S10+</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>15299taka</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Oneplus 9 Pro</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>15002taka</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/2255.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Apple iphone 11 pro max</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>39352 taka</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/1122.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <br>
                                <h6>Samsung Note 11</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>12152 taka</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/1111.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 10 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>19152 taka</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/2.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Xiaomi poco X3</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>23152 taka</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Samsung border "> <!-- ai line ta group korar jonno use hobe .. jkn sort kori tkn samsung border ar under a aita cole jabe -->
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/1123.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Samsung Note 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>9991 taka</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/88991.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Oneplus 8 pro </h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>23352 taka</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border  ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/13.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Apple iPhone 10 max</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>152252 taka</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--!Special Price-->


    <!-- Banner Ads  -->
    <section id="banner_adds">
        <div class="container py-5 text-center">
            <img src="./assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
            <img src="./assets/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid">
        </div>
    </section>
    <!-- !Banner Ads  -->



    <!--Start New Phones -->
    <section id="new-phones">   <!-- akta new section add korlam ajonno amra section tag use kortyce -->
        <div class="container">
            <h4 class="font-rubik font-size-20">New Phones</h4> <!-- new phone nam a section banailam-->
            <hr>

            <!--Owl carousel-->
            <div class="owl-carousel owl-theme">
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                        <!-- img fluid for responsive pic -->
                        <div class="text-center">
                            <!-- center all the text -->
                            <br>
                            <h6>Samsung Galaxy S10+</h6> <!-- name of the product -->
                            <div class="rating text-warning font-size-12">
                                <!-- * -->
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15000 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/2.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Xiaomi poco X3 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                                <span><i class="far fa-star"></i></span> <!--fas for filled star and far for empty star -->
                            </div>
                            <div class="price py-2">
                                <span>17500 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>oneplus Note 9 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>20000 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1123.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Samsung Note 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>13152 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/88991.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Oneplus 8 pro</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15870 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            <!--text button for scrool   -->
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/1122.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Samsung note 11</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15200 taka</span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="#"><img src="./assets/products/14.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <br>
                            <h6>Realme nazro 30</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>15288 taka </span>
                            </div>
                            <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End New Phones -->



    <!-- Blogs -->
    <section id="blogs">
        <div class="container py-4"> <!-- top and buttom pading 4-->
            <h4 class="font-rubik font-size-20">Latest Blogs</h4>
            <hr>


            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;"> <!-- border 0 karon blog ar border amra cai na-->
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/1122.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">Bangladesh University of Business and Technology (BUBT) is a powerhouse of academic excellence that champions the freedom of learning.The university has risen to one of the top ranking private universities in Bangladesh</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/2211.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">The mission of Bangladesh University of Business and Technology (BUBT) is to provide students with high quality education and training that are relevant to the needs of the modern society at affordable costs</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Upcoming Mobiles</h5>
                        <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top"> <br>
                        <p class="card-text font-size-14 text-black-50 py-1">Joy Ecommarce site is commited to there customer family to produce Latest phones with in short time as phone company announce there latest smartphone model.We always try to give a handsome amount of discount to our consumers.</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blogs section -->



<?php
// include footer.php file  .. it will add footer add footer
include ('footer.php');
?>

