<!-- Feature Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">
			<?php
			$feature =get_field('feature_info','option');
			foreach($feature as $features){
				?>
				<div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
					<div class="d-flex align-items-center mb-4">
						<div class="btn-lg-square bg-primary rounded-circle me-3">
							<i class="<?php echo $features['feature_icon'];?> text-white"></i>
						</div>
						<h1 class="mb-0" data-toggle="counter-up"><?php echo $features['feature_counter'];?></h1>
					</div>
					<h5 class="mb-3"><?php echo $features['feature_title'];?></h5>
					<span><?php echo $features['feature_content'];?></span>
				</div>
			<?php } ?>

		</div>
	</div>
</div>
<!-- Feature Start -->
