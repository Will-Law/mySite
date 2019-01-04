<div class="module-social">

	<?php

		// Variable to fill with social content
		$output = '';

		// Array of social sites
		$social_sites = array(
			// 'site option id' => 'icon name'
			'facebook' => 'facebook',
			'twitter' => 'twitter',
			'instagram' => 'instagram',
			'google-plus' => 'google-plus',
			'linkedin' => 'linkedin',
			'pinterest' => 'pinterest',
			'youtube' => 'youtube-play'
		);


		foreach($social_sites as $url => $site) {

			// Get the social url from site options
			$site_url = get_field( $url, 'option' );

			// If we have a url to display
			if( ! empty( $site_url ) ) {
				$output .= '<a class="social-icon ' . $site . '" target="_blank" href="' . esc_url( $site_url ) . '"><i class="fa fa-' . $site . ' fa-fw"></i></a>';
			}
		}

		// Check if we have output to show
		if( ! empty( $output ) ) {
			echo '<div class="social-icons">' . $output . '</div>';
		}

	?>

</div>
