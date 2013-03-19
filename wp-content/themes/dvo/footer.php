<div class="footer">
    <span>Follow us on</span>
    <ul class="social">
        <li class="t"><a href="#"></a></li>
        <li class="f"><a href="#"></a></li>
        <li class="rss"><a href="#"></a></li>
    </ul>



    <div class="footer-menus">
        <h3>Denver Virtual Offices</h3>
        <?php
        wp_nav_menu(
            array(
                'menu'            => 'Denver Virtual Offices',
                'container'       => '',
                'menu_class'      => 'footer-dvo',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            )
        )
        ;?>
    </div>

    <div class="footer-menus">
        <h3>Company</h3>
        <?php
        wp_nav_menu(
            array(
                'menu'            => 'Company',
                'container'       => '',
                'menu_class'      => 'footer-comp',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            )
        )
        ;?>
    </div>


    <div class="footer-menus">
        <h3>Product</h3>
        <?php
        wp_nav_menu(
            array(
                'menu'            => 'Product',
                'container'       => '',
                'menu_class'      => 'footer-pro',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            )
        )
        ;?>
    </div>
    <img src="<?php bloginfo('template_directory'); ?>/images/facebook_footer.jpg"/ alt="facebook">
    <span class="copy">&copy; <?php echo date('Y');?> DVO</span>
   <!-- <p>Need more than a Virtual Office? check out our Executive Suites button to link to another site.</p>-->
</div>

</div><!--wrapper-->

<?php wp_footer(); ?>

</body>
</html>
