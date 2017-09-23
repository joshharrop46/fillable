<?php
header('HTTP/1.1 200 OK');
$edit = array ('-' , '/' , '.html');// 
$title= str_replace($edit, ' ', $_SERVER['REQUEST_URI']);
get_header();
?>
<div style="clear: both"></div>
<div id="genecrut">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<div class="post">

<?php echo spp($title, 'default.html');?>  
</div>	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>