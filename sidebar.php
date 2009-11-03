<div id="sidebar">
				<ul>
					<?php 	/* Widgetized sidebar, if you have the plugin installed. */ if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                	<li id="archives" class="minibox widget">
                    	<h3>Archives</h3>
                        <ul>
							<?php wp_get_archives('type=monthly'); ?>
                         </ul>
                    </li>
                    
                    <li class="minibox catwidget">
                    	<h3>Categories</h3>
                    	<ul><?php wp_list_categories('show_count=0&title_li='); ?></ul>
                    </li>

                     <li class="box tagcloud">
                     	<h3>TagCloud</h3>
                        <?php wp_tag_cloud(); ?>
           			 </li>
                     
                     <?php if (function_exists('get_recent_comments')) { ?>
                    <li class="recentcomments"><h3><?php _e('Recent Comments:'); ?></h3>
                          <ul>
                          <?php get_recent_comments(); ?>
                          </ul>
                    </li>
                    <?php } ?> 
					<?php endif; ?> 
                     
                  
                
                </ul>
            </div>