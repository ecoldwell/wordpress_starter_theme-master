<?php get_header();  ?>





<!--     <div class="content">
 -->      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      		<?php $file = get_field('hero_video');?>
			
			<video class="bg-video" autoplay loop posterloop src="<?php echo $file['url']?>">
			
<!--       	<div class="bg-video"
      		style = "background-video: url(' <?php //echo get_field('hero_video')['url'] ?>') ">
      	</div> -->
     
	<!--      <video class="bg-video" autoplay loop posterloop>
	         <source src="<?php //echo get_field('hero_video'); ?>" >
	     </video> -->
   <!-- 
        <video class="bg-video" autoplay loop posterloop>
            <source src="http://demosthenes.info/assets/videos/polina.mp4" type="video/mp4">
        </video> -->
       

      <?php endwhile; //end the loop?>
<!--     </div> /,content
 -->
    <?php //get_sidebar(); ?>
  <?php get_footer() ?>  


