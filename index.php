<?php //index.php is the last resort template, if no other templates match ?>
<div class="main">
    <?php get_header();  ?>
    
<!--      <div class="aboutTitle"> -->
 <!--    <h2> --><?php //the_field('works_title', get_option('page_for_posts')); ?><!-- </h2> -->
<!--     </div> -->
    <div class="blogContent">
        
     <div class= "imageBlog">
      <?php $image = get_field('add_image'); ?>
        <img src="<?php echo $image['sizes']['large'] ?>">
      <?php //the_content(); ?>
   
    </div>
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->



</div> <!-- /.main -->

<?php get_footer(); ?>



