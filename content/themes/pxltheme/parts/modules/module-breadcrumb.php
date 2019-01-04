<?php if ( function_exists('yoast_breadcrumb') ) { ?>
	<div class="module-breadcrumb">
		<div class="container container-wide">
			<div class="full">

				<?php
					yoast_breadcrumb( '<p id="breadcrumbs" class="small">','</p>' );
				?>

			</div>
		</div>
	</div>
<?php } ?>
