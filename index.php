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
                </div>
                
                	<?php endwhile; ?>
         	<div class="postnav">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
					<?php else : ?>
					<div class="post">
                    <h2 class="posthead">Not Found</h2>
                    <p>Sorry, but you are looking for something that isn't here.</p>
					</div>
					<?php endif; ?>
              
            
            </div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
