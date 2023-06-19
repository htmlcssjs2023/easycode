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
    <header id="header_area" class="<?php echo get_theme_mod('halim_menu_position'); ?>">
        <div class="container">
            <div class="row" id="menu_and_logo_area">
                <div class="col-md-3">
                    <a href="<?php home_url(); ?>"><img src="<?php echo get_theme_mod('easycode_logo'); ?>" alt=""></a>
                </div>
                <div class="col-md-9">
                        
                           <?php wp_nav_menu( array('theme_location'=> 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </header>

    <section class="" id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>

<?php wp_footer();?>
</body>
</html>