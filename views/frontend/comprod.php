
<?php 
  session_start();
  include_once '../../controllers/produits/comprodC.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:31 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/plugins.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
	<title>Petmark - Pet Care & Veterinary Bootstrap Template</title>
</head>

<body class="elevet-enable">
	<div class="site-wrapper">
	<header class="header petmark-header-1">
		<div class="header-wrapper">
			<!-- Site Wrapper Starts -->
			<div class="header-top bg-ash">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm-6 text-center text-sm-left">
							<p class="font-weight-300">Welcome to Acacia Pet Food</p>
						</div>
						<div class="col-sm-6">
							<div class="header-top-nav right-nav">
								<div class="nav-item slide-down-wrapper">
									<span>Language:</span><a class="slide-down--btn" href="#" role="button">
										English<i class="ion-ios-arrow-down"></i>
									</a>
									<ul class="dropdown-list slide-down--item">
										<li><a href="#">En</a></li>
										<li><a href="#">En</a></li>
									</ul>
								</div>
								<div class="nav-item slide-down-wrapper">
									<span>Currency:</span><a class="slide-down--btn" href="#" role="button">
										USD<i class="ion-ios-arrow-down"></i>
									</a>
									<ul class="dropdown-list slide-down--item">
										<li><a href="#">EUR</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<!-- Template Logo -->
						<div class="col-lg-3 col-md-12 col-sm-4">
							<div class="site-brand  text-center text-lg-left">
								<a href="index.html" class="brand-image">
									<img src="image/main-logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- Category With Search -->
						<div class="col-lg-5 col-md-7 order-3 order-md-2">
							<form class="category-widget">
								<input type="text" name="search" placeholder="Search products ">
								<div class="search-form__group search-form__group--select">
									<select name="category " id="searchCategory" class="search-form__select nice-select">
										<option value="all">All Categories</option>
										<optgroup label="Books, Magazines">
											<option>Bedroom</option>
											<option>Kitchen</option>
											<option>Livingroom</option>
										</optgroup>
										<optgroup label="Electronics">
											<option>Fridge</option>
											<option>Laptops, Desktops</option>
											<option>Mobiles, Tablets</option>
										</optgroup>
										<optgroup label="Furniture">
											<option>Accessories</option>
											<option>Men</option>
											<option>Women</option>
										</optgroup>
										<option value="3">Home, Garden</option>
										<option value="3">Kids, Baby</option>
										<option value="3">Sport</option>
									</select>
								</div>
								<button class="search-submit"><i class="fas fa-search"></i></button>
							</form>
						</div>
						<!-- Call Login & Track of Order -->
						<div class="col-lg-4 col-md-5 col-sm-8 order-2 order-md-3">
							<div class="header-widget-2 text-center text-sm-right ">
								<div class="call-widget">
									<p>CALL US NOW: <i class="icon ion-ios-telephone"></i><span class="font-weight-mid">+91-012
											345 678</span></p>
								</div>
								<ul class="header-links">
									<li><a href="cart.html"><i class="fas fa-car-alt"></i> Track Your Order</a></li>
									<li><a href="login-register.html"><i class="fas fa-user"></i> Register or Sign in</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-nav-wrapper">
			<div class="container">
				<div class="header-bottom-inner">
					<div class="row no-gutters">
						<!-- Category Nav -->
						<div class="col-lg-3 col-md-8">
							<!-- Category Nav Start -->
							<div class="category-nav-wrapper bg-blue">
								<div class="category-nav">
									<h2 class="category-nav__title primary-bg" id="js-cat-nav-title"><i class="fa fa-bars"></i>
										<span>All Categories</span></h2>
	
									<ul class="category-nav__menu" id="js-cat-nav">
										<li class="category-nav__menu__item has-children">
											<a href="shop.html">Fashion</a>
											<div class="category-nav__submenu">
												<div class="category-nav__submenu--inner">
													<ul>
														<li><a href="shop.html">Health &amp; Beauties</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li class="category-nav__menu__item has-children">
											<a href="shop.html">Electronics</a>
											<div class="category-nav__submenu mega-menu three-column">
												<div class="category-nav__submenu--inner">
													<h3 class="category-nav__submenu__title">Television</h3>
													<ul>
														<li><a href="shop.html">LED TV</a></li>
														<li><a href="shop.html">LCD TV</a></li>
														<li><a href="shop.html">Curved TV</a></li>
														<li><a href="shop.html">Plasma TV</a></li>
													</ul>
												</div>
												<div class="category-nav__submenu--inner">
													<h3 class="category-nav__submenu__title">Refrigerator</h3>
													<ul>
														<li><a href="shop.html">LG</a></li>
														<li><a href="shop.html">Samsung</a></li>
														<li><a href="shop.html">Toshiba</a></li>
														<li><a href="shop.html">Panasonic</a></li>
													</ul>
												</div>
												<div class="category-nav__submenu--inner">
													<h3 class="category-nav__submenu__title">Air Conditioners</h3>
													<ul>
														<li><a href="shop.html">Samsung</a></li>
														<li><a href="shop.html">Panasonic</a></li>
														<li><a href="shop.html">Sanaky</a></li>
														<li><a href="shop.html">Toshiba</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html">Baby</a>
										</li>
										<li class="category-nav__menu__item has-children">
											<a href="shop.html"> Mobile</a>
											<div class="category-nav__submenu">
												<div class="category-nav__submenu--inner">
													<ul>
														<li><a href="shop.html">Apple</a></li>
														<li><a href="shop.html">Samsung</a></li>
														<li><a href="shop.html">Nokia</a></li>
														<li><a href="shop.html">Walton</a></li>
														<li><a href="shop.html">Sony</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html">Furniture</a>
											<div class="category-nav__submenu">
												<div class="category-nav__submenu--inner">
													<ul>
														<li><a href="shop.html">Apple</a></li>
														<li><a href="shop.html">Samsung</a></li>
														<li><a href="shop.html">LG</a></li>
														<li><a href="shop.html">Sony</a></li>
													</ul>
												</div>
											</div>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html">Sport</a>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html">Gift, Parties</a>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html">Accessories</a>
										</li>
										<li class="category-nav__menu__item hidden-lg-menu-item">
											<a href="shop.html">Samsung</a>
										</li>
										<li class="category-nav__menu__item hidden-menu-item">
											<a href="shop.html">Jewlery &amp; watches</a>
										</li>
										<li class="category-nav__menu__item">
											<a href="shop.html" class="js-expand-hidden-menu"> More Categories</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Category Nav End -->
							<div class="category-mobile-menu"></div>
						</div>
						<!-- Main Menu -->
						<div class="col-lg-7 d-none d-lg-block">
							<nav class="main-navigation">
								<!-- Mainmenu Start -->
								<ul class="mainmenu">
  <li class="mainmenu__item menu-item-has-children ">
    <a href="index.html" class="mainmenu__link">Home</a>
    <ul class="sub-menu">
      <li>
        <a href="index.html">Home 1</a>
      </li>
      <li>
        <a href="index-2.html">Home 2</a>
      </li>
      <li>
        <a href="index-3.html">Home 3</a>
      </li>
      <li>
        <a href="index-4.html">Home 4</a>
      </li>
    </ul>
  </li>
  <li class="mainmenu__item menu-item-has-children">
    <a href="#" class="mainmenu__link">Pages</a>
    <ul class="sub-menu">
      <li class="menu-item-has-children">
        <a href="about-us.html">About Us</a>
        <ul class="sub-menu">
          <li><a href="about-us.html">About Us 1</a></li>
          <li><a href="about-us-2.html">About Us 2</a></li>
        </ul>
      </li>
  <li class="menu-item-has-children">
    <a href="contact.html">Contact</a>
    <ul class="sub-menu">
      <li><a href="contact.html">Contact 1</a></li>
      <li><a href="contact-2.html">Contact 2</a></li>
    </ul>
  </li>
  <li class="menu-item-has-children">
    <a href="service.html">Services</a>
    <ul class="sub-menu">
      <li>
        <a href="service.html">Services</a>
      </li>
      <li>
        <a href="service-2.html">Services 2</a>
      </li>
    </ul>
  </li>
  <li>
    <a href="faq.html">Faq</a>
  </li>
  <li>
    <a href="404.html">404</a>
  </li>
  <li>
    <a href="cart.html">Cart</a>
  </li>
  <li>
    <a href="checkout.html">Checkout</a>
  </li>
  <li>
    <a href="wishlist.html">Wishlist</a>
  </li>
  <li>
    <a href="compare.html">Compare</a>
  </li>
  <li>
    <a href="my-account.html">My Account</a>
  </li>
  <li>
    <a href="login-register.html">Login & Registration</a>
  </li>
