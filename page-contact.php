<?php get_header(); ?>

     <!-- contact page top -->
     <div id="contact-top" class="contact-page_top">
       <div id="contact-top_image"></div>
       <h2><?php the_title(); ?></h2>
      </div>

      <!-- pankuzu -->
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org">
        <?php
          if(function_exists('bcn_display')) {
            bcn_display();
          }
        ?>
      </div>

      <?php
        if(have_posts()):
          while(have_posts()): the_post();
            the_content();
          endwhile;
        endif;
      ?>

<?php get_footer(); ?>
