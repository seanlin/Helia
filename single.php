<?php get_header(); ?>
        <div id="mainarea">
        	<div id="contentarea">
            	<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
            	<div class="post">
                	<h2 class="posthead"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">Posted on <?php the_time('F jS, Y') ?> | Under <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '(1) Comment &#187;', '(%) Comments &#187;'); ?></div>
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                    <div class="meta"><?php the_tags('Tags: ', ', ', ''); ?></div>
                    <?php comments_template() ?>
                </div>
                
                	
	
	<?php endwhile; /* END while ( have_posts() ) */ ?>
					<?php else : ?><?php endif; /* END if ( have_posts() ) */ ?>
              
                </div>
            
<?php get_sidebar(); ?>

<?php get_footer(); ?>
