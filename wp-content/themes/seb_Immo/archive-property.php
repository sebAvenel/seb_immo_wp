<?php get_header(); ?>
<?php
    $isRent = get_query_var('property_category', 'buy') === _x('rent', 'URL', 'agence');
?>
<div class="container page-properties">

    <div class="search-form">
        <h1 class="search-form__title">
            <?= __('All our properties', 'seb_Immo'); ?>
            <?php if ($isRent): ?>
                <?= __(' for rent') ?>
            <?php else: ?>
                <?= __(' on sale') ?>
            <?php endif; ?>
        </h1>
        <?php if ($currentType): ?>
            <p><?= sprintf(__('Retrouver tous nos %ss sur le secteur de %s', 'seb_Immo'), $currentType, $city) ?></p>
        <?php else: ?>
            <p><?= sprintf(__('Retrouver tous nos biens sur le secteur de %s', 'seb_Immo'), $city) ?></p>
        <?php endif; ?>
        <hr>
        <?php get_template_part('template-parts/searchform-property'); ?>
    </div>

    <?php $i = 0; while (have_posts()): the_post() ?>
        <?php set_query_var('property-large', $i === 7); ?>
        <?php get_template_part('template-parts/property') ?>
    <?php $i++; endwhile; ?>
</div>

<?php if(get_query_var('paged', 1) > 1): ?>
    <?= seb_immo_paginate() ?>
<?php elseif ($nextPostLink = get_next_posts_link(__('More properties +', 'seb_Immo'))): ?>
    <div class="pagination">
        <?= $nextPostLink ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>


