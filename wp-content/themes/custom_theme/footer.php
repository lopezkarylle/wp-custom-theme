<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>


<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer text-center">
          <p>
            <?php
                $current_year = date('Y');
                printf( esc_html__( 'Copyright %s © %s All Rights Reserved.'), esc_html($current_year),'<a href="https://wordpress.org/">Test Sample</a>');
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
