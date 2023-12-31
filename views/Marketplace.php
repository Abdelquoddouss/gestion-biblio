<?php

 require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\BookControllers;

$book = new BookControllers();
 $allBooks = $book->getAllBooks();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanaat Beladi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../public/Marketplace.css">

</head>

<body>
    <header>
        <div class="w-lg-75 mx-2 mx-lg-auto position-relative z-2 px-lg-3 py-0 shadow-5 bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark p-0" id="navbar">
                <div class="container px-sm-0">
                    <a class="navbar-brand d-inline-block w-lg-64" href="#">
                        LOGO
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav gap-3 mx-lg-auto">
                            <li class="nav-item ">
                                <a class="nav-link rounded-pill" href="index.html" aria-current="page">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="marketplace.html">Marketplace</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="Artisan-Anas.html">Artisant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill" href="musee.html">Musee</a>
                            </li>
                        </ul>
                        <div class="navbar-nav align-items-lg-center justify-content-end gap-2 ms-lg-4 w-lg-64">
                            <a href="sign-login-Anas.html"
                                class="btn btn-sm btn-white nav-link border-0 rounded-pill w-100 w-lg-auto mb-4 mb-lg-0"
                                id="lastElementInNavbar">Get started</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <div class="container-fluid">
        <div class="row ">
            <button class="btn btn-dark d-md-none" id="sidebarToggle">
                <i class="fas fa-store"></i>
            </button>

            <!-- Sidebar -->
            <nav id="sidebar" for="sidebarToggle" class=" col-md-3 col-lg-2 bg-light sidebar  position-sticky p-0 m-0">


                <h3>Shop by</h3>
                <div class="position-sticky ">
                    <div class="categorie">
                        <h6>CATEGORY</h6>
                        <form>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Cuir</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Poterie & céramique</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Tapis et moquettes</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Métal</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Sculpture sur bois</label>
                            </div>
                        </form>
                    </div>

                    <div class="prices">
                        <h6>Prices</h6>
                        <form>
                            <div class="mb-3">
                                <input type="text" name="" id="">
                                <input type="text" name="" id="">
                                <button>search</button>
                            </div>

                        </form>
                    </div>
                    <div class="manufactures">
                        <h6>Manufactures</h6>
                        <form>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Vintage</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Modern</label>
                            </div>

                        </form>
                    </div>
                    <div class="color">
                        <h6>Color</h6>
                        <form>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">red</label>
                                <input type="checkbox" name="" id="">
                                <label for="">blue</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">green</label>
                                <input type="checkbox" name="" id="">
                                <label for="">yellow</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">orange</label>
                                <input type="checkbox" name="" id="">
                                <label for="">gray</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">black</label>
                                <input type="checkbox" name="" id="">
                                <label for="">purple</label>
                            </div>

                        </form>
                    </div>


                </div>
            </nav>
            <!-- /Sidebar -->

            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
                <div class=" sort col-lg-9">
                    <div class=" sort-show">
                        <div class="sort-se">
                            <span>Sort by</span>
                            <select name="" id="">
                                <option value="">all</option>
                            </select>
                        </div>
                        <div class="show-se">
                            <span>Show</span>
                            <select name="" id="">
                                <option value="">15</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="categories col-lg-9">
                    <div class="categorie">Morrocan chairs</div>
                    <div class="more">
                        <p>browse more</p>
                        <img src="img/next.png" alt="" srcset="">
                    </div>
                </div>

                <?php for ($i = 1; $i <= ceil(count($allBooks) / 3); $i++) : ?>
                <div class="cards-products">
                    <?php 
                    $max = count($allBooks) >= $i * 3 ? $i * 3 : count($allBooks);
                    for ($j = ($i - 1) * 3;$j < $max; $j++) : ?>

                    <div class="card-product">
                        <div class="image-product">
                        <img src="../public/img/81QiCy9v6oL._SL800_.jpg" alt="">
                        </div>
                        <div class="description">
                            <h6><?= $allBooks[$j]['title'] ?></h6>
                            <span>$250</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>
                    <?php endfor ?>
                </div>
                <?php endfor ?>



            



            </div>
            <!-- /Main Content -->
        </div>
    </div>



    <div class="container-fluid bg-dark my-5">
        <footer class="text-center text-lg-start text-white">
            <!-- style="background-color: #45526e -->
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold"> Sanaat Beladi </h6>
                            <p>
                                Plongez dans le monde vibrant de l'artisanat marocain.
                                Chez Sanaat Beladi, nous vous proposons une sélection
                                de trésors authentiques.
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none" />
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Les pages</h6>
                            <p>
                                <a class="text-white">Accueil</a>
                            </p>
                            <p>
                                <a class="text-white">Marketplace</a>
                            </p>
                            <p>
                                <a class="text-white">Artisant</a>
                            </p>
                            <p>
                                <a class="text-white">Musee</a>
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none" />
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a class="text-white">Get started</a>
                            </p>
                            <p>
                                <a class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a class="text-white">Help</a>
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none" />
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> Youssofia, 6FWH+X8 Youssoufia, Morocco</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 212 6 00 00 00 00</p>
                            <p><i class="fas fa-print mr-3"></i> + 212 6 00 00 00 00</p>
                        </div>
                    </div>
                </section>
                <hr class="my-3">
                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                © 2023 Copyright: 2b || !2b
                                <a class="text-white" href="#"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </div>
    <script src="../public/Marketplace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>