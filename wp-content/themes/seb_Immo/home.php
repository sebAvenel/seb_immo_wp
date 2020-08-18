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

    <h1 class="page-title"><?= single_post_title() ?></h1>

    <div class="page-sidebar">
        <div>
            <div class="news-list">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <article class="news">
                            <a href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>" class="news__image">
                                <img src="https://picsum.photos/id/234/250/250.jpg" alt="">
                            </a>
                            <div class="news__body">
                                <header class="news__header">
                                    <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)):
                                    ?>
                                    <a class="news__tag" href="<?= get_term_link($categories[0]) ?>"><?= $categories[0]->name ?></a>
                                    <?php endif; ?>
                                    <a class="news__title" href="<?php the_permalink() ?>"><?= the_title() ?></a>
                                    <div class="news__date"><?= sprintf(__('Published on %s at %s', 'seb_immo'), get_the_date(), get_the_time()) ?></div>
                                </header>
                                <div class="news__content">
                                    <?php the_excerpt() ?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="news__action">
                                    Lire la suite
                                    <?= seb_Immo_icon('arrow') ?>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php else: ?>
                    <h2><?= __('No posts found', 'seb_Immo') ?></h2>
                <?php endif; ?>
                <div class="pagination">
                    <a href="news.html" class="page-numbers prev">
                        <svg class="icon">
                            <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                        </svg>
                    </a>
                    <a href="news.html" class="page-numbers">1</a>
                    <a href="news.html" class="page-numbers">2</a>
                    <a href="news.html" class="page-numbers">3</a>
                    <span class="page-numbers current" aria-current="page">4</span>
                    <a href="news.html" class="page-numbers">5</a>
                    <a href="news.html" class="page-numbers next">
                        <svg class="icon">
                            <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <aside class="sidebar">
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

            <div class="sidebar__widget">
                <h4 class="sidebar__title">Dernières actualités</h4>
                <ul class="sidebar__list">

                    <li><a href="single.html">Maison 4 pièce(s) - 10m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 20m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 30m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 40m²</a></li>

                </ul>
            </div>

            <div class="sidebar__widget">
                <h4 class="sidebar__title">Dernières actualités</h4>
                <ul class="sidebar__list">

                    <li><a href="single.html">Maison 4 pièce(s) - 10m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 20m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 30m²</a></li>

                    <li><a href="single.html">Maison 4 pièce(s) - 40m²</a></li>

                </ul>
            </div>

        </aside>

    </div>
</div>

</body>
</html>
<?php get_footer(); ?>
