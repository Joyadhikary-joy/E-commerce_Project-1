<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy Adhikary</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>


</head>

<body>

<!-- start #header section-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-16 text-black-50 m-0">joy adhikary 18192103062</p>
        <div class="font-rale font-size-14">
            <a href="register.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="cart.php" class="px-3 border-right text-dark">Whishlist (0)</a>
        </div>
    </div>

    <!-- Primary Navigation form bootstrape-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">JOY Store </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <!-- nav bar ar margin jate space pai -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Products </a> <!-- fas fa for ^ icone-->
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart Items</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="comingsoon.php">Cooming soon</a>
                </li>
            </ul>
            <!-- curt and shopping icone -->
            <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
                    <!-- py top and bouttom pading px left and right pading -->
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>    <!-- uprer line a echo statment ke call dice thn product obj thn getdata method aita cart table ar data return korbe , r amra count korbo koita cart a ashe tai count function a raksi  -->
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- end #header section -->

<!--start #main-site-->
<main id="main-site">