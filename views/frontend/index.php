<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();

?>

<?php require 'header.php';
?>

<section>
    <div class=" petmark-slick-slider  home-slider dot-position-1" data-slick-setting='{
        "autoplay": true,
        "autoplaySpeed": 8000,
        "slidesToShow": 1,
        "dots": true
    }'>
        <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-1.jpg">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">

                        <h2>Delicious bites <br> with benifits</h2>

                        <h4 class="mt--30">100% made in U.S.A chicken breast jerky</h4>

                        <div class="slider-btn mt--30">
                            <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                        </div>

                    </div>
                </div>

            </div>
            <span class="herobanner-progress"></span>
        </div>
        <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-2.jpg">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">

                        <h3>Friends & Family</h3>
                        <h1 class="text-primary">SAVE 25% OFF</h1>
                        <h4 class="mt--20">Flea & ticks Product for Cats</h4>

                        <div class="slider-btn mt--30">
                            <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                        </div>

                    </div>
                </div>
            </div>
            <span class="herobanner-progress"></span>
        </div>
    </div>
</section>
<div class="container pt--50">
    <div class="policy-block border-four-column">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="policy-block-single">
                    <div class="icon">
                        <span class="ti-truck"></span>
                    </div>
                    <div class="text">
                        <h3>Free Delivery</h3>
                        <p>On orders of $200+</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="policy-block-single">
                    <div class="icon">
                        <span class="ti-credit-card"></span>
                    </div>
                    <div class="text">
                        <h3>Cod</h3>
                        <p>Cash on Delivery</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="policy-block-single">
                    <div class="icon">
                        <span class="ti-gift"></span>
                    </div>
                    <div class="text">
                        <h3>Free Gift Box</h3>
                        <p>Buy a Gift</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="policy-block-single">
                    <div class="icon">
                        <span class="ti-headphone-alt"></span>
                    </div>
                    <div class="text">
                        <h3>Free Support 24/7</h3>
                        <p>Online 24hrs a Day</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider One / Normal Two Column Slider -->
<section class="pt--50">
    <div class="container">
        <div class="block-title">
            <h2>NEW PRODUCTS</h2>
        </div>
        <div class="petmark-slick-slider border normal-two-column-slider" data-slick-setting='{
                "autoplaySpeed": 3000,
                "slidesToShow": 2,
                "arrows": true
            }' data-slick-responsive='[
                {"breakpoint":991, "settings": {"slidesToShow": 1} },
                {"breakpoint":575, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <div class="pm-product product-type-list">
                    <a href="product-details.html" class="image">
                        <img src="image/product/home-1/product-1.jpg" alt="">
                    </a>
                    <div class="content">
                        <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                        <div class="price text-red mb-3">
                            <span class="old">$200</span>
                            <span>$300</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                            tristique auctor.</p>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="2020/05/01"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="pm-product product-type-list">
                    <a href="product-details.html" class="image">
                        <img src="image/product/home-1/product-2.jpg" alt="">
                    </a>
                    <div class="content">
                        <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                        <div class="price text-red mb-3">
                            <span class="old">$200</span>
                            <span>$300</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                            tristique auctor.</p>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="2020/05/01"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="pm-product product-type-list">
                    <a href="product-details.html" class="image">
                        <img src="image/product/home-1/product-3.jpg" alt="">
                    </a>
                    <div class="content">
                        <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                        <div class="price text-red mb-3">
                            <span class="old">$200</span>
                            <span>$300</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                            tristique auctor.</p>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="2020/05/01"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide">
                <div class="pm-product product-type-list">
                    <a href="product-details.html" class="image">
                        <img src="image/product/home-1/product-4.jpg" alt="">
                    </a>
                    <div class="content">
                        <h3 class="font-weight-500"> <a href="#">Convallis quam sit</a></h3>
                        <div class="price text-red mb-3">
                            <span class="old">$200</span>
                            <span>$300</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                            tristique auctor.</p>
                        <div class="count-down-block">
                            <div class="product-countdown" data-countdown="2020/05/01"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Section -->
<section class="category-section pt--50">
    <div class="container">
        <div class="block-title">
            <h2>TOP CATEGORIES THIS WEEK2</h2>
        </div>
        <div class="category-block">
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-1.png" alt="">
                        </a>
                        <h3><a href="shop.html">Dog Food</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-2.png" alt="">
                        </a>
                        <h3><a href="shop.html">Cat Food</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-3.png" alt="">
                        </a>
                        <h3><a href="shop.html">Fish Food</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-4.png" alt="">
                        </a>
                        <h3><a href="shop.html">Bird Food</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-5.png" alt="">
                        </a>
                        <h3><a href="shop.html">Reptile Food</a></h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="category-block-single">
                        <a href="shop.html" class="icon">
                            <img src="image/product/home-1/category-6.png" alt="">
                        </a>
                        <h3><a href="shop.html">Small Pet Food</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->

<!-- Promotion Block 1 -->
<section class="pt--50 space-db--30">
    <h2 class="d-none">Promotion Block
    </h2>
    <div class="container">
        <a class="promo-image overflow-image">
            <img src="image/product/promo-product-image-huge.jpg" alt="">
        </a>
    </div>
</section>
<section class="pt--50 space-db--30">
    <h2 class="d-none">Promotion Block
    </h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4">
                <a class="promo-image overflow-image">
                    <img src="image/product/promo-product-image-2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="promo-image overflow-image  promo-small ">
                    <img src="image/product/promo-product-image-sm.jpg" alt="">
                </a>
                <a class="promo-image overflow-image  promo-small ">
                    <img src="image/product/promo-product-image-sm-2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="promo-image overflow-image">
                    <img src="image/product/promo-product-image.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Slider bLock 4 -->
<!-- slide Block 3 / Normal Slider -->
<div class="pt--50 pb--50">
    <div class="container">

        <div class="petmark-slick-slider brand-slider  border normal-slider grid-border-none" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 4} },
                            {"breakpoint":768, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 2} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>

            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand.png" alt="">
                </a>
            </div>
            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand-2.png" alt="">
                </a>
            </div>
            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand-3.png" alt="">
                </a>
            </div>
            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand-4.png" alt="">
                </a>
            </div>
            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand-5.png" alt="">
                </a>
            </div>
            <div class="single-slide">
                <a href="#" class="overflow-image brand-image">
                    <img src="image/brand/brand-6.png" alt="">
                </a>
            </div>
        </div>

    </div>
</div>
<?php require 'footer.php'; ?>