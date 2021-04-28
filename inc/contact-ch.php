<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 le-md-12">
				<div class="tel">
					<p>电话: <?php
							echo get_field("phone", 683); ?> </p>
				</div>
				<div class="web">
					<p>Web: <a href='<?php
										echo get_field("website", 683); ?>'> <?php
																				echo get_field("website", 683); ?>
						</a>
					</p>
				</div>
				<div class="email">
					<p>email: <a href='<?php

										echo get_field("email", 683); ?>'> <?php
																			echo get_field("email", 683); ?>
						</a>
					</p>
				</div>
				<div class="address-headquarter">
					<p>地址: <?php echo get_field("address", 683);
							?></p>
				</div>
				<div class="map">
					<div class="google-map">
						<?php echo get_field("embed_googld_map", 683); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-5 contactus-form">
				<h3>给我们留言</h3>
				<p>( * 是必须的)</p>
				<?php echo do_shortcode('[contact-form-7 id="2993" title="interior contact form (CH)"]') ?>
			</div>
		</div>
	</div>
</section>