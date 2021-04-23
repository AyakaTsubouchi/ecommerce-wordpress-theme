<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 le-md-12">

				<div class="row">
					<div class="col">
						<div class="map">
							<div class="google-map">
								<!-- <?php echo get_field("embed_googld_map", 533); ?> -->
								<img class="map" src="http://medproducts.goopter.com/wp-content/uploads/2021/03/contact-us-map.png" alt="map">
							</div>
						</div>
					</div>
					<div class="col">
						<h5>Puritan Medical Products</h5>
						<div class="office-one">
							<p class="title"><?php echo get_field("address_label", 533); ?></p>
							<p class="address"><?php echo get_field("address", 533); ?></p>

							<br>
						</div>
						<div class="office-two">
							<p class="title"><?php echo get_field("address_2_label", 533); ?></p>
							<p class="address"><?php echo get_field("address_2", 533); ?></p>
							<br>
						</div>
						<div class="office-three">
							<p class="title"><?php echo get_field("address_3_label", 533); ?></p>
							<p class="address"><?php echo get_field("address_3", 533); ?></p>
							<br>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<p class="title"><?php echo get_field("phone_label", 533);?></p>
						<p><?php echo get_field("phone", 533); ?></p>

					</div>
					<div class="col">
						<p class="title"><?php echo get_field("fax_label", 533); ?></p>
						<p><?php echo get_field("fax", 533); ?></p>

					</div>
				</div>
				<hr>
				<div class="get-quote">
					<h5>Need a Quote?</h5>
					<p>Contact us to request a quote.</p>
					<div class="custom-btn">
						<a href="/request-quote">Request a Quote</a>
					</div>
				</div>
				<hr>
				<div class="sns">
					<h5>Get Social with Puritan</h5>
					<div class="sns-box">

					
						<?php if (get_field("instagram_link", 533))
							echo '<a href="' . get_field("finstagram_link", 533) . '" target="_blank" ><i class="fab fa-instagram"></i></a>' ?>
						<?php if (get_field("facebook_link", 533))
							echo '<a href="' . get_field("facebook_link", 533) . '" target="_blank" ><i class="fab fa-facebook-f"></i></a>' ?>
						<?php if (get_field("twitter_link", 533))
							echo '<a href="' . get_field("twitter_link", 533) . '" target="_blank" ><i class="fab fa-twitter"></i></a>' ?>
						<?php if (get_field("linkedin", 533))
							echo '<a href="' . get_field("linkedin", 533) . '" target="_blank" ><i class="fab fa-linkedin-in"></i></a>' ?>
						<?php if (get_field("youtube_link", 533))
							echo '<a href="' . get_field("youtube_link", 533) . '" target="_blank" ><i class="fab fa-youtube"></i></a>' ?>


					</div>
				</div>


			</div>
			<div class="col-lg-5">
				<div class="contactus-form">
					<div class="form-wrapper">
						<div class="form-inner">
							<?php echo do_shortcode('[contact-form-7 id="4977" title="medical contact page form (EN)"]');?>
				
							
					
							<!-- <form action="">
								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<label for="firstname">First Name*</label>
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-6 col-md-12">
										<label for="lastName">Last Name*</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<label for="companyName">Company Name*</label>
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-6 col-md-12">
										<label for="workEmail">Work Email*</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<label for="productCode">Product Code*</label>
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-6 col-md-12">
										<label for="lotNumber">Lot Number*</label>
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-row">
									<div class="col-lg-6 col-md-12">
										<label for="location">State/Region/Province*
										</label>
										<input type="text" class="form-control">
									</div>
									<div class="col-lg-6 col-md-12">
										<label for="country">Country</label>
										<select id="inputState" class="form-control">
											<option selected>Choose...</option>
											<option>Canada</option>
											<option>United States</option>
											<option>France</option>
											<option>Germany</option>
											<option>Italy</option>
											<option>United Kingdom</option>
											<option>Japan</option>
											<option>Russia</option>
											<option>China</option>
											<option>Other</option>

										</select>
									</div>
								</div>
								<div class="form-row">

									<div class="col">
										<label for="comment">How Can We Help?</label>
										<input type="text-box" class="form-control" rows="3">
									</div>
								</div>
								<p>
									Privacy Notice: Puritan Medical Products requires the contact information you provide to us in order to send you the requested content and to contact you about our services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please see our Privacy Policy
								</p>
								<input class="form-control form-custom-btn" type="submit" value="Submit">
							</form> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<?php
		// include('contact_sales_for_mobile.php');
		?>

	</div>
</section>