<div class="sidebar">
    <div class="posts_column">
        <h2 class="posts_column_title">Search</h2>
        <form>
            <input name='s' class="search" type="text">
        </form>
    </div>
    <div class="posts_column">
        <h2 class="posts_column_title">featured Posts</h2>
        <div class="post_item">
            <a href="#" class="thumbnail">
                <img src="<?php bloginfo('template_url') ?>/images/post1.png" alt="def">
            </a>
            <div class="descr">
                <a href="#" class="post_title">
                    <h3>Curabitur bibendum tortor in diam viverra</h3>
                </a>
                <a href="#" class="post_comments"><span>13</span> Comments</a>
            </div>
        </div>
        <div class="post_item">
            <a href="#" class="thumbnail">
                <img src="<?php bloginfo('template_url') ?>/images/post2.png" alt="def">
            </a>
            <div class="descr">
                <a href="#" class="post_title">
                    <h3>Pellentesque phare tramy mollis tortor volutpat</h3>
                </a>
                <a href="#" class="post_comments"><span>13</span> Comments</a>
            </div>
        </div>
        <div class="post_item">
            <a href="#" class="thumbnail">
                <img src="<?php bloginfo('template_url') ?>/images/post3.png" alt="def">
            </a>
            <div class="descr">
                <a href="#" class="post_title">
                    <h3>Cras ac felis eget quampos consectetur sagittis</h3>
                </a>
                <a href="#" class="post_comments"><span>13</span> Comments</a>
            </div>
        </div>
        <div class="post_item">
            <a href="#" class="thumbnail">
                <img src="<?php bloginfo('template_url') ?>/images/post4.png" alt="def">
            </a>
            <div class="descr">
                <a href="#" class="post_title">
                    <h3>Sed imperdiet lorem in ipsum ultrices</h3>
                </a>
                <a href="#" class="post_comments"><span>13</span> Comments</a>
            </div>
        </div>
    </div>
    <div class="posts_column">

        <h2 class="posts_column_title">tags</h2>

        <?php
        $tags = get_tags(array(
           'hide_empty' => false
        ));
        $html = '';
        foreach ($tags as $tag){
            $tag_link = get_tag_link($tag->term_id);

            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='tag'>";
            $html .= "{$tag->name}</a>";
        }
        echo $html;
        ?>

    </div>
    <div class="posts_column">
        <h2 class="posts_column_title">archıves</h2>
        <a class="arch_date" href="#">October 2010</a>
        <a class="arch_date" href="#">September 2010</a>
        <a class="arch_date" href="#">August 2010</a>
        <a class="arch_date" href="#">July 2010</a>
        <a class="arch_date" href="#">June 2010</a>
        <a class="arch_date" href="#">May 2010</a>
        <a class="arch_date" href="#">April 2010</a>
        <a class="arch_date" href="#">March 2010</a>
    </div>
    <div class="posts_column">
        <h2 class="posts_column_title">Advertısement</h2>
        <div class="advertisement"><img src="<?php bloginfo('template_url') ?>/#" alt="#"></div>
        <div class="advertisement"><img src="<?php bloginfo('template_url') ?>/#" alt="#"></div>
    </div>
</div>