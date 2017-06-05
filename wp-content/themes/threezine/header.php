<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); the_title(' >> ') ?></title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="wrapper">
        <?php wp_nav_menu( array(
            'menu'            => '',
            'container'       => '',
            'menu_class'      => 'header_nav',
            'items_wrap'      => '<ul class="header_nav">%3$s</ul>',
        ) ); ?>

        <?php if(!dynamic_sidebar('social')): ?>
            <p>Место для социалных иконок, подключаемых из виджета</p>
        <?php endif; ?>

    </div>
</header>