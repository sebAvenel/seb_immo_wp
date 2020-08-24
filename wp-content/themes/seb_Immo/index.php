<?php get_header() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agencia</title>
    <link rel="stylesheet" href="style.e2e1a33c.css">
    <script src="main.ef23f591.js" defer=""></script>
</head>
<body class="single">
<header class="nav">
    <a href="index.html" class="nav__logo" title="Page d'accueil">
        <img src="logo.5b7fbf6d.svg" alt="">
    </a>
    <ul class="nav__menu">
        <li><a href="#">Acheter</a></li>
        <li><a href="listing.html" aria-current="page">Louer</a></li>
        <li><a href="news.html">Actualité</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <button class="nav__burger">
        <span></span>
    </button>
</header>


<div class="container">

    <h1 class="page-title">
        <?php if (is_category()): ?>
            <?php single_cat_title() ?>
        <?php elseif(is_search()): ?>
            <?= sprintf(__('Search results for "%s"', 'seb_Immo'), get_search_query()); ?>
        <?php else: ?>
            <?php single_post_title() ?>
        <?php endif; ?>
    </h1>

    <div class="page-sidebar">
        <div>
            <div class="news-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php get_template_part('template-parts/post'); ?>
                    <?php endwhile; ?>
                    <?= seb_immo_paginate() ?>
                <?php else: ?>
                    <h2><?= __('No posts found', 'seb_Immo') ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <aside class="sidebar">
            <?php dynamic_sidebar('blog'); ?>
            <!--
            <div class="sidebar__widget">
                <div class="sidebar__title">Recherche</div>
                <form action="#" class="form-group form-search">
                    <input type="search" placeholder="Rechercher une actualité">
                    <button type="submit">
                        <svg class="icon">
                            <use xlink:href="sprite.14d9fd56.svg#search"></use>
                        </svg>
                    </button>
                </form>
            </div>
            -->
        </aside>

    </div>
</div>

</body>
</html>
<?php get_footer(); ?>
