<!DOCTYPE html>
<html lang="en">

<head>
    <title>Store</title>
    <meta charset="UTF-8">
    <meta http_equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <form class="container-fluid justify-content-center">
            <button class="btn  button-main me-2" type="button">All Specials</button>
            <button class="btn  button-main me-2" type="button">Weekly Ad</button>
            <button class="btn  button-main me-2" type="button">Coupons</button>
        </form>
    </nav>
    <div class="container mt-4">
        <div class=" mb-4">
            <nav class="navbar">
                <!------Nav Tab ------->
                <div class="nav-wrapper">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="browse-tab" data-bs-toggle="tab" data-bs-target="#"
                                type="button" role="tab" aria-controls="" aria-selected="true">
                                <!-- 200 ap ranplase pa varyab lan -->
                                Browse(200)
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="clipped" data-bs-toggle="tab" data-bs-target="#" type="button"
                                role="tab" aria-controls="" aria-selected="false">Clipped</button>
                        </li>
                    </ul>
                </div>
                <!--END-->

                <div class="hide-on-mobile">
                    <a href="#" class="print-link" data-bs-toggle="button">
                        <i class="bi bi-printer icon"></i>
                         Print Clipped
                    </a>
                </div>
            </nav>
        </div>

        <nav class="navbar bg-body-tertiary">

            <div class="container-fluid mb-100">

                <form class="d-flex" role="search">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input class="form-control bi bi-search" type="search" placeholder="Search Coupons"
                            aria-label="Search">
                    </div>
                </form>

                <div class="display-in-mobile">
                    <a href="#" class="filter-link" data-bs-toggle="dropdown">
                        <i class="bi bi-filter icon"></i> Filter
                    </a>        
                    <ul class="dropdown-menu">
                        <li><a href="#">Categories</a></li>
                       <li><a href="#">Recommended</a></li>
                    </ul>
                </div>


                <div class="hide-on-mobile">
                   
                    <div class="btn-group">
                        <button class="btn  button-main btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </button>
                        <ul class="dropdown-menu">
                            ...
                        </ul>
                    </div>
                
                    <div class="btn-group">
                        <button class="btn button-main btn-sm  dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Recommended
                        </button>

                        <ul class="dropdown-menu">
                            ...
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <div class="card-container mt-5">
            <?php
            $cards = array(
                array(
                    "price" => "$5.00 OFF",
                    "description" => "Your next grocery
        purchase of $30 or more
        Limit 1 per Household",
                    "image" => "images/sneakers.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "2X POINTS",
                    "description" => "Earn 2x Flexible Points on all Giant Brand Products..
        ",
                    "image" => "images/headset.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$1.00 EACH
        ",
                    "description" => "Bush's Chili Beans.
        ",
                    "image" => "images/headset2.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$2.50 EACH
        ",
                    "description" => "When You Buy TWO (2)
        General Mills Corgal",
                    "image" => "images/glasses.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$2.50 EACH
        ",
                    "description" => "When You Buy TWO (2)
        Kellogg's
        ",
                    "image" => "images/speaker.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$8.99 EACH
        ",
                    "description" => "Red Baron Fully Loaded
        Pizza.",
                    "image" => "images/camera.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$3.50 EACH
        ",
                    "description" => "Description of Card 1",
                    "image" => "images/battercreek.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$11.98 EACH
            ",
                    "description" => "Jumbo Raw EZ Peell
            Shrimp
            ",
                    "image" => "images/watch.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$1.99 LB
            ",
                    "description" => "Red Seedless Grapes
            Sweet and Crunchy. with $25
            purchase. L...
            ",
                    "image" => "images/headset.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
                array(
                    "price" => "$2.49 EACH
            ",
                    "description" => "UTZ Pretzels, Tortiyahs or On the Border Tortille..
            ",
                    "image" => "images/nike.jpg",
                    "expired_date" => "Exp 12/31/2024"
                ),
            );

            foreach ($cards as $card) {

                echo '  <div class="card">';
                echo '  <div class="card-icon text-end">';
                echo '      <i class="bi bi-bag-plus-fill"></i>';
                echo '  </div>';
                echo '  <img class= " image " src="' . $card['image'] . '" alt="' . $card['price'] . '">';
                echo '  <h5 class="card-title text-center mt-3">' . $card['price'] . '</h5>';
                echo '  <p class="card-text text-center">' . $card['description'] . '</p>';
                echo '  <p class="card-text text-center">' . $card['expired_date'] . '</p>';
                echo ' <a href="#" class="btn button-main"><i class="bi bi-clipboard"></i> Clip Coupon </a>';
                echo '  </div>';
            }
            ?>
        </div>
    </div>

</body>

</html>