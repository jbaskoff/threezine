<?php get_header() ?>
<div class="main_title wrapper">
    <h2>THREEZINE</h2>
</div>
<div class="wrapper">
    <?php wp_nav_menu(array(
        'theme_location' => 'page_menu',
        'menu' => '',
        'container' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul class="navigation">%3$s</ul>',
        'depth' => 0,
        'walker' => '',
    ));
    ?>

</div>

<div class="wrapper slider">
    <a href="#" class="main_item">
        <img src="<?php bloginfo('template_url') ?>/images/main.png" alt="#">
        <div class="bott_info">
            <h2>Curabitur bibendum tortor in diam viverr</h2>
            <p>Curabitur adipiscing lacus quis diam tincidunt accumsan. Suspendisse in est orci. Nulla facilisi. Morbi
                lacus urna.. (Read More)
            </p>
        </div>
    </a>
</div>

<div class="wrapper posts_body">

    <?php get_sidebar('left') ?>

    <div class="posts">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2 class="post_title"><?php the_title() ?></h2>
                <div class="post_info">
                    <div class="date"><?php the_time('M j, Y G:i') ?></div>
                    <div class="author"><?php the_author() ?></div>
                    <?php comments_popup_link('нет коментариев','1 коментарий','коментария(ев)','comments') ?>
                </div>

                    <?php the_content() ?>


            </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="pager">
            <?php previous_post_link('<span>&laquo;</span> %link', 'prev'); next_post_link('%link <span>&raquo;</span> ', 'next'); ?>
        </div>
        <?php comments_template() ?>
    </div>

    <?php get_sidebar('right') ?>

</div>
<?php get_footer() ?>


