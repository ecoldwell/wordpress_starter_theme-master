<div class="main">


  <?php get_header();  ?>

    <div class="aboutContainer">

        <div class="aboutContent">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <!--         <h2><?php the_title(); ?></h2>
     -->     
        <div class = "aboutTitle">
        <h2><?php the_field('abouttitle'); ?> </h2>
        <h2><?php the_field('contacttitle'); ?> </h2>




        </div>
          
          <div class="aboutContactImage">
            <div class="imageBox"></div>
              <?php $image = get_field('imageforabout'); ?>
              <img src="<?php echo $image['sizes']['large'] ?>">
          </div>
           
        <!--   <div class="textBox"> -->


          <?php the_content(); ?>

            
   <!--        </div> -->

            
        </div> <!-- /,content -->
    </div> <!-- /.container -->
          <?php endwhile; // end the loop?>



    


</div>
   <?php get_footer(); ?>