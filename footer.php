<?php
 /**
  * Theme footer section 
  * It will be visible in every ages.
  */
?>

<!-- footer area  -->
 <footer id="footer_area">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><?php  dynamic_sidebar('footer-01');?></div>
                <div class="col-md-4"><?php  dynamic_sidebar('footer-02');?></div>
                <div class="col-md-4"><?php  dynamic_sidebar('footer-03');?></div>
            </div>
        </div>
    </section>

    <!-- Footer Copyright Area  -->

    <section class="copyright_footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo  get_theme_mod('easycode_copyright_option') ?></p>
                </div>
            </div>
        </div>
    </section>
 </footer>
<!-- footer area end  -->

<?php wp_footer();?>
</body>

</html>