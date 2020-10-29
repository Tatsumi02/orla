<?php 
session_start();
unset($_SESSION['email']);
?>

<?php include ("header.php"); ?>
		
		<!-- start login -->
		<section id="main">
		<div class="login-content">
			<div class="pag-nav">
				<ul class="p-list">
					<li><a href="http://127.0.0.1/projetladouce/vue/ORLA-SHOP/web/index2.php">Home</a></li> &nbsp;&nbsp;/&nbsp;
					<li class="act">&nbsp;Login</li>
				</ul>
			</div>
			<form method="POST" action="traitlogin.php">
			<div class="login-signup-form">
				<div class="col-md-5 login text-center">
					<h4>login</h4>
					<!---<div class="how_to">
						<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>Facebook</i><div class="clearfix"></div></div></a>
						<a href="#"><div class="reg_gp"><img src="images/gp.png" alt=""><i>GOOGLE</i><div class="clearfix"></div></div></a>
						<p><img src="images/locked.png" alt="" />Be assured, we do not store your password</p>
					</div>
					<h5>OR</h5>--->
					<div class="cus_info_wrap">
						<label class="labelTop">
						Username:
						<span class="require">*</span>
						</label>
						<input type="text" name="username" placeholder="entrer votre nomd'utilisateur">
					</div>
					<div class="clearfix"></div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<input type="text" name="password" placeholder="entrer votre mot de passe"><br><br><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Se Connecter" >
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			</form>
		</div>
		</div>
		</section>
	 <div class="footer">
		<div class="wrap">
			<div class="contact-section">
				<div class="col-md-4 follow text-left">
					<h3>Follow Us</h3>
					<!--<p>Lorem ipsum dolor sit amet</p>-->
					<div class="social-icons">
						<i class="twitter"></i>
						<i class="facebook"></i>
						<i class="googlepluse"></i>
						<i class="pinterest"></i>
						<i class="linkedin"></i>
					</div>
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
					<a href="contact.html">Contact us</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-middle">
				<div class="col-md-6 different-products">
					<ul>
						<li class="first"> Shop </li> -
						<li><a href=""> Mobiles </a></li> |
						<li><a href=""> Laptops </a></li> |
						<li><a href=""> Cameras </a></li> |
						<li><a href=""> Clothing </a></li> |
						<li><a href=""> Footwear </a></li> |
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
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="cards text-center">
				<img src="images/cards.jpg" alt="" />
			</div>

		</div>
	 </div>
</body>
</html>