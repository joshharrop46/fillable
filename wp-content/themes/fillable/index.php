<?php get_header(); ?>
<div style="clear: both"></div>
<div id="sppcrit">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<div class="post"> <h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2> <?php  if ( get_query_var('paged') ) { echo ' ('; echo __('page') . ' ' . get_query_var('paged');   echo ')';  } ?></div>
<div class="post post-"><div class="posttitle">
Latest News : <br /><br />
<?php echo do_shortcode('[spp_random_terms count= 10]'); ?>
<div style="clear: both"></div></div>
</div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>