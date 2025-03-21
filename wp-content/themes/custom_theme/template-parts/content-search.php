<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
*/
?>

<article class="col-md-4" id="post-<?php the_ID(); ?>">
   <div class="single-news">
      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail("full", ["class" => "img-fluid"]); ?>
      </a>
      <h4><?php the_title(); ?></h4>
      <ul>
         <li><i class="fa fa-user"></i><a href="#">
            <?php the_author(); ?>
            </a>
         </li>
         <li><i class="fa fa-comment"></i>
            <?php echo get_comments_number(get_the_ID()); ?>
         </li>
         <li><i class="fa fa-clock"></i>
            <?php printf(
               esc_html_x("on %s", "post date", "customtheme"),
               get_the_date("M d, Y")
               ); ?>
         </li>
      </ul>
      <p>
         <?php the_excerpt(); ?>
      </p>
      <a href="<?php the_permalink(); ?>" class="readme"><?php esc_html_e(
         "Read More",
         "customtheme"
         ); ?></a>
   </div>
</article>
