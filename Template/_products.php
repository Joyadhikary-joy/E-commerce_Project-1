
<!--  start  product  -->

<?php
$item_id = $_GET['item_id'] ?? 1; // name of the variable
foreach ($product->getData() as $item) : // array of product one by  one in the item variable
if ($item['item_id'] == $item_id) : // jodi upere item id ar songe ager ta match kore thn print korbo
?>

<!-- 1st colum a product image and proceed to buy , add to cart  2nd colum product information  3rd coloum for descripssion -->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"> <!-- 2 coloum inetialy , 6 coloum space for picture and rest of 6 colum space for product infromation and etc-->
                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product" class="img-fluid"> <!-- img fluid for responsive image -->
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button> <!-- btg danger for light red colour-->
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">Add to Cart</button> <!-- btg warning for light yellow colour-->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span><!-- far for empty and fas for full -->
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>  <!-- px = left and right pading , -->
                </div>
                <hr class="m-0">          <!-- to remove margin -->

                <!---    product price       -->

                <table class="my-3">              <!-- top and buttom margin 3-->
                    <tr class="font-rale font-size-14">  <!-- tr for table row -->
                        <td>M.R.P:</td>
                        <td><strike>৳ 80000 taka</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>                                            <!-- &nbsp; for white space -->
                        <td class="font-size-20 text-danger">৳<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-warning">৳ 15000</span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5"> <!-- center text  right mergin 5-->
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span> <!-- retweet icone name , p- top buttom left right pading  , rounded pill for circle effect -->
                            </div>
                            <a href="#" class="font-rale font-size-12">15 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span> <!-- for truck icone -->
                            </div>
                            <a href="#" class="font-rale font-size-12">Joy Ecommarce <br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">2 Years <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Nov 25  - Dec 1</small>
                    <small>Sold by <a href="#">Joy Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 18192103062 </small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">  <!-- jutify use korsi karon amra 3 tar majhe e space casshi -->
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product quantity section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Quantity</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button> <!-- for ^ button -->
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1"> <!-- disable korsi jate input box a likty na pare , defalut value is 1 always -->
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- product qty section end -->
                    </div>
                </div>

                <!-- Ram size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Ram Size :</h6>
                    <div class="d-flex justify-content-between w-75"> <!-- d-flex for display flex to the stev , justify con.. for space , w-75 to add width 75% to this div-->
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">4GB RAM</button> <!-- aita bootstrap class -->
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">6GB RAM</button>
                        </div>
                        <div class="font-rubik border p-2">
                            <button class="btn p-0 font-size-14">8GB RAM</button>
                        </div>
                    </div>
                </div>
                <!-- Ram size end -->


            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr> <!-- horizontal row-->
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
            </div>
        </div>
    </div>
</section>
<!--   End product  -->
<?php
endif;
endforeach;
?>
