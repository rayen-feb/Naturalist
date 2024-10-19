<?php

$url="cart.php";
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
						<li class="breadcrumb-item active" aria-current="page">Panier</li>
					</ol>
				</div>
			</nav>

			<!-- Cart Page Start -->
			<div class="cart_area cart-area-padding sp-inner-page--top">
				<div class="container">
					<div class="page-section-title">
						<h1>PANIER</h1>
					</div>
					<div class="row">
						<div class="col-12">
							<!-- Cart Table -->
							<div class="cart-table table-responsive mb--40">
								<table class="table">
									<!-- Head Row -->
									<thead>
										<tr>
											<th class="pro-remove"></th>
											<th class="pro-thumbnail">Image</th>
											<th class="pro-title">Product</th>
											<th class="pro-price">Price</th>
											<th class="pro-quantity">Quantity</th>
											<th class="pro-subtotal">Total</th>
										</tr>

									</thead>
									<tbody>
											<?php //$updateQte['id']=array_column($produit, 'id');
											$updateQte['qte'][0]=1;?>
											<!-- Product Row -->
											<form method="POST" action="cart.php">
												<?php
												$array=array();
												$array=$tab_univ;
												foreach($array as $produit):


													if (count($produit)>0){

														?>
														<tr>
															<td class="pro-remove"><a href="cart.php?action=delete&id=<?php echo $produit['id'];?>&url=<?php echo $url?>"><i class="far fa-trash-alt"></i></a></td>
															<td class="pro-thumbnail"><a href="#"><img src="../../public/img/produits/home-1/<?php echo $produit['image']; ?>" alt="Product"></a></td>
															<td class="pro-title"><a href="#"><?php echo $produit['designation']; ?></a></td>
															<td class="pro-price"><span>$ <?php echo $produit['prix'];?></span></td>
															<td class="pro-quantity">

																<div class="pro-qty">
																	<div class="count-input-block">
																		<input type="hidden" value="<?php echo $produit['id'];?>" class="pid">
																		<input type="number"  class="form-control text-center quantitad" value="<?php echo $produit['quantity']; ?>">
																	</div>
																</div>
															</td>
															<td class="pro-subtotal"><span>$ <?php echo $produit['prix']*$produit['quantity'];?></span>

																<?php
															}
														endforeach
														?>
													</td>
												</tr>

												<!-- Product Row -->

												<!-- Discount Row  -->
												<tr>
													<td colspan="6" class="actions">

														<div class="coupon-block">
															<div class="coupon-text">
																<label for="coupon_code">Coupon:</label>
																<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
															</div>
															<div class="coupon-btn">
																<input type="submit" class="btn-black" name="apply_coupon" value="Coupon De Réduction">
															</div>
														</div>


														<div class="update-block text-right">
															<input type="button" class="btn-black"  name="update_cart" value="Modifier Panier">														</div>

														</td>
													</tr>
												</form>
											</tbody>

										</table>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="cart-section-2 sp-inner-page--bottom">
						<div class="container">
							<div class="row">
							<div class="col-lg-6 col-12 mb--15">
									
							</div>
						<div class="col-lg-6 col-12 d-flex">
							<div class="cart-summary">
								<div class="cart-summary-wrap">
									<h4><span>Panier</span></h4>
									<p> Total <span class="text-primary">$ <?php
									echo $total1;?></p>
									<p>Frais de livraison <span class="text-primary">Gratuit</span></p>
									<h2>Tous frais compris<span class="text-primary">$ <?php
									echo $total1;?></h2>
								</div>
								<div class="cart-summary-button">
									<a href="checkout.php" class="checkout-btn c-btn">Checkout</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php require './footerContent.php'; ?>
		</div>
		<script src="js/plugins.js"></script>
		<script src="js/ajax-mail.js"></script>
		<script src="js/custom.js"></script>
		
		<script type="text/javascript" src="./js/panier.js"></script>
	</body>


	<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:24:41 GMT -->
	</html>
