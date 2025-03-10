<?php
// Custom CSS
function customtheme_customizer_styles(){
    $customtheme_site_title = get_theme_mod('customtheme_site_title_color');
    $customtheme_linkcolor = get_theme_mod('customtheme_link_color');
    $customtheme_blog_title = get_theme_mod('customtheme_title_color');
    $customtheme_blog_desc = get_theme_mod('customtheme_desc_color');
    $customtheme_blog_author_date = get_theme_mod('customtheme_pub_color');
    $customtheme_header_footer_bg = get_theme_mod('customtheme_header_footer_bg');
    $customtheme_header_footer_color = get_theme_mod('customtheme_header_footer_color');
    $customtheme_widget_bg = get_theme_mod('customtheme_widget_bg');
    $customtheme_widget_title_bg = get_theme_mod('customtheme_widget_title_bg');
    $customtheme_widget_title_color = get_theme_mod('customtheme_widget_title_color');
    $customtheme_button_bg = get_theme_mod('customtheme_button_bg');
    $customtheme_button_color = get_theme_mod('customtheme_button_color');
    $customtheme_button_hover_bg = get_theme_mod('customtheme_button_hover_bg');
    $customtheme_button_hover_color = get_theme_mod('customtheme_button_hover_color');
?>
    <style>
        .header-top-area,
        .footer-area{
            background: <?php echo !empty($customtheme_header_footer_bg) ? $customtheme_header_footer_bg. '!important' : ''; ?>
        }
        .footer p,
        .top-contact ul li, 
        .social-profile ul li a{
            color: <?php echo !empty($customtheme_header_footer_color) ? $customtheme_header_footer_color. '!important' : ''; ?>
        }
        a.logo{
            color: <?php echo !empty($customtheme_site_title) ? $customtheme_site_title. '!important' : ''; ?>
        }
        .single-news h4{
            color: <?php echo !empty($customtheme_blog_title) ? $customtheme_blog_title. '!important' : ''; ?>
        }
        .single-news p{
            color: <?php echo !empty($customtheme_blog_desc) ? $customtheme_blog_desc. '!important' : ''; ?>
        }
        .single-news ul li,
        .single-news ul li a{
            color: <?php echo !empty($customtheme_blog_author_date) ? $customtheme_blog_author_date. '!important' : ''; ?>
        }
        .wp-block-latest-comments a, 
        .recentcomments a,
        a:visited{
            color: <?php echo !empty($customtheme_linkcolor) ? $customtheme_linkcolor : ''; ?>
        }
        .widget{
            background: <?php echo !empty($customtheme_widget_bg) ? $customtheme_widget_bg. '!important' : ''; ?>
        }
        .widget h2{
            background: <?php echo !empty($customtheme_widget_title_bg) ? $customtheme_widget_title_bg. '!important' : ''; ?>;
            color: <?php echo !empty($customtheme_widget_title_color) ? $customtheme_widget_title_color. '!important' : ''; ?>;
        }
        .single-news a.readme,
        .wp-block-search__button,
        .error-404 input[type="submit"], 
        #commentform input[type="submit"]{
            background: <?php echo !empty($customtheme_button_bg) ? $customtheme_button_bg. '!important' : ''; ?>;
            color: <?php echo !empty($customtheme_button_color) ? $customtheme_button_color. '!important' : ''; ?>;
            transition: .3s all ease;
        }
        .single-news a.readme:hover,
        .wp-block-search__button:hover,
        .error-404 input[type="submit"]:hover, 
        #commentform input[type="submit"]:hover{
            background: <?php echo !empty($customtheme_button_hover_bg) ? $customtheme_button_hover_bg. '!important' : ''; ?>;
            color: <?php echo !empty($customtheme_button_hover_color) ? $customtheme_button_hover_color. '!important' : ''; ?>;
        }
    </style>
<?php
}
add_action('wp_footer', 'customtheme_customizer_styles');