</ul>
</li>
<li class="mainmenu__item ">
  <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
</li>
<li class="mainmenu__item menu-item-has-children ">
  <a href="blog.html" class="mainmenu__link">Blog</a>
  <ul class="sub-menu">
    <li class="menu-item-has-children">
      <a href="blog.html">Blog Gird</a>
      <ul class="sub-menu">
        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
        <li><a href="blog.html">Blog Full Width</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="blog-list.html">Blog List</a>
      <ul class="sub-menu">
        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="blog-details.html">Blog Details</a>
      <ul class="sub-menu">
        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
        <li><a href="blog-details.html">Image Format</a></li>
        <li><a href="blog-details-video.html">Video Format</a></li>
        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
        <li><a href="blog-details-audio.html">Audio Format</a></li>
      </ul>
    </li>
  </ul>
</li>
<li class="mainmenu__item menu-item-has-children ">
  <a href="shop.html" class="mainmenu__link">Shop</a>
  <ul class="megamenu three-column">
    <li>
      <a href="shop.html">Shop Page</a>
      <ul>
        <li>
          <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
        </li>
        <li>
          <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
        </li>
        <li>
          <a href="shop-list.html">List Fullwidth</a>
        </li>
        <li>
          <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
        </li>
        <li>
          <a href="shop-list-right-sidebar.html">List Right Sidebar</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="product-details.html">Product Details 1</a>
      <ul>
        <li><a href="product-details.html">Product Details Page</a></li>
        <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
        <li><a href="product-details-grouped.html">Product Details Group</a></li>
        <li><a href="product-details-left-thumbnail.html">Left Thumbnail</a></li>
        <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a></li>
      </ul>
    </li>
    <li>
      <a href="shop.html">Product Details 2</a>
      <ul>
        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
        <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
        <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
      </ul>
    </li>
  </ul>

