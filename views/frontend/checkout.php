<?php
$page="checkout.php";

?>
<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();

?>

<?php require 'header.php';
?>
				<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
					<div class="container">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">checkout</li>
						</ol>
					</div>
				</nav>

				<main id="content" class="page-section sp-inner-page checkout-area-padding space-db--20">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- checkout form s-->
								<div class="checkout-form">
									<div class="row row-40">
										<div class="col-12">
											<h1 class="quick-title">checkout</h1>
											<!-- slide down trigger  -->
											<div class="checkout-quick-box">
												<p><i class="far fa-sticky-note"></i>returning customer? <a href="javascript:" class="slide-trigger" data-target="#quick-login">click
												here to login</a></p>
											</div>
											<!-- slide down blox ==> login box  -->
											<div class="checkout-slidedown-box" id="quick-login">
												<form action="https://demo.hasthemes.com/petmark-v5/petmark/">
													<div class="quick-login-form">
														<p>if you have shopped with us before, please enter your details in the boxes below. if you are a new
															customer
															please
														proceed to the billing & shipping section.</p>
														<div class="form-group">
															<label for="quick-user">username or email *</label>
															<input type="text" placeholder="">
														</div>
														<div class="form-group">
															<label for="quick-user">password *</label>
															<input type="text" placeholder="">
														</div>
														<div class="form-group">
															<div class="d-flex align-items-center">
																<a href="#" class="btn btn-black">login</a>
																<div class="d-inline-flex align-items-center  ml-3">
																	<input type="checkbox" id="accept_terms" class="mb-0 mr-1">
																	<label for="accept_terms" class="mb-0">i’ve read and accept the terms &amp; conditions</label>
																</div>
															</div>
															<p><a href="javascript:" class="pass-lost mt-3">lost your password?</a></p>
														</div>
													</div>
												</form>

											</div>

											<!-- slide down trigger  -->
											<div class="checkout-quick-box">
												<p><i class="far fa-sticky-note"></i>have a coupon? <a href="javascript:" class="slide-trigger" data-target="#quick-cupon">
												click here to enter your code</a></p>
											</div>
											<!-- slide down blox ==> cupon box -->
											<div class="checkout-slidedown-box" id="quick-cupon">
												<form action="https://demo.hasthemes.com/petmark-v5/petmark/">
													<div class="checkout_coupon">
														<input type="text" class="mb-0" placeholder="coupon code">
														<a href="#" class="btn btn-black">apply coupon</a>
													</div>
												</form>
											</div>

										</div>
										<div class="col-lg-7 mb--20">
											<!-- billing address -->
											<div id="billing-form" class="mb-40">
												<h4 class="checkout-title">billing address</h4>

												<div class="row">

													<div class="col-md-6 col-12 mb--20">
														<label>first name*</label>
														<input type="text" placeholder="first name">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>last name*</label>
														<input type="text" placeholder="last name">
													</div>
													<div class="col-12 mb--20">
														<label>company name</label>
														<input type="text" placeholder="company name">
													</div>
													<div class="col-12 col-12 mb--20">
														<label>country*</label>
														<select class="nice-select">
															<option>bangladesh</option>
															<option>china</option>
															<option>country</option>
															<option>india</option>
															<option>japan</option>
														</select>
													</div>
													<div class="col-md-6 col-12 mb--20">
														<label>email address*</label>
														<input type="email" placeholder="email address">
													</div>
													<div class="col-md-6 col-12 mb--20">
														<label>phone no*</label>
														<input type="text" placeholder="phone number">
													</div>



													<div class="col-12 mb--20">
														<label>address*</label>
														<input type="text" placeholder="address line 1">
														<input type="text" placeholder="address line 2">
													</div>


													<div class="col-md-6 col-12 mb--20">
														<label>town/city*</label>
														<input type="text" placeholder="town/city">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>state*</label>
														<input type="text" placeholder="state">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>zip code*</label>
														<input type="text" placeholder="zip code">
													</div>

													<div class="col-12 mb--20 ">
														<div class="block-border check-bx-wrapper">
															<div class="check-box">
																<input type="checkbox" id="create_account">
																<label for="create_account">create an acount?</label>
															</div>
															<div class="check-box">
																<input type="checkbox" id="shiping_address" data-shipping>
																<label for="shiping_address">ship to different address</label>
															</div>
														</div>
													</div>

												</div>

											</div>

											<!-- shipping address -->
											<div id="shipping-form" class="mb--40">
												<h4 class="checkout-title">shipping address</h4>

												<div class="row">

													<div class="col-md-6 col-12 mb--20">
														<label>first name*</label>
														<input type="text" placeholder="first name">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>last name*</label>
														<input type="text" placeholder="last name">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>email address*</label>
														<input type="email" placeholder="email address">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>phone no*</label>
														<input type="text" placeholder="phone number">
													</div>

													<div class="col-12 mb--20">
														<label>company name</label>
														<input type="text" placeholder="company name">
													</div>

													<div class="col-12 mb--20">
														<label>address*</label>
														<input type="text" placeholder="address line 1">
														<input type="text" placeholder="address line 2">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>country*</label>
														<select class="nice-select">
															<option>bangladesh</option>
															<option>china</option>
															<option>country</option>
															<option>india</option>
															<option>japan</option>
														</select>
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>town/city*</label>
														<input type="text" placeholder="town/city">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>state*</label>
														<input type="text" placeholder="state">
													</div>

													<div class="col-md-6 col-12 mb--20">
														<label>zip code*</label>
														<input type="text" placeholder="zip code">
													</div>

												</div>

											</div>
											<div class="order-note-block mt--30">
												<label for="order-note">order notes</label>
												<textarea id="order-note" cols="30" rows="10" class="order-note" placeholder="notes about your order, e.g. special notes for delivery."></textarea>
											</div>
										</div>

										<div class="col-lg-5">
											<div class="row">

												<!-- cart total -->
												<div class="col-12">
													<div class="checkout-cart-total">
														<h2 class="checkout-title">Your order</h2>
														<h4>Product <span>Total</span></h4>

														<ul>
															<?php
															$array=$tab_univ;
															foreach ($array as $key => $produit) {

																?>
																<li><span class="left"><?php echo $produit['designation'];   ?> x <?php echo $produit['quantity'];   ?></span> <span class="right">
																$	<?php echo $produit['prix']*$produit['quantity'];   ?></span></li>
															<?php } ?>
														</ul>

														<p>Sub total <span>$ <?php echo
														$total1;?></span></p>
														<p>Shipping fee <span>$00.00</span></p>

														<h4>Grand total <span>$ <?php echo
														$total1;?></span></h4>
														<div class="method-notice mt--25">
															<article>
																<h3 class="d-none sr-only">blog-article</h3>
																sorry, it seems that there are no available payment methods for your state. please contact us if you
																require
																assistance
																or wish to make alternate arrangements.
															</article>
														</div>
														<div class="term-block">
															<input type="checkbox" id="accept_terms2">
															<label for="accept_terms2">i’ve read and accept the terms & conditions</label>
														</div>
														<button class="place-order w-100">place order</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>
				<?php require './footerContent.php'; ?>
			</div>
			<script src="js/plugins.js"></script>
			<script src="js/ajax-mail.js"></script>
			<script src="js/custom.js"></script>
		</body>


		<!-- mirrored from demo.hasthemes.com/petmark-v5/petmark/checkout.html by httrack website copier/3.x [xr&co'2014], tue, 13 apr 2021 06:25:11 gmt -->
		</html>