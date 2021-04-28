<section class="contact-section">
	<div class="container">
		
	<div class="row">
			<div class="col-lg-7 le-md-12">



				<div class="tel">

					<p>Tel: <?php
							echo get_field("phone", 533); ?> </p>
				</div>
				<div class="web">
					<p>Web: <a href='<?php

										echo get_field("website", 533); ?>'> <?php

										echo get_field("website", 533); ?>
						</a>
					</p>
				</div>
				<div class="email">
					<p>email: <a href='<?php

										echo get_field("email", 533); ?>'> <?php

										echo get_field("email", 533); ?>
						</a>
					</p>
				</div>



				<div class="address-headquarter">
					<p>Address: <?php echo get_field("address", 533);
								?></p>
				</div>




				<div class="map">

					<div class="google-map">
						<?php echo get_field("embed_googld_map", 533); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-5 contactus-form">
				<h3>Lave Us A Message</h3>
				<p>(Note: * is required.)</p>
				<?php echo do_shortcode('[contact-form-7 id="645" title="interior contact form (EN)"]') ?>
			</div>
		</div>

	</div>
</section>