</li>
</ul>
								<!-- Mainmenu End -->
							</nav>
						</div>
						<!-- Cart block-->
						<div class="col-lg-2 col-6 offset-6 offset-md-0 col-md-3 order-3">
							<div class="cart-widget-wrapper slide-down-wrapper">
								<div class="cart-widget slide-down--btn">
									<div class="cart-icon">
										<i class="ion-bag"></i>
										<span class="cart-count-badge">
											1
										</span>
									</div>
									<div class="cart-text">
										<span class="d-block">Your cart</span>
										<strong><span class="amount"><span class="currencySymbol">$</span>40.00</span></strong>
									</div>
								</div>
								<div class="slide-down--item ">
									<div class="cart-widget-box">
    <ul class="cart-items">
        <li class="single-cart">
            <a href="#" class="cart-product">
                <div class="cart-product-img">
                    <img src="image/product/cart-product.jpg" alt="Selected Products">
                </div>
                <div class="product-details">
                    <h4 class="product-details--title"> Ras Neque Metus</h4>
                    <span class="product-details--price">1 x $120.00</span> 
                </div>
                <span class="cart-cross">x</span>
            </a>
        </li>
        <li class="single-cart">
            <div class="cart-product__subtotal">
                <span class="subtotal--title">Subtotal</span>
                <span class="subtotal--price">$200</span>
            </div>
        </li>
        <li class="single-cart">
            <div class="cart-buttons">
                <a href="cart.html" class="btn btn-outlined">View Cart</a>
                <a href="checkout.html" class="btn btn-outlined">Check Out</a>
            </div>
        </li>
    </ul>

</div>
								</div>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
							<!-- Main Mobile Menu Start -->
							<div class="mobile-menu"></div>
							<!-- Main Mobile Menu End -->
						</div>
					</div>
				</div>


				<div class="row">

				</div>
			</div>
			<div class="fixed-header sticky-init">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <!-- Sticky Logo Start -->
                <a class="sticky-logo" href="index.html">
                    <img src="image/main-logo.png" alt="logo">
                </a>
                <!-- Sticky Logo End -->
            </div>
            <div class="col-lg-9">
                <!-- Sticky Mainmenu Start -->
                <nav class="sticky-navigation">
                    <ul class="mainmenu sticky-menu">
  <li class="mainmenu__item menu-item-has-children sticky-has-child ">
    <a href="index.html" class="mainmenu__link">Home</a>
    <ul class="sub-menu">
      <li>
        <a href="index.html">Home 1</a>
      </li>
      <li>
        <a href="index-2.html">Home 2</a>
      </li>
      <li>
        <a href="index-3.html">Home 3</a>
      </li>
      <li>
        <a href="index-4.html">Home 4</a>
      </li>
    </ul>
  </li>
  <li class="mainmenu__item menu-item-has-children sticky-has-child">
    <a href="#" class="mainmenu__link">Pages</a>
    <ul class="sub-menu">
      <li class="menu-item-has-children">
        <a href="about-us.html">About Us</a>
        <ul class="sub-menu">
          <li><a href="about-us.html">About Us 1</a></li>
          <li><a href="about-us-2.html">About Us 2</a></li>
        </ul>
  </li>
  <li class="menu-item-has-children">
    <a href="contact.html">Contact</a>
    <ul class="sub-menu">

      <li><a href="contact.html">Contact 1</a></li>
      <li><a href="contact-2.html">Contact 2</a></li>

    </ul>
