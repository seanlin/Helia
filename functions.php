<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


function widget_helia_categories() {
?>
<li id="categories" class="minibox catwidget">
   	<h3>Categories</h3>
   	<ul><?php wp_list_categories('show_count=0&title_li='); ?></ul>
   </li>

<?php }

function widget_helia_archives() {
?>
<li id="archives" class="minibox widget">
	<h3>Archives</h3>
    <ul>
		<?php wp_get_archives('type=monthly'); ?>
     </ul>
</li>
<?php }
 if ( function_exists('register_sidebar_widget'))
	register_sidebar_widget(__('Archives'), 'widget_helia_archives');
	register_sidebar_widget(__('Categories'), 'widget_helia_categories');
?>




if ( function_exists('register_sidebar_widget') )		
	register_sidebar_widget(_('Recent Posts'), 'widget_recentposts');
	register_sidebar_widget(_('My Latest Twit'), 'widget_mylatesttwit');


?>
