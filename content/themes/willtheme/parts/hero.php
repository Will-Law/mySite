

<section class=hero>

	<div class=hero-content>
		<h1 class=hero-tagline>Hi, <span id=hero-tag> </span></h1>

    <?php if( have_rows('title_taglines') ): ?>
      <div id=hero-tag-list>
      <?php while ( have_rows('title_taglines') ) : the_row(); ?>
        <span><?php the_sub_field('title_tagline'); ?></span>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

	</div>



</section>