</li>
<li class="menu-item-has-children">
  <a href="service.html">Services</a>
  <ul class="sub-menu">

    <li>
      <a href="service.html">Services</a>
    </li>
    <li>
      <a href="service-2.html">Services 2</a>
    </li>

</ul>
</li>
<li>
  <a href="faq.html">Faq</a>
</li>
<li>
  <a href="404.html">404</a>
</li>
<li>
  <a href="cart.html">Cart</a>
</li>
<li>
  <a href="checkout.html">Checkout</a>
</li>
<li>
  <a href="wishlist.html">Wishlist</a>
</li>
<li>
  <a href="compare.html">Compare</a>
</li>
<li>
  <a href="my-account.html">My Account</a>
</li>
<li>
  <a href="login-register.html">Login & Registration</a>
</li>
</ul>
</li>
<li class="mainmenu__item ">
  <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
</li>
<li class="mainmenu__item menu-item-has-children sticky-has-child ">
  <a href="blog.html" class="mainmenu__link">Blog</a>
  <ul class="sub-menu">
    <li class="menu-item-has-children">
      <a href="blog.html">Blog Gird</a>
      <ul class="sub-menu left-align">
        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
        <li><a href="blog.html">Blog Full Width</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="blog-list.html">Blog List</a>
      <ul class="sub-menu left-align">
        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="blog-details.html">Blog Details</a>
      <ul class="sub-menu left-align">
        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
        <li><a href="blog-details.html">Image Format</a></li>
        <li><a href="blog-details-video.html">Video Format</a></li>
        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
        <li><a href="blog-details-audio.html">Audio Format</a></li>
      </ul>
    </li>
  </ul>
</li>
<li class="mainmenu__item menu-item-has-children sticky-has-child ">
  <a href="shop.html" class="mainmenu__link">Shop</a>
  <ul class="megamenu three-column">
    <li>
      <a href="shop.html">Shop Page</a>
      <ul>
        <li>
          <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
        </li>
        <li>
          <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
        </li>
        <li>
          <a href="shop-list.html">List Fullwidth</a>
        </li>
        <li>
          <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
        </li>
        <li>
          <a href="shop-list-right-sidebar.html">List Right Sidebar</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="product-details.html">Product Details 1</a>
      <ul>
        <li><a href="product-details.html">Product Details Page</a></li>
        <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
        <li><a href="product-details-grouped.html">Product Details Group</a></li>
        <li><a href="product-details-left-thumbnail.html">Left Thumbnail</a></li>
        <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a></li>
      </ul>
    </li>
    <li>
      <a href="shop.html">Product Details 2</a>
      <ul>
        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
        <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
        <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
      </ul>
    </li>
  </ul>

</li>
</ul>
                    <div class="sticky-mobile-menu  d-lg-none">
                        <span class="sticky-menu-btn"></span>
                    </div>
                </nav>
                <!-- Sticky Mainmenu End -->
            </div>
        </div>
    </div>
</div>
		</div>
	</header> 
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product Details</li>
        </ol>
    </div>
  </nav>
