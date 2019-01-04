<?php
/* start the loop */
while( have_posts() ) : the_post();
?>
	<section class="content-container">
		<div class="container">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<div class="content-wrapper">

					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

				</div>

			</article>
		</div>
	</section>
<?php
/* end the loop */
endwhile;
?>
