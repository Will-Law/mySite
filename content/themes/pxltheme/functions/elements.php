<?php
/**
 * this file is used for theme specific elements
 */



// ==========================================================
// function pxltheme_sr_only()
//
// Returns the screen reader text in span
// ==========================================================
function pxltheme_sr_only( $text ) {

	$sr_only = ' <span class="sr-only">' . $text . '</span>';

	return $sr_only;
}






// ==========================================================
// function pxltheme_button()
//
// Display a button
// ==========================================================
function pxltheme_button( $href, $text, $button_classes = null, $echo = true ) {

	// Is the button a link
	// or a "faked" button
	if(!empty($href)) {
		$button = '<a ';
	} else {
		$button = '<div ';
	}

	// Add button classes
	$button .= 'class="button ' . esc_attr( $button_classes ) . '"';

	// Add link if we have one
	if(!empty($href)) {
		$button .= ' href="' . esc_url( $href ) . '"';
	}

	// Add button text
	$button .= '>' . $text;

	// Close button
	if(!empty($href)) {
		$button .= '</a>';
	} else {
		$button .= '</div>';
	}

	if($echo) {
		echo $button;
	} else {
		return $button;
	}
}






// ==========================================================
// function pxltheme_title()
//
// Display a button
// ==========================================================
function pxltheme_title( $text, $title_level = 'h1', $header_classes = null, $title_classes = null, $echo = true ) {

	$title = '<header class="entry-header ' . $header_classes . '">
							<' . $title_level . ' class="entry-title ' . $title_classes . '">' . $text . '</' . $title_level . '>
						</header>';

	if($echo) {
		echo $title;
	} else {
		return $title;
	}
}