<!-- Product Details Block -->
<main class="product-details-section">
  <div class="container">
    <div class="pm-product-details">
      <div class="row">
        <!-- Blog Details Image Block -->
        <div class="col-md-6">
          <div class="image-block">
            <!-- Zoomable IMage -->
            <img id="zoom_03" src="image/product/product-details/product-details-1.jpg" data-zoom-image="image/product/product-details/product-details-1.jpg" alt=""/>

            <!-- Product Gallery with Slick Slider -->
            <div id="product-view-gallery" class="elevate-gallery">
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-1.jpg"
                data-zoom-image="image/product/product-details/product-details-1.jpg">
                <img src="image/product/product-details/product-details-1.jpg" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-2.jpg"
                data-zoom-image="image/product/product-details/product-details-2.jpg">
                <img src="image/product/product-details/product-details-2.jpg" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-3.jpg"
                data-zoom-image="image/product/product-details/product-details-3.jpg">
                <img src="image/product/product-details/product-details-3.jpg" alt=""/>
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-4.jpg"
                data-zoom-image="image/product/product-details/product-details-4.jpg">
                <img src="image/product/product-details/product-details-4.jpg" alt=""/>
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="description-block">
            <div class="header-block">
                <h3>Diam vel neque</h3>
                <div class="navigation">
                  <a href="#"><i class="ion-ios-arrow-back"></i></a>
                  <a href="#"><i class="ion-ios-arrow-forward"></i></a>
                </div>
            </div>
            <!-- Rating Block -->
            <div class="rating-block d-flex  mt--10 mb--15">
              <div class="rating-widget">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
              <p class="rating-text"><a href="#comment-form">(1 customer review)</a></p>
            </div>
            <!-- Price -->
            <p class="price"><span class="old-price">250$</span>300$</p>
            <!-- Blog Short Description -->
            <div class="product-short-para">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                tristique auctor. Donec non est at libero vulputate rutrum.
              </p>
            </div>
            <div class="status">
              <i class="fas fa-check-circle"></i>300 IN STOCK
            </div>
            <!-- Amount and Add to cart -->
            <form action="https://demo.hasthemes.com/petmark-v5/petmark/" class="add-to-cart">
              <div class="count-input-block">
                <input type="number" class="form-control text-center" value="1">
              </div>
              <div class="btn-block">
                <a href="#" class="btn btn-rounded btn-outlined--primary">Add to cart</a>
              </div>
            </form>
            <!-- Wishlist And Compare -->
            <div class="btn-options">
              <a href="wishlist.html"><i class="ion-ios-heart-outline"></i>Add to Wishlist</a>
              <a href="compare.html"><i class="ion-ios-shuffle"></i>Add to Compare</a>
            </div>
            <!-- Products Tag & Category Meta -->
            <div class="product-meta mt--30">
              <p>Ctagories: <a href="#" class="single-meta">Bedroom</a>, <a href="#" class="single-meta">Decor
                  & Furniture</a></p>
              <p>Tags: <a href="#" class="single-meta">Food</a></p>
            </div>
            <!-- Share Block 1 -->
            <div class="share-block-1">
              <ul class="social-btns">
                <li><a href="#" class="facebook"><i class="far fa-thumbs-up"></i><span>likes 1</span></a></li>
                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i> <span>twitter</span></a></li>
                <li><a href="#" class="google"><i class="fas fa-plus-square"></i> <span>share</span></a></li>
              </ul>
            </div>
            <!-- Sharing Block 2 -->
            <div class="share-block-2  mt--30">
              <h4>SHARE THIS PRODUCT</h4>
              <ul class="social-btns social-btns-2">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="review-section pt--60">
    <h2 class="sr-only d-none">Product Review</h2>
    <div class="container">
        
<div class="product-details-tab">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">REVIEWS (1)</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <article>
        <h2 class="d-none sr-only">tab article</h2>
          <p>
             he h e Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
              <p>
                Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.
            </p>
      </article>
    </div>
    
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="review-wrapper">
       
        <h2 class="title-lg mb--20">1 REVIEW FOR AUCTOR GRAVIDA ENIM</h2>
        <?php
              $comprodCtrl = new comprodC();
              $rows = $comprodCtrl->getAllComprod();
              $i=1;
              foreach($rows as $row) :
            ?>
        <div class="review-comment mb--20">
          <div class="avatar">
            <img src="image/icon-logo/author-logo.png" alt="">
          </div>
          <div class="text">
            <div class="rating-widget mb--15">
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star"></i></span>
              <span class="single-rating"><i class="fas fa-star-half-alt"></i></span>
              <span class="single-rating"><i class="far fa-star"></i></span>
            </div>
            
            <h6 class="author"><?php echo $row['nom'] ?> –  <span class="font-weight-400"><?php echo $row['date-com'] ?></span> </h6>
            <p><?php echo $row['comment'] ?></p>
          </div>
        </div>
         <?php endforeach ?>
        <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
        <form action="../../public/util/processComprod.php" class="form-size" method="post" > 
        <div class="rating-row pt-2">
          <p class="d-block">Your Rating</p>
          <span class="rating-widget-block">
            <input type="radio" name="star" id="star1">
            <label for="star1"></label>
            <input type="radio" name="star" id="star2">
            <label for="star2"></label>
            <input type="radio" name="star" id="star3">
            <label for="star3"></label>
            <input type="radio" name="star" id="star4">
            <label for="star4"></label>
            <input type="radio" name="star" id="star5">
            <label for="star5"></label>
          </span>
          <form action="https://demo.hasthemes.com/petmark-v5/petmark/" class="mt--15 site-form ">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="messagecom">Comment</label>
                  <textarea name="comment"  cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="nomcom">Name *</label>
                  <input type="text" name="nom" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="emailcom">Email *</label>
                  <input type="text" name="mail" class="form-control">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="idarticle">ID_Article</label>
                  <input type="text" name="id_article" class="form-control">
                </div>
              </div>
              <!--div class="col-lg-4">
                <div class="submit-btn">
                  <a href="#" class="btn btn-black">Post Comment</a>
                </div>
              </!--div-->
              <div class="col-md-12">
                              <div class="d-flex align-items-center flex-wrap">
                                <button type="submit" name="envoyer" class="btn btn-black   mr-3">envoyer</button>
                              </div>
                            </div>
            </div>
          </form>
        </div>
      </div>//
    </div>
  </div>
