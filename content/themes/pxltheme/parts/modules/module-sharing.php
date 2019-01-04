<?php
	/* check sharing function is available */
	if ( function_exists( 'sharing_display' ) ) {
		if( sharing_display() == true ) {
		?>
			<section class="module-sharing">
				<div class="container">

					<?php
						/* output sharing buttons */
						sharing_display( '', true );
					?>

				</div>
			</section>
		<?php
		}
	}
?>
