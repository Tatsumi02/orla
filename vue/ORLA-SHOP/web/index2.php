<?php
include ("header.php"); ?>

		<style type="text/css">
			

		</style>
		<div class="main-top">
			<div class="col-md-8 banner">
				<!-- start slider -->
				<!----->
				<div class="slider">	  
					  <div class="callbacks_container">
						  <ul class="rslides" id="slider">
							 <li>
								 <img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/slider1.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/slider2.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/slider3.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/slider4.jpg" alt=""/>
							 </li>
						  </ul>	      
					  </div>
				</div>
				
				<!-- end  slider -->
		   </div>
		   <div class="col-md-4 right-grid">
				<div class="right-grid-top">
					<div class="r-sale text-center">
						<h6>Winter wear</h6>
						<h2>Sale</h2>
					</div>
					<div class="r-discount">
						<span>upto</span>
						<h2>50%</h2>
						<p>OFF</p>
						<a href="#">shop now<i class="go"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="right-grid-bottom">
					<div class="right-grid-bottom-left">
						<h3>Deal of the Day</h3>
						<p>Expires in 3:42:56</p>
						<h5>Wireless Headphones</h5>
						<h2>Extra 33% OFF</h2>
						<a href="single.html">shop now<i class="go"></i></a>
					</div>
					<div class="right-grid-bottom-right">
						<img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/headset.png" alt="" />
					</div>
				</div>
				</div>
				 <div class="clearfix"></div>
		</div>
		<div class="new-arrivals text-center">
			<div class="col-md-3 new-arrival-head">
				<h3>New Arrivals</h3>
				<a class="btn btn-1 btn-1d" href="">View All</a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products"><img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/watch.jpg" class="img-responsive" alt="" /></a>
				<h3>Watches</h3>
				<a href="">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products"><img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/men-jacket.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>jackets</h3>
				<a href="single">Shop Now<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products"><img src="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/images/shoes.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>Footwear</h3>
				<a href="single">Shop Now<i class="go"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="best-sellers">
			<div class="best-sellers-head">
				<h3>Bestsellers</h3>
			</div>
			<div class="best-sellers-menu">
				<ul>
					<li><a class="active" href="#">Electronics</a></li>
					<li><a href="#">Fashion</a></li>
					<li><a href="#">Books</a></li>
					<li><a href="#">Other</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="device">
			<div class="course_demo">
		          <ul id="flexiselDemo">	
					<li>
					
						<?php 
						while ($donnees = $affichproduit->fetch()) {
							
						
						 ?>
						<div class="panel-heading">
								<div class="row">
									
								</div>
							</div>


					</li>
					<li>
					<div class="ipad text-center">
							<img src="admin/upload/<?php echo $donnees["image"] ?>" alt="" />
							<h4><?php echo $donnees["nom"] ?></h4>
							<h3><?php echo $donnees["prix"] ?></h3>
							<h3><?php echo $donnees["url"] ?></h3>
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Add To Cart</a></li>
							</ul>
						
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Add To Wishlist</a></li>
							</ul>
						</div>
					</li>	
					
						<?php 

						  } ?>
					</li>							    	  	       	   	  									    	  	       	   	    	
				</ul>
	  </div>
				<div class="col-md-4 subscribe text-left">
					<h3>Subscribe Us</h3>
					<p>Get the latest updates & Offers right in your inbox./Obtenez les derniers mises à jour & Offres directements dans votre boite de réception</p>
					<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
					<input type="submit" value="Subscribe">
				</div>
				<div class="col-md-4 help text-right">
					<h3>Need Help?</h3>
					<p>En quoi pouvons nous vous aidez?</p>
					<a href="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/contact.php">Contact us</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-middle">
				<div class="col-md-6 different-products">
					<ul>
						<li class="first"> Shop </li> 
						<li><a href=""> Mobiles </a></li> 
						<li><a href=""> Laptops </a></li> 
						<li><a href=""> Cameras </a></li> 
						<li><a href=""> Clothing </a></li> 
						<li><a href=""> Footwear </a></li> 
						<li><a href=""> Jewellery </a></li> 
					</ul>
					<ul>
						<li class="first"><a href="#">A propos de ORLA-SHOP</a></li> 
					</ul>


					<ul>
						<li class="first"><a href="#">Condition générales d utilisation</a><li> -
						
					</ul>
					<ul>
						<li class="first"><a href="#">Politique de confidentialité</a></li> 
					</ul>
				</div>
				<div class="col-md-6 about-text text-right">
					<h4>About ORLA-SHOP</h4>
					<p>Compte tenu de contraintes techniques, ORLA-SHOP ne peut pas garantir l'entière exactitude, ni l'exhaustivité des informations fournies par les marchands. En conséquence et du fait de la nature de l’activité de ORLA-SHOP, en cas de différences entre les informations affichées sur le site web de ORLA-SHOP Et celles affichées sur le site web du marchand, ces dernières prévaudront. Les prix affichés sont TFC (Tous Frais Compris), sauf pour les Laptop neufs (prix TTC hors frais de dossier).</p>
				</div>
			</div>

		</div>
	 </div>
</body>
</html>