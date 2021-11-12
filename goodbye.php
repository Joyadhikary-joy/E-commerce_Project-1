<?php

session_start();

ob_start();
// include header.php file
include('header.php');

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);  // jodi delete ar jonno request kore thn aita cart ar delete function ke call korbe (item_id soho)
    }

    // save for later
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Joy Ecommerce </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Joy Ecommers </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="register.php">Register</a>
            </li>

            <li class="nav-item active ">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <img src="https://img.icons8.com/office/26/000000/administrator-male--v1.png"/>  <?php echo "  ". $_SESSION['username']?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h3><?php echo "Dear ". $_SESSION['username']?> Sir your order has been confirmed and save as processing</h3>
    <hr>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!-- Shopping cart section  -->

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20"><span style="color:black">Your Order ID </span><span style="color:RED">#686992114142</span></h5>
        <br>
        <h5 class="font-baloo font-size-20"><span style="color:black">Expected delivery : Yours product will be delivered between</span><span style="color:RED"> 7-8 </span><span style="color:black"> working days </span></h5>
    <br>
        <h5 class="font-baloo font-size-20"><span style="color:black">Delivery agent : Yours product will be delivered by </span><span style="color:blue">joy e-courier</span></h5>
        <br>
        <h5 class="font-baloo font-size-20"><span style="color:midnightblue" >You have ordered following items </span></h5>
        <br>
        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('cart') as $item) :
                    $cart = $product->getProduct($item['item_id']); // Product.php theke getproduct ke call dibe r getproduct item thke item id deya product display kore dibe
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>   <!--item theke item image nibe -->
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>  <!--item theke item name nibe -->
                                <small>by <?php echo $item['item_brand'] ?? "Brand"; ?></small>  <!--item theke item brand nibe -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    ৳ <span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>     <!--item theke item price nibe -->
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['item_price'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- !Shopping cart section  -->


<?php
// include footer.php file
include ('footer.php');
?>


