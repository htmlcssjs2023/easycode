<?php
    get_header();
?>

    <section class="" id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php 
                        if(have_posts()):
                            while(have_posts()) : the_post();
                    ?>
                    <div class="blog_area">
                        <div class="post_thumb">
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                             <?php the_excerpt() ?>
                        </div>
                        
                    </div>
                    <?php
                        endwhile;
                        else:
                            _e('Not Post Here');
                        endif;
                    ?>
                   <div id="page_nav">
                        <?php if('halim_pagenav'){ halim_pagenav(); } else{ ?>
                                <?php next_post_link(); ?>
                                <?php previous_post_link(); ?>

                            <?php } ?>
                   </div>
                </div>
                <div class="col-md-3" id="side_bar">
                 <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Area  -->
<?php
    get_footer();
?>