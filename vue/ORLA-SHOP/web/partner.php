<?php include ("header.php"); ?>

		<!-- start login -->
		<section id="main">
	<div class="new-product">
				<div class="new-product-top">
				<div class="pag-nav">
					<ul class="p-list">
						<li><a href="index2.php">Home</a></li> &nbsp;&nbsp;/&nbsp;
						<li class="act">&nbsp;fournisseur</li>
					</ul>
				</div>
				<div class="coats">
			        <h3 class="c-head">Informations requises</h3>
		        </div>
					<div class="clearfix"></div>
				</div>
				<div class="singel_right">
			     <div class="lcontact span_1_of_contact">
				      <div class="contact-form">
				  	        <form method="post" action="admin/vue/partnerpost.php">
					    	    <p class="comment-form-author"><label for="author">votre nom:</label>
					    	    	<input type="text" class="textbox" name="nom" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" name="email" class="textbox" value="Enter your email here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">telephone</label>
						     	   <input type="text" name="tel" class="textbox" value="Enter your phone number here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'telephone';}">
						        </p>
						        <p class="comment-form-author"><label for="author">url:</label>
						     	   <input type="text" name="url" class="textbox" value="Enter your url here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">API:</label>
						     	   <input type="text" name="api" class="textbox" value="Enter API here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        </p>
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Autres informations...</textarea>
						        </p>
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
			    
		    </div>
			</div>
		</div>
		
	 <?php include ("footer.php"); ?>
</body>
</html>