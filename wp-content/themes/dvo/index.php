<?php get_header('home'); ?>


<div class="content">
    <img class="slogan" src="<?php bloginfo('template_directory'); ?>/images/slogan_block.png" alt="slogan"/>
    <div class="right-block">
        <img class="video" src="<?php bloginfo('template_directory'); ?>/images/img_video.png" alt="video" />
        <img class="map" src="<?php bloginfo('template_directory'); ?>/images/map_bg.jpg" alt="map" />
    </div>
    <div class="bottom-block">
        <ul class="service">
            <li class="mail">
                <h3><a href="#">Mailboxes</a></h3>
                <p>Rostrud tionsequat. Met lan et, vullummy num </p>
            </li>
            <li class="phone">
                <h3><a href="#">Phone Service</a></h3>
                <p>Rostrud tionsequat. Met lan et, vullummy num </p>
            </li>
            <li class="office">
                <h3><a href="#">Office</a></h3>
                <p>Rostrud tionsequat. Met lan et, vullummy num </p>
            </li>
            <li class="conf last">
                <h3><a href="#">Conference Room</a></h3>
                <p>Rostrud tionsequat. Met lan et, vullummy num </p>
            </li>
        </ul>

        <?php
            //Запит в базу з слагом сторінки
            query_posts('pagename=who');
            if (have_posts()) : the_post();
        ?>
            <h2 class="www">
                <?php the_title(); ?>
            </h2>

            <div class="about">
                <?php the_content(); ?>
            </div>

        <?php endif; wp_reset_query(); ?>


        <!--<h2 class="www">Who We Are and What We Do</h2>-->
        <!--<p class="about">Ed dit am velesequisit vullums andipit, quis auguer sent adit eummod doloboreet lorperos non etueril exeriurero doleniam, sustrud exero commy num velestrud dolor secte feu feuisl dolore dolore ming eumsandip euisim illan veliqui te magnim quatio eugait del irilit vullaorem incinis at. Hent utat ad tis nis non volenim vullutpat. Veniamet ametue exer irit vel iuscin velessequat prat et il ea facil il irit, quissi blaore vel dolore ting euis alis ate feummy nos duisit wis nos aliquat. </p>-->
        <a href="#" class="create"></a>
        <a href="#" class="limited"></a>
        <a href="#" class="sign-up"></a>
    </div>
</div>

<?php get_footer(); ?>

