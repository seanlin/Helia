<?php get_header(); ?>
        <div id="mainarea">
        	<div id="contentarea">
            	<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
            	<div class="post">
                	<h2 class="posthead"><?php the_title(); ?></h2>
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                </div>
                
                	<?php endwhile; ?>
					<?php endif; ?>
              
            
            </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