</div>
    </div>
  
  </section>
  <section>
    <!-- Slider bLock 4 -->
    <div class="pt--60">
      <div class="container">
    
        <div class="block-title">
          <h2>YOU MAY ALSO LIKE…</h2>
        </div>
        <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }'
                data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>
    
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-1.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-3.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-4.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <div class="pt--60">
      <div class="container">
    
        <div class="block-title">
          <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }'
                data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>
    
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-1.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-2.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-3.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-4.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
</main>
  
  
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer contact-block">
                        <h3 class="footer-title">Contact</h3>
                        <div class="single-footer-content">
                            <p class="text-italic">We are a team of designers and developers that create high quality Wordpress, Magento, Prestashop, Opencart.</p>
                            <p class="font-weight-500 text-white"><span class="d-block">Contact info:</span>
                            169-C, Technohub, Dubai Silicon Oasis.</p>
                            <p class="social-icons">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-rss"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-footer contact-block">
                        <h3 class="footer-title">Information</h3>
                        <div class="single-footer-content">
                        <ul class="footer-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">Returns & Exchanges</a></li>
                            <li><a href="#">Shipping & Delivery</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-footer contact-block">
                        <h3 class="footer-title">CUSTOMER CARE</h3>
                        <div class="single-footer-content">
                        <ul class="footer-list">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Notification</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer contact-block">
                        <h3 class="footer-title">SUBSCRIBE TO OUR NEWSLETTER</h3>
                        <div class="single-footer-content">
                        <p>
                            Subscribe to the Petmark mailing list to receive updates on new arrivals, special offers and other discount information.
                        </p>
                        <div class="pt-2">
                            <div class="input-box-with-icon">
                                <input type="text" placeholder="Enter Your email">
                                <button><i class="fas fa-envelope"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-block-2 text-center">
                <ul class="footer-list list-inline justify-content-center">
                    <li><a href="#">Online Shopping</a></li>
                
                    <li><a href="#">Promotions</a></li>
                
                    <li><a href="#"> My Orders</a></li>
                
                    <li><a href="#">Help</a></li>
                
                    <li><a href="#">Customer Service</a></li>
                
                    <li><a href="#">Support</a></li>
                
                    <li><a href="#"> Most Populars</a></li>
                
                    <li><a href="#">New Arrivals</a></li>
                
                    <li><a href="#">Special Products</a></li>
                
                    <li><a href="#">Manufacturers</a></li>
                
                    <li><a href="#">Our Stores</a></li>
                </ul>
                <ul class="footer-list list-inline justify-content-center">
                    <li><a href="#">Shipping</a></li>
                
                    <li><a href="#">Payments</a></li>
                
                    <li><a href="#">Warantee</a></li>
                
                    <li><a href="#">Refunds</a></li>
                
                    <li><a href="#">Checkout</a></li>
                
                    <li><a href="#">Discount</a></li>
                
                    <li><a href="#">Terms & Conditions</a></li>
                
                    <li><a href="#"> Policy</a></li>
                
                    <li><a href="#">Special Products</a></li>
                
                    <li><a href="#">Manufacturers</a></li>
                
                    <li><a href="#">Our Stores</a></li>
                </ul>
                <div class="payment-block pt-3">
                    <img src="image/icon-logo/payment-icons.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2018 <a href="#">Petmark.com</a>. All Rights Reserved</p>
        </div>
    </footer>
</div>
<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:31 GMT -->
</html>