<!-- Special Price -->
<?php
$brand = array_map(function ($pro){ return $pro['item_brand']; },$product_shuffle); /*this for new input brand , sob product product_shuffle ar majhe store korsi*/
$unique = array_unique($brand); /* for storing unique brand */
sort($unique); /* sort for sorting brand array */
shuffle($product_shuffle);


// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}
$in_cart = $Cart->getCartId($product->getData('cart'));
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php /* ai array map diye unique array ta itarate korbo akta akta kore // aita brand button  add korbe special price a*/
            array_map(function ($brand){
                printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
            }, $unique);
            ?>
        </div>

        <div class="grid">
            <?php array_map(function ($item) use($in_cart){ ?> <!-- array map fun for iterate array , call function as index then display this array -->
                <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand" ; ?>"> <!--database ar product table theke item brand coloum theke banrd pike korbo ?? aita null closing oparetor use korsi jodi item_brand empty hoi tkn apple default print hobe-->
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid"></a>
                            <div class="text-center"> <!-- special price (index ) page theke product page a redirect korbe jate sob details dekty pari , item_id dekhe bujbo konta jacche ,valuse hocche item_id -->
                                <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>৳<?php echo $item['item_price'] ?? 0 ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>"> <!--input data show korbo nah tai hidden,, upr theke item id pabo  -->
                                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                    <?php
                                    if (in_array($item['item_id'], $in_cart ?? [])){
                                        echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';// in array search korbe oi product ke jodi age theke oi product cart a thake tobe abr add korbe nah
                                    }else{
                                        echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle) ?> <!-- product_shuffle arrary thke nibo sob -->
        </div>
    </div>
</section>
<!-- !Special Price -->
