<!DOCTYPE html>
<html lang="<?php language_attributes( );?>" class="no-js">

<head>
    <meta <?php bloginfo('charset')?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="header_area" class="<?php echo get_theme_mod('halim_menu_position'); ?>">
        <div class="container">
            <div class="row" id="menu_and_logo_area">
                <div class="col-md-3">
                    <a href="#"><img src="<?php echo get_theme_mod('easycode_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                        
                           <?php wp_nav_menu( array('theme_location'=> 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer();?>
</body>
</